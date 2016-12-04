@extends('front.bds.layouts.index')
@section('main')
<section class="pv-20">
    <div class="container">
        <div class="row">    		
            <div class="col-sm-12">    			   			
                <h2 class="title text-center">{{$note}}</h2>    	
                <div class="col-sm-12">
                    @foreach ($blog as $val)
                    <p>{{$val->title}}</p>
                    @endforeach
                </div>
                <div class="pageding">
                    {!!$blog->render()!!}
                </div>
            </div>			 		
        </div> 
    </div>
</section>
@stop

