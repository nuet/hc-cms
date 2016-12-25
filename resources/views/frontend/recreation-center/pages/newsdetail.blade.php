@extends('frontend/recreation-center/layouts/index')
@section('main')
    <div class="container">
        <div class="row">
            <div class="main-content col-md-9 col-md-push-3">
                <div id="primary">
                    <p id="breadcrumbs"><span><span typeof="v:Breadcrumb"><a
                                        href="{{Gen::genOpt('url')}}" rel="v:url"
                                        property="v:title">Trang chủ</a> › <span
                                        rel="v:child" typeof="v:Breadcrumb"><a href="{{Gen::genOpt('url')}}/tin-tuc/"
                                                                               rel="v:url"
                                                                               property="v:title">Tin tức</a> › <span
                                            class="breadcrumb_last">{!!$new->title!!}</span></span></span></span></p>

                    <main id="main" class="site-main" role="main">
                        <article id="post-2455"
                                 class="post-2455 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc fancy-gallery-content-unit">
                            <header class="entry-header">
                                <h1 class="entry-title">{!!$new->title!!}</h1>
                                <div class="entry-meta no-gutter clearfix">
                                    <div class="col-xs-6 nogutter-left"><span class="posted-on"><i
                                                    class="fa fa-calendar"></i> <a
                                                    href="{{url($new->slug)}}"
                                                    title="13:41" rel="bookmark"><time
                                                        class="entry-date published updated"
                                                        datetime="{{$new->created_at}}">{{date("d/m/Y", strtotime($new->created_at))}}</time></a></span></div>
                                    <div class="col-xs-6 text-right nogutter-right">
                                        <ul class="no-print _moz_sharing ">
                                            <li class="fb"><a href="#"
                                                              onclick="window.open('https://www.facebook.com/dialog/share?app_id=1205774589445826&amp;display=popup&amp;href={{url($new->slug)}};redirect_uri=http://mask2go.vn/fbshare', 'newwindow', 'width=555, height=333, left=200'); return false;">
                                                    <i class="fa fa-facebook"></i></a></li>
                                            <li class="tw"><a href="#"
                                                              onclick="window.open('http://twitter.com/share?text=Cách chọn bình thủy tinh ngâm rượu&amp;url={{url($new->slug)}};', 'newwindow', 'width=555, height=333, left=200'); return false;"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li class="gg"><a href="#"
                                                              onclick="window.open('https://plus.google.com/share?url={{url($new->slug)}}', 'newwindow', 'width=555, height=333, left=200'); return false;"><i
                                                            class="fa fa-google-plus"></i></a></li>
                                            <li class="print"><a href="javascript:if(window.print)window.print()"><i
                                                            class="fa fa-print"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .entry-meta -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                {!!$new->content!!}
                                <div class="yarpp-related">
                                    <h3>Bài viết liên quan:</h3>
                                    <div class="yarpp-thumbnails-horizontal">
                                        @foreach($related_new as $new)
                                            <a class="yarpp-thumbnail"
                                               href="{{url($new->slug)}}"
                                               title="{{$new->title}}">
                                                <img width="120" height="120"
                                                     src="{{asset(Gen::genImgUrl($new->image_path_full))}}"
                                                     class="attachment-yarpp-thumbnail wp-post-image"><span class="yarpp-thumbnail-title">{{$new->title}}</span></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer">
                                <ul class="_moz_like clearfix">
                                    <li>
                                        <iframe src="https://www.facebook.com/plugins/like.php?href={{url($new->slug)}}%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=1205774589445826"
                                                style="border:none; overflow:hidden; height:30px;"
                                                scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                    </li>
                                </ul>
                            </footer><!-- .entry-footer -->
                        </article><!-- #post-## -->
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