<!-- Left side column. contains the logo and sidebar -->
{{ LaravelLocalization::getLocalizedURL(getLang(), url('backend/options')) }}
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('sidebar.mainnavigation')}}</li>
            @if(Entrust::can('category-read'))
            <li class="treeview {{ Ekko::areActiveRoutes([langRouteName('backend.category.index'),langRouteName('backend.category.create')]) }}">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>{{ ucfirst(trans('sidebar.categories')) }}</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.category.index')) }}"><a href="{{langRoute('backend.category.index')}}"><i class="fa fa-circle-o"></i>{{ ucfirst(trans('sidebar.list')) }}</a></li>
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.category.create')) }}"><a href="{{langRoute('backend.category.create')}}"><i class="fa fa-plus"></i>{{ ucfirst(trans('sidebar.add')).' '.trans('sidebar.categories') }}</a></li>
                </ul>
            </li>
            @endif
            @if(Entrust::can('page-read'))
            <li class="treeview {{ Ekko::areActiveRoutes([langRouteName('backend.page.index'),langRouteName('backend.page.create')]) }}">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>{{ ucfirst(trans('sidebar.page')) }}</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul id="backend-page" class="treeview-menu">
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.page.index')) }}"><a href="{{langRoute('backend.page.index')}}"><i class="fa fa-circle-o"></i>{{ ucfirst(trans('sidebar.list')) }}</a></li>
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.page.create')) }}"><a href="{{langRoute('backend.page.create')}}"><i class="fa fa-plus"></i>{{ ucfirst(trans('sidebar.add')).' '.trans('sidebar.page') }}</a></li>
                </ul>
            </li>
            @endif
            @if(Entrust::can('menu-read'))
            <li class="treeview {{ Ekko::areActiveRoutes([langRouteName('backend.menu.index'),langRouteName('backend.menu.create')]) }}">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>{{ ucfirst(trans('sidebar.menu')) }}</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul id="backend-menu" class="treeview-menu">
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.menu.index')) }}"><a href="{{langRoute('backend.menu.index')}}"><i class="fa fa-circle-o"></i>{{ ucfirst(trans('sidebar.list')) }}</a></li>
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.menu.create')) }}"><a href="{{langRoute('backend.menu.create')}}"><i class="fa fa-plus"></i>{{ ucfirst(trans('sidebar.add')).' '.trans('sidebar.menu') }}</a></li>
                </ul>
            </li>
            @endif
            @if(Entrust::can('post-read'))
            <li class="treeview {{ Ekko::areActiveRoutes([langRouteName('backend.news.index'),langRouteName('backend.news.create')]) }}">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>{{ ucfirst(trans('sidebar.news')) }}</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul id="backend-news" class="treeview-menu">
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.news.index')) }}"><a href="{{langRoute('backend.news.index')}}"><i class="fa fa-circle-o"></i>{{ ucfirst(trans('sidebar.list')) }}</a></li>
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.news.create')) }}"><a href="{{langRoute('backend.news.create')}}"><i class="fa fa-plus"></i>{{ ucfirst(trans('sidebar.add')).' '.trans('sidebar.news') }}</a></li>
                </ul>
            </li>
            @endif
            @if(Entrust::can('product-read'))
                <li class="treeview {{ Ekko::areActiveRoutes([langRouteName('backend.product.index'),langRouteName('backend.product.create')]) }}">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>{{ ucfirst(trans('sidebar.product')) }}</span><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul id="backend-news" class="treeview-menu">
                        <li class="{{ Ekko::isActiveRoute(langRouteName('backend.product.index')) }}"><a href="{{langRoute('backend.product.index')}}"><i class="fa fa-circle-o"></i>{{ ucfirst(trans('sidebar.list')) }}</a></li>
                        <li class="{{ Ekko::isActiveRoute(langRouteName('backend.product.create')) }}"><a href="{{langRoute('backend.product.create')}}"><i class="fa fa-plus"></i>{{ ucfirst(trans('sidebar.add')).' '.trans('sidebar.news') }}</a></li>
                    </ul>
                </li>
            @endif
            @if(Entrust::can('user-read'))
            <li class="treeview {{ Ekko::areActiveRoutes([langRouteName('backend.user.index'),langRouteName('backend.user.create')]) }}">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>{{ ucfirst(trans('sidebar.users')) }}</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul id="backend-user" class="treeview-menu">
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.user.index')) }}"><a href="{{langRoute('backend.user.index')}}"><i class="fa fa-circle-o"></i>{{ ucfirst(trans('sidebar.list')) }}</a></li>
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.user.create')) }}"><a href="{{langRoute('backend.user.create')}}"><i class="fa fa-plus"></i>{{ ucfirst(trans('sidebar.add')).' '.trans('sidebar.users') }}</a></li>
                </ul>
            </li>
            @endif
            <li class="treeview {{ Ekko::areActiveRoutes([langRouteName('backend.slideshow.index'),langRouteName('backend.slideshow.create')]) }}">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>{{ ucfirst(trans('sidebar.slideshow')) }}</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul id="backend-slideshow" class="treeview-menu">
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.slideshow.index')) }}"><a href="{{langRoute('backend.slideshow.index')}}"><i class="fa fa-circle-o"></i>{{ ucfirst(trans('sidebar.list')) }}</a></li>
                    <li class="{{ Ekko::isActiveRoute(langRouteName('backend.slideshow.create')) }}"><a href="{{langRoute('backend.slideshow.create')}}"><i class="fa fa-plus"></i>{{ ucfirst(trans('sidebar.add')).' '.trans('sidebar.slideshow') }}</a></li>
                </ul>
            </li>
            <li class="treeview {{ Ekko::isActiveURL(langURL('/backend/options')) }}">
                <a href="{{langURL('/backend/options')}}">
                    <i class="fa fa-files-o"></i>
                    <span>{{ ucfirst(trans('sidebar.options')) }}</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul id="backend-options"></ul>
            </li>
            <li>
                <a href="{{url('')}}" target="_blank">
                    <i class="fa fa-th"></i> <span>{{ ucfirst(trans('sidebar.frontend')) }}</span>
                </a>
            </li>
            <li>
                <a href="{{url('logout')}}">
                    <i class="glyphicon glyphicon-log-out"></i> <span>{{ ucfirst(trans('sidebar.logout')) }}</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>