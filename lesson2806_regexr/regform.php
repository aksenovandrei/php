<?php
$pattern = [
    'login' => '/^(?!!"№;;%:\?.*\(\)_\+=\-,\'";:<>\{\}\[\]$)(.*)$/',
    'name' => '/^(?!!"№;;%:\?.*\(\)_\+=\-,\'";:<>\{\}\[\]$)(.*)$/',
    'email' => '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',
    'phone' => '/^[0-9\-\+]{9,15}$/',
    'password' => '/^.*(?=.{5,})(?=.*[a-zA-Z])(?=.*\d).*$/',
    'repeatpass' => '/^.*(?=.{5,})(?=.*[a-zA-Z])(?=.*\d).*$/'
];
/**
 * Checking user's values by Regular Expression
 * @param $vvv
 * @param $eee
 * @return bool
 */
function checkRegExp ($vvv, $eee) {
    global $pattern;
    return preg_match($pattern[$vvv], $eee);
};
//var_dump(1); die;
echo json_encode (array('yyy' => checkRegExp ($_POST['fieldName'], $_POST['fieldValue'])));
?>