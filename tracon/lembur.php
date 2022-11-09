 
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
                <h3 class="card-title"> kelola Data Lembur karyawan</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
            <!--  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah lembur -->
                </button>
                <br></br>
                <button type="button" class="btn btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah lembur  </button> <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>N0</th>
                    <th>Nama</th>
                    <th>NPK</th>
                    <th>Jabatan</th>
                    <th>Jam Lembur</th>
                    <th> Aksi </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM data_karyawan");
                    while ($karyawan = mysqli_fetch_array ($query)){
                      $no++
                    ?> 
                  <tr>
                  <td><?php echo $no;?></td>
                    <td><?php echo $karyawan['nama'];?></td>
                    <td><?php echo $karyawan['npk'];?></td>
                    <td><?php echo $karyawan['divisi'];?></td>
                    <td><?php echo $karyawan['lembur'];?></td>
                    <td>
                    <!--<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah lembur  </button>-->
                    <a href="index.php?page=detail-lembur&& npk=<?php echo $karyawan['npk'];?>"  class="btn btn-sm btn-primary">Detail</a>
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
       di dalam session sukses  -->
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
          <div class="modal-content">
          
          <div class="modal-header">
          <!--  <p align="right"> ADM-PKL </p>
            <p> 17 Oktober -->
          <table border="1" style="width: 9500000px;" align="center">
<tbody>
<tr>
<td align="center"><b>CONSORTIUM</b> <br></br>
<img src="tracon.jpg"  /> 
</td>
<td align="center"><h2  align="center" >  <b>FORMULIR LEMBUR</b> </h2> <h2><b>  PT. Tracon Industri </b> </h2> 
</td>
</tr>



</tbody></table> <Bq></Bq>

  
          <div class="card-header">
         
</div>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form method="get" action="add/tambah_lembur.php">
            <div class="modal-body">
           
                    <table border="1" style="width: 10000px;" align="center">
      <tbody>
            <div class="modal-body">
            <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">NAMA </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="Masukan Nama" name="nama" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="npk" class="col-sm-2 col-form-label">NPK </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="Masukan NPK" name="npk" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan </label>
                    <div class="col-sm-10">
             <select id="inputState" class="form-control" data-placeholder="Pilih" name="jabatan" required>
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
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lembur </label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control"  placeholder="Masukan Tanggal" name="tanggal">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="mulai" class="col-sm-2 col-form-label">Jam Mulai</label>
                    <div class="col-sm-10">
                      <input type="time" class="form-control"  placeholder="Masukan jam mulai" name="mulai">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="selesai" class="col-sm-2 col-form-label">Jam Selesai</label>
                    <div class="col-sm-10">
                      <input type="time" class="form-control"  placeholder="Masukan jam selesai" name="selesai">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="total" class="col-sm-2 col-form-label">Total Jam</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="Masukan total jam" name="total">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="hari" class="col-sm-2 col-form-label">Jenis Hari Lembur </label>
                    <div class="col-sm-10">
             <select id="inputState" class="form-control" data-placeholder="Pilih" name="hari" required>
               <option>Pilih</option> 
              <option>Kerja</option>
              <option>Libur</option>
            </select>
                  </div>
                    </div>
                    <div class="form-group row">
                    <label for="tugas" class="col-sm-2 col-form-label">Uraian Tugas </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  placeholder="Masukan Uraian Tugas" name="tugas">
                    </div>
                  </div>
                  <!-- /. batas form -->
                  </div>
                    </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <button type="submit" class="btn btn-default float-right">Batal</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
