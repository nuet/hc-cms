@extends('frontend/recreation-center/layouts/index')
@section('main')
    <div class="container">
        <div class="row">
            <div class="main-content col-md-9 col-md-push-3">
                <div id="primary">
                    <div class="sslider slick-initialized slick-slider">
                        @section('slider-main')
                            @include('frontend.recreation-center.widget.sliderhome')
                        @show
                    </div>

                    <main id="main" class="site-main" role="main">
                        <div class="home-desc clearfix">
                            <h2 style="background: #dd9933;"><a href="http://dongamruou.vn/" title="Giới thiệu">Giới
                                    thiệu</a></h2>
                            <div class="row desc">
                                <div class="col-sm-4">
                                    <a href="http://dongamruou.vn/" title="Giới thiệu">
                                        <img style="max-height: 162px;" id="logo_img"
                                             src="{{asset(Gen::genImgUrl(Gen::genOpt('logo')))}}?h=162"
                                             alt="The Project">
                                    </a>
                                </div>
                                <div class="col-sm-8">
                                    <p style="text-align: center;"><strong>TRUNG TÂM GIẢI TRÍ VÀ THỂ THAO THẾ HỆ
                                            MỚI</strong>
                                    </p>

                                    <ul>
                                        <li><em>BÁN VÉ MÁY BAY CÁC HÃNG TRONG NƯỚC</em></li>
                                        <li><em>TỔ CHỨC CÁC TOUR DU LỊCH TRONG NƯỚC</em></li>
                                        <li><em>QUÁN CAFE XEM PHIM 3D MIỄN PHÍ</em></li>
                                        <li><em>QUÁN CAFE CA NHẠC KẾT HỢP BAR</em></li>
                                        <li><em>TRÔNG DỮ TRẺ MIỄN PHÍ KHI SỬ DỤNG DỊCH VỤ TẠI KHU TRÒ CHƠI LIÊN HOÀN</em></li>
                                    </ul>
                                    <p style="text-align: center;"><strong>XIN CẢM ƠN</strong>&nbsp;<strong>!</strong></p></div>
                            </div>
                        </div>
                        <div class="home-products">

                            @foreach($catProducts as $cat)
                                <div class="item">
                                    <h2><a href="{{url($cat->slug)}}" title="{{$cat->name}}">{{$cat->name}}</a></h2>
                                    <div class="woocommerce columns-3">
                                        <ul class="products">
                                            @foreach($cat->product as $key => $product)
                                                <li class="@if ($key === 0)first @elseif ($key === 2)last @endif product type-product status-publish has-post-thumbnail fancy-gallery-content-unit sale shipping-taxable purchasable product-type-simple instock">
                                                    <a href="{{url($cat->slug.'/'.$product->slug)}}">
                                                        @if(count($product->image->first()) > 0)
                                                            <img width="280" height="210"
                                                                 src="{{asset($product->image->first()->path_thumb)}}"
                                                                 class="attachment-shop_catalog wp-post-image"
                                                                 alt="">
                                                        @endif
                                                        <h3>{{$product->product_name}}</h3>
                                                        <span class="price">
                                                            <del><span class="amount">{{$product->product_price}}&nbsp;VNĐ</span></del>
                                                            <ins><span class="amount">{{$product->product_price}}&nbsp;VNĐ</span></ins>
                                                        </span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </main><!-- #main -->

                </div><!-- /#primary -->
            </div><!-- /.main-content -->

            <div id="secondary" class="hidden-sm hidden-xs widget-area col-md-3 col-md-pull-9" role="complementary">
                @section('left-conten')
                    @include('frontend.recreation-center.widget.leftconten')
                @show
            </div><!-- #secondary -->
        </div><!-- /.row -->
    </div><!-- /.container -->
@stop