<div class="dropdown">
    <button
        id="{{ $id }}"
        class="btn btn-{{ $btn_class }} dropdown-toggle d-inline-flex h-auto align-items-center"
        type="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
    >
        <span class="d-flex">
            @if($icon)
                <span class="d-inline-flex flex-column justify-content-center h1 m-0 pr-2">
                <i class="{{ $icon }} text-{{ $icon_class }}"></i>
            </span>
            @endif
            <span class="d-inline-flex flex-column justify-content-center">
                <span class="h3 text-bold m-0 text-{{ $title_class }} text-left">{{ $title }}</span>
                @if($description)
                    <span class="h5 m-0 text-{{ $description_class }} text-left">{{ $description }}</span>
                @endif
            </span>
        </span>

    </button>
    <ul class="dropdown-menu" aria-labelledby="{{ $id }}">
        @foreach($items as $item)
            @if($item->hasDivider)
                <hr class="dropdown-divider">
            @endif
            <li><a class="dropdown-item {{$item->isDisabled ? 'disabled' : ''}}"
                   href="{{ $item->link ?? '#' }}">{{$item->value}}</a>
            </li>
        @endforeach
    </ul>
</div>
