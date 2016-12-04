<ol class="dd-list">
    @foreach($category as $cat)
    <li class="dd-item" data-id="{{$cat['id']}}">
        <div class="dd-handle dd3-handle"></div>
        <div class="dd3-content">{{$cat['name']}}
            <button class="btn btn-xs btn-danger pull-right delete" data-id="{{$cat['id']}}">Delete</button> 
            <a class="btn btn-xs btn-primary pull-right" href="{{langRoute('backend.category.edit',$cat['id'])}}">Edit</a>
        </div>
        @if($cat['children'])
        <ol class="dd-list">
            @foreach($cat['children'] as $child)
            <li class="dd-item" data-id="{{$child['id']}}">
                <div class="dd-handle dd3-handle"></div>
                <div class="dd3-content">{{$child['name']}}
                    <button class="btn btn-xs btn-danger pull-right delete" data-id="{{$child['id']}}">Delete</button> 
                    <a class="btn btn-xs btn-primary pull-right" href="{{langRoute('backend.category.edit',$child['id'])}}">Edit</a>
                </div>
            </li>
            @endforeach
        </ol>
        @endif
    </li>
    @endforeach
</ol>