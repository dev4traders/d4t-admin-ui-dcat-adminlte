<style>
body.dark-mode .card-body.featured-card-body {
    border-color: #5b6fb3!important;
}
</style>

<div class="card {{ $full_height ? 'h-100' : '' }} {{ empty($class) ? '' : 'bg-'.$class }}" style="{{ $style }}">
    @if($header_content)
        <div class="card-header">
            {!! $header_content !!}
        </div>
    @endif
    <div class="featured-card-body card-body d-flex flex-column flex-md-row justify-content-between p-0 {{ $with_border ? 'border border-1 border-bottom-0 rounded-top border-'.$border_class : '' }}">
        @if ($image)
            <div class="d-inline-flex flex-column justify-content-center align-items-center pl-2">
                <div>
                    {!! $image !!}
                </div>
            </div>
        @endif
        <div class="card-body d-flex align-items-left flex-column">
            @if ($title)
                <p class="card-title mb-3 text-left">
                    {{ $title }}
                </p>
            @endif
            <div class="row">
                @foreach($features as $feature)
                    <div class="col-12 col-md-6 col-lg-3 py-1">
                        {!! $feature !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @if(count($footer_links) > 0)
        <div class="card-footer border-top-0 d-flex align-items-center p-0" style="margin-top: -1px;">
            <div class="btn-group w-100">
                @foreach($footer_links as $link)
                    {!! $link !!}
                @endforeach
            </div>
        </div>
    @endif
</div>
