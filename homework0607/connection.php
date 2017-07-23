<?php
$serverName = 'localhost';
$userName = 'root';
$userPass = 'Sergey13';
$bdName = 'bd0407';

$connection = new mysqli($serverName, $userName, $userPass, $bdName);

if ($connection->connect_error) {
    die('Error connection bd' . $connection->connect_error);
}

?>