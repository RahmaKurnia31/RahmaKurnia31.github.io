<?php
$nomor =$_GET['nomor'];
$query = mysqli_query($koneksi,"SELECT * FROM pakai WHERE nomor='$nomor'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
  <div class="card card">
  <div class="card-header"> 
   <table border="1" style="width: 989px;" align="center">
<tbody>
<?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM pakai WHERE nomor='$nomor'");
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
                    </div>
    </div>
</section>
<tr>
<form method="get" action='update/appmn.php'>
            <div class="modal-body">
                
                   
            <table border="1" style="width: 10000px;" align="center">
                    <tbody>
            <div class="modal-body">
            <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">NAMA </label>
                    <div class="col-6">
                      <input type="text" class="form-control"  placeholder="Masukan Nama" name="nama" value="<?php echo $view['nama'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="npk" class="col-sm-2 col-form-label">NPK </label>
                    <div class="col-6">
                      <input type="text" class="form-control"  placeholder="Masukan NPK" name="npk" value="<?php echo $view['npk'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="masuk" class="col-lg-2 col-form-label">Tanggal Masuk Kerja </label>
                    <div class="col-6">
                      <input type="date" class="form-control"  placeholder="Masukan tanggal" name="masuk" value="<?php echo $view['masuk'];?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="npk" class="col-sm-2 col-form-label">Jabatan </label>
                    <div class="col-6">
                    <input type="text" class="form-control"  placeholder="Masukan tanggal" name="posisi" value="<?php echo $view['posisi'];?>" >
                  </div>
                    </div>
                    <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Cuti </label>
                    <div class="col-6">
                    <input type="text" class="form-control"  placeholder="Masukan tanggal" name="jenis" value="<?php echo $view['jenis'];?>" >
                  </div>
                    </div>
                    <div class="form-group row">
                    <label for="npk" class="col-lg-2 col-form-label">Dari Tanggal</label>
                    <div class="col-6">
                      <input type="date" class="form-control"  placeholder="Masukan Tanggal" name="awal" value="<?php echo $view['awal'];?>">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="npk" class="col-sm-2 col-form-label">S/D Tanggal</label>
                    <div class="col-6">
                      <input type="date" class="form-control"  placeholder="Masukan NPK" name="akhir" value="<?php echo $view['akhir'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="total" class="col-sm-2 col-form-label">Total Hari</label>
                    <div class="col-6">
                      <input type="text" class="form-control"  placeholder="Masukan lamanya hari cuti" name="total" value="<?php echo $view['total'];?>">
                    </div>
                  </div>
                  <p> KETERANGAN </p>
                  <div class="form-group row">
                    <label for="npk" class="col- col-form-label">1. Berpergian Dengan keluarga yang terdiri dari istri/anak</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="" name="keterangan" value="<?php echo $view['keterangan'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="npk" class="col-6 col-form-label">2. Alamat Selama Cuti</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="" name="keterangan" value="<?php echo $view['keterangan'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="npk" class="col-6 col-form-label">3.Selama Cuti pekerjaan diserahkan kepada</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="" name="keterangan" value="<?php echo $view['keterangan'];?>">
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="tugas" class="col-6 col-form-label">4.Keterangan Lain</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="" name="keterangan" value="<?php echo $view['keterangan'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label"><b> PLANT MANAGER </b> </label>
                    <div class="col-6">
             <select id="inputState" class="form-control" data-placeholder="Pilih" name="status" >
               <option value = "N">Menolak</option> 
              <option value= "Y">Menyetujui</option>
             
            </select>
                  </div>
                    </div>
                  <!-- /. batas form -->
                  </div>
                    </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Kirim</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
                <!-- /.card-footer -->
              </form>
                    </tr>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>  
      <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>