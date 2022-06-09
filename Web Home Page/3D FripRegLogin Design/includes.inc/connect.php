<?php
$conn = mysqli_connect('localhost', 'root', '', '3dDesign');
if (mysqli_connect_error()) {
	die('Connection failed (' . mysqli_connect_error() . ')' . mysqli_connect_errno());
}
