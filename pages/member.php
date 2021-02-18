<?php 
include 'config.php';

$id_pelanggan       =   $_POST['id_pelanggan'];
$nama_lengkap       =   $_POST['nama_lengkap'];
$email              =   $_POST['email'];
$jenis_kelamin      =   $_POST['jenis_kelamin'];
$info_laundry       =   $_POST['info_laundry'];
$no_hp1             =   $_POST['no_hp1'];
$no_hp2             =   $_POST['no_hp2'];
$alamat             =   $_POST['alamat'];
$tanggal_lahir      =   $_POST['tanggal_lahir'];
$tanggal_bergabung  =   $_POST['tanggal_bergabung'];
$password           =   $_POST['password'];

$member = "INSERT INTO data_pelanggan (id_pelanggan, nama_lengkap, email, jenis_kelamin, info_laundry, no_hp1, no_hp2, alamat, tanggal_lahir, tanggal_bergabung, password)
                VALUES ('$id_pelanggan', '$nama_lengkap', '$email', '$jenis_kelamin', '$info_laundry', '$no_hp1', '$no_hp2', '$alamat', '$tanggal_lahir', '$tanggal_bergabung', '$password')";

if(mysqli_query($koneksi, $member)){
    header("location:berhasil-member.php");
}
else
{
    header("location:gagal-member.php");
}

?>


