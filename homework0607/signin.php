<?php
$email = $_POST['email'];
$password = $_POST['password'];

$serverName = 'localhost';
$userName = 'root';
$userPass = 'Sergey13';
$bdName = 'bd0407';

$connection = new mysqli($serverName, $userName, $userPass, $bdName);

if ($connection->connect_error) {
    die('Error connection bd' . $connection->connect_error);
}
$selectEmail = "SELECT * FROM users WHERE Email = '$email'";
$resultArray = $connection->query($selectEmail)->fetch_assoc();
if ($resultArray) {

    if ($resultArray['Password'] == $password && $resultArray['Email'] == $email) {
        echo json_encode(array('yyy' => true));
    } else {
        echo json_encode(array('yyy' => false));
    }
} else {
    echo json_encode(array('yyy' => false));
}

?>