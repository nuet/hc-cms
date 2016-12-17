<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="inside">
            <div class="row">
                <div class="main-footer clearfix">
                    @foreach($mbotton as $mt)
                        @if(count($mt['children']) > 0)
                            <div class="ft-wg-area footer-1 col-sm-6 col-md-3 ">
                                <div id="black-studio-tinymce-5" class="widget-1 widget-first widget-last widget-odd ft-widget widget_black_studio_tinymce">
                                    <h3 class="widget-title"><span>{{$mt['menu_name']}}</span></h3>
                                    <div class="textwidget">
                                        <ul>
                                            @foreach($mt['children'] as $child)
                                                <li><a href="{{url($child['menu_slug'])}}">{{ucfirst($child['menu_name'])}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @else
                            <li><a href="#">{{ucwords($mt['menu_name'])}}</a></li>
                        @endif
                    @endforeach
                    <!-- /.footer-3 -->
                    <div class="ft-wg-area footer-4 col-sm-6 col-md-3 last">
                        <div id="black-studio-tinymce-7" class="widget-1 widget-first widget-last widget-odd ft-widget widget_black_studio_tinymce">
                            <h3 class="widget-title"><span>Liên hệ</span></h3>
                            <div class="textwidget">
                                <div class="ft-widget">
                                    <ul>
                                        <li><i class="fa fa-home"></i> {{Gen::genOpt('address')}}</li>
                                        <li><i class="fa fa-phone"></i> <strong><span style="color: #0000ff;"> {{Gen::genOpt('phone')}}</span></strong></li>
                                        <li><i class="fa fa-envelope"></i>&nbsp;{{Gen::genOpt('email')}}</li>
                                        <li><i class="fa fa-globe"></i><a title="{{Gen::genOpt('title')}}" href="{{Gen::genOpt('url')}}">{{Gen::genOpt('url')}}</a></li>
                                        <li>Design by: <span style="color: #0000ff;">{{Gen::genOpt('copyright')}}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.footer-4 -->
                </div>
                <div id="footer-padding-bottom" class="clearfix">
                </div>
            </div>
        </div><!-- .inside -->
    </div><!-- .container -->
</footer>
<div class="site-info">
    <div class="container">
        <div class="inside">
            © 2016 Trung tâm Giải trí và Thể thao Thế Hệ Mới. Thiết kế Website bởi <a href="http://giaitrilethuy.vn">giaitrilethuy </a>.
            <a href="http://www.dmca.com/Protection/Status.aspx?ID=4944d03a-aa40-4bf7-8fb7-b1d5e9a9935d&amp;refurl=http://dongamruou.vn/" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=4944d03a-aa40-4bf7-8fb7-b1d5e9a9935d" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
        </div>
    </div>
</div>