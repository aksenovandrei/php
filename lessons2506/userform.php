<?php

$response = [];

/**
 * Get user avatar filename
 * @param $name
 * @param string $extension
 * @return string
 */
function getFileName ($name, $extension = 'jpg') {
    return  $name. "." . $extension;
}

/**
 * Check exist file
 * @param $filename
 * @return bool
 */
function isFileExist ($filename) {
    return file_exists($filename);
}

$response["userAvatar"] = getFileName($_POST['user']);
$response['fileExist'] = isFileExist($response["userAvatar"]);

if ($response['fileExist']) {
    $response["userText"] = 'This is user '. $_POST['user'];
} else {
    $response["userText"] = 'Image broken for user  '. $_POST['user'];
}
echo json_encode($response);

//if (file_exists($filename)) {
//    $response = array('yyy' => true,
//                      'userInfo' => $user);
//    //echo "Файл $filename существует";
//} else {
//    //echo "Файл $filename не существует";
//    $response = array(
//        'yyy' => false,
//        'userInfo' => $user);
//}
//echo json_encode($response);


//$user = $_POST['user'];
//$filename = $user.'.jpg';








// $login = $_POST['login'];
// $password = $_POST['password'];
//echo $user;
//echo "<br>";
//echo $login;
//echo "<br>";
//echo $password;

//$file = fopen($login.'.txt', 'a+');
//$text = fwrite($file, $login." ". $email." ".$password." ");
//fclose($file);
//$result = file($login.'.txt');
//echo json_encode(array('userInfo' => $user));
//exit();
//return true;


//$response = array('userInfo' => $user);
//echo json_encode($response);

//function form ($user) {
//    echo ($user);
//}
//form($_POST['email'], $_POST['login'], $_POST['password']);


?>