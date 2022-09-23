@props(['link', 'model', 'id'])

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

<li><a href="{{ isset($id) ? route($link,$id) : route($link) }}" class="btn btn{{$btnModel}}">{{ $slot }}</a></li>
