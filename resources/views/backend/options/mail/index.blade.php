<form action="{{langURL('/backend/options/mailstore')}}" method="post" class="form-horizontal" id="form-mail">
    <input type="hidden" value="{{csrf_token()}}" name="_token">
    @foreach($mail as $key => $val)
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">{{ucwords(str_replace('_',' ',$key))}}</label>
        <div class="col-sm-10">
            <input type="text" name="{{$key}}" class="form-control" value="{{$val}}">
        </div>
    </div>
    @endforeach
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">{{ucfirst(trans('sidebar.save'))}}</button>
        </div>
    </div>
</form>
