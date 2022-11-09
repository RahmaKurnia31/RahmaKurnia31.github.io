<?php
include('../../konf/config.php');
$NPK = $_GET['NPK'];
$NAMA = $_GET['nama'];
$JK = $_GET['jk'];
$Alamat = $_GET['jatah'];
$Divisi = $_GET['divisi'];
$posisi = $_GET['posisi'];
$query = mysqli_query($koneksi,"INSERT INTO data_karyawan (NPK,nama,jk,jatah,divisi,posisi) VALUES ('$NPK','$NAMA','$JK','$Alamat','$Divisi','$posisi') ");
header('location: ../index.php?page=data-karyawan');
?>