<?php

$data = $_GET['npk'];

//gunakan fungsi di bawah ini agar session bisa dibuat
session_start();

//koneksi ke database latihan
$koneksi = mysqli_connect("localhost", "root", "", "db_tracon");

//hapus data dari tabel kontak
$delete = mysqli_query($koneksi, "DELETE from data_karyawan where npk=".$data);

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Dihapus';

//redirect ke halaman index.php
header('Location: ../index.php?page=data-cutikaryawan');  