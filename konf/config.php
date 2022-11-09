<?php
$koneksi = mysqli_connect('localhost','root','','db_tracon');

if(!$koneksi){
die("koneksi gagal:". mysqli_connect_error());
}
else{
    echo "";
}
?>