<?php

$nomor = $_GET['nomor'];
$s = $_GET['s'];
if($_GET['s'] == 'N'){
    $query = mysqli_query($koneksi,"UPDATE pakai SET status = '$s' WHERE nomor='$nomor'");
    if($query){
        header('location: request_cuti.php');
    } else{
        echo"<script>alert('gagal');window.location='request_cuti.php'</script>";
    }
}
?>