<style>
.list-group.list-group-horizontal.steps-pb-list {
    border-radius: 0.5rem;
}
.list-group-horizontal .list-group-item.steps-pb-item:last-child {
    border-bottom-left-radius: 0.5rem;
}
body.dark-mode .bg-light.steps-pb-item {
    background-color: #223!important;
}
body.dark-mode .bg-light.steps-pb-item.border-success
{
    border-color: #21b978!important
}
</style>
<div class="d-flex flex-lg-row flex-column align-items-stretch w-100">
    @foreach($items as $idx => $item)
    <div class="steps-pb-list list-group list-group-horizontal w-100 {{ $idx == 0 ? '' : 'ml-lg-2 mt-2 mt-lg-0' }} bg-{{ $bg_class }}">

        @if($item['href'])
        <a
            href="{{ $item['href'] }}"
            class="steps-pb-item d-flex list-group-item list-group-item-action {{ $item['active'] ? 'border-'.$active_class : 'border-transparent' }} bg-{{ $bg_class }}"
        >
        @else
        <div class="steps-pb-item d-flex list-group-item w-100 {{ $item['active'] ? 'border-'.$border_class : 'border-transparent' }} bg-{{ $bg_class }}">
        @endif
            <div>
                <div class="d-inline-flex flex-shrink-0 mr-1">
                    <span class="badge badge-{{ $item['icon_class'] }} d-inline-flex align-items-center">
                        {!! $item['icon'] !!}
                    </span>
                </div>
            </div>
            <div class="d-flex flex-column flex-grow-1 justify-content-center">
                <div class="d-flex justify-content-between mb-1">
                    <div class="d-flex align-items-center">
                        <h6 class="m-0">{{ $item['title'] }}</h6>
                    </div>
                    @if($item['description'])
                        <div>
                            <small class="m-0">{{ $item['description'] }}</small>
                        </div>
                    @endif
                </div>
                <div class="progress {{ $item['disabled'] ? 'bg-'.$disabled_class : '' }}" style="height: 5px;">
                    <div
                            class="progress-bar bg-{{ $active_class }}"
                            role="progressbar"
                            style="width: {{ $item['percent'] }}%;"
                            aria-valuenow="{{ $item['percent'] }}"
                            aria-valuemin="0"
                            aria-valuemax="100"
                    ></div>
                </div>
            </div>
        @if($item['href'])
        </a>
        @else
        </div>
        @endif
    </div>
    @endforeach
</div>
