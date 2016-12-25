@extends('frontend/recreation-center/layouts/index')
@section('main')
    <div class="container">
        <div class="row">
            <div class="main-content col-md-9 col-md-push-3">
                <div id="primary">
                    <main id="main" class="site-main" role="main">
                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-5">
                                <ul id="etalage">
                                    @if(count($product->image) > 0)
                                        @foreach($product->image as $key => $image)
                                            <li>
                                                <a href="optionallink.html">
                                                    <img class="etalage_thumb_image"
                                                         src="{{asset($image->path_thumb)}}"/>
                                                    <img class="etalage_source_image"
                                                         src="{{asset($image->path_full)}}"/>
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="col-sm-7 simpleCart_shelfItem anotherCart_shelfItem">
                                <div class="product-information"><!--/product-information-->
                                    <i class="item_thumb"
                                       style="display:none">{{$product->image->count() ? asset($product->image->first()->path_thumb ):'http://placehold.it/100x100'}}</i>
                                    <i class="item_productid" style="display:none">{{$product->id}}</i>
                                    <i class="item_price" style="display:none">{{$product->product_price}}</i>
                                    <img src="{{asset('frontend/recreation-center/theme/img/product-details/new.jpg')}}"
                                         class="newarrival" alt=""/>
                                    <h2 class="item_name">{{$product->product_name}}</h2>
                                    <p>
                                    <span>
                                        <span>Giá.</span>
                                    </span>
                                        <span class="price">
                                                            @if ($product->product_old_price)
                                                <del style="font-size: 20px;"><span class="amount">{{number_format($product->product_old_price)}}
                                                        &nbsp;VNĐ</span></del>
                                            @endif
                                            <ins style="font-size: 28px;"><span class="amount">{{number_format($product->product_price)}}
                                                    &nbsp;VNĐ</span></ins>
                                                        </span>
                                    </p>
                                    <iframe src="https://www.facebook.com/plugins/like.php?href={{url($product->slug)}}%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=false&height=80&appId=1205774589445826"
                                            style="border:none; overflow:hidden; height:30px;"
                                            scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                </div><!--/product-information-->
                            </div>
                        </div><!--/product-details-->

                        <div class="category-tab shop-details-tab"><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#reviews" data-toggle="tab">Thông tin chi tiết</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="reviews">
                                    <div class="col-sm-12">
                                        <p>{!!$product->product_description!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--/category-tab-->
                        <div style="clear: both;"></div>
                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">Dịch vụ liên quan</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        @foreach($related_product as $related)
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <a href="{{url($catslug.'/'.$related->slug)}}">
                                                            <div class="productinfo text-center">
                                                                <img src="{{asset($related->image->first()->path_thumb)}}"
                                                                     alt=""/>

                                                                <span class="price">
                                                            @if ($product->product_old_price)
                                                                        <del><span class="amount">{{$related->product_old_price}}
                                                                                &nbsp;VNĐ</span></del><br>
                                                                    @endif
                                                                    <ins><span class="amount">{{$related->product_price}}
                                                                            &nbsp;VNĐ</span></ins>
                                                            </span>

                                                                <p>{{$related->product_name}}</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel"
                                   data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel"
                                   data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div><!--/recommended_items-->
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