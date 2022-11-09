<link src="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> kelola Data karyawan</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
             <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Karyawan
                </button>  -->
                <br></br>
                <table id="example1" class="table table-bordered table-striped" >
                  <thead>
                  <tr>
                  <th>N0</th>
                    <th>NPK</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Divisi</th>
                    <th>Posisi</th>
                    <th> Aksi </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                 $no = 0;
                 $pimpinan = "Plant Manager";
                 $query = mysqli_query($koneksi,"SELECT * FROM data_karyawan WHERE pimpinan='$pimpinan'");
                   while ($karyawan = mysqli_fetch_array ($query)){
                     $no++
                    ?> 
                  <tr>
                  <td><?php echo $no;?></td>
                    <td><?php echo $karyawan['npk'];?></td>
                    <td><?php echo $karyawan['nama'];?></td>
                    <td><?php echo $karyawan['jk'];?></td>
                    <td><?php echo $karyawan['divisi'];?></td>
                    <td><?php echo $karyawan['posisi'];?></td>
                    <td><a href="delete/hapus_data.php?npk=<?php echo $karyawan['npk'];?>" class="btn btn-sm btn-danger alert_notif">Hapus</a>
                      
                      <a href="index.php?page=edit-karyawan&& npk=<?php echo $karyawan['npk'];?>"  class="btn btn-sm btn-success">Edit</a>
                     <!-- <a class="view-data btn btn-sm btn-primary"data-toggle="modal" data-target="#modal-view" data-npk="<?php echo $karyawan['npk'];?>">Detail</a>
                    --></td>
                  </tr>
                     <?php }?>
                  </tbody>
               
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
    
    
        <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
        di dalam session sukses  -->
       
    
    
        <!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
        <script>
            $('.alert_notif').on('click',function(){
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin hapus data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
            });
            <?php if(@$_SESSION['sukses']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Sukses',    
                    text: 'data berhasil dihapus',                        
                    timer: 3000,                                
                    showConfirmButton: false
                })
            </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
        <?php unset($_SESSION['sukses']); } ?>
        </script>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
<div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Diri Karyawan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_karyawan.php">
            <div class="modal-body">
                    
          <div class="form-row">
            <div class="col">
            <label for="Tambah Jatah Cuti" class="form-label">NPK</label>
              <input type="text" class="form-control" placeholder="Masukan NPK" name="NPK" required>
            </div>
            <div class="col">
            <label for="Tambah Jatah Cuti" class="form-label">Nama</label>
              <input type="text" class="form-control" placeholder="Masukan Nama Karyawan" name="nama" required>
            </div>
            <div class="col">
            <div class="form-group col">
            <label for="inputState">Gender</label>
            <select id="inputState" class="form-control" placeholder="Pilih" name="jk" required>
            <option>Pilih</option>  
            <option>Laki-Laki</option>
              <option>Perempuan</option>
            </select>
         </div>
         <div class="col">
            <label for="Tambah jatah" class="form-label">Jatah Cuti</label>
              <input type="text" class="form-control" placeholder="Masukan Jatah Cuti" name="jatah" >
            </div>
          </div>
          <div class="col">
            <div class="form-group col">
            <label for="inputState">Divisi</label>
            <select id="inputState" class="form-control" placeholder="Pilih" name="divisi" required>
            <option>Pilih</option> 
            <option>Plant Manager</option>
              <option>Operasi</option>
              <option>Maintenance</option>
              <option>HSE</option>
              <option>FA/GA/ADM</option>
            </select>
         </div>
         <div class="col">
            <div class="form-group col">
            <label for="inputState">Posisi</label>
            <select id="inputState" class="form-control" data-placeholder="Pilih" name="posisi" required>
            <option>Pilih</option> 
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
        </form>
            </div>
            <div class="modal-footer justify-content-between">
            <button type="submit" class="btn btn-primary">Simpan</button>  
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
  </div>
        <!-- /.modal-dialog -->
 </div>
 <!--/.modal vies-data -->

          <!-- /.modal-content -->
  </div>
        <!-- /.modal-dialog -->
 </div>
      <script>
        function hapus_data(){
          alert('ok');
        }
      
</script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script src="stylesheet" href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>