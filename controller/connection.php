<?php
$servername = "localhost";
$db = "myney";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
    die("koneksi gagal". mysqli_connect_error());
} else {
    echo" ";}