<header class="main-header fixed">
    <!-- Logo -->
    <a href="{{route('admin.index')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Tiyn</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Tiyn.kz</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Language select menu -->
                @include('admin.template.header.menu-lang')
                <!-- User account menu -->
                @include('admin.template.header.menu-user')
            </ul>
        </div>
    </nav>
</header>