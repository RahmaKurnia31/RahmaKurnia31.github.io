<?php
$NPK =$_GET['npk'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE npk='$NPK'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
  <div class="card card-warning">
  <div class="card-header"> 
    <h3 class="card-title">Edit Data Karyawan</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form method="get" action='update/update_akun.php'>
    <div class="modal-body">
                    
                    <div class="form-row">
                      <div class="col">
                      <label for="" class="form-label">NPK</label>
                        <input type="text" class="form-control" placeholder="Masukan NPK" name="npk" value="<?php echo $view['npk'];?>">
                      </div>
                      <div class="col">
                      <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Karyawan" name="nama" value="<?php echo $view['nama'];?>">
                      </div>
                      <div class="col">
                      <div class="form-group col">
                      <label for="inputState">User Name</label>
                      <input type="text" class="form-control" placeholder="Pilih" name="username" value="<?php echo $view['username'];?>">
                   </div>
                   <div class="col">
                      <label for="" class="form-label">Password</label>
                      <input type="text" class="form-control" placeholder="" name="pw" value="<?php echo $view['pw'];?>">
                      </div>
                      <div class="col">
                      <div class="form-group col">
                      <label for="inputState">Level</label>
                      <select id="inputState" class="form-control" placeholder="Pilih" name="lvl" value="<?php echo $view['lvl'];?>">
                      <option value="<?php echo $view['lvl'];?>"selected><?php echo $view['lvl'];?></option>  
                      <option>admin</option>
                        <option>manager</option>
                        <option>pimpinan</option>
                        <option>operator</option>
                      </select>
                   </div>
                    </div>
                    
                   <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary">Simpan</button>  
           
            </div>
    </form>
      </div>
    <!-- /.card-body -->
      </div>
    </div>
</section>