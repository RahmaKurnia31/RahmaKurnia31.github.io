<?php
include('../../konf/config.php');
$NPK = $_GET['npk'];
$NAMA = $_GET['nama'];
$JK = $_GET['jk'];
$Alamat = $_GET['jatah'];
$Divisi = $_GET['divisi'];
$posisi = $_GET['posisi'];
$query = mysqli_query($koneksi,"UPDATE data_karyawan SET npk='$NPK',nama='$NAMA',jk='$JK',jatah='$Alamat',divisi='$Divisi',posisi='$posisi'  WHERE npk='$NPK' ");
header('location: ../index.php?page=data-karyawan');
?>