@extends('backend/layouts/index')
@section('css')
    <link href="{{asset('backend/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('js')
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        Number.prototype.format = function (n, x, s, c) {
            var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
                    num = this.toFixed(Math.max(0, ~~n));
            return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
        };
        $(function () {
            var base_url = "{{url('backend/product/')}}";
            var public = "{{URL::asset('')}}";
            var proDt = $("#product-table").dataTable({
                "iDisplayLength": "{{Gen::genOpt('post_perpage_admin')}}",
                "sAjaxSource": "{{route('api.product')}}",
                "bServerSide": true,
                "bProcessing": true,
                "oLanguage": {
                    "sLengthMenu": "_MENU_ Sản phẩm trên một trang",
                    "sInfo": "Hiển thị _START_ đến _END_ của _TOTAL_ sản phẩm",
                    "oPaginate": {
                        "sFirst": "Đầu tiên",
                        "sLast": "Cuối cùng",
                        "sNext": "Sau",
                        "sPrevious": "Trước"
                    },
                    "sSearch": "Tìm kiếm: ",
                },
                "aoColumns": [
                    {
                        "mData": "path_thumb",
                        sWidth: '15%',
                        "bSortable": false,
                        "bSearchable": false,
                        "mRender": function (data, type, row) {
                            if (data == null) {
                                return '';
                            }
                            return '<img src="' + public + data + '">';
                        }
                    },
                    {"mData": "product_name", sWidth: '15%'},
                    {"mData": "name", sWidth: '15%'},
                    {
                        "mData": "product_price", sWidth: '10%', "sType": "numeric",
                        "mRender": function (data) {
                            return data.format(0, 3, '.', ',')+' VNĐ';
                        }
                    },
                    {
                        "mData": "product_status", sWidth: '10%', "sType": "numeric",
                        "mRender": function (data) {
                            if (data === 1) {
                                return '<span class="label label-success">Active</span>';
                            } else {
                                return '<span class="label label-default">inActive</span>';
                            }
                        }
                    },
                    {
                        "mData": null,
                        "sWidth": '20%',
                        "bSortable": false,
                        "mRender": function (data, type, full) {
                            return '<a class="btn btn-info btn-sm" href="' + base_url + '/' + full.id + '/edit">' + 'Edit' + '</a> <a class="btn btn-info btn-sm delete-row" href=' + full.id + '>' + 'Delete' + '</a>';
                        }
                    },
                ],
            });
            var searchWait = 0;
            var searchWaitInterval;
            $('.dataTables_filter input')
                    .unbind('keypress keyup')
                    .bind('keypress keyup', function (e) {
                        var item = $(this);
                        searchWait = 0;
                        if (!searchWaitInterval)
                            searchWaitInterval = setInterval(function () {
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
            $("#product-table").on('click', '.delete-row', function (event) {
                var id = $(this).attr('href');
                var nRow = $(this).parents('tr')[0];
                bootbox.confirm("Are you sure to delete this product?", function (result) {
                    if (result) {
                        $.ajax({
                            method: "DELETE",
                            url: "{{url('backend/product')}}/" + id,
                            data: {_token: "{{csrf_token()}}"}
                        }).done(function (msg) {
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
        {!! Breadcrumbs::render('products') !!}
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><a href="{{langRoute('backend.product.create')}}" class="btn btn-success">{{ucfirst(trans('sidebar.addnew'))}}</a></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="product-table" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Chuyên mục</th>
                                <th>Giá</th>
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