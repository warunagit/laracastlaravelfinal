{{-- @props(['width'=>42,'height'=>42])
<img class="rounded-xl" src="http://placehold.co/{{ $height }}x{{ $width }}" alt="" /> --}}
@props(['employer','width'=>42,'height'=>42])
<img class="rounded-xl" src="storage/{{ $employer->logo }}" alt="" height="{{ $height }}" width="{{ $width }}" {{ getcwd() }}/>
