  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{ asset('assets/vlogo.png') }}" alt="Vinely" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">Vinely</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('assets/vlogo.png') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ Auth::user()->name }}</a>
              </div>
          </div> --}}

          <!-- SidebarSearch Form -->


          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                      <a href="{{ route('dashboard') }}" class="nav-link {{ Route::is('dashboard*') ? 'active' : '' }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>


                  <li class="nav-item menu-open">
                      <a href="{{ route('brand.index') }}" class="nav-link {{ Route::is('brand*') ? 'active' : '' }}">
                          <i class="far fa-envelope nav-icon"></i>
                          <p>Brands</p>
                      </a>
                  </li>

                  <li class="nav-item menu-open">
                      <a href="{{ route('category.index') }}"
                          class="nav-link {{ Route::is('category*') ? 'active' : '' }}">
                          <i class="fas fa-copy nav-icon"></i>
                          <p>Categories</p>
                      </a>
                  </li>

                  <li class="nav-item menu-open">
                      <a href="{{ route('product.index') }}"
                          class="nav-link {{ Route::is('product*') ? 'active' : '' }}">
                          <i class="fas fa-copy nav-icon"></i>
                          <p>Products</p>
                      </a>
                  </li>

                  <li class="nav-item menu-open">
                      <a href="{{ route('testimonial.index') }}"
                          class="nav-link {{ Route::is('testimonial*') ? 'active' : '' }}">
                          <i class="fas fa-tree nav-icon"></i>
                          <p>Testimonials</p>
                      </a>
                  </li>

                  <li class="nav-item menu-open">
                      <a href="{{ route('testimonial.index') }}"
                          class="nav-link {{ Route::is('testimonial*') ? 'active' : '' }}">
                          <i class="fas fa-edit nav-icon"></i>
                          <p>Messages</p>
                      </a>
                  </li>

                  <li class="nav-item menu-open">
                      <a href="{{ route('banner.index') }}"
                          class="nav-link {{ Route::is('banner*') ? 'active' : '' }}">
                          <i class="fas fa-table nav-icon"></i>
                          <p>Banners</p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
