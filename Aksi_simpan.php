<?php 

include "koneksi.php";
$nim =$_POST['nim'];
$nama =$_POST['nama'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis kelamin'];
$jurusan = $_POST['jurusan'];

// Query tambah data mahasiswa

$sql "INSERT INTO mahasiswa (nim, nama, no_hp, jenis_kelamin, jurusan, alamat) VALUES ('$nim', '$nama', '$no_hp', '$jenis_kelamin', '$jurusan', '$alamat')"; if (mysqli query($link, $sql)) {
if(mysqli_query($link,$sql)){
header("location:tampil_data.php");
} else {
header("location:form_tambah.php");
}
?>