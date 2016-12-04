@extends('backend/layouts/index')
@section('css')
<link href="{{asset('backend/plugins/iCheck/all.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
<script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/fileinput/fileinput.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
<script>
$(function() {
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
    $("#input-2").fileinput({
        overwriteInitial: true,
    });
});

$(document).ready(function() {
    var pro = function() {
    }
    var image = function() {
        var slideId = $('#slideid').val();
        var itype = $('#itype').val();
        $.get('{{ langRoute("api.image") }}', {"slideId":slideId,"itype": itype}, function(data) {
            $('#add_image').html(data);
            $('.btn-addimage').click(function(e) {
                addImage();
            })
            $('.btn-editImage').click(function(e) {
                var id = $(this).attr('data-id');
                editImage(id);
            })
            
            $('.btn-deleteImage').click(function(e) {
                var id = $(this).attr('data-id');
                //deleteImage(id);
                bootbox.confirm("Are you sure to delete this image?", function(result) {
                    if (result) {
                        var data = {'_token': '{{csrf_token()}}','id':id};
                        $.ajax({
                            url: '{{ langRoute("api.deleteimage") }}',
                            type: 'DELETE',
                            data: data,
                            success: function(result) {
                                 image();
                            }
                        })
                    }
                });
            })
        });
    }

    var addImage = function() {
        var slideId = $('#slideid').val();
        var itype = $('#itype').val();
        $.get('{{ langRoute("api.addimage") }}', {"slideId":slideId,"itype":itype}, function(data) {
            $('#add_image').html(data);
            loadediteven();
        });
    }
    
    var editImage = function(id) {
        $.get('{{ langRoute("api.editimage") }}', {"imageId":id}, function(data) {
            $('#add_image').html(data);
            loadediteven();
        });
    }
    
    var loadediteven = function(id) {
        $('.btn-back').click(function(e) {
            image();
        })
        $('.btn-save').click(function(e) {
            storeimage();
        })
    }
    
    var storeimage = function() {
        var oform = $('Form#frmAddImage');
        $.post('{{ langRoute("api.storeimage") }}', $(oform).serialize(), function(data) {
            image();
        }).fail(function(fail) {
            if (fail.status === 422) {
                var alert = '';
                alert += '<div class="alert alert-danger"><strong>Whoops!</strong> There were some problems with your input.<br><br>';
                alert += '<ul>';
                $.each(fail.responseJSON, function(key, value) {
                    alert += '<li>' + value + '</li>';
                });
                alert += '</ul>';
                $("#bahaya").html(alert);
            }
        });
    }
    
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        var target = $(e.target).attr("href") // activated tab
        switch (target) {
            case '#add_pro':
                pro();
                break;
            case '#add_image':
                image();
                break;
        }
    });
})
</script>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{$title}}
        <small>{{$sub_title}}</small>
    </h1>
    {!! Breadcrumbs::render('slideshowedit') !!}
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{$title}}</h3>
                </div><!-- /.box-header -->

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
                        
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#add_pro" data-toggle="tab">Edit SlideShow</a></li>
                                <li><a href="#add_image" data-toggle="tab">Manage Image</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="add_pro">
                                    <form role="form" action='{{langRoute('backend.slideshow.update',$slide->id)}}' method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="slideid" id="slideid" value="{{$slide->id}}">
                                    <input type="hidden" name="itype" id="itype" value="0">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Slideshow Name</label>
                                        <input type="text" value="{{$slide->ss_name}}" class="form-control" id="ss_name" placeholder="Enter Name" name='ss_name'>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            @if($slide->ss_status == 1)
                                            <input type="checkbox" class="minimal" name='ss_status' checked /> Active ?
                                            @else
                                            <input type="checkbox" class="minimal" name='ss_status' /> Active ?
                                            @endif
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="add_image">
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop