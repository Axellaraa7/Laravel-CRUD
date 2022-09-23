@props(['model'])

@php
$models = [
    'main' => 'Main',
    'sec' => 'Sec',
    'third' => 'Third',
    'light' => 'Light',
    'dark' => 'Dark',
];
$btnModel = $models[$model];
@endphp

<button {{$attributes->merge(['class' => 'btn btn'.$btnModel])}} >{{ $slot }}</button>