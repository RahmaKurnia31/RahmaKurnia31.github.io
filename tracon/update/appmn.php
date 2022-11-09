<?php
include('../../konf/config.php');
$nomor = $_GET['nomor'];
$npk = $_GET['npk'];
$nama = $_GET['nama'];
$posisi = $_GET['posisi'];
$jenis = $_GET['jenis'];
$nomor = $_GET['nomor'];
$status = $_GET['status'];
$query = mysqli_query($koneksi,"UPDATE pakai SET status='$status'  WHERE nomor='$nomor' ");
header('location: ../index.php?page=waitmn');
?>