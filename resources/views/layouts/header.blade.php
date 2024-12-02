 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li>
      <h4>{{ __('messages.welcome') }}</h4>
      </li>
    </ul>
   
    <!-- Right navbar links -->
   
    <ul class="navbar-nav ml-auto">
   
    <li class="nav-item"><a  class="nav-link" href="{{ url('locale/en') }}" > <i class="fa fa-language"></i>English</a></li>
    <li class="nav-item"><a  class="nav-link" href="{{ url('locale/fr') }}" > <i class="fa fa-language"></i>French</a></li>
        
      <!-- Navbar Search -->
     

      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
     
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
       
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->