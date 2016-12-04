@if (count($menu) > 0)
    <ol class="dd-list">
    @foreach ($menu as $item)
        @include('backend.menu.item', $item)
    @endforeach
    </ol>
@endif