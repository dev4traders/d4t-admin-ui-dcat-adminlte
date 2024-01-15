<style>
    .w-card {
    border-radius: 20px;
    border: 1px solid #2E2E2E;
    padding: 30px;
    margin-bottom: 18px;
}

.w-card .card-body{
    padding: 0;
}

</style>
<div class="card w-card {{ $fullHeight ? 'h-100' : '' }} {{ empty($class) ? '' : 'bg-'.$class }}" style="{{ $style }}">
    @if ($title || $tool)
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title">{!! $title !!}</h5>
            @if ($tool)
                {!! $tool !!}
            @endif
        </div>
    @endif
    <div class="card-body">
        {!! $content !!}
    </div>
    @if($footer)
    <div class="card-footer mt-0 pt-0">
        {!! $footer !!}
    </div>
    @endif
</div>
