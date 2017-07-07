<?php
$serverName = 'localhost';
$userName = 'root';
$dbPassword = 'Sergey13';
$dbName = 'bd0407';

$connection = new mysqli($serverName, $userName, $dbPassword, $dbName);
if ($connection->connect_error) {
    die('Connection failed ' . $connection->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];

$test = "SELECT * FROM users WHERE Email = '$email'";
$result = $connection->query($test);
//var_dump($result->fetch_assoc());
if ($result->num_rows > 0) {
    echo json_encode(array('yyy' => false));
} else {
    echo json_encode(array('yyy' => true));
}




