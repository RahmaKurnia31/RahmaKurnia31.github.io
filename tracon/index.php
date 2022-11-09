<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama']){
  header('location:../index.php?session=expired');
}
include('head.php'); ?>
<?php include('../konf/config.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
<?php include('preloader.php'); ?>

  <!-- Navbar -->
 <?php include('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('brandlogo.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php 
    include('contenheader.php'); ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])){
    if ($_GET['page']=='dashboard'){
      include('dashboard.php'); }
      else if($_GET['page']=='data-cutikaryawan'){
        include('admin/data_cuti.php');
      }
      else if($_GET['page']=='data-karyawan'){
        include('admin/data_karyawan.php');
      }
      else if($_GET['page']=='edit-karyawan'){
        include('edit/edit_karyawan.php');
      }
      else if($_GET['page']=='data-lembur'){
        include('lembur.php');
      }
      else if($_GET['page']=='pakai-cuti'){
        include('add/pakai_cuti.php');
      }
      else if($_GET['page']=='laporan'){
        include('laporan.php');
      }
      else if($_GET['page']=='detail-cuti'){
        include('edit/detail_cuti.php');
      }
      else if($_GET['page']=='detail.cuti'){
        include('edit/detail.cuti.php');
      }
      else if($_GET['page']=='detail-lembur'){
        include('edit/detail_lembur.php');
      }
      else if($_GET['page']=='wait-approve'){
        include('approve/pending.php');
     } 
     else if($_GET['page']=='ajucuti'){
      include('cutiprib/ajucuti.php');
    } 
    else if($_GET['page']=='wait'){
      include('cutiprib/ajucuti.php');
    }
    else if($_GET['page']=='waitprib'){
       include('cutiprib/cuti_wait.php');
    } 
    else if($_GET['page']=='data-semua'){
      include('approve/cuti_hasil.php');
   } 
   else if($_GET['page']=='data-akun'){
    include('admin/data_akun.php');
 } 
 else if($_GET['page']=='edit-akun'){
  include('edit/edit_akun.php');
} 
else if($_GET['page']=='data-cutiop'){
  include('pimpinan/op/data_cuti.php');
  }
  else if($_GET['page']=='data-op'){
    include('pimpinan/op/data_karyawan.php');
    }
    else if($_GET['page']=='data-cutipm'){
      include('manager/data_cuti.php');
      }
      else if($_GET['page']=='data-pm'){
        include('manager/data_karyawan.php');
        }
        else if($_GET['page']=='data-cutifa'){
          include('pimpinan/faga/data_cuti.php');
          }
          else if($_GET['page']=='data-fa'){
            include('pimpinan/faga/data_karyawan.php');
            }
else if($_GET['page']=='wait-mn'){
include('manager/pending.php');
} 
else if($_GET['page']=='all'){
  include('manager/all.php');
  }
  else if($_GET['page']=='ajumn'){
    include('manager/ajucuti.php');
    } else if($_GET['page']=='approvemn'){
      include('manager/approve.php');
}else if($_GET['page']=='approved'){
  include('cutiprib/cuti_app.php');
} 
else if($_GET['page']=='rejected'){
  include('cutiprib/cuti_reject.php');
} 
    }
     else{
      include('dashboard.php');
     }
     ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<?php include('footer.php'); ?>
</body>
</html>