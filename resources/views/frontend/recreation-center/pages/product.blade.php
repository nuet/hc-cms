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
                                        <span>Rp. {{number_format($product->product_price,0,',','.')}}</span>
                                    </span>
                                    </p>
                                    <span>
                                        <label>Quantity:</label>
                                        <input type="text" class="item_quantity" value="3">
                                        <button class="item_add btn btn-fefault cart"
                                                value="add to cart">Add to Cart </button>
                                    </span>
                                    <a href=""><img
                                                src="{{asset('frontend/recreation-center/theme/img/product-details/share.png')}}"
                                                class="share img-responsive" alt=""/></a>
                                </div><!--/product-information-->
                            </div>
                        </div><!--/product-details-->

                        <div class="category-tab shop-details-tab"><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#reviews" data-toggle="tab">Details</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="reviews">
                                    <div class="col-sm-12">
                                        <br/>
                                        <a href="javascript:;" class="simpleCart_empty">empty cart</a><br/>
                                        <p>{!!$product->product_description!!}</p>
                                    </div>
                                </div>

                            </div>
                        </div><!--/category-tab-->

                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">recommended items</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        @foreach($related_product as $related)
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/home/recommend3.jpg" alt=""/>
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <button type="button" class="btn btn-default add-to-cart"><i
                                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                            </button>
                                                        </div>
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