<style>
.list-group.list-group-horizontal.steps-pb-list {
    border-radius: 0.5rem;
}
.list-group-horizontal .list-group-item.steps__item:last-child {
    border-bottom-left-radius: 0.5rem;
}
.steps__item {
    overflow: hidden;

    .badge {
        font-size: 115%;
        margin-bottom: 0;
        padding: 8px 11px;
    }
}
.steps__bg-container {
    display: block;
    width: 100%;
    padding-top: 100%;
    position: absolute;
    top: 50%;
    right: 0;
    transform-origin: top right;
    transform: rotate(45deg);
    overflow: hidden;
}
.steps__bg-wrapper {
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    top: -50%;
    right: 0;
    transform-origin: center right;
    transform: rotate(-45deg);
}
body.dark-mode .steps__bg-container .steps__bg-wrapper .progress:not(.bg-danger)
{
    background-color: #223!important;
}
.steps__bg-container .steps__bg-wrapper .progress.bg-danger {
    opacity: 0.6;
}
.steps__bg-container .steps__bg-wrapper .progress-bar {
    opacity: 0.6;
}
</style>
<div class="d-flex flex-lg-row flex-column align-items-stretch w-100">
    @foreach($items as $idx => $item)
    <div class="steps-pb-list list-group list-group-horizontal w-100 {{ $idx == 0 ? '' : 'mt-2 mt-lg-0' }}">
        @if($item['href'])
        <a
            href="{{ $item['href'] }}"
            class="steps__item d-flex list-group-item list-group-item-action border-0 bg-transparent"
        >
        @else
        <div class="steps__item d-flex list-group-item w-100 border-0 bg-transparent">
        @endif
            <div class="steps__bg-container">
                <div class="steps__bg-wrapper">
                    <div class="progress {{ $item['disabled'] ? 'bg-'.$disabled_class : 'bg-'.$bg_class }}" style="height: 100%;">
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
            </div>

            <div style="position: relative">
                <div class="d-inline-flex flex-shrink-0 mr-1">
                    <span class="badge badge-{{ $item['icon_class'] }} d-inline-flex align-items-center">
                        {!! $item['icon'] !!}
                    </span>
                </div>
            </div>
            <div class="d-flex flex-column flex-grow-1 justify-content-center" style="position: relative">
                <div class="d-flex align-items-start justify-content-center flex-column">
                    @if($item['description'])
                        <small class="m-0 text-{{ $text_class }}">{{ $item['description'] }}</small>
                    @endif
                    <h6 class="m-0 text-{{ $text_class }}">{{ $item['title'] }}</h6>
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
