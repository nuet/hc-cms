@extends('front.bds.layouts.index')
@section('main')
<section class="pv-20">
    <div class="container">
        <div class="row">    		
            <div class="col-sm-12">    			   			
                <h2 class="title text-center">{{$page->page_name}}</h2>    	
                <div class="col-sm-12">
                    <p>
                        {!!str_replace(array("\r\n", "\n", "\r"),'<br />',$page->page_content)!!}
                    </p>
                </div>
            </div>			 		
        </div> 
    </div>
</section>
@stop

