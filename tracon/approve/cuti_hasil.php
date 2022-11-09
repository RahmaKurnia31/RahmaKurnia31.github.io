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
                <h3 class="card-title"> DATA CUTI SAYA</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
              <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Buat Pengajuan Cuti 
                </button>-->
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Nomor Cuti</th>
                    <th>NPK</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Tanggal Masuk Kerja</th>
                    <th>Jenis Cuti</th>
                    <th>Tanggal Cuti</th>
                    <th>Total Hari Cuti</th>
                    <th>Status Pengajuan</th>
                  <!-- <th>Edit Cuti</th> 
                    <th> Aksi </th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $query = mysqli_query($koneksi,"SELECT * FROM pakai ");
                  while ($karyawan = mysqli_fetch_array ($query)){
                    
                    ?> 
                  <tr>
                  <td> <?= $karyawan['nomor'] ?></td>
                        <td><?= $karyawan['npk'] ?></td>
                        <td><?= $karyawan['nama'] ?></td>
                        <td><?= $karyawan['posisi'] ?></td>
                        <td><?= $karyawan['masuk'] ?></td>
                        <td><?= $karyawan['jenis'] ?></td>
                        <td><?= $karyawan['awal'].' s/d '.$karyawan['akhir']?></td>
                        <td><?= $karyawan['total'] ?></td>
                        <td><?= $karyawan['status'] === 'p'? 
                        '<h5><span class="badge badge-warning">Pending<i></i></span></h5>'
                        : ($karyawan[status]=== 'N'?
                        '<h5><span class="badge badge-danger">Ditolak<i></i></span></h5>'
                        :'<h5><span class="badge badge-succes">Diterima<i ></i></span></h5>');?>
                        </td>
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
        di dalam session sukses  
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
      jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
        <?php unset($_SESSION['sukses']); } ?>
    
    
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
            <table border="1" style="width: 9500000px;" align="center">
<tbody>
<tr>
<td align="center"><b>CONSORTIUM</b>
<br></br><img src="rekind.png"  /><img src="tracon.jpg"  /> 
</td>
<td align="center"><h4  align="center" >  <b>OPERATION & MAINTENANCE</b> </h4> <h4><b>  CO2 REMOVAL SUBANG </b> </h4> <h4> <b> PERMOHONAN CUTI / IZIN  </b></h4>
</td>
<td align="center">NOMOR :
<?php 
                  
                    $query = mysqli_query($koneksi,"SELECT * FROM pakai");
                    while ($cuti = mysqli_fetch_array ($query)){
                      $no++
                    ?> 
                      
                    <!--  <?php echo $cuti['nomor']++;?> -->
                      <?php }?>
</td>
</tr>



</tbody></table>

    
            <div class="card-header">
           
  </div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_pakai.php">
            <div class="modal-body">
                
                    <table border="1" style="width: 10000px;" align="center">
                    <tbody>
            <div class="modal-body">
            <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">NAMA </label>
                    <div class="col-6">
                      <input type="text" class="form-control"  placeholder="Masukan Nama" name="nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="npk" class="col-sm-2 col-form-label">NPK </label>
                    <div class="col-6">
                      <input type="text" class="form-control"  placeholder="Masukan NPK" name="npk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="masuk" class="col-lg-2 col-form-label">Tanggal Masuk Kerja </label>
                    <div class="col-6">
                      <input type="date" class="form-control"  placeholder="Masukan tanggal" name="masuk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="npk" class="col-sm-2 col-form-label">Jabatan </label>
                    <div class="col-6">
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
                    </div>
                    <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Cuti </label>
                    <div class="col-6">
             <select id="inputState" class="form-control" data-placeholder="Pilih" name="jenis" required>
               <option>Pilih</option> 
              <option>Cuti Tahunan</option>
              <option>Cuti Sakit</option>
              <option>Izin Menikah</option>
              <option>Cuti Hamil/Melahirkan</option>
              <option>Izin Karena Alasan Penting</option>
              <option>Cuti Lain-lain</option>
            </select>
                  </div>
                    </div>
                    <div class="form-group row">
                    <label for="npk" class="col-lg-2 col-form-label">Dari Tanggal</label>
                    <div class="col-6">
                      <input type="date" class="form-control"  placeholder="Masukan Tanggal" name="awal">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="npk" class="col-sm-2 col-form-label">S/D Tanggal</label>
                    <div class="col-6">
                      <input type="date" class="form-control"  placeholder="Masukan NPK" name="akhir">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="total" class="col-sm-2 col-form-label">Total Hari</label>
                    <div class="col-6">
                      <input type="text" class="form-control"  placeholder="Masukan lamanya hari cuti" name="total">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Pimpinan </label>
                    <div class="col-6">
             <select id="inputState" class="form-control" data-placeholder="Pilih" name="jenis" required>
               <option>Pilih Pimpinan</option> 

              <option>Plant Manager : Ikin Sodikin</option>
              <option>SI Operation : Suliman</option>
              <option>SI Maintenance : Iin Zaenal Mutaqin </option>
              <option>SPV Mechanic : Sukarman </option>
              <option>Maintenance planner :Andian Arinovendi</option>
              <option> SPV E/I : Ripki Abdul M</option>
              <option> HSE Coordinator : Muhammad Syarif</option>
              <option> FA/GA/ADM : Rifaldi Hendrawan</option>
            </select>
                  </div>
                    </div>
                  <p> KETERANGAN </p>
                  <div class="form-group row">
                    <label for="npk" class="col- col-form-label">1. Berpergian Dengan keluarga yang terdiri dari istri/anak</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="" name="keterangan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="npk" class="col- col-form-label">2. Alamat Selama Cuti</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="" name="keterangan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="npk" class="col- col-form-label">3.Selama Cuti pekerjaan diserahkan kepada</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="" name="keterangan">
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="tugas" class="col- col-form-label">4.Keterangan Lain</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="" name="keterangan">
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