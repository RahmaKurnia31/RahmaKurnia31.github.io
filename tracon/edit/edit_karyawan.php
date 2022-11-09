<?php
$NPK =$_GET['npk'];
$query = mysqli_query($koneksi,"SELECT * FROM data_karyawan WHERE npk='$NPK'");
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
    <form method="get" action='update/update_karyawan.php'>
    <div class="modal-body">
                    
                    <div class="form-row">
                      <div class="col">
                      <label for="Tambah Jatah Cuti" class="form-label">NPK</label>
                        <input type="text" class="form-control" placeholder="Masukan NPK" name="npk" value="<?php echo $view['npk'];?>">
                      </div>
                      <div class="col">
                      <label for="Tambah Jatah Cuti" class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Karyawan" name="nama" value="<?php echo $view['nama'];?>">
                      </div>
                      <div class="col">
                      <div class="form-group col">
                      <label for="inputState">Gender</label>
                      <select id="inputState" class="form-control" placeholder="Pilih" name="jk" value="<?php echo $view['jk'];?>">
                      <option value="<?php echo $view['jk'];?>"selected><?php echo $view['jk'];?></option>  
                      <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                   </div>
                   <div class="col">
                      <label for="Tambah jatah" class="form-label">Jatah Cuti</label>
                        <input type="text" class="form-control" placeholder="Masukan Alamat" name="jatah" value="<?php echo $view['jatah'];?>">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group col">
                      <label for="inputState">Divisi</label>
                      <select id="inputState" class="form-control" placeholder="Pilih" name="divisi" value="<?php echo $view['divisi'];?>">
                      <option value="<?php echo $view['divisi'];?>"selected><?php echo $view['divisi'];?></option> 
                      <option>Plant Manager</option>
                        <option>Operasi</option>
                        <option>Maintenance</option>
                        <option>HSE</option>
                        <option>Process Enginer</option>
                        <option>Procurement</option>
                        <option>FA/GA/ADM</option>
                        <option>Gudang</option>
                      </select>
                   </div>
                   <div class="col">
                      <div class="form-group col">
                      <label for="inputState">Posisi</label>
                      <select id="inputState" class="form-control" data-placeholder="Pilih" name="posisi" value="<?php echo $view['posisi'];?>">
                      <option value="<?php echo $view['posisi'];?>" selected><?php echo $view['posisi'];?></option> 
                      <option>Plant Manager</option>
                        <option>SI Operation</option>
                        <option>SI Maintenance</option>
                        <option>SPV Mechanic</option>
                        <option>Maintenance planner</option>
                        <option>SPV E/I</option>
                        <option>HSE Coordinator</option>
                        <option>SPV Operation</option>
                        <option>Process Engineer</option>
                        <option>Procurement</option>
                        <option>Warehouseman</option>
                        <option>FA/GA/ADM</option>
                        <option>Staff Process</option>
                        <option>DCS Operator</option>
                        <option>Field Operator</option>
                        <option>Staff Mechanic</option>
                        <option>Staff E/I</option>
                        <option>HSE Staff</option>
                        <option>Security</option>
                        <option>OB</option>
                        <option>Opr.Forklift</option>
                        <option>Driver</option>
                      </select>
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