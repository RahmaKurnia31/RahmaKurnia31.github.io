<?php
include('../../konf/config.php');
$npk = $_GET['npk'];
$nama = $_GET['nama'];
$divisi = $_GET['posisi'];
$jenis = $_GET['jenis'];
$total = $_GET['total'];
$keterangan = $_GET['keterangan'];
$awal = $_GET['awal'];
$akhir = $_GET['akhir'];
$pimpinan = $_GET['pimpinan'];
$masuk = $_GET['masuk'];

$query = mysqli_query($koneksi,"INSERT INTO pakai (npk,nama,posisi,jenis,total,keterangan,awal,akhir,pimpinan,masuk) VALUES ('$npk','$nama','$divisi','$jenis','$total','$keterangan','$awal','$akhir','$pimpinan','$masuk') ");
header('location: ../index.php?page=data-cutikaryawan');
?>