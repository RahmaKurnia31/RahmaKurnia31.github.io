<?php
include('../../konf/config.php');
$NPK = $_GET['npk'];
$NAMA = $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['pw'];
$level = $_GET['lvl'];

$query = mysqli_query($koneksi,"UPDATE tb_user SET npk='$NPK',nama='$NAMA',username='$username',pw='$password',lvl='$level'  WHERE npk='$NPK' ");
header('location: ../index.php?page=data-akun');
?>