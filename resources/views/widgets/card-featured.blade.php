<style>
    .inter .inter-body{
    gap: 0 28px;
}

.inter .inter-live-outer{
    position: relative;
    margin-left: 25px;
}

.inter .inter-live-outer .inter-live-bg{
    background: linear-gradient(79deg, #E83CF4 0.92%, #5AC6DA 97.8%);
    width: 128px;
    height: 128px;
    opacity: 0.2;
    border-radius: 50%;
}

.inter .inter-live{

    border-radius: 50%;
    position: absolute;
    left: 17px;
    top: 17px;
    width: 95px;
    height: 95px;
    background: linear-gradient(79deg, #E83CF4 0.92%, #5AC6DA 97.8%);
    color: #FFF;
    font-size: 25px;
    font-style: normal;
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: center;
}

.inter .inter-title{
    color: #FFF;
    font-size: 42px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}

.inter .inter-info-labels{
    gap: 12px;
}

.inter .inter-info-label{
    padding: 5px 10px;
    border-radius: 20px;
    background: #2E2E2E;
    display: flex;
    align-items: center;
}


.inter .inter-buttons{
    margin: -30px;
    margin-top: 30px;
    border-top: 1px solid #383838;
    display: flex;
}

.inter .inter-button{
    padding: 25px;
    flex-basis: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.inter .inter-button:not(:last-child){
    border-right: 1px solid #383838;
}

.inter .inter-button .icon{
    margin-right: 12px;
}

.inter .inter-button .text{
    color: #FFF;
    font-size: 22px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
</style>
<div class="inter {{ empty($class) ? '' : 'bg-'.$class }}">
    <div class='inter-body d-flex'>
        <div class='inter-live-outer'>
            <div class='inter-live-bg'></div>
            <div class='inter-live'>{!! $icon !!}</div>
        </div>
        <div class='inter-body d-flex flex-column justify-content-center'>
            <p class='inter-title'>{{ $title }}</p>
            <div class='inter-info-labels d-flex'>
                @foreach($features as $feature)
                    {!! $feature !!}
                @endforeach
            </div>
        </div>
    </div>
    @if(count($footerItems) > 0)
        <div class='inter-buttons'>
        @foreach($footerItems as $item)
            {!! $item !!}
        @endforeach
        </div>
    @endif
</div>