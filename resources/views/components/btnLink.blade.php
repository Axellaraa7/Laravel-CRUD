@props(['link', 'type'])

@php
$types = [
    'main' => 'btnMain',
    'sec' => 'btnSec',
    'third' => 'btnThird',
    'light' => 'btnLight',
    'dark' => 'btnDark',
];
$btnType = $types[$type];
@endphp

<li><a href="{{ route($link) }}" class="btn {{ $btnType }}">{{ $slot }}</a></li>
