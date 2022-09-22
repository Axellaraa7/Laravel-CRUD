@props(['type'])

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

<button class="btn {{ $btnType }}">{{ $slot }}</button>