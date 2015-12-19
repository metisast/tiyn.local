<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <h6>{{ trans('interface.userAdmin') }}</h6>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('interface.adminMainNav') }}</li>
            <li>
                <a href="{{ route('admin.index') }}">
                    <i class="fa fa-dashboard"></i> <span>{{ trans('interface.adminDashboard') }}</span>
                </a>
            </li>
            <li>
                <a href="{{ action('Admin\ProductsController@index') }}">
                    <i class="fa fa-folder-o"></i> <span>{{ trans('interface.adminProducts') }}</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>