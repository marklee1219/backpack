@if (Auth::check())
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
  @include('backpack::inc.sidebar_user_panel')
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      {{--
      <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
      <!-- ================================================ -->
      <!-- ==== Recommended place for admin menu items ==== -->
      <!-- ================================================ -->
      <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
      <li><a href="{{ url('admin/customer') }}"><i class="fa fa-user"></i> <span>Manage Customers</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language') }}"><i class="fa fa-flag-o"></i> <span>Languages</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language/texts') }}"><i class="fa fa-language"></i> <span>Language Files</span></a></li>

      <!-- ======================================= -->
      {{--
      <li class="header">Other menus</li> --}}
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
@endif