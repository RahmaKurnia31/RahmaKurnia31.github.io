<?php
session_start();
include ('config.php');
include("konf/library.php");
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"INSERT * INTO tb_user WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
    header('location:../tracon');
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = $user['level'];
}
else if($username == '' || $password == ''){
    header('location:../index.php?error=2');
}
else{
    header('location:../index.php?error=1');
}

?>