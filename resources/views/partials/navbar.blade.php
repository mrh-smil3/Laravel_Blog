<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fabars"></i></a>
    </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
    <i class="far fa-bell"></i>
    <span class="badge badge-warning navbar-badge">15</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <span class="dropdown-item dropdown-header">15 Notifications</span>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
    <i class="fas fa-envelope mr-2"></i> 4 new messages
    <span class="float-right text-muted text-sm">3 mins</span>
    </a>
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
    </div>
    </li>
    <!-- User Dropdown Menu -->
    <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
    <i class="far fa-user"></i>
    <span class="hidden-xs">{{ Auth::user()->name }}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
    <div class="dropdown-divider"></div>
    <a href="#" class="dropdown-item">
    <i class="fas fa-user mr-2"></i> Profile
    </a>
    <div class="dropdown-divider"></div>
   <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">
   <i class="fas fa-sign-out-alt mr-2"></i> Logout
   </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST"
   style="display: none;">
    @csrf
    </form>
    </div>
    </li>
    </ul>
   </nav>