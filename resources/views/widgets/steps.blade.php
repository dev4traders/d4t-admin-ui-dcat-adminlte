<style>
    .steps-list {
        background-color: #2E2E2E;
        border-radius: 0.5rem!important;
    }
    .steps-item {
        background-color: #2E2E2E;
        padding-right: 50px;
        box-sizing: border-box;
        overflow: hidden;
        border-radius: 0.5rem!important;

        &:hover {
            cursor: default;
            background-color: #2E2E2E;
        }
    }
    .li-wrapper {
        z-index: 2;
    }
    .steps-text {
        color: #ffffff;
    }
    .steps-item_active .steps-square {
        display: block;
    }
    .steps-square {
        display: none;
        width: 2000px;
        height: 2000px;
        position: absolute;
        top: 50%;
        right: 0;
        border-radius: 12px;
        transform: rotate(45deg);
        transform-origin: top right;
        overflow: hidden;
    }
    .steps-square__inner {
        display: block;
        background: rgb(232,60,244);
        background: linear-gradient(79deg, rgba(232,60,244,1) 0.92%, rgba(90,198,218,1) 97.8%);
        width: 500px;
        height: 200px;
        position: absolute;
        top: 100px;
        right: -100px;
        transform: rotate(-45deg);
    }
    .steps-badge {
        display: inline-flex;
        background: rgb(232,60,244);
        background: linear-gradient(79deg, rgba(232,60,244,1) 0.92%, rgba(90,198,218,1) 97.8%);
        align-items: center;
        justify-content: center;
        width: 55px;
        height: 55px;
        position: relative;
        border-radius: 50%;
        color: #ffffff;
    }
    .steps-badge_active {
        background: none;
        background-color: #ffffff;
        color: #0a0a0a;
    }
</style>
<div class="steps-list list-group list-group-horizontal-md text-md-center {{ is_null($class_ext) ? '' : $class_ext }}">
    @foreach($items as $idx => $item)
        <div
            id="step_{{ $item['id'] }}"
            class="list-group-item list-group-item-action d-flex justify-content-between steps-item {{ $idx == $active_idx ? 'steps-item_active' : '' }}"
        >
            <div class="li-wrapper d-flex justify-content-start align-items-center">
                @if($item['icon'])
                    {!! $item['icon'] !!}
                @else
                    <h1 class="m-0 mr-1">
                        <span class="steps-badge {{ $idx == $active_idx ? 'steps-badge_active' : '' }}">{{ $item['index'] }}</span>
                    </h1>
                @endif
                <div class="list-content text-left">
                    <h4 class="m-0 steps-text">{{ $item['title'] }}</h4>
                    <h3 class="text-bold m-0 steps-text">{{ $item['description'] }}</h3>
                </div>
            </div>

            <div class="steps-square">
                <div class="steps-square__inner"></div>
            </div>
        </div>
    @endforeach
</div>

