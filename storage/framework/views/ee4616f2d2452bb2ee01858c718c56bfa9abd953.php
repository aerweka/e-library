<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?php echo e(asset('asset/image/bmth.jpg')); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Lara-Boots Web</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo e(URL::asset('/asset/image/yorichi.jfif')); ?>" class="img-circle elevation-8" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">aerweka</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <?php if($menu == 'anggota'): ?>
          <a href="/anggota" class="nav-link active">
            <?php else: ?>
            <a href="/anggota" class="nav-link">
              <?php endif; ?>
              <i class="nav-icon fa fa-users"></i>
              <p>Anggota</p>
            </a>
        </li>
        <li class="nav-item">
          <?php if($menu == 'pegawai'): ?>
          <a href="/pegawai" class="nav-link active">
            <?php else: ?>
            <a href="/pegawai" class="nav-link">
              <?php endif; ?>
              <i class="nav-icon fa fa-users"></i>
              <p>Pegawai</p>
            </a>
        </li>
        <?php if($menu == 'data_master'): ?>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <?php else: ?>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <?php endif; ?>
            <i class="nav-icon fa fa-database"></i>
            <p>
              Data Master Buku
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <?php if($submenu == 'buku'): ?>
              <a href="/buku" class="nav-link active">
                <?php else: ?>
                <a href="/buku" class="nav-link">
                  <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buku</p>
                </a>
            </li>
            <li class="nav-item">
              <?php if($submenu == 'jenisbuku'): ?>
              <a href="/jenisbuku" class="nav-link active">
                <?php else: ?>
                <a href="/jenisbuku" class="nav-link">
                  <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Buku</p>
                </a>
            </li>
            <li class="nav-item">
              <?php if($submenu == 'penerbit'): ?>
              <a href="/penerbit" class="nav-link active">
                <?php else: ?>
                <a href="/penerbit" class="nav-link">
                  <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penerbit</p>
                </a>
            </li>
            <li class="nav-item">
              <?php if($submenu == 'bahasa'): ?>
              <a href="/bahasa" class="nav-link active">
                <?php else: ?>
                <a href="/bahasa" class="nav-link">
                  <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahasa</p>
                </a>
            </li>
            <li class="nav-item">
              <?php if($submenu == 'eksemplar_buku'): ?>
              <a href="/eksemplar" class="nav-link active">
                <?php else: ?>
                <a href="/eksemplar" class="nav-link">
                  <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Eksemplar Buku</p>
                </a>
            </li>
          </ul>
        </li>
        <?php if($menu == 'peminjaman'): ?>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <?php else: ?>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <?php endif; ?>
            <i class="nav-icon fa fa-history"></i>
            <p>
              Peminjaman
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <?php if($submenu == 'index'): ?>
              <a href="/peminjaman" class="nav-link active">
                <?php else: ?>
                <a href="/peminjaman" class="nav-link">
                  <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peminjaman</p>
                </a>
            </li>
            <li class="nav-item">
              <?php if($submenu == 'histori_buku'): ?>
              <a href="/peminjaman/historiPeminjaman" class="nav-link active">
                <?php else: ?>
                <a href="/peminjaman/historiPeminjaman" class="nav-link">
                  <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Histori Peminjaman Buku</p>
                </a>
            </li>
            <li class="nav-item">
              <?php if($submenu == 'histori_anggota'): ?>
              <a href="/peminjaman/historiPeminjamanAnggota" class="nav-link active">
                <?php else: ?>
                <a href="/peminjaman/historiPeminjamanAnggota" class="nav-link">
                  <?php endif; ?>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Histori Peminjaman Buku oleh Anggota</p>
                </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/penerimaan" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p>
              Penerimaan
            </p>
          </a>
        </li>
        </li>
        <li class="nav-item">
          <a href="/logout" class="nav-link">
            <i class="nav-icon fa fa-user-circle"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>