@extends('frontend.recreation-center.layouts.index')
@section('main')
    <section class="pv-20">
        <div class="container home">
            <div class="row">
                <div class="main-content col-md-9 col-md-push-3">
                    <div id="primary">
                        <main id="main" class="site-main" role="main">
                            <p id="breadcrumbs"><span><span
                                            typeof="v:Breadcrumb"><a href="{{Gen::genOpt('url')}}" rel="v:url"
                                                                     property="v:title">Trang chủ</a> › <span
                                                class="breadcrumb_last">{{$page->page_name}}</span></span></span></p>
                            <div class="home-desc clearfix">
                                {!!str_replace(array("\r\n", "\n", "\r"),'<br />',$page->page_content)!!}
                            </div>
                        </main>
                    </div><!-- /#primary -->
                </div><!-- /.main-content -->
                <div id="secondary" class="hidden-sm hidden-xs widget-area col-md-3 col-md-pull-9" role="complementary">
                    @section('left-conten')
                        @include('frontend.recreation-center.widget.leftconten')
                    @show
                </div><!-- #secondary -->
            </div>
        </div>
    </section>
@stop

