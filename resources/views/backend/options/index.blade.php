@extends('backend/layouts/index')
@section('css')
<link href="{{asset('backend/plugins/fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .autocomplete-suggestions { border: 1px solid #999; background: #FFF; overflow: auto; }
    .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
    .autocomplete-selected { background: #F0F0F0; }
    .autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
    .autocomplete-group { padding: 2px 5px; }
    .autocomplete-group strong { display: block; border-bottom: 1px solid #000; }
</style>
@endsection
@section('js')
<script src="{{asset('backend/plugins/fileinput/fileinput.min.js')}}" type="text/javascript"></script>
<script>
$(document).ready(function() {
    var gen = function() {
        $.get("{{langURL('/backend/options/optionsindex')}}",{"type":"{{config('constants.optiontype.general')}}"}, function(data) {
            $("#general").html(data);
        });
    }
    var page = function() {
        $.get("{{langURL('/backend/options/optionsindex')}}",{"type":"{{config('constants.optiontype.page')}}"}, function(data) {
            $("#page").html(data);
        });
    }
    var mail = function() {
        $.get("{{langURL('/backend/options/mailindex')}}", function(data) {
            $("#mail").html(data);
        });
    }
    var social = function() {
        $.get("{{langURL('/backend/options/optionsindex')}}",{"type":"{{config('constants.optiontype.social')}}"}, function(data) {
            $("#social").html(data);
        });
    }
    var customize = function() {
        $.get("{{langURL('/backend/options/customizeindex')}}", function(data) {
            $("#customize").html(data);
        });
    }
    var metatag = function() {
        $.get("{{langURL('/backend/options/optionsindex')}}",{"type":"{{config('constants.optiontype.metatag')}}"}, function(data) {
            $("#metatag").html(data);
        });
    }
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        var target = $(e.target).attr("href") // activated tab
        switch (target) {
            case '#general':
                gen();
                break;
            case '#page':
                page();
                break;
            case '#mail':
                mail();
                break;
            case '#social':
                social();
                break;
            case '#customize':
                customize();
                break;
            case '#metatag':
                metatag();
                break;
        }
    });
    gen();
    $(document).on('submit', '#form-page', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        $.post(url, $(this).serialize(), function(data) {
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
    });
    $(document).on('submit', '#form-mail', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        $.post(url, $(this).serialize(), function(data) {
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
    });
    $(document).on('submit', '#form-social', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        $.post(url, $(this).serialize(), function(data) {
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
    });
    $(document).on('submit', '#form-gen', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            processData: false,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
            },
            error: function(e) {
                if (fail.status === 422) {
                    var alert = '';
                    alert += '<div class="alert alert-danger"><strong>Whoops!</strong> There were some problems with your input.<br><br>';
                    alert += '<ul>';
                    $.each(e.responseJSON, function(key, value) {
                        alert += '<li>' + value + '</li>';
                    });
                    alert += '</ul>';
                    $("#bahaya").html(alert);
                }
            }
        });
    })
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
    {!! Breadcrumbs::render('options') !!}
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{$title}}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="bahaya">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
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
                                    <li  class="active"><a href="#general" data-toggle="tab">{{ucfirst(trans('sidebar.general'))}}</a></li>
                                    <li><a href="#page" data-toggle="tab">{{ucfirst(trans('sidebar.page'))}}</a></li>
                                    <li><a href="#mail" data-toggle="tab">{{ucfirst(trans('sidebar.mail'))}}</a></li>
                                    <li><a href="#social" data-toggle="tab">{{ucfirst(trans('sidebar.social'))}}</a></li>
                                    {{--<li><a href="#customize" data-toggle="tab">{{ucfirst(trans('sidebar.customize'))}}</a></li>--}}
                                    <li><a href="#metatag" data-toggle="tab">{{ucfirst(trans('sidebar.metatag'))}}</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="general">

                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="page">
                                        
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="mail">

                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="social">
                                        
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="customize">
                                        
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="metatag">
                                        
                                    </div><!-- /.tab-pane -->
                                </div><!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                        </div><!-- /.col -->
                    </div> <!-- /.row -->
                    <!-- END CUSTOM TABS -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop