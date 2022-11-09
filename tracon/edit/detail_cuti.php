<?php
$NPK =$_GET['npk'];
$query = mysqli_query($koneksi,"SELECT * FROM pakai WHERE npk='$NPK'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
  <div class="card card">
  <div class="card-header"> 
   <table border="1" style="width: 989px;" align="center">
<tbody>
<?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM pakai WHERE npk='$NPK'");
                    while ($karyawan = mysqli_fetch_array ($query)){
                     
                    ?> 
<tr>
<th align="center"><h5 align="center"><b>CONSORTIUM</b> </h5>
<br></br><h5 align="center"><img align="center" src="rekind.png"  /><img align="center" src="tracon.jpg"  /> </5>
</th>
<th align="center"><h4  align="center" >  <b>OPERATION & MAINTENANCE</b> </h4> <h4 align="center"><b>  CO2 REMOVAL SUBANG </b> </h4> <h4 align="center"> <b> PERMOHONAN CUTI / IZIN  </b></h4>
</th>
<th align="center"><h5 align="center"> NOMOR : </h5>
                    
             <h5 align="center">     <?php echo $karyawan['nomor'];?> </h5>
                    
</th>
</tr>


<?php }?>

  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form method="get" >
    <div class="modal-body">
                    
                    <div class="form-row">
                      <div class="col">
                      <table border="1" style="width: 989px;" align="center">
                   <tbody> 
                   <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM pakai WHERE npk='$NPK'");
                    while ($karyawan = mysqli_fetch_array ($query)){
                     
                    ?>  
                   <td>
                        <h7>
                       <b> Nama  :</b> <?php echo $view['nama'];?>
                    <p><b> NPK   : </b> <?php echo $view['npk'];?>  </p>  
                    <p> Mengajukan Permohonan Cuti Sebagai Berikut :  </p>  

                     <b> Jenis Cuti :</b> <?php echo $view['jenis'];?>
                     <p><b> Dari Tanggal :</b> <?php echo $view['awal'];?></p>
                   <b> S/D Tanggal :</b> <?php echo $view['akhir'];?>
                    </h7> </td>
                    <td>
                    <b> KETERANGAN : </b>
                      <?php echo $view['keterangan'];?>
                    </td>
                    <?php }?>
                      </tbody></table>
                    </div>
                   </div>
                   <div class="modal-footer justify-content-between">
                   <a href="index.php?page=ajucuti"  class="btn btn btn-primary">Kembali</a>
                  
            </div>
    </form>
      </div>
    <!-- /.card-body -->
      </div>
    </div>
</section>