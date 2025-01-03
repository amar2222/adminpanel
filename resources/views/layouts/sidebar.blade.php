  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link bg-cyan">
      <img src="{{url('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="image">
          <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->user_name}}</a>
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
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open ">
            <a href="#" class="nav-link active bg-cyan">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> -->
            </ul>
          </li>
          
          <li class="nav-item {{@$data['menu'] ? 'menu-open' : ''}}">
           
              <li class="nav-item">
                <a href="{{url('companylist')}}" class="nav-link {{@$data['companymenu']}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Companies</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('employeelist')}}" class="nav-link {{@$data['employeemenu']}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employees</p>
                </a>
              </li>
          
          </li>
     
          <li class="nav-item">
            <a  class="nav-link btn-danger btn-sm" href="#"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout
                          
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
             
              <!-- <button type="button" class="btn btn-block btn-danger btn-sm">Logout</button> -->
            </a>
         
          </li>
         
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
