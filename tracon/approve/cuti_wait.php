

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5 class="n-0 font-weight-bold text-primary text-center">Request Cuti Karyawan</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No Cuti</th>
                        <th>NPK</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Tanggal pengajuan</th>
                        <th>Jenis Cuti</th>
                        <th>Tanggal Cuti</th>
                        <th>Total hari cuti</th>
                        <th>Status Pengajuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $query = mysqli_query($koneksi,"SELECT * FROM pakai ");
                     while ($karyawan = mysqli_fetch_array ($query)){
                        ?>
                    <tr>
                        <td><?= $karyawan['nomor'] ?></td>
                        <td><?= $karyawan['npk'] ?></td>
                        <td><?= $karyawan['nama'] ?></td>
                        <td><?= $karyawan['jabatan'] ?></td>
                        <td><?= $karyawan['masuk'] ?></td>
                        <td><?= $karyawan['jenis'] ?></td>
                        <td><?= $karyawan['awal'].' s/d '.$karyawan['akhir']?></td>
                        <td><?= $karyawan['total'] ?></td>
                        <td><?= $karyawan['status'] === 'p'? 
                        '<h5><span class="badge badge-warning">pending<i class="fas fa-"></i></span></h5>'
                        : ($karyawan[status]=== 'N'?
                        '<h5><span class="badge badge-danger">Tolak<i class="fas fa-"></i></span></h5>'
                        :'<h5><span class="badge badge-succes">Diterima<i class="fas fa-"></i></span></h5>')?>
                        </td>
                        <td>
                            <?php
                            if($karyawan['status']== 'p'){
                                ?>
                                <a href="cuti_wait.php?npk=<?= $karyawan['nomor'] ?>&&s=N" class="btn btn-danger btn-sm"
                                    onclick="return confirm('tolak pengajuan ini?')">
                                    <i class="fas fa-"><i>
                                </a>
                                <a href="cuti_wait.php?npk=<?= $karyawan['nomor'] ?>&&s=Y" class="btn btn-success btn-sm"
                                    onclick="return confirm('terima pengajuan ini?')">
                                    <i class="fas fa-">terima<i>
                                </a>
                          <?php  } ?>
                            </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                          </table>
                          </div>
                          </div>
                          </div>
                          <?php
                          require('../footer.pgp');
                            
                            ?>

                   
                        
