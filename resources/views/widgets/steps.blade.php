<style>
    .steps-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 55px;
        height: 55px;
        position: relative;
        border-radius: 50%;
    }
</style>
<div class="steps-list list-group list-group-horizontal-md text-md-center {{ is_null($class_ext) ? '' : $class_ext }}">
    @foreach($items as $idx => $item)
        <div
            id="step_{{ $item['id'] }}"
            class="bg-dark list-group-item list-group-item-action d-flex justify-content-between steps-item {{ $idx == $active_idx ? 'steps-item_active' : '' }}"
        >
            <div class="li-wrapper d-flex justify-content-start align-items-center">
                @if($item['icon'])
                    {!! $item['icon'] !!}
                @else
                    <h1 class="m-0 mr-1">
                        <span class="steps-badge bg-secondary text-primary {{ $idx == $active_idx ? 'steps-badge_active' : '' }}">{{ $item['index'] }}</span>
                    </h1>
                @endif
                <div class="list-content text-left">
                    <h4 class="m-0 steps-text text-light">{{ $item['title'] }}</h4>
                    <h3 class="text-bold m-0 steps-text text-light">{{ $item['description'] }}</h3>
                </div>
            </div>

            <div class="steps-square">
                <div class="steps-square__inner"></div>
            </div>
        </div>
    @endforeach
</div>

