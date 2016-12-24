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
           class="widget-4 widget-last widget-even widget widget_moztheme_likebox_widget">
        <h2 class="widget-title"><span>Giaitrilethuy on FB</span></h2>
        <div id="likebox" style="width: 230px; overflow-x: hidden;">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgiaitrilethuy%2F%3Ffref%3Dts&tabs=timeline&width=230&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1205774589445826"
                    width="230" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowTransparency="true"></iframe>
        </div>
    </aside>
</div>