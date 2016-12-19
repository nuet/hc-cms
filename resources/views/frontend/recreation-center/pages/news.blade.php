@extends('frontend/recreation-center/layouts/index')
@section('main')
    <div class="container">
        <div class="row">
            <div class="main-content col-md-9 col-md-push-3">
                <div id="primary">
                    <p id="breadcrumbs"><span><span typeof="v:Breadcrumb"><a
                                        href="{{Gen::genOpt('url')}}" rel="v:url" property="v:title">Trang chủ</a> › <span
                                        class="breadcrumb_last">Tin tức</span></span></span></p>

                    <main id="main" class="site-main" role="main">
                        <div class="articles-wrap list">
                            @foreach($news as $new)
                                <article id="post-2570"
                                         class="post-2570 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc fancy-gallery-content-unit">
                                    <h2 class="entry-title"><a
                                                href="http://dongamruou.vn/cach-nhan-biet-sau-chit-va-sau-tre/"
                                                rel="bookmark">{{$new->title}}</a></h2>
                                    <div class="entry-meta">
                                    <span class="posted-on"><i class="fa fa-calendar"></i> <a
                                                href="http://dongamruou.vn/cach-nhan-biet-sau-chit-va-sau-tre/"
                                                title="03:33" rel="bookmark"><time class="entry-date published updated"
                                                                                   datetime="2016-12-16T03:33:28+00:00">16/12/16</time></a> - <i
                                                class="fa fa-comments"></i> 0 - <i class="fa fa-user"></i> <span
                                                class="”vcard" author”=""><span class="”fn”">admin</span></span></span>
                                    </div><!-- .entry-meta -->

                                    <p class="entry-content">
                                        <img class="excerpt-img"
                                             src="http://dongamruou.vn/wp-content/uploads/2016/12/ruou-sau-chit.jpg"
                                             alt="Cách nhận biết sâu chít và sâu tre">
                                        Tháng 11-12 dương lịch cũng là mùa những đót chít nở rộ và người ta quan tâm đó là
                                        trong những cây chít có những con sâu mà người ta thường hay gọi với cái tên ” SÂU
                                        CHÍT ” gắn liền với một số nghệ danh như đông trùng hạ thảo của Việt Nam.... </p>
                                    <!-- .entry-content -->
                                </article><!-- #post-## -->
                            @endforeach
                        </div>
                        {!!$news->render()!!}
                    </main><!-- #main -->
                </div>
            </div><!-- /.main-content -->

            <div id="secondary" class="hidden-sm hidden-xs widget-area col-md-3 col-md-pull-9" role="complementary">
                @section('left-conten')
                    @include('frontend.recreation-center.widget.leftconten')
                @show
            </div><!-- #secondary -->
        </div><!-- /.row -->
    </div><!-- /.container -->
@stop