<div class="list-group list-group-horizontal-md text-md-center {{ is_null($class_ext) ? '' : $class_ext }}">
    @foreach($items as $idx => $item)
    <div
        id="step_{{ $item['id'] }}"
        class="list-group-item list-group-item-action d-flex justify-content-between {{ $idx == $active_idx ? 'bg-primary' : 'bg-dark' }}"
    >
        <div class="li-wrapper d-flex justify-content-start align-items-center">
            @if($item['icon'])
                {!! $item['icon'] !!}
            @else

            <h1 class="m-0 mr-1">
                <span class="badge {{ $idx == $active_idx ? 'badge-dark text-white' : 'badge-primary' }}">{{ $item['index'] }}</span>
            </h1>
            @endif
            <div class="list-content text-left">
                <h4 class="m-0">{{ $item['description'] }}</h4>
                <h2 class="m-0">{{ $item['title'] }}</h2>
            </div>
        </div>
    </div>
    @endforeach
</div>

