@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            {{--<img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">--}}
            <img src="{{ asset('vendor/adminlte/') }}/images/1486940558_malecostume.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header text-center">---</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          {{--<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>--}}

          <!-- Clients -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group text-center"></i> <span>Клиенты</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/client') }}"><i class="fa fa-group"></i> <span>Все клиенты</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/client_type/1') }}"><i class="fa fa-user"></i> <span>Физические лица</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/client_type/2') }}"><i class="fa fa-user-secret"></i> <span>Юридические лица</span></a></li>
            </ul>
          </li>

          <!-- Contracts -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/contract') }}"><i class="fa fa-files-o text-center"></i> <span>Договоры</span></a></li>

          <!-- Cash Registers -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/cash_register') }}"><i class="fa fa-calculator text-center"></i> <span>Аппараты</span></a></li>

          <!-- Banks -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/bank') }}"><i class="fa fa-bank text-center"></i> <span>Банки</span></a></li>

          <!-- Tariffs -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/tariff') }}"><i class="fa fa-usd text-center"></i> <span>Тарифы</span></a></li>

          <!-- Cash Register Types -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/register_type') }}"><i class="fa fa-fax text-center"></i> <span>Типы Аппаратов</span></a></li>

          {{--<li class="header text-center">---</li>--}}

          <!-- file manager -->
          {{--<li><a href="{{ url(config('backpack.base.route_prefix').'/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>--}}

          <!-- Users, Roles Permissions -->
          {{--<li class="treeview">
            <a href="#"><i class="fa fa-unlock-alt"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li>--}}

          <!-- ======================================= -->
          {{--<li class="header text-center">---</li>--}}
          {{--<li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>--}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
