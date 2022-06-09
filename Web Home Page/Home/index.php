<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "Your Hacked!";
    echo '<script type="text/javerscript">alert("Your Hacked!");</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css">
    <title>Home page</title>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="../logo.svg" alt="logo">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="../3D FripRegLogin Design/includes.inc/logout.php">logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Welcome To our website</h1>
            <p><?php echo "<h2> " . $_SESSION['email'] . "</h2>"; ?></p>
            <div>
                <button type="button"><span></span>Watch More</button>
                <button type="button"><span></span>Subscribe</button>
            </div>
        </div>
    </div>
</body>

</html>