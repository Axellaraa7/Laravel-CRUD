@props(['type'])

@php
 $types = [
  'main' => 'Main',
  'sec' => 'Sec',
  'third' => 'Third',
  'light' => 'Light',
  'dark' => 'Dark'
];
  $alert = $types[$type];   
@endphp

<div class="alert alert{{$alert}}">{{ $slot }}</div>