@if($with_card)
<div class="card mx-2 my-2">
@endif
<div class="row px-2 py-2">
    <div class="col-sm-4 d-flex align-items-center">
        <div class="d-inline-flex flex-shrink-0 mr-1">
            <span class="badge badge-{{ $class }} d-inline-flex align-items-center m-0">
                {!! $icon !!}
            </span>
        </div>
        <h6 class="m-0">{{ $title }}</h6>
    </div>
    <div class="col-sm-8">
        <span>{{$value_title}}</span>
        {!! $progress !!}
    </div>
</div>
@if($with_card)
</div>
@endif
