<?php

$localhost = "localhost";
$username= "root";
$password= "";
$dbname="BE17_CR4_andjelina_BigLibrary";

$connect = mysqli_connect($localhost, $username, $password, $dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
// }else {
//     echo "Connected successfully";
}