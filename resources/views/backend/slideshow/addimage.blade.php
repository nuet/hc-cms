<link href="{{asset('backend/plugins/iCheck/all.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css" />

<script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/plugins/fileinput/fileinput.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("#btnSelectImg1").click(function () {
        var finder = new CKFinder();
        finder.selectActionFunction = function (fileUrl) {
            $('#path_full').val(fileUrl);
        };
        finder.popup();
    });
});
</script>
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add Image</h3>
                </div><!-- /.box-header -->
                <form id="frmAddImage" role="form" action='' method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id_obj" id="id_obj" value="{{$slideid}}">
                    <input type="hidden" name="type" id="type" value="{{$itype}}">
                    <input type="hidden" name="id" id="id" value="">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="img_name">Name</label>
                            <input type="text" value="{{old('img_name')}}" class="form-control" id="img_name" placeholder="Enter Name" name='img_name'>
                        </div>
                        <div class="form-group">
                            <label for="img_url">URL</label>
                            <input type="text" value="{{old('img_url')}}" class="form-control" id="img_url" placeholder="Enter URL" name='img_url'>
                        </div>
                        <div class="form-group" id="fcontent">
                            <label for="img_description">Description</label>
                            <textarea id="summernote" name="img_description" class="form-control">{{old('img_description')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="path_full">Image</label>
                            <div>
                                <input type="text" value="{{old('path_full')}}" style="width: 80%;display: inline-block;float: left;" class="form-control" id="path_full" placeholder="Enter Path" name='path_full'>
                                <input type="button" class="btn btn-primary" value="Chọn ảnh ..." id="btnSelectImg1" name="btnSelectImg1" />
                            </div>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <a href="#" class="btn btn-primary btn-save">Submit</a>
                        <a href="#" class="btn btn-warning btn-back">Back</a>
                    </div>
                </form>
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->