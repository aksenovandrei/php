<?php
$serverName = 'localhost';
$userName = 'root';
$password = 'Sergey13';
$dbName = "beetroot";


// object-oriented method

$connection = new mysqli($serverName, $userName, $password, $dbName);
if ($connection->connect_error) {
    die('Connection failed ' . $connection->connect_error);
}
// $sql = "CREATE DATABASE beetroot"; создание базы данный название битрут
//$sql = "CREATE TABLE IF NOT EXISTS users(
//        id INT (30) NOT NULL PRIMARY KEY,
//        name VARCHAR (50) NOT NULL,
//        surname VARCHAR (50) NOT NULL,
//        password VARCHAR (50) NOT NULL
//)";
//$sql1 = "INSERT INTO users(name, surname, password, age)  //добавление данных
//         VALUE  ('Ivan', 'Pupkin', '16651', '25')";

$test = 'Max';

$sql2 = "SELECT * FROM users WHERE name = '$test'";

$result = $connection->query($sql2);
var_dump($result); die;
if ($result->num_rows > 0) {
    echo "blabla";
}
//if ($result->num_rows > 0) {
//    while ($row = $result->fetch_assoc()) {
//        echo "<br> id: ". $row["id"] . "<br> name: ". $row["name"] . "<br> surname: ". $row["surname"];
//    }
//}


//If ($connection->query($sql1) === TRUE) {
//    echo 'Table created successfully';
//} else {
//    echo "error ". $connection->error;
//}


// procedure method

//$connection = mysqli_connect($serverName, $userName, $password);
//if (!$connection) {
//    die('Connection failed ' . mysqli_connect_error());
//}
//
//$sql = "CREATE DATABASE IF NOT EXISTS beetroot2";
//
//if(mysqli_query($connection, $sql)) {
//    echo "success";
//} else {
//    echo "error " . mysqli_error($connection);
//}
// PDO

//try {
//    $connection = new PDO("mysql:host=$serverName;",
//                            $userName,
//                            $password);
//    $sql = "CREATE DATABASE beetroot8";
//    $connection->exec($sql);
//    echo "success";
//} catch (PDOException $e) {
//    echo "Connection failed ". $e->getMessage();
//}

?>