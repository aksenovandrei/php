<?php


$pattern = [
    'login' => '/^(?!!"№;;%:\?.*\(\)_\+=\-,\'";:<>\{\}\[\]$)(.*)$/',
    'name' => '/^(?!!"№;;%:\?.*\(\)_\+=\-,\'";:<>\{\}\[\]$)(.*)$/',
    'email' => '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',
    'phone' => '/^[0-9\-\+]{9,15}$/',
    'password' => '/^.*(?=.{5,})(?=.*[a-zA-Z])(?=.*\d).*$/',
    'repeatpass' => '/^.*(?=.{5,})(?=.*[a-zA-Z])(?=.*\d).*$/'
];

$serverName = 'localhost';
$userName = 'root';
$userPass = 'Sergey13';
$bdName = 'bd0407';

$connection = new mysqli($serverName, $userName, $userPass, $bdName);

if ($connection->connect_error) {
    die('Error connection bd' . $connection->connect_error);
}

function checkRegExp ($vvv, $eee) {
    global $pattern;
    return preg_match($pattern[$vvv], $eee);
};
//$result = array('qqq' => checkRegExp ('email', $email),
//                'www' => checkRegExp ('name', $name));
$email = $_POST['email'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$repeatpass  = $_POST['repeatpass'];

$checkEmail =  $connection->query("SELECT * FROM users WHERE Email = '$email'");



if (checkRegExp ($_POST['fieldName'], $_POST['fieldValue']) && $checkEmail->num_rows == 0) {
    if ($password == $repeatpass && strlen($repeatpass) > 5) {
        $reg = "INSERT INTO `$bdName`.`users` (`Email`, `Name`, `Surname`, `Password`) VALUES ('$email', '$name', '$surname', '$password');";
        mysqli_query($connection, $reg);
        echo json_encode(array('yyy' => true));
    } else {
        echo json_encode(array('yyy' => false));
    }

} else {
    echo json_encode(array('uuu' => false));
}




//echo json_encode (array('yyy' => checkRegExp ($_POST['fieldName'], $_POST['fieldValue'])));



//echo strlen($email);


?>