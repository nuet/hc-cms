@extends('frontend/recreation-center/layouts/index')
@section('main')
    <div class="container">
        <div class="row">
            <div class="main-content col-md-9 col-md-push-3">
                <div id="primary">
                    <p id="breadcrumbs"><span><span typeof="v:Breadcrumb"><a
                                        href="{{Gen::genOpt('url')}}" rel="v:url"
                                        property="v:title">Trang chủ</a> › <span
                                        class="breadcrumb_last">Tin tức</span></span></span></p>

                    <main id="main" class="site-main" role="main">
                        <div class="articles-wrap list">
                            @foreach($news as $new)
                                <article id="post-2570"
                                         class="post-2570 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc fancy-gallery-content-unit">
                                    <h2 class="entry-title"><a
                                                href="{{url($new->slug)}}"
                                                rel="bookmark">{{$new->title}}</a></h2>
                                    <div class="entry-meta">
                                    <span class="posted-on"><i class="fa fa-calendar"></i> <a
                                                href="{{url($new->slug)}}"
                                                title="03:33" rel="bookmark"><time class="entry-date published updated"
                                                                                   datetime="{{$new->created_at}}">{{date("d/m/Y", strtotime($new->created_at))}}</time></a></span>
                                    </div><!-- .entry-meta -->

                                    <p class="entry-content">
                                        <img class="excerpt-img"
                                             src="{{asset(Gen::genImgUrl($new->image_path_full))}}"
                                             alt="Cách nhận biết sâu chít và sâu tre">
                                        {{mb_word_wrap($new->content,350)}}...
                                    </p>
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