<?php
$pattern = [
    'login' => '/^.*(?=.{5,})(?=.*[a-zA-Z])(?=.*\d).*$/',
    'name' => '/^.*(?=.{5,})(?=.*[a-zA-Z])(?=.*\d).*$/',
    'email' => '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',
    'phone' => '/^[0-9\-\+]{9,15}$/',
    'password' => '/^.*(?=.{5,})(?=.*[a-zA-Z])(?=.*\d).*$/'
];

/**
 * validate Field By Pattern
 * @param $fieldName
 * @param $fieldValue
 * @return bool
 */
function validateInput($fieldName, $fieldValue)
{
    global $pattern;
    return preg_match($pattern[$fieldName], $fieldValue);
}

echo json_encode(array('success' => validateInput($_POST['fieldName'], $_POST['fieldVal'])));

?>