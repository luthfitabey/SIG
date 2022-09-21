<header class="main-header">
  <!-- Logo -->
  <a class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>KOMSI</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>KOMSI SV</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- AKUN USER -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user-circle"></i>
            <!-- <img src="fa fa-user-circle" class="user-image" alt="User Image"> -->
            <span class="hidden-xs">{{auth()->user()->name}}</span>
          </a>
        </li>
        <!-- KELUAR -->
        <li class="dropdown user user-menu">
        <a href="{{ url('logout') }}" class="dropdown-toggle" data-toggle="dropdown" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i>
            <span class="hidden-xs">Keluar</span>
          </a>
          <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </div>
  </nav>
</header>
