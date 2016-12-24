<header id="masthead" class="site-header header-v1" role="banner">
    <div class="container">
        <div class="site-branding row">
            <div class="site-title col-sm-3 clearfix">
                <div class="logo type-2">
                    <h1>
                        <a class="img" href="{{Gen::genOpt('url')}}" rel="home">
                            <img style="max-height: 162px;" id="logo_img"
                                 src="{{asset(Gen::genImgUrl(Gen::genOpt('logo')))}}?h=162" alt="The Project">
                        </a>
                    </h1>
                </div><!-- /.logo -->                </div><!-- /.site-title -->

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="col-sm-9 text-right header-sidebar hidden-xs">
                <a href="">
                    @foreach(Gen::getMedia(Config::get('constants.mediatype.slide'),'9') as $key =>$ss)
                        <img class="aligncenter size-full wp-image-1383" style="max-width: 100%;"
                             src="{{asset(Gen::genImgUrl($ss->path_full))}}?w=1200">
                    @endforeach
                </a></div>
            <div class="top-search col-xs-12 visible-xs">

                <div class="yith-ajaxsearchform-container">
                    <form role="search" method="get" id="yith-ajaxsearchform" action="">
                        <div>
                            <label class="screen-reader-text" for="yith-s">Search for:</label>

                            <input type="search" value="" name="s" id="yith-s" class="yith-s"
                                   placeholder="Tìm kiếm sản phẩm" data-loader-icon="" data-min-chars="3"
                                   autocomplete="off">

                            <input type="submit" id="yith-searchsubmit" value="">
                            <input type="hidden" name="post_type" value="product">
                        </div>
                    </form>
                    <div class="autocomplete-suggestions"
                         style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
    <div class="container">
        <div class="clearfix navinside">
            <div id="main-nav" class="collapse navbar-collapse">
                <ul id="menu-footer-menu" class="menu moztheme-nav nav navbar-nav">
                    @foreach($mtop as $mt)
                        <li id="menu-item-{{$mt['id']}}"
                            class="menu-item menu-item-type-custom menu-item-object-custom {{ Ekko::isActiveURL($mt['menu_slug']) == 'active'? 'current-menu-item':''}}">
                            <a title="{{ucwords($mt['menu_name'])}}"
                               href="{{$mt['menu_type'] == 'link'? $mt['menu_slug'] : url($mt['menu_slug'])}}">{{ucwords($mt['menu_name'])}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container navbar -->
</nav>