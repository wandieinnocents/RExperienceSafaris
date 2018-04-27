@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <li><a href="{{ backpack_url('book') }}"><i class="fa fa-calendar"></i> <span>Reservations</span></a></li>
          <li class="treeview">
              <a href="#"><i class="fa fa-plane"></i> <span>Tours</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ backpack_url('tour') }}"><i class="fa fa-plane"></i> <span>Tours</span></a></li>
                <li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
                <li><a href="{{ backpack_url('highlight') }}"><i class="fa fa-tag"></i> <span>Highlights</span></a></li>
                <li><a href="{{ backpack_url('rate') }}"><i class="fa fa-money"></i> <span>Rates</span></a></li>
              </ul>
          </li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
          <li><a href="{{ backpack_url('newsletter') }}"><i class="fa fa-envelope-o"></i> <span>Newsetters</span></a></li>
          <li><a href="{{ backpack_url('contact') }}"><i class="fa fa-comment-o"></i> <span>Feedback</span></a></li>
          <li><a href="{{ backpack_url('accomodation') }}"><i class="fa fa-home"></i> <span>Accomodation</span></a></li>
          <li><a href="{{ backpack_url('transport') }}"><i class="fa fa-bus"></i> <span>Transportation</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-calendar"></i> <span>Events</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
          	<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/event') }}"><i class="fa fa-calendar-o"></i> <span>Events</span></a></li>
          	<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/venue') }}"><i class="fa fa-file-o"></i> <span>Venues</span></a></li>
            </ul>
          </li>

          <!-- Users, Roles Permissions -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li>

          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
          <li class="treeview">
              <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
                <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
                <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
                <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              </ul>
          </li>


        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
