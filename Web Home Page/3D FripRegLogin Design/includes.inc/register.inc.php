<?php
session_start();
include 'connect.php';
error_reporting('0');
if (isset($_POST['register'])) {
	if (!empty(['name']) || !empty(['email']) || !empty(['password']) || !empty($_POST['cpassword'])) {
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
		if ($password !== $cpassword) {
			echo '<script  type="text/javascript">alert("conformation password does not match");</script>';
		} else {
			//insert data using prepared statement
			$passhash = password_hash($password, PASSWORD_DEFAULT);
			$sql =  "INSERT INTO 3dregister(fullName,email, password)VALUES(?,?,?);";
			//create prepared statement
			$stmt = mysqli_stmt_init($conn);
			//prepare prepared statement
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				echo "SQL prepare statement Error<br>";
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			} else {
				//bind prepared statement
				mysqli_stmt_bind_param($stmt, "sss", $name, $email, $passhash);
				mysqli_stmt_execute($stmt);
				header("location:../index.html");
			}
			//close connection
			mysqli_close($conn);
		}
	}
} else {
	if (isset($_POST['loggin'])) {
		if (!empty($_POST['logEmail'])  || !empty($_POST['logPassword'])) {
			$email = mysqli_real_escape_string($conn, $_POST['logEmail']);
			$pws = mysqli_real_escape_string($conn, $_POST['logPassword']);
			$query = "SELECT * FROM `3dregister` WHERE `email` = ? OR password = ?";
			//create prepared stamtement
			$stmt = mysqli_stmt_init($conn);
			//prepare the prepared statement
			if (!mysqli_stmt_prepare($stmt, $query)) {
				echo "sql Statement Error";
				exit();
			} else {

				//bind paremeters to the placeholder
				mysqli_stmt_bind_param($stmt, "ss", $email, $pws);
				//run param inside db
				mysqli_stmt_execute($stmt);
				//get result from executed statement
				$result = mysqli_stmt_get_result($stmt);
				//fetch data from database
				if ($row = mysqli_fetch_assoc($result)) {
					// hashed password in database and compire with user inputchecks
					$passCheck = password_verify($pws, $row['password']);
					if ($passCheck == FALSE) {
						echo "<br>";
						echo "incorrect Password";
						echo "<br>";
						echo "email:" .  "<br>" . "<b>" . $row['email']  . "</b>" . "<br>" . "Encrpted password:" . "<br>" . "<b>" . $row['password'] . "</b>";
						exit();
					} else if ($passCheck == TRUE) {
						echo "<br>";
						echo "password is correct";
						$_SESSION['email'] = $row['email'];
						echo $_SESSION['email'];
						echo "<br>";
						echo "email:" .  "<br>" . "<b>" . $row['email']  . "</b>" . "<br>" . "Encrpted password:" . "<br>" . "<b>" . $row['password'] . "</b>";
					} else {
						echo "<br>";
						echo "uknown password";
					}
				} else {
					echo '<script  type="text/javascript">alert("Error database search on such user found!");</script>';
					exit();
					header("location:../index.html");
				}
			}
		}
		mysqli_close($conn);
	}
}
