@props(['tag','size'=>'base'])
@php
    $classes = 'bg-white/10 hover:bg-violet-600 rounded-xl font-bold tarsnsition-colors duration-300 ';
    //$classes = 'bg-white/10  px-3 py-1 rounded-xl text-[.625rem] font-bold tarsnsition-colors duration-300 hover:bg-violet-600';
    if($size==='base'){
        $classes .= ' px-5 py-1 text-[.800rem]';
    }
    if($size==='small'){
        $classes .= ' px-3 py-1 text-[.625rem]';
    }
@endphp
<a class="{{ $classes }}" href="/tags/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>
