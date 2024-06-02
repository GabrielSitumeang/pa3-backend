<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <img src="{{ asset('images/leaf.png') }}" alt="CropSystem" class="mt-3 logo brand-image img-circle elevation-3" style="opacity: .8">
        <a href="#" class="brand-link projek_name">
            <span class="brand-text font-weight-light" style="color: white">Admin CropSystem</span>
        </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Budidaya Tanaman  
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tanaman.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Tanaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('rotasi.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rotasi Tanaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pemantauan.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemantauan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('persiapan.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Persiapan Lahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('penanaman.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penanaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pupuk.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemupukan</p>
                </a>
              <li class="nav-item">
                <a href="{{ route('irigasi.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Irigasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('panen.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Panen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('pascapanen.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasca Panen</p>
                </a>
              </li>
            </ul>
          </li>

<!-- Ajukan Informasi /-->   
          <li class="nav-item">
            <a href="{{ route('ajukan.index') }}"  class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Ajukan Informasi   
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>

<!-- HAMA DAN PENYAKIT /-->        
          <li class="nav-item">
            <a href="{{ route('hama.index') }}"  class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Hama dan Penyakit   
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          </li>

<!-- Komunitas /-->        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Komunitas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>