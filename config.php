<?php
$host = "localhost";
$user = "root";
$pass = "root12345";
$database = "kakau";

$koneksi = new mysqli ($host,$user,$pass,$database);
if($koneksi->connect_error)
{
    die("koneksi ke data base tidak berhasil: ". $koneksi->connect_error);
}
?>