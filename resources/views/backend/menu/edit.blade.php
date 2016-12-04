@extends('backend/layouts/index')
@section('css')
<link href="{{asset('backend/plugins/iCheck/all.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
<script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/fileinput/fileinput.min.js')}}" type="text/javascript"></script>
<script>
function make_slug(str)
{
    // Chuyển hết sang chữ thường
    str = str.toLowerCase();     
 
    // xóa dấu
    str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
    str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
    str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
    str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
    str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
    str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
    str = str.replace(/(đ)/g, 'd');
 
    // Xóa ký tự đặc biệt
    str = str.replace(/([^0-9a-z-\s])/g, '');
 
    // Xóa khoảng trắng thay bằng ký tự -
    str = str.replace(/(\s+)/g, '-');
 
    // xóa phần dự - ở đầu
    str = str.replace(/^-+/g, '');
 
    // xóa phần dư - ở cuối
    str = str.replace(/-+$/g, '');
 
    // return
    return str;
}    

var setupform = function() {
    var kupret = $("select[name=menu_type] option:selected").val();
    if (kupret == 'link') {
        $('#fslug').html('<label for="menu_slug">URL</label><input name="menu_slug" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" id="url" value="{{$menu->menu_slug}}">');
    } else {
        $('#fslug').html('<label for="menu_slug">Slug</label><div class="input-group"><span class="input-group-addon" id="basic-addon1">{{url()}}/</span><input name="menu_slug" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" id="menu_slug" value="{{$menu->menu_slug}}"> </div>');
    }
}

$(function() {
    setupform();
    $('select[name="menu_type"]').change(function() {
        setupform();
    });

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

    $('#name').keyup(function() {
        $('#slug').val(make_slug($(this).val()));
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
    {!! Breadcrumbs::render('menuedit') !!}
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{$title}}</h3>
                </div><!-- /.box-header -->
                <form role="form" action='{{langRoute('backend.menu.update',$menu->id)}}' method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="id" value="{{$menu->id}}">
                    <input type="hidden" name="menu_position" value="{{ $position }}">
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
                            <label for="menu_type">Menu Type</label>
                            <select id="menu_type" class="form-control search-select kopet" name="menu_type">
                                <option value="link" {{$menu->menu_type == 'link' ? 'selected="selected"' : ''}}>Link</option>
                                <option value="category" {{$menu->menu_type == 'category' ? 'selected="selected"' : ''}}>Chuyên mục</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="menu_name">Tiêu đề</label>
                            <input type="text" value="{{$menu->menu_name}}" class="form-control" id="menu_name" placeholder="Nhập tiêu đề" name='menu_name'>
                        </div>
                        <div class="form-group">
                            <label>Menu cha</label>
                            <select id="menu_parent" class="form-control search-select" id="menu_parent" name="menu_parent">
                                <option value="">Chọn</option>
                                @foreach($parent as $key=>$val)
                                <option value="{{$key}}" {{$key == $menu->menu_parent ? 'selected="selected"' : ''}}>{{$val}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="fslug">
                            <label for="menu_slug">Slug</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">{{url()}}/</span>
                                <input name="menu_slug" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" id="menu_slug" value="{{$menu->menu_slug}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                @if($menu->menu_status == 1)
                                <input type="checkbox" class="minimal" name='menu_status' checked /> {{ucfirst(trans('sidebar.active'))}} ?
                                @else
                                <input type="checkbox" class="minimal" name='menu_status' /> {{ucfirst(trans('sidebar.active'))}} ?
                                @endif
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