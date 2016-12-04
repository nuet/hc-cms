<li class="dd-item" data-id="{{$item['id']}}">
    <div class="dd-handle dd3-handle"></div>
    <div class="dd3-content">{{$item['menu_name']}}
        <button class="btn btn-xs btn-danger pull-right delete" data-id="{{$item['id']}}">Delete</button> 
        <a class="btn btn-xs btn-primary pull-right" href="{{langRoute('backend.menu.edit',[$item['id'],'position' => $item['menu_position']])}}">Edit</a>
    </div>
    @if($item['children'])
        <ol class="dd-list">
            @foreach($item['children'] as $item)
                @include('backend.menu.item', $item)
            @endforeach
        </ol>
    @endif
</li>