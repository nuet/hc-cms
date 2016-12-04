@extends('front/bds/layouts/index')
@section('main')
<form action="" method="get" id="searchForm" name="searchForm" class="form-inline">
<!--    <input type="hidden" value="{{csrf_token()}}" name="_token">-->
    @section('sidebar')
    @include('frontend.recreation-center.widget.sidebar')
    @show
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    @section('postcat')
                    @include('frontend.recreation-center.widget.postcat')
                    @show
                </div>
                <div class="col-sm-3">
                    @section('profile')
                    @include('frontend.recreation-center.widget.profile')
                    @show
                    <div class="image-box shadow bordered text-center mb-20">
                        @foreach(Options::getMedia(Config::get('constants.mediatype.slide'),Config::get('constants.slidetype.anh_ben_trai_trang_tin')) as $key =>$ss)
                            <div class="overlay-container">
                                @if($ss->img_url)
                                <a href="{{$ss->img_url}}"><img src="{{asset($ss->path_full)}}" class="img-responsive" alt="" /></a>
                                @else
                                <a><img src="{{asset($ss->path_full)}}" class="img-responsive" alt="" /></a>
                                @endif
                            </div>
                        @endforeach
                        <div class="single-widget">
                            <div class="fb-page" data-href="{{Gen::genOpt('facebook')}}" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" width="262" data-chrome="transparent nofooter">
                                <div class="fb-xfbml-parse-ignore">
                                    <blockquote cite="{{Gen::genOpt('facebook')}}">
                                        <a href="{{Gen::genOpt('facebook')}}"></a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
@stop