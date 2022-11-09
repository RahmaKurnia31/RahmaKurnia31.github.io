<?php
include('../../konf/config.php');
$data = $_GET['npk'];
//$nama = $_GET['nama'];
//$jk   = $_GET['jk'];
//$alamat = $_GET['alamat'];
//$divisi = $_GET['divisi'];
//$posisi = $_GET['posisi'];
$query = mysqli_query($koneksi,"DELETE FROM data_karyawan WHERE npk='$data'");
header('location:../index.php?page=data-karyawan');

//gunakan fungsi di bawah ini agar session bisa dibuat
//session_start();

//koneksi ke database latihan
//$koneksi = mysqli_connect("localhost", "root", "", "db_tracon");

//hapus data dari tabel kontak
//$delete = mysqli_query($koneksi, "DELETE from lembur where npk=".$data);

//set session sukses
//$_SESSION["sukses"] = 'Data Berhasil Dihapus';

//redirect ke halaman index.php
//header('Location: ../index.php?page=data-lembur');  