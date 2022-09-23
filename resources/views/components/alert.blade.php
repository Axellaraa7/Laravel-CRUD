@props(['model'])

@php
 $models = [
  'main' => 'Main',
  'sec' => 'Sec',
  'third' => 'Third',
  'light' => 'Light',
  'dark' => 'Dark'
];
$alertModel = $models[$model];   
@endphp

<div class="alert alert1 alert{{$alertModel}}">{{ $slot }}</div>