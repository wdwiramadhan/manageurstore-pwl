<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= BASEURL ?>/Dashboard" class="brand-link text-center">
      <span class="brand-text font-weight-bold"><b>Ayo Bangun</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= BASEURL ?>/public/img/profile.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= ucwords(Session::get('name')) ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= BASEURL ?>/Dashboard" class="nav-link  <?= strtolower($_GET['url']) == 'dashboard' ? 'active': ''?>">
              <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= BASEURL ?>/Supplier" class="nav-link <?= strtolower($_GET['url']) == 'supplier' ? 'active': ''?>">
              <i class="nav-icon fas fa-fw fa-users"></i>
              <p>Supplier</p>
            </a>
          </li>
          <li class="nav-item has-treeview <?= strtolower($_GET['url']) == 'user' ? 'menu-open': ''?>">
            <a href="#" class="nav-link <?= strtolower($_GET['url']) == 'user' ? 'active': ''?>">
              <i class="nav-icon fas fa-fw fa-cog"></i>
              <p>Master<i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="<?= BASEURL ?>/User" class="nav-link <?= strtolower($_GET['url']) == 'user' ? 'active': ''?>">
                  <i class="nav-icon fas fa-fw fa-users-cog"></i>
                  <p>Admin Management</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>