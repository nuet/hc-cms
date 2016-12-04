@extends('backend/layouts/index')
@section('css')
<link href="{{asset('backend/plugins/iCheck/all.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
<script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/fileinput/fileinput.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/input-mask/jquery.inputmask.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/input-mask/jquery.inputmask.extensions.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/input-mask/jquery.inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/input-mask/jquery.inputmask.date.extensions.js')}}" type="text/javascript"></script>
<script>
function make_slug(str)
{
    str = str.toLowerCase();
    str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
    str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
    str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
    str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
    str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
    str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
    str = str.replace(/(đ)/g, 'd');
    str = str.replace(/[^a-z0-9]+/g, '-');
    str = str.replace(/^-|-$/g, '');
    return str;
}
$(function () {
    $('#title').keyup(function () {
        $('#slug').val(make_slug($(this).val()));
    });
    $("#slug").change(function () {
        $(this).val(make_slug($(this).val()));
    })

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });

    var editor = CKEDITOR.replace('content', {
        language: 'vi',
        filebrowserBrowseUrl: "{{asset('backend/plugins/ckfinder/ckfinder.html')}}",
        filebrowserImageBrowseUrl: "{{asset('backend/plugins/ckfinder/ckfinder.html?Type=Images')}}",
        filebrowserFlashBrowseUrl: "{{asset('backend/plugins/ckfinder/ckfinder.html?Type=Flash')}}",
        filebrowserUploadUrl: "{{asset('backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}",
        filebrowserImageUploadUrl: "{{asset('backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')}}",
        filebrowserFlashUploadUrl: "{{asset('backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash')}}"
    });

    $("#btnSelectImg").click(function () {
        var finder = new CKFinder();
        finder.selectActionFunction = function (fileUrl) {
            $('#image_path_full').val(fileUrl);
        };
        finder.popup();
    });
});
</script>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{$title}}
        <small>{{$sub_title}}</small>
    </h1>
    {!! Breadcrumbs::render('newscreate') !!}
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{$title}}</h3>
                </div><!-- /.box-header -->
                <form role="form" action='{{langRoute('backend.news.store')}}' method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">
                        @if(count($errors))
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group">
                            <label>{{ucfirst(trans('sidebar.categories'))}}</label>
                            <select id="form-field-select-3" class="form-control search-select" name="id_category">
                                <option value="">{{ucfirst(trans('sidebar.select'))}} {{trans('sidebar.categories')}}</option>
                                @foreach($category as $key=>$val)
                                <option value="{{$key}}">{{$val}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input type="text" value="{{old('title')}}" class="form-control" id="title" placeholder="Tiêu đề bài viết" name='title'>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">{{url()}}/</span>
                                <input name="slug" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" id="slug">
                            </div>
                        </div>
                        <div class="form-group" id="fcontent">
                            <label for="content">Content</label>
                            <textarea id="content" name="content">{{old('content')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="video_url">Đường dẫn Video</label>
                            <input type="text" value="{{old('video_url')}}" class="form-control" id="video_url" placeholder="Video URL" name='video_url'>
                        </div>
                        <div class="form-group">
                            <label for="image_path_full">Ảnh biểu trưng</label>
                            <div>
                                <input type="text" value="{{old('image_path_full')}}" style="width: 80%;display: inline-block;float: left;" class="form-control" id="image_path_full" placeholder="Image URL" name='image_path_full'>
                                <input type="button" class="btn btn-primary" value="Chọn ảnh ..." id="btnSelectImg" name="btnSelectImg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">Chế độ hiển thị</div>
                                <div class="panel-body">
                                    <div class="row">
                                        @foreach($type as $val)
                                        <div class="col-md-3"><input type="checkbox" class="minimal" name='features[]' value="{{$val['id']}}"/> {{$val['name']}}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" id="status" class="minimal" name='status'/> {{ucfirst(trans("sidebar.active"))}} ?
                            </label>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">{{ucfirst(trans('sidebar.submit'))}}</button>
                        <a href="{{URL::previous()}}" class="btn btn-warning">{{ucfirst(trans('sidebar.back'))}}</a>
                    </div>
                </form>
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop