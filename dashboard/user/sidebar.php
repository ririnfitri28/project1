<aside class="main-sidebar sidebar-dark-primary elevation-4 d-none d-lg-block" style="background-color: #3c80f0 !important;">
    <!-- Brand Logo -->
    <a href="<?= $weburl ?>" class="brand-link border-bottom border-light">
      <img src="<?= $weburl; ?>/assets/image/logo.png" alt="<?= $data_settings['title']; ?> Logo" class="brand-image"
           style="opacity: 1">
      <span class="brand-text font-weight-bold text-light"><?= $data_settings['title']; ?></span>
    </a>
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center border-bottom border-light">
          <a href="<?= $weburl ?>/dashboard/user/sidebar/profile-volunteer.php?id_user=<?= $data_user['id_user'] ?>">
        <div class="image pl-0">
          <div class="d-flex justify-content-center">
            <img src="<?= $weburl ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style="width: 100px;"><br>
          </div>
          <div class="d-flex justify-content-center mt-2">
            <a href="#" class="d-block font-weight-bold text-light"><?= $data_user['nama_lengkap']; ?></a>
          </div>
        </div>
        </a>
        
        <div class="">
          
        </div>
      </div>
      <nav class="mt-2">
        
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= $weburl ?>/dashboard/user/index.php" class="nav-link">
              <i class="nav-icon fas fa-home text-light"></i>
              <p class="text-light">
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $weburl ?>/dashboard/user/sidebar/kegiatan.php" class="nav-link">
              <i class="nav-icon fas fa-calendar text-light"></i>
              <p class="text-light">
                Kegiatan
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $weburl ?>/dashboard/user/sidebar/berita.php" class="nav-link">
              <i class="nav-icon far fa-file-alt text-light"></i>
              <p class="text-light">
                Berita
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $weburl ?>/dashboard/user/sidebar/komunitas.php" class="nav-link">
              <i class="nav-icon fas fa-users text-light"></i>
              <p class="text-light">
                Komunitas
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $weburl ?>/dashboard/user/sidebar/pengaturan-profile.php" class="nav-link">
              <i class="nav-icon fas fa-user text-light"></i>
              <p class="text-light">
                Pengaturan Profile
                </p>
            </a>
          </li>
          </li>
                
          <li class="nav-item">
            <a href="<?= $weburl ?>/auth/logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off text-light"></i>
              <p class="text-light">
                Logout
              </p>
            </a>
          </li>
              
      </nav>
      <!-- Sidebar Menu -->
      <!-- /.sidebar-menu -->
    </div>
    
  </aside>