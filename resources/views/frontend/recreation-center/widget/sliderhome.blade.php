<section id="slider"><!--slider-->
    <div class="container slick-list draggable" style="display: block;
    width: 100%;">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $index = 0; ?>
                        @foreach(Gen::getMedia(Config::get('constants.mediatype.slide'),Config::get('constants.slidetype.home')) as $key=>$val)
                            <li data-target="#slider-carousel" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active' : ''}}"></li>
                            <?php $index++; ?>
                        @endforeach
                    </ol>

                    <div class="carousel-inner">
                        @foreach(Gen::getMedia(Config::get('constants.mediatype.slide'),Config::get('constants.slidetype.home')) as $key =>$ss)
                            <div class="item {{$key == 0 ? 'active' : ''}}">
                                <div class="col-sm-12" style="padding: 0;" >
                                    @if($ss->img_url)
                                    <a href="{{$ss->img_url}}"><img src="{{asset(Gen::genImgUrl($ss->path_full))}}?w=730" class="girl img-responsive" alt="" /></a>
                                    @else
                                    <a><img src="{{asset(Gen::genImgUrl($ss->path_full))}}?w=1140" class="girl img-responsive" alt="" /></a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a href="#slider-carousel" class="left carousel-control hidden-xs" data-slide="prev">
                        <i style="top: 50%; position: absolute;" class="fa fa-chevron-left fa-2" aria-hidden="true"></i>
                    </a>
                    <a href="#slider-carousel" class="right carousel-control hidden-xs" data-slide="next">
                        <i style="top: 50%; position: absolute;" class="fa fa-chevron-right fa-2" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>