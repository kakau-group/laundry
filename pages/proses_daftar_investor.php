<?php 
include 'config.php';

$id_investor                    =   $_POST['id_investor'];
$nama_lengkap                   =   $_POST['nama_lengkap'];
$email                          =   $_POST['email'];
$no_ktp                         =   $_POST['no_ktp'];
$jenis_kelamin                  =   $_POST['jenis_kelamin'];
$no_hp                          =   $_POST['no_hp'];
$tanggal_lahir                  =   $_POST['tanggal_lahir'];
$kewarga_negaraan               =   $_POST['kewarga_negaraan'];
$agama                          =   $_POST['agama'];
$status_perkawinan              =   $_POST['status_perkawinan'];
$alamat                         =   $_POST['alamat'];
$pekerjaan                      =   $_POST['pekerjaan'];
$rencana_investasi              =   $_POST['rencana_investasi'];
$sumber_dana                    =   $_POST['sumber_dana'];
$paket_investasi                =   $_POST['paket_investasi'];

$daftar_investor = "INSERT INTO data_investor (id_investor, nama_lengkap, email, no_ktp, jenis_kelamin, no_hp, tanggal_lahir, kewarga_negaraan, agama, status_perkawinan, alamat, pekerjaan, rencana_investasi, sumber_dana, paket_investasi )
                        VALUES ('$id_investor', '$nama_lengkap', '$email', '$no_ktp', '$jenis_kelamin', '$no_hp', '$tanggal_lahir', '$kewarga_negaraan', '$agama', '$status_perkawinan', '$alamat', '$pekerjaan', '$rencana_investasi', '$sumber_dana', '$paket_investasi')";

if(mysqli_query($koneksi, $daftar_investor)){
    header("location:berhasil-investor.php");
}
else
{
    header("location:gagal-investor.php");
}

?>