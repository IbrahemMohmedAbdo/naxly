<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
   <x-sidebar-brand/>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
      <x-nav-item/>

    <!-- Heading -->

    <x-sidebar-divider heading="Interface" />
    <!-- Interface -->
    <x-sidebar-menu-item />

    <!-- Heading -->
    <x-sidebar-divider heading="Addons" />

    <!-- Nav Item - Pages Collapse Menu -->
    <x-sidebar-pages-dropdown
            id="collapsePages"
            title="Pages"
            headingId="headingPages"
            :links="[
                ['url' => route('news.index'), 'text' => 'News'],
                ['url' => 'register.html', 'text' => 'Register'],
                ['url' => 'forgot-password.html', 'text' => 'Forgot Password'],

            ]"
        />

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <x-sidebar-toggle id="sidebarToggle" />


    <!-- Sidebar Message -->
    <x-sidebar-card image="{{ asset('assets/img/undraw_rocket.svg') }}" />


</ul>
