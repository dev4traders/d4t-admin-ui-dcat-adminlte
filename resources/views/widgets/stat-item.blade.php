@if($with_card)
    <div class="card mx-2 my-2">
        @endif
        <div class="d-flex px-2 py-2">
            <div class="d-inline-flex flex-shrink-0 mr-1">
                <span class="badge badge-{{ $icon_class }} d-inline-flex align-items-center">
                    {!! $icon !!}
                </span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="d-inline-flex me-2 {{ $inverse ? 'flex-column-reverse' : 'flex-column' }}">
                    <h6 class="mb-0">{{ $title }}</h6>
                    @if($description)<small class="text-muted">{{ $description }}</small>@endif
                </div>
                @if($value)
                    {!! $value !!}
                @endif
            </div>
        </div>
        @if($with_card)
    </div>
@endif
