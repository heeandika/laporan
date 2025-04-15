<?php
$servername = "localhost";
$username = "root";
$password = "konto123";
$dname = "schooldb";

$conn = new mysqli ($servername, $username, $password, $dname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}else {
    // echo "Connected successfully";
}
?>

