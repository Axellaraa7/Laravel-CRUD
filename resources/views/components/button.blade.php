@props(['type'])

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

<button class="btn btn{{$btnType}}">{{ $slot }}</button>