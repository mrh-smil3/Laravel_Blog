<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" dataaccordion="false">
    <li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link">
    <i class="nav-icon fas fa-home"></i>
    <p>
    Home
    <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('posts.index') }}" class="nav-link">
    <i class="nav-icon fas fa-newspaper"></i>
    <p>
    Posts
    </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link">
    <i class="nav-icon fas fa-list"></i>
    <p>
    Categories
    </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('tags.index') }}" class="nav-link">
    <i class="nav-icon fas fa-tags"></i>
    <p>
    Tags
    </p>
    </a>
    </li>
    </ul>
   </nav>
   <!-- /.sidebar-menu -->