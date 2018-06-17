<?php
session_start();
include 'dbh.inc.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yocab";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
echo $bal;

?>