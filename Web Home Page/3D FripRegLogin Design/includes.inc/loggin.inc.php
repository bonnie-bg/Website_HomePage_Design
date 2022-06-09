<?php
if (isset($_POST['loggin'])) {
       include 'connect.php';
       if (!empty($_POST['logEmail'])  || !empty($_POST['logPassword'])) {
              $email = mysqli_real_escape_string($conn, $_POST['logEmail']);
              $pws = mysqli_real_escape_string($conn, $_POST['logPassword']);
              $pwdcheck = password_verify($pws, $row['password']);
              $query = "SELECT * FROM `3dregister` WHERE `email` = ' $email'";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $query)) {
                     echo "sql Error";
                     exit();
              } else {
                     mysqli_stmt_bind_param($stmt, "ss", $email, $pws);
                     mysqli_stmt_execute($stmt);
                     $result = mysqli_stmt_get_result($stmt);
                     if ($row = mysqli_fetch_assoc($result)) {
                            echo $row;
                            // hashed password in database and compire with user inputchecks
                            $pwdcheck = password_verify($pws, $row['password']);
                            if ($pwdcheck == false) {
                                   echo "password  incorrect";
                                   //header("Location:login.php");
                                   exit();
                            } else if ($pwdcheck == true) {
                                   echo "password is correct";
                                   header("location:../../index.html");
                            } else {
                                   echo "uknown password";
                            }
                     } else {
                            echo "No User error";
                            exit();
                     }
              }
              mysqli_close($conn);
       }
}