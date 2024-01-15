<style>
    .inter-info-label .title{
    color: #FFF;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}

.inter-info-label .description{
    color: #FFF;
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.inter-info-label .icon{
    margin-left: 12px;
    display: flex;
}
</style>
<div class='inter-info-label {{ $class }}'>
    <span class='title'>{{ $title }}:</span>
    <span class='description'>{{ $description }}</span>
    <span class='icon'>{!! $icon !!}</span>
</div>