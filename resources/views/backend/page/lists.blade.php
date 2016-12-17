<ol class="dd-list">
    @foreach($pages as $page)
    <li class="dd-item" data-id="{{$page['id']}}">
        <div class="dd-handle dd3-handle"></div>
        <div class="dd3-content">{{$page['page_name']}}
            <button class="btn btn-xs btn-danger pull-right delete" data-id="{{$page['id']}}">Delete</button> 
            <a class="btn btn-xs btn-primary pull-right" href="{{langRoute('backend.page.edit',[$page['id']])}}">Edit</a>
        </div>
    </li>
    @endforeach
</ol>