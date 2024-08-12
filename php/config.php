<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "family_dish_restaurant";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (mysqli_connect_errno()) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected Successfully";
}
?>
