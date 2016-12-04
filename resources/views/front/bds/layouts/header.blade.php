<header id="header" class="header fixed ">
    <div class="top-head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-right hidden-phone">
                        <div id="top_nav">
                            <div class="mini-search">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="block-login">
                                @if(!Auth::user())
                                <a data-toggle="modal" data-target="#register">Đăng ký</a>

                                | <a data-toggle="modal" data-target="#login" >Đăng nhập</a>
                                @else
                                <a href="{{url("customer/account")}}">{{Auth::user()->username}}</a>
                                | <a href="{{url("/logout")}}">Đăng xuất</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bottom-header">
        <div class="container">
            <!-- Static navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="true" data-target="#navbar" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/" class="navbar-brand">
                            <img style="max-height: 90px;" id="logo_img" src="{{asset(Gen::genImgUrl(Gen::genOpt('logo')))}}?h=50" alt="The Project">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="topNav" class="nav navbar-nav">
                            @foreach($mtop as $key => $mt)
                            @if(count($mt['children']) > 0)
                            <li class="dropdown {{ Ekko::isActiveURL($mt['page_slug']) }}" slug="mt{{$mt['page_slug']}}">
                                <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="">{{ucwords($mt['page_name'])}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    @foreach($mt['children'] as $child)
                                    <li><a href="">{{ucfirst($child['page_name'])}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                            <li slug="mt{{$mt['page_slug']}}" class="{{ Ekko::isActiveURL($mt['page_slug']) }}"><a href="" >{{ucwords($mt['page_name'])}}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>