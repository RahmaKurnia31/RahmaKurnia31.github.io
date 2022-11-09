<?php
include('../../konf/config.php');
$nama = $_GET['nama'];
$npk = $_GET['npk'];
$jabatan = $_GET['jabatan'];
$tanggal = $_GET['tanggal'];
$mulai = $_GET['mulai'];
$selesai = $_GET['selesai'];
$total = $_GET['total'];
$hari = $_GET['hari'];
$tugas = $_GET['tugas'];
$query = mysqli_query($koneksi,"INSERT INTO lembur (nama,npk,jabatan,tanggal,mulai,selesai,total,hari,tugas) VALUES ('$nama','$npk','$jabatan','$tanggal','$mulai','$selesai','$total','$hari','$tugas') ");
header('location: ../index.php?page=data-lembur');
?>