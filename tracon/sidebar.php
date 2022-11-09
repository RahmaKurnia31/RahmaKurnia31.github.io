<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama']. ' | '.$_SESSION['lvl'];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
    <?php
    if($_SESSION['lvl']=='admin'){
      include('menu/admin.php');
    } 
    else if($_SESSION['lvl']=='SI Maintenance'){
      include('pimpinan/sm/pimpinan.php');
    }
    else if($_SESSION['lvl']=='manager'){
      include('menu/manager.php');
    }
    else if($_SESSION['lvl']=='SI Operation'){
      include('pimpinan/op/pimpinan.php');
    }
    else if($_SESSION['lvl']=='Process Engineer'){
      include('pimpinan/pe/pimpinan.php');
    }
    else if($_SESSION['lvl']=='SPV Mechanic'){
      include('pimpinan/spvm/pimpinan.php');
    }
    else if($_SESSION['lvl']=='SPV E/I'){
      include('pimpinan/spve/pimpinan.php');
    }
    else if($_SESSION['lvl']=='HSE Coordinator'){
      include('pimpinan/hse/pimpinan.php');
    }
    else if($_SESSION['lvl']=='FA/GA/ADM'){
      include('pimpinan/faga/pimpinan.php');
    }
    else {
    include('menu/operator.php'); 

    }
   ?>
      <!-- /.sidebar-menu -->
    </div>