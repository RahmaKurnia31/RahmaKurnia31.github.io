<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              
               <p>
                Halaman Utama
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
         
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kelola Karyawan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=data-pm" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Diri Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=data-cutipm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Cuti Karyawan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-download"></i>
              <p>
                Approval
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=wait-mn" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menunggu Approval</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=data-cutikaryawan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=all" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Pengajuan Cuti
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?page=ajumn" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buat Pengajuan</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?page=waitprib" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menunggu Approval</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?page=rejected" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?page=approved" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Approved</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-red">
              <i class="nav-icon fas fa-power-off"></i>
               <p>
                Log out
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
         
    