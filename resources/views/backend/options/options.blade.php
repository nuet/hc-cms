<form action="{{langURL('/backend/options/optionsstore')}}" method="post" class="form-horizontal" id="form-page" enctype="multipart/form-data">
    <input type="hidden" value="{{csrf_token()}}" name="_token">
    @foreach($general as $key => $val)
    @if(in_array($val->name,array('logo','favicon')))
    <div class="form-group">
        <label for="{{$val->name}}" class="col-sm-2 control-label">{{ucfirst(trans('sidebar.'.$val->name))}}</label>
        <div class="col-sm-10">
            <input type="text" value="{{$val->val}}" style="width: 80%;display: inline-block;float: left;" class="form-control" id="{{$val->name}}" placeholder="Enter Path" name="{{$val->name}}">
            <input type="button" class="btn btn-primary" value="{{ucfirst(trans('sidebar.select')).' '.trans('sidebar.image')}} ..." id="btnSelectImg_{{$val->name}}" name="btnSelectImg_{{$val->name}}" />
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#btnSelectImg_{{$val->name}}").click(function () {
                var output = $(this).prev();
                var finder = new CKFinder();
                finder.selectActionFunction = function (fileUrl) {
                    $(output).val(fileUrl);
                };
                finder.popup();
            });
        });
    </script>
    @else
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">{{ucfirst(trans('sidebar.'.$val->name))}}</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="{{$val->name}}" value="{{$val->val}}">
        </div>
    </div>
    @endif
    @endforeach
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">{{ucfirst(trans('sidebar.save'))}}</button>
        </div>
    </div>
</form>