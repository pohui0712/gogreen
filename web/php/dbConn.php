<?php 
$serverName = 'localhost';
$username = 'root';
$password = '';
$database = 'GoGreen';

$connection = mysqli_connect($serverName, $username, $password, $database);

if ($connection === false) {
    die("Connection failed" . mysqli_connect_error());
}
?>