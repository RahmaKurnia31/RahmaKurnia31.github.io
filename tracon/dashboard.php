
<!-- top of file -->
		<!-- Page Content -->
		<section class="content">
      <div class="container-fluid">
	  <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header border-0">
						<form class="form-horizontal">
							<div class="panel panel-default">
								<div class="panel-body">
								<h2 align="center">Selamat Datang,<?php echo $_SESSION['nama'];?>!</h2>
								<hr/>
								<center><img src="../foto/<?php echo $res['foto_emp']?>" width="120px"></center>
								<hr/>
								</div>
							</div><!-- /.panel -->
						</form>
					</div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
				</div>
              </div>
				<div class="row">
					<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
								<div class="row no-gutters align-items-center">
								<div class="col">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-8">
									Sisa Cuti 20<?= date('y')?></div>
									<?php
									$query = mysqli_query($koneksi,"SELECT * FROM data_karyawan WHERE nama='$_SESSION[nama]'");
									while ($karyawan = mysqli_fetch_array ($query)){
									?>
								<div><?= $karyawan['jatah'] ?> Hari</div> 
								</div>
							</div><!-- /.panel -->
						</form>
					</div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
				<?php } ?>
							</a>
						</div>
					</div><!-- /.panel-green -->

				</div><!-- /.row -->

			</div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
<!-- bottom of file -->
