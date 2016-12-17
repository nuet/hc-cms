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
                                        <li><em>CAM KẾT HÀNG CHUẨN CÓ NGUỒN GỐC XUẤT XỨ</em></li>
                                        <li><em>GIÁ TỐT NHẤT</em></li>
                                        <li><em>ĐA DẠNG CÁC MẶT HÀNG VÀ SẢN PHẨM</em></li>
                                        <li><em>PHONG CÁCH PHỤC VỤ TƯ VẤN CHUYÊN NGHIỆP</em></li>
                                        <li><em>DỊCH VỤ MIỄN PHÍ VẬN CHUYỂN</em></li>
                                        <li><em>DỊCH VỤ HẬU MÃI CHU ĐÁO</em></li>
                                    </ul>
                                    <p style="text-align: center;"><strong>XIN CẢM
                                            ƠN</strong>&nbsp;<strong>!</strong></p></div>
                            </div>
                        </div>
                        <div class="home-products">
                            <div class="item">
                                <h2><a href="#" title="Ba Kích">Trò Chơi Trong Nhà</a>
                                </h2>
                                <div class="woocommerce columns-3">

                                    <ul class="products">

                                        <li class="first post-779 product type-product status-publish has-post-thumbnail product_cat-ba-kich product_cat-san-pham product_tag-ban-ba-kich-rung product_tag-dia-chi-ban-ba-kich-rung-uy-tin product_tag-gia-ba-kich-rung product_tag-mua-ba-kich-rung product_tag-mua-ban-cu-ba-kich-rung product_tag-noi-ban-ba-kich-rung-tot product_tag-tac-dung-cua-ba-kich-rung fancy-gallery-content-unit sale shipping-taxable purchasable product-type-simple product-cat-ba-kich product-cat-san-pham product-tag-ban-ba-kich-rung product-tag-dia-chi-ban-ba-kich-rung-uy-tin product-tag-gia-ba-kich-rung product-tag-mua-ba-kich-rung product-tag-mua-ban-cu-ba-kich-rung product-tag-noi-ban-ba-kich-rung-tot product-tag-tac-dung-cua-ba-kich-rung instock">


                                            <a href="#">


                                                <img width="280" height="210"
                                                     src="/images/admin/files/12(31).jpg"
                                                     class="attachment-shop_catalog wp-post-image"
                                                     alt="ba kich rung chuan">
                                                <h3>Game trong nhà</h3>


                                                <span class="price"><del><span
                                                                class="amount">540.000&nbsp;VNĐ</span></del> <ins><span
                                                                class="amount">500.000&nbsp;VNĐ</span></ins></span>

                                            </a>


                                        </li>


                                        <li class="post-361 product type-product status-publish has-post-thumbnail product_cat-ba-kich product_cat-san-pham product_tag-ban-ba-kich-kho product_tag-ban-ba-kich-kho-tai-ha-noi product_tag-cong-dung-cua-ba-kich-kho product_tag-gia-ba-kich-kho product_tag-mua-ba-kich-kho-o-dau fancy-gallery-content-unit sale shipping-taxable purchasable product-type-simple product-cat-ba-kich product-cat-san-pham product-tag-ban-ba-kich-kho product-tag-ban-ba-kich-kho-tai-ha-noi product-tag-cong-dung-cua-ba-kich-kho product-tag-gia-ba-kich-kho product-tag-mua-ba-kich-kho-o-dau instock">


                                            <a href="#">


                                                <img width="280" height="210"
                                                     src="/images/admin/files/vincomceter.jpg"
                                                     class="attachment-shop_catalog wp-post-image"
                                                     alt="ba kich kho">
                                                <h3>Game trong nha</h3>


                                                <span class="price"><del><span
                                                                class="amount">750.000&nbsp;VNĐ</span></del> <ins><span
                                                                class="amount">700.000&nbsp;VNĐ</span></ins></span>

                                            </a>


                                        </li>


                                        <li class="last post-358 product type-product status-publish has-post-thumbnail product_cat-ba-kich product_cat-san-pham product_tag-ban-ba-kich-trang product_tag-cay-ba-kich-trang product_tag-cu-ba-kich-trang product_tag-gia-ba-kich-trang product_tag-mua-ba-kich-trang-o-dau fancy-gallery-content-unit sale shipping-taxable purchasable product-type-simple product-cat-ba-kich product-cat-san-pham product-tag-ban-ba-kich-trang product-tag-cay-ba-kich-trang product-tag-cu-ba-kich-trang product-tag-gia-ba-kich-trang product-tag-mua-ba-kich-trang-o-dau instock">


                                            <a href="#">


                                                <img width="280" height="210"
                                                     src="/images/admin/files/75336312-21592x1060.jpg"
                                                     class="attachment-shop_catalog wp-post-image"
                                                     alt="ba kich trang">
                                                <h3>Game trong nhà</h3>


                                                <span class="price"><del><span
                                                                class="amount">200.000&nbsp;VNĐ</span></del> <ins><span
                                                                class="amount">150.000&nbsp;VNĐ</span></ins></span>

                                            </a>


                                        </li>


                                    </ul>

                                </div>
                            </div>
                            <div class="item">
                                <h2><a href="http://dongamruou.vn/danh-muc/nam-ngoc-cau/" title="Nấm Ngọc Cẩu">Trò Chơi
                                        Ngoài Trời</a></h2>
                                <div class="woocommerce columns-3">

                                    <ul class="products">

                                        <li class="first post-779 product type-product status-publish has-post-thumbnail product_cat-ba-kich product_cat-san-pham product_tag-ban-ba-kich-rung product_tag-dia-chi-ban-ba-kich-rung-uy-tin product_tag-gia-ba-kich-rung product_tag-mua-ba-kich-rung product_tag-mua-ban-cu-ba-kich-rung product_tag-noi-ban-ba-kich-rung-tot product_tag-tac-dung-cua-ba-kich-rung fancy-gallery-content-unit sale shipping-taxable purchasable product-type-simple product-cat-ba-kich product-cat-san-pham product-tag-ban-ba-kich-rung product-tag-dia-chi-ban-ba-kich-rung-uy-tin product-tag-gia-ba-kich-rung product-tag-mua-ba-kich-rung product-tag-mua-ban-cu-ba-kich-rung product-tag-noi-ban-ba-kich-rung-tot product-tag-tac-dung-cua-ba-kich-rung instock">


                                            <a href="#">


                                                <img width="280" height="210"
                                                     src="/images/admin/files/12(31).jpg"
                                                     class="attachment-shop_catalog wp-post-image"
                                                     alt="ba kich rung chuan">
                                                <h3>Game trong nhà</h3>


                                                <span class="price"><del><span
                                                                class="amount">540.000&nbsp;VNĐ</span></del> <ins><span
                                                                class="amount">500.000&nbsp;VNĐ</span></ins></span>

                                            </a>


                                        </li>


                                        <li class="post-361 product type-product status-publish has-post-thumbnail product_cat-ba-kich product_cat-san-pham product_tag-ban-ba-kich-kho product_tag-ban-ba-kich-kho-tai-ha-noi product_tag-cong-dung-cua-ba-kich-kho product_tag-gia-ba-kich-kho product_tag-mua-ba-kich-kho-o-dau fancy-gallery-content-unit sale shipping-taxable purchasable product-type-simple product-cat-ba-kich product-cat-san-pham product-tag-ban-ba-kich-kho product-tag-ban-ba-kich-kho-tai-ha-noi product-tag-cong-dung-cua-ba-kich-kho product-tag-gia-ba-kich-kho product-tag-mua-ba-kich-kho-o-dau instock">


                                            <a href="#">


                                                <img width="280" height="210"
                                                     src="/images/admin/files/vincomceter.jpg"
                                                     class="attachment-shop_catalog wp-post-image"
                                                     alt="ba kich kho">
                                                <h3>Game trong nha</h3>


                                                <span class="price"><del><span
                                                                class="amount">750.000&nbsp;VNĐ</span></del> <ins><span
                                                                class="amount">700.000&nbsp;VNĐ</span></ins></span>

                                            </a>


                                        </li>


                                        <li class="last post-358 product type-product status-publish has-post-thumbnail product_cat-ba-kich product_cat-san-pham product_tag-ban-ba-kich-trang product_tag-cay-ba-kich-trang product_tag-cu-ba-kich-trang product_tag-gia-ba-kich-trang product_tag-mua-ba-kich-trang-o-dau fancy-gallery-content-unit sale shipping-taxable purchasable product-type-simple product-cat-ba-kich product-cat-san-pham product-tag-ban-ba-kich-trang product-tag-cay-ba-kich-trang product-tag-cu-ba-kich-trang product-tag-gia-ba-kich-trang product-tag-mua-ba-kich-trang-o-dau instock">


                                            <a href="#">


                                                <img width="280" height="210"
                                                     src="/images/admin/files/75336312-21592x1060.jpg"
                                                     class="attachment-shop_catalog wp-post-image"
                                                     alt="ba kich trang">
                                                <h3>Game trong nhà</h3>


                                                <span class="price"><del><span
                                                                class="amount">200.000&nbsp;VNĐ</span></del> <ins><span
                                                                class="amount">150.000&nbsp;VNĐ</span></ins></span>

                                            </a>


                                        </li>


                                    </ul>
                                </div>
                                <div class="item">
                                    <h2><a href="http://dongamruou.vn/danh-muc/sam-cau/" title="Sâm Cau">Tổ Chức Sự
                                            Kiện</a>
                                    </h2>
                                    <div class="woocommerce columns-3">

                                        <ul class="products">

                                            <li class="first post-779 product type-product status-publish has-post-thumbnail product_cat-ba-kich product_cat-san-pham product_tag-ban-ba-kich-rung product_tag-dia-chi-ban-ba-kich-rung-uy-tin product_tag-gia-ba-kich-rung product_tag-mua-ba-kich-rung product_tag-mua-ban-cu-ba-kich-rung product_tag-noi-ban-ba-kich-rung-tot product_tag-tac-dung-cua-ba-kich-rung fancy-gallery-content-unit sale shipping-taxable purchasable product-type-simple product-cat-ba-kich product-cat-san-pham product-tag-ban-ba-kich-rung product-tag-dia-chi-ban-ba-kich-rung-uy-tin product-tag-gia-ba-kich-rung product-tag-mua-ba-kich-rung product-tag-mua-ban-cu-ba-kich-rung product-tag-noi-ban-ba-kich-rung-tot product-tag-tac-dung-cua-ba-kich-rung instock">


                                                <a href="#">


                                                    <img width="280" height="210"
                                                         src="/images/admin/files/12(31).jpg"
                                                         class="attachment-shop_catalog wp-post-image"
                                                         alt="ba kich rung chuan">
                                                    <h3>Game trong nhà</h3>


                                                    <span class="price"><del><span
                                                                    class="amount">540.000&nbsp;VNĐ</span></del> <ins><span
                                                                    class="amount">500.000&nbsp;VNĐ</span></ins></span>

                                                </a>


                                            </li>


                                            <li class="post-361 product type-product status-publish has-post-thumbnail product_cat-ba-kich product_cat-san-pham product_tag-ban-ba-kich-kho product_tag-ban-ba-kich-kho-tai-ha-noi product_tag-cong-dung-cua-ba-kich-kho product_tag-gia-ba-kich-kho product_tag-mua-ba-kich-kho-o-dau fancy-gallery-content-unit sale shipping-taxable purchasable product-type-simple product-cat-ba-kich product-cat-san-pham product-tag-ban-ba-kich-kho product-tag-ban-ba-kich-kho-tai-ha-noi product-tag-cong-dung-cua-ba-kich-kho product-tag-gia-ba-kich-kho product-tag-mua-ba-kich-kho-o-dau instock">


                                                <a href="#">


                                                    <img width="280" height="210"
                                                         src="/images/admin/files/vincomceter.jpg"
                                                         class="attachment-shop_catalog wp-post-image"
                                                         alt="ba kich kho">
                                                    <h3>Game trong nha</h3>


                                                    <span class="price"><del><span
                                                                    class="amount">750.000&nbsp;VNĐ</span></del> <ins><span
                                                                    class="amount">700.000&nbsp;VNĐ</span></ins></span>

                                                </a>


                                            </li>


                                            <li class="last post-358 product type-product status-publish has-post-thumbnail product_cat-ba-kich product_cat-san-pham product_tag-ban-ba-kich-trang product_tag-cay-ba-kich-trang product_tag-cu-ba-kich-trang product_tag-gia-ba-kich-trang product_tag-mua-ba-kich-trang-o-dau fancy-gallery-content-unit sale shipping-taxable purchasable product-type-simple product-cat-ba-kich product-cat-san-pham product-tag-ban-ba-kich-trang product-tag-cay-ba-kich-trang product-tag-cu-ba-kich-trang product-tag-gia-ba-kich-trang product-tag-mua-ba-kich-trang-o-dau instock">


                                                <a href="#">


                                                    <img width="280" height="210"
                                                         src="/images/admin/files/75336312-21592x1060.jpg"
                                                         class="attachment-shop_catalog wp-post-image"
                                                         alt="ba kich trang">
                                                    <h3>Game trong nhà</h3>


                                                    <span class="price"><del><span
                                                                    class="amount">200.000&nbsp;VNĐ</span></del> <ins><span
                                                                    class="amount">150.000&nbsp;VNĐ</span></ins></span>

                                                </a>


                                            </li>


                                        </ul>
                                    </div>
                                </div>
                    </main><!-- #main -->

                </div><!-- /#primary -->
            </div><!-- /.main-content -->

            <div id="secondary" class="hidden-sm hidden-xs widget-area col-md-3 col-md-pull-9" role="complementary">
                <aside id="text-2" class="widget-1 widget-first widget-odd widget widget_text"><h2
                            class="widget-title"><span>Danh mục dịch vụ</span></h2>
                    <div class="textwidget">
                        <aside id="woocommerce_product_categories-3"
                               class="widget-1 widget-first widget-odd widget woocommerce widget_product_categories">
                            <ul class="product-categories">
                                @foreach($services as $service)
                                    <li class="cat-item cat-item-{{$service['id']}}"><a
                                                href="{{url($service['slug'])}}">{{ucwords($service['name'])}}</a></li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </aside>

                <aside id="widget_sp_image-3" class="widget-2 widget-even widget widget_sp_image">
                    <h2 class="widget-title"><span><a href="{{url('hinh-anh')}}">Ảnh hoạt động</a></span></h2>
                    <a href="{{url('hinh-anh')}}" class="widget_sp_image-image-link" title="Kho Ngâm Rượu">
                        @foreach(Gen::getMedia(Config::get('constants.mediatype.slide'),'8') as $key =>$ss)
                            <img width="800" height="480" class="attachment-full" style="max-width: 100%;"
                                 src="{{asset(Gen::genImgUrl($ss->path_full))}}?w=800">
                        @endforeach
                    </a>
                </aside>


                <aside id="sticky-posts-3" class="widget-3 widget-odd widget widget_ultimate_posts">
                    <h2 class="widget-title"><span><a href="{{url('tin-tuc')}}">Tin hoạt động</a></span>
                    </h2>
                    <div class="upw-posts hfeed">
                        @foreach($news as $key =>$ss)
                            <article>
                                <header>
                                    <div class="entry-image">
                                        <a href="{{url($ss->slug)}}" rel="bookmark">
                                            <img width="150" height="150"
                                                 src="{{asset(Gen::genImgUrl($ss->image_path_full))}}"
                                                 class="attachment-thumbnail wp-post-image" alt="nam chaga"> </a>
                                    </div>
                                    <h4 class="entry-title">
                                        <a href="{{url($ss->slug)}}" rel="bookmark">{{$ss->title}}</a>
                                    </h4>
                                </header>
                                <footer>
                                </footer>
                            </article>
                        @endforeach
                    </div>
                </aside>


                <div class="hidden-xs hidden-sm">
                    <aside id="moztheme_likebox_widget-2"
                           class="widget-4 widget-last widget-even widget widget_moztheme_likebox_widget"><h2
                                class="widget-title"><span>Giaitrilethuy on FB</span></h2>
                        <div id="likebox" style="width: 235px; overflow-x: hidden;">
                            <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/ruoungamhanoi"
                                 data-hide-cover="false" data-show-facepile="true" data-show-posts="false"
                                 data-width="235" data-height="" fb-xfbml-state="rendered"
                                 fb-iframe-plugin-query="app_id=&amp;container_width=235&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fruoungamhanoi&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;width=235">
                                    <span style="vertical-align: bottom; width: 235px; height: 214px;"><iframe
                                                name="f134cc3e08cbf14" width="235px" height="1000px" frameborder="0"
                                                allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                title="fb:page Facebook Social Plugin"
                                                src="https://www.facebook.com/v2.0/plugins/page.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F_IDqWBiKXtV.js%3Fversion%3D42%23cb%3Df20fbe08e23959%26domain%3Ddongamruou.vn%26origin%3Dhttp%253A%252F%252Fdongamruou.vn%252Ff34576e23f881b%26relation%3Dparent.parent&amp;container_width=235&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fruoungamhanoi&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;width=235"
                                                style="border: none; visibility: visible; width: 235px; height: 214px;"
                                                class=""></iframe></span></div>
                        </div>
                    </aside>
                </div>
            </div><!-- #secondary -->
        </div><!-- /.row -->
    </div><!-- /.container -->
@stop