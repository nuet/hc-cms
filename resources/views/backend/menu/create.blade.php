@extends('backend/layouts/index')
@section('css')
<link href="{{asset('backend/plugins/iCheck/all.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .dd { position: relative; display: block; margin: 0; padding: 0; list-style: none; font-size: 13px; line-height: 20px; }
    .dd-list { display: block; position: relative; margin: 0; padding: 0; list-style: none; }
    .dd-list .dd-list { padding-left: 30px; }
    .dd-collapsed .dd-list { display: none; }
    .dd-item,
    .dd-empty,
    .dd-placeholder { display: block; position: relative; margin: 0; padding: 0; min-height: 20px; font-size: 13px; line-height: 20px; }
    .dd-handle { display: block; height: 30px; margin: 5px 0; padding: 5px 10px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
                 background: #fafafa;
                 background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
                 background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
                 background:         linear-gradient(top, #fafafa 0%, #eee 100%);
                 -webkit-border-radius: 3px;
                 border-radius: 3px;
                 box-sizing: border-box; -moz-box-sizing: border-box;
    }
    .dd-handle:hover { color: #2ea8e5; background: #fff; }
    .dd-item > button { display: block; position: relative; cursor: pointer; float: left; width: 25px; height: 20px; margin: 5px 0; padding: 0; text-indent: 100%; white-space: nowrap; overflow: hidden; border: 0; background: transparent; font-size: 12px; line-height: 1; text-align: center; font-weight: bold; }
    .dd-item > button:before { content: '+'; display: block; position: absolute; width: 100%; text-align: center; text-indent: 0; }
    .dd-item > button[data-action="collapse"]:before { content: '-'; }
    .dd-placeholder,
    .dd-empty { margin: 5px 0; padding: 0; min-height: 30px; background: #f2fbff; border: 1px dashed #b6bcbf; box-sizing: border-box; -moz-box-sizing: border-box; }
    .dd-empty { border: 1px dashed #bbb; min-height: 100px; background-color: #e5e5e5;
                background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                    -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
                background-image:    -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                    -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
                background-image:         linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                    linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
                background-size: 60px 60px;
                background-position: 0 0, 30px 30px;
    }
    .dd-dragel { position: absolute; pointer-events: none; z-index: 9999; }
    .dd-dragel > .dd-item .dd-handle { margin-top: 0; }
    .dd-dragel .dd-handle {
        -webkit-box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
        box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
    }
    .dd3-content { display: block; height: 30px; margin: 5px 0; padding: 5px 10px 5px 40px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
                   background: #fafafa;
                   background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
                   background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
                   background:         linear-gradient(top, #fafafa 0%, #eee 100%);
                   -webkit-border-radius: 3px;
                   border-radius: 3px;
                   box-sizing: border-box; -moz-box-sizing: border-box;
    }
    .dd3-content:hover { color: #2ea8e5; background: #fff; }
    .dd-dragel > .dd3-item > .dd3-content { margin: 0; }
    .dd3-item > button { margin-left: 30px; }
    .dd3-handle { position: absolute; margin: 0; left: 0; top: 0; cursor: pointer; width: 30px; text-indent: 100%; white-space: nowrap; overflow: hidden;
                  border: 1px solid #aaa;
                  background: #ddd;
                  background: -webkit-linear-gradient(top, #ddd 0%, #bbb 100%);
                  background:    -moz-linear-gradient(top, #ddd 0%, #bbb 100%);
                  background:         linear-gradient(top, #ddd 0%, #bbb 100%);
                  border-top-right-radius: 0;
                  border-bottom-right-radius: 0;
    }
    .dd3-handle:before { content: '≡'; display: block; position: absolute; left: 0; top: 3px; width: 100%; text-align: center; text-indent: 0; color: #fff; font-size: 20px; font-weight: normal; }
    .dd3-handle:hover { background: #ddd; }
</style>
@endsection
@section('js')
<script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/fileinput/fileinput.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/nestedsortable/jquery.nestable.js')}}" type="text/javascript"></script>
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
        $('#fslug').html('<label for="menu_slug">URL</label><input name="menu_slug" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" id="menu_slug">');
    } else {
        $('#fslug').html('<label for="menu_slug">Chọn chuyên mục</label><div class="input-group"><span id="btn-select-cat" class="input-group-addon" style="font-weight: bold;cursor: pointer;" id="basic-addon-cat">Chọn...</span><input name="menu_slug" type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" id="menu_slug" value=""> </div>');
        $('#menu_name').val('Theo tên chuyên mục');
        $('#btn-select-cat').click(function (e) {
            $.get('{{langRoute("api.getcategory")}}', function(data) {
                $('#myModal').find(".modal-body").html(data);
                $('#myModal').modal('show');
                $('#tree-btn-update').click(function (e) {
                    var val = $('#treeview1').treeview('getChecked');
                    var shtml = genmenu(val);
                    $('#nestable').html(shtml);
                    //console.log(val);
                    $('.dd').nestable({/* config options */
                        maxDepth: 5
                    });
                    //console.log(JSON.stringify($('#nestable').nestable('serialize')));
                    $('#datacat').val(JSON.stringify($('#nestable').nestable('serialize')));
                    $('#myModal').modal('hide');
                })
            });
        })
    }
}

var genmenu = function(data) {
    var shtml = '<ol class="dd-list">';
    var arritem = new Array(); 
    $.each(data, function( index, item ) {
        if(item.parentId == null){
            //Lay root
            //console.log(item);
            shtml += '<li class="dd-item" data-id="'+item.value+'">';
            shtml += '<div class="dd-handle dd3-handle"></div>';
            shtml += '<div class="dd3-content">'+item.text+'<button class="btn btn-xs btn-danger pull-right delete" data-id="'+item.value+'">Delete</button> <a class="btn btn-xs btn-primary pull-right">Edit</a></div>';
            shtml += genmenuchild(item,data);
            shtml += '</li>';
            //get child
        }else{
            var parentId = item.parentId;
            var check = 1;
            $.each(data, function( i, idata ) {
                if(parentId==idata.nodeId){
                    check = 0;
                    return false;
                }
            })
            if (check){
                //Lay root
                //console.log(item);
                shtml += '<li class="dd-item" data-id="'+item.value+'">';
                shtml += '<div class="dd-handle dd3-handle"></div>';
                shtml += '<div class="dd3-content">'+item.text+'<button class="btn btn-xs btn-danger pull-right delete" data-id="'+item.value+'">Delete</button> <a class="btn btn-xs btn-primary pull-right">Edit</a></div>';
                shtml += genmenuchild(item,data);
                shtml += '</li>';
                //get child
            }
        }
    });
    shtml += '</ol>';
    return shtml;
}

var genmenuchild = function(root,data) {
    var shtml = "";
    var check = 0;
    $.each(data, function( index, item ) {
        if(item.parentId == root.nodeId){
            if(check==0){
                shtml += '<ol class="dd-list">';
                check++;
            }
            shtml += '<li class="dd-item" data-id="'+item.value+'">';
            shtml += '<div class="dd-handle dd3-handle"></div>';
            shtml += '<div class="dd3-content">'+item.text+'<button class="btn btn-xs btn-danger pull-right delete" data-id="'+item.value+'">Delete</button> <a class="btn btn-xs btn-primary pull-right">Edit</a></div>';
            shtml += genmenuchild(item,data);
            shtml += '</li>';
        }
    })
    if(check){
        shtml += '</ol>';
    }
    return shtml;
}

$(function() {
    $('#menu_name').keyup(function() {
        $('#menu_slug').val(make_slug($(this).val()));
    });
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
    {!! Breadcrumbs::render('menucreate') !!}
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{$title}}</h3>
                </div><!-- /.box-header -->
                <form role="form" action='{{langRoute('backend.menu.store')}}' method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="menu_position" value="{{ $position }}">
                    <input type="hidden" name="datacat" id="datacat" value="">
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
                            <label for="menu_type">Loại Menu</label>
                            <select id="menu_type" class="form-control search-select kopet" name="menu_type">
                                <option value="link">Link</option>
                                <option value="page">Trang</option>
                                <option value="category">Chuyên mục</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="menu_name">Tiêu đề</label>
                            <input type="text" value="{{old('menu_name')}}" class="form-control" id="menu_name" placeholder="Nhập tiêu đề" name='menu_name'>
                        </div>
                        <div class="form-group">
                            <label>Menu cha</label>
                            <select id="menu_parent" class="form-control search-select" name="menu_parent">
                                <option value="">Chọn</option>
                                @foreach($parent as $key=>$val)
                                <option value="{{$key}}">{{$val}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="fslug">
                        </div>
                        <div id="nestable" class="dd">
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" id='menu_status' name='menu_status'/> {{ucfirst(trans('sidebar.active'))}} ?
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Chọn chuyên mục</h4>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" id="tree-btn-update" class="btn btn-default">Chọn</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Quay lại</button>
      </div>
    </div>
  </div>
</div>
@stop