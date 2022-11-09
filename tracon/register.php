<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SICUTI | Halaman Registrasi  (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h5"><b>SICUTI |</b> Sistem Informasi Cuti </a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Registrasi Untuk Memiliki Akun</p>

      <form  method="get" action="add/tambah_user.php">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukan NPK" name="NPK" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-copy"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pw" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
                    
                    <div class="col mb-3">
             <select id="inputState" class="form-control" data-placeholder="Pilih Posisi" name="lvl" required>
               <option>Pilih Posisi</option> 
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
            <div class="">
            <div class="">
            </div>
          </div>
        </div>
                
        <div class="col mb-3">
             <select id="inputState" class="form-control" data-placeholder="Pilih Posisi" name="pimpinan" required>
               <option>Pilih Pimpinan</option> 
              <option>Plant Manager</option>
              <option>SI Operation</option>
              <option>SI Maintenance</option>
              <option>HSE Coordinator</option>
              <option>Process Engineer</option>
              <option>Procurement</option>
              <option>Warehouseman</option>
              <option>FA/GA/ADM</option>
              </select>
                  </div>

          <div class="col-4">
            <a href="../index.php"type="submit" class="btn btn-primary btn-block">Register</a>
          </div></div>
          <!-- /.col -->
        <a href="../index.php" class="text-center">Saya Sudah Punya Akun</a>
        </div>
      </form>
 <!-- /.col 
      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

     
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
