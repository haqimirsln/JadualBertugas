@props(['size' => 'h3'])
@php
    $classes = match ($size) {
        'h1' => 'text-3xl font-bold',
        'h2' => 'text-2xl font-bold',
        'h3' => 'text-xl font-semibold',
        'h4' => 'text-lg font-semibold',
        'h5' => 'text-base font-semibold',
        'h6' => 'text-sm font-semibold',
    };
@endphp
@if ($size == 'h1')
    <h1 {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</h1>
@elseif ($size == 'h2')
    <h2 {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</h2>
@elseif ($size == 'h3')
    <h3 {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</h3>
@elseif ($size == 'h4')
    <h4 {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</h4>
@elseif ($size == 'h5')
    <h5 {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</h5>
@elseif ($size == 'h6')
    <h6 {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</h6>
@endif
