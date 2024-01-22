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
            class="list-group-item list-group-item-action d-flex
                justify-content-between steps-item {{ $idx == $active_idx ? 'steps-item_active bg-'.$step_active_class.' border-'.$step_inactive_class : 'bg-'.$step_inactive_class.' border-'.$step_active_class }}"
        >
            <div class="li-wrapper d-flex justify-content-start align-items-center">
                @if($item['icon'])
                    {!! $item['icon'] !!}
                @else
                    <h1 class="m-0 mr-1">
                        <span class="steps-badge {{ $idx == $active_idx ? 'steps-badge_active bg-'.$step_inactive_class.' text-'.$step_active_class : 'bg-'.$step_active_class.' text-'.$step_inactive_class }}">{{ $item['index'] }}</span>
                    </h1>
                @endif
                <div class="list-content text-left">
                    <h4 class="m-0 steps-text {{ $idx == $active_idx ? 'text-'.$step_inactive_class : 'text-'.$step_active_class  }}">{{ $item['title'] }}</h4>
                    <h3 class="text-bold m-0 steps-text {{ $idx == $active_idx ? 'text-'.$step_inactive_class : 'text-'.$step_active_class  }}">{{ $item['description'] }}</h3>
                </div>
            </div>

            <div class="steps-square">
                <div class="steps-square__inner"></div>
            </div>
        </div>
    @endforeach
</div>

