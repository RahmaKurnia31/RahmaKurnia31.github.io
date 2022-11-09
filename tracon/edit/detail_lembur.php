<?php
$NPK =$_GET['npk'];
$query = mysqli_query($koneksi,"SELECT * FROM lembur WHERE npk='$NPK'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
  <div class="card card">
  <div class="card-header"> 
   <table border="1" style="width: 989px;" align="center">
<tbody>
<?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM lembur WHERE npk='$NPK'");
                    while ($karyawan = mysqli_fetch_array ($query)){
                     
                    ?> 
<tr>
<b><th align="center"><h5 align="center">CONSORTIUM</h5>
<br></br><h5 align="center"><img align="center" src="tracon.jpg"  /> </5>
</th>
<th align="center"><h4  align="center" >  <b>FORMULIR LEMBUR</b> </h4> <h4 align="center"><b>  PT. TRACON INDUSTRI </b> </h4> 
</th>
<th align="center"><h5 align="center"> NOMOR : </h5>
                    
             <h5 align="center">     <?php echo $karyawan['nomor'];?> </h5>
             </b>                  
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
                    $query = mysqli_query($koneksi,"SELECT * FROM lembur WHERE npk='$NPK'");
                    while ($karyawan = mysqli_fetch_array ($query)){
                     
                    ?>  
                   <td>
                        <h7>
                        <b><p> Perintah Kerja Lembur :  </p>
                        Nama  :</b> <?php echo $view['nama'];?>
                    <p><b> NPK   : </b> <?php echo $view['npk'];?>  </p>  
                      

                     <b> Jabatan :</b> <?php echo $view['jabatan'];?>
                     <p><b>  Tanggal Lembur :</b> <?php echo $view['tanggal'];?></p>
                   <b> Jam Mulai :</b> <?php echo $view['mulai'];?>
                  <p> <b> Jam selesai :</b> <?php echo $view['selesai'];?> </p>
                   <b>  Total :</b> <?php echo $view['total'];?> Jam
                    </h7> </td>
                    <td>
                    <b>Hari <?php echo $view['hari'];?>  </b>
                   <p> <b> Uraian Tugas : <?php echo $view['tugas'];?>  </b> </p>
                    </td>
                    <?php }?>
                      </tbody></table>
                    </div>
                   </div>
                   <div class="modal-footer justify-content-between">
                   <a href="index.php?page=data-lembur"  class="btn btn btn-primary">Kembali</a>
                  
            </div>
    </form>
      </div>
    <!-- /.card-body -->
      </div>
    </div>
</section>