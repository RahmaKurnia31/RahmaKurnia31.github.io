<?php
include('../../konf/config.php');
$NPK = $_GET['NPK'];
$NAMA = $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['pw'];
$level = $_GET['lvl'];
$query = mysqli_query($koneksi,"INSERT INTO tb_user (NPK,nama,username,pw,lvl) VALUES ('$NPK','$NAMA','$username','$password','$level') ");
//header('location: ../index.php?page=data-user');
?>