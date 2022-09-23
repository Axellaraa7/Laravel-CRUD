@props(['link', 'type', 'id'])

@php
$types = [
    'main' => 'Main',
    'sec' => 'Sec',
    'third' => 'Third',
    'light' => 'Light',
    'dark' => 'Dark',
];
$btnType = $types[$type];
@endphp

<li><a href="{{ isset($id) ? route($link,$id) : route($link) }}" class="btn btn{{$btnType}}">{{ $slot }}</a></li>
