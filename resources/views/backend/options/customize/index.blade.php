<form action="{{langURL('/backend/options/optionsstore')}}" method="post" class="form-horizontal" id="form-page" enctype="multipart/form-data">
    <input type="hidden" value="{{csrf_token()}}" name="_token">
    @foreach($general as $key => $val)
    <div class="form-group">
        <label for="{{$val->name}}" class="col-sm-2 control-label">{{ucwords(str_replace('_',' ',$val->name))}}</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="15" id="{{$val->name}}" name="{{$val->name}}">{{$val->val}}</textarea>
            <script>
                //CKEDITOR.replace('{{$val->name}}').config.allowedContent = 'footer(*); div(*); p{text-align}(*); strong(*); em(*); b(*); i(*); u(*); sup(*); sub(*); ul(*); ol(*); li(*); a[!href](*); br(*); hr(*); img{*}[*](*); iframe(*)';
            </script>
        </div>
    </div>
    @endforeach
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">{{ucfirst(trans('sidebar.save'))}}</button>
        </div>
    </div>
</form>