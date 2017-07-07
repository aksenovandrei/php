<?php

//die;
$password = $_POST['password'];
$repeatpass = $_POST['repeatpass'];
//var_dump($password); die;
// echo json_encode (array('yyy' => true));
if ($password == $repeatpass) {
    //var_dump(array('eee' => true));
    echo json_encode (array('eee' => true));
} else {
    echo json_encode (array('eee' => false));
};
//function test () {
//    global $repeatpass;
//    global $password;
//    if ($password == $repeatpass) {
//        return true;
//    };
//};
//echo json_encode(array('eee' => test()));
//echo json_encode (array("eee" => true));
//echo json_encode (["yyy" => 123]);



?>
