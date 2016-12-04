@extends('backend/layouts/index')
@section('css')
<link href="{{asset('backend/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
Number.prototype.format = function(n, x, s, c) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
            num = this.toFixed(Math.max(0, ~~n));
    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
};
$(function() {
    var base_url = "{{url(langURL('/backend/news/'))}}";
    var public = "{{URL::asset('')}}";
    var proDt = $("#product-table").dataTable({
        "aaSorting": [[0,'desc']],
        "iDisplayLength": "{{Gen::genOpt('post_perpage_admin')}}",
        "sAjaxSource": "{{langRoute('api.news')}}",
        "bServerSide": true,
        "bProcessing": true,
	"oLanguage": {
		"sLengthMenu": "_MENU_ Tin bài trên một trang",
                "sInfo": "Hiển thị _START_ đến _END_ của _TOTAL_ tin bài",
                "oPaginate": {
                    "sFirst":       "Đầu tiên",
                    "sLast":        "Cuối cùng",
                    "sNext":        "Sau",
                    "sPrevious":    "Trước"
		},
                "sSearch":         "Tìm kiếm: ",
	},
        "aoColumns": [
            {"mData": "id", sWidth: '5%'},
            {"mData": "title", sWidth: '50%'},
            {"mData": "name", sWidth: '15%'},
            {"mData": "status", sWidth: '10%', "sType": "numeric",
                "mRender": function(data) {
                    if (data === 1) {
                        return '<span class="label label-success">Active</span>';
                    } else {
                        return '<span class="label label-default">inActive</span>';
                    }
                }
            },
            {
                "mData": null,
                "sWidth": '15%',
                "bSortable": false,
                "mRender": function(data, type, full) {
                    return '<a class="btn btn-info btn-sm" href="' + base_url + '/' + full.id + '/edit">' + 'Edit' + '</a> <a class="btn btn-info btn-sm delete-row" href=' + full.id + '>' + 'Delete' + '</a>';
                }
            },
        ],
    });
    var searchWait = 0;
    var searchWaitInterval;
    $('.dataTables_filter input')
            .unbind('keypress keyup')
            .bind('keypress keyup', function(e) {
                var item = $(this);
                searchWait = 0;
                if (!searchWaitInterval)
                    searchWaitInterval = setInterval(function() {
                        if (searchWait >= 3) {
                            clearInterval(searchWaitInterval);
                            searchWaitInterval = '';
                            searchTerm = $(item).val();
                            proDt.fnFilter(searchTerm);
                            searchWait = 0;
                        }
                        searchWait++;
                    }, 200);
            });
    $("#product-table").on('click', '.delete-row', function(event) {
        var id = $(this).attr('href');
        var nRow = $(this).parents('tr')[0];
        bootbox.confirm("Bạn chắc chắn muốn xóa tin bài này?", function(result) {
            if (result) {
                $.ajax({
                    method: "DELETE",
                    url: "{{langURL('/backend/news')}}/" + id,
                    data: {_token: "{{csrf_token()}}"}
                }).done(function(msg) {
                    if (msg.success) {
                        proDt.fnDeleteRow(nRow);
                    }
                });
            }
        });
        event.preventDefault();
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
    {!! Breadcrumbs::render('newslist') !!}
</section>
<?php

?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><a href="{{langRoute('backend.news.create')}}" class="btn btn-success">{{ucfirst(trans('sidebar.addnew'))}}</a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="product-table" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tiêu đề</th>
                                <th>Chuyên mục</th>
                                <th>Trạng thái</th>
                                <th>Tác vụ</th>
                            </tr>
                        </thead>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop