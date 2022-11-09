<?php
if (isset($_POST['submit'])){
    $karyawan =  $_SESSION['nama'];
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];
    $ket = $_POST['keterangan'];
    $dari = new DateTime($awal);
    $sampai = new DateTime($akhir);
    $d = $sampai->diff($dari)->days+1;
    $status = 'p';
    $query = mysqli_query($koneksi,"INSERT INTO pakai(nama,awal,akhir,total,status");
    if ($query){
        header('location: index.php');
    }
} else{
    header('location: index.php');
}
?>