<?php

$host = 'localhost'; 
$dbname = 'dbpelanggan';
$username = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname" , $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch(PDOexception $e) {
    echo "KONEKSI GAGAL :"  . $e->getMessage();
}
?>