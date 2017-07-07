<?php
$email = $_POST['email'];
$oldPass = $_POST['oldPass'];
$newPass = $_POST['newPass'];

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
$idUser = $resultArray['id'];
if ($resultArray['Password'] == $oldPass) {
    $changePass = "UPDATE  `bd0407`.`users` SET  `Password` =  '$newPass' WHERE  `users`.`id` = '$idUser'";
    mysqli_query($connection, $changePass);
    echo json_encode(array('yyy' => true));
} else {
    echo json_encode(array('yyy' => false));
}

//$sql2 = "SELECT * FROM users WHERE Password = '$oldPass'";
//
//$result2 = $connection->query($sql2)->fetch_assoc();
//var_dump ($result2);


//$test = "UPDATE  `bd0407`.`users` SET  `Password` =  'qwerty1ttyyyyt' WHERE  `users`.`id` =1";
//
//mysqli_query($connection, $test);
//$test = "SELECT * FROM users WHERE Email = '$email' AND Password = '$oldPass'";
//$result = $connection->query($test);
//$test1 = $result->fetch_assoc();
//$test2 = $test1['id'];
//$ttt = ("UPDATE `users` SET `Password`='$newPass' WHERE `id`= '$test2'");
//if ($result->num_rows) {
////    "UPDATE  `bd0407`.`users` SET  `Password` =  '$newPass' WHERE  `users`.`id` =2";
//    "UPDATE `users` SET `id`= '$test2',`Password`='$newPass' WHERE 1";
//} else {
//
//};

?>

