<?php
/**
 * Getting value from form authorization
 * @param $value
 * @return mixed
 */
 function getValue ($value, $array) {
     $array[$value] = $_POST[$value];
     // return $_POST[$value];
     var_dump($array);
     return $array;
 }
$email = getValue("email", []);
$login = getValue("login", []);
$password = getValue("password", []);
echo ($password);

/**
 * Open connection to file
 * @param $filename
 * @return mixed
 */
 function openFile ($filename){
     return fopen($filename.'.txt', 'a+');
 }
$file = openFile($login);

 function writeToFile () {

     //return fwrite($file, $login." ". $email." ".$password." ");
 }


$file = openFile($login);


$email = $_POST['email'];
 $login = $_POST['login'];
 $password = $_POST['password'];
echo $email;
echo "<br>";
echo $login;
echo "<br>";
echo $password;

$file = fopen($login.'.txt', 'a+');
$text = fwrite($file, $login." ". $email." ".$password." ");
fclose($file);
$result = file($login.'.txt');

echo json_encode(array('yyy' => true,
                        'userInfo' => $result));
exit();
return true;

function form ($email, $login, $password) {
    echo ($email. $login. $password);
}
form($_POST['email'], $_POST['login'], $_POST['password']);



?>
