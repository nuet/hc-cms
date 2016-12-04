@extends('front/bds/layouts/index')
@section('main')
@section('slider-main')
@show
<div class="container">
    <div class="row">    		
        <div class="col-sm-12">    			   			
            <div class="col-sm-12">
                <div class="col-sm-12 col-md-12 user-details">
                    <div class="user-info-block">
                        <div class="user-body">
                            <div class="tab-content">
                                <div id="information" class="tab-pane active">
                                    <h4>Thông tin tài khoản</h4>
                                    <label for="username"> {{Auth::user()->username}}</label>
                                    <form role="form" action='{{url('/customer/account')}}' method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                            <label for="first_name">Avatar</label>
                                            <div>
                                                <input type="text" value="{{Auth::user()->avatar}}" style="width: 80%;display: inline-block;float: left;" class="form-control" id="avatar" placeholder="Image URL" name='avatar'>
                                                <input type="button" class="btn btn-primary" value="Chọn ảnh ..." id="btnselectImg" name="btnselectImg" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_name">Họ</label>
                                            <input type="text" value="{{Auth::user()->first_name}}" class="form-control" id="first_name" placeholder="Enter Name" name='first_name'>
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Tên</label>
                                            <input type="text" value="{{Auth::user()->last_name}}" class="form-control" id="last_name" placeholder="Enter Name" name='last_name'>
                                        </div>
                                        <div class="form-group">
                                            <label for="birthday" class="control-label">Ngày sinh</label>
                                            <input type="text" class="form-control" id="birthday" value="{{Auth::user()->birthday}}"  name="birthday">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" value="{{Auth::user()->email}}" class="form-control" id="email" readonly="" placeholder="Enter Email" name='email'>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="name" placeholder="Enter Password" name='password'>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Địa chỉ</label>
                                            <textarea class="form-control" name='address'>{{Auth::user()->address}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="control-label">Điện thoại</label>
                                            <input type="text" name="phone" id="phone" class="form-control" value="{{Auth::user()->phone}}"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="mob_phone" class="control-label">Điện thoại di động <span class="danger">(*)</span></label>
                                            <input type="text" name="mob_phone" id="mob_phone" value="{{Auth::user()->mob_phone}}" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="email" class="tab-pane">
                                    <h4>Send Message</h4>
                                </div>
                                <div id="events" class="tab-pane">
                                    <h4>Events</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>			 		
    </div> 
</div>
<script src="{{url('backend/plugins/ckfinder/ckfinder.js')}}"></script>
<script>
$("#btnselectImg").click(function () {
    var finder = new CKFinder();
    finder.selectActionFunction = function (fileUrl) {
        $('#avatar').val(fileUrl);
    };
    finder.popup();
});
</script>
@stop

