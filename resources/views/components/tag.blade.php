@props(['tag', 'size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 transition-colors duration-300 font-bold rounded-xl ms-1";
    if($size === 'base'){
        $classes .= " px-5 py-1 text-sm";
    }    

    if($size === 'small'){
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp

<a class="{{ $classes }}" href="/tag/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>
           