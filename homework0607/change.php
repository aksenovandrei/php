<?php
$email = $_POST['email'];
$oldPass = $_POST['oldPass'];
$newPass = $_POST['newPass'];

include ('connection.php');

function getUserByEmail($email) {
    global $connection;
    return $connection->query("SELECT * FROM users WHERE Email = '$email'")->fetch_assoc();
}
$currentUser = getUserByEmail($email);
//$selectEmail = "SELECT * FROM users WHERE Email = '$email'";
//$resultArray = $connection->query($selectEmail)->fetch_assoc();
if (count($currentUser) > 0) {
    if ($currentUser['Password'] === $oldPass) {
        $idUser = $currentUser['id'];
        $changePass = "UPDATE  `$bdName`.`users` SET  `Password` =  '$newPass' WHERE  `users`.`id` = '$idUser'";
        $connection->query($changePass);
        $response = ['yyy' => true,
        'uuu' => true];
    } else {
        $response = ['yyy' => false];
    }
} else {
    $response = ['yyy' => false];
}
echo json_encode($response);
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

