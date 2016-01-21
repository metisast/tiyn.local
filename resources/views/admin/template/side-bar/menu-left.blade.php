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