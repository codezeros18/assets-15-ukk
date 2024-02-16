<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">ZERO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-clock"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('buku/dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Buku
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('buku/kategori') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Kategori
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-handshake"></i>
                    <p>
                        Peminjaman
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-hand-holding-heart"></i>
                    <p>
                        Pengembalian
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('profile/dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Profil
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-arrow-right"></i>
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
  </aside>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
