@extends('templates.template')

@section('title', 'Scientist DB')

@section('body')
  <main class="dGrid pcCenter maxVh">
    <h1 class="letter7 light">Scientist DB</h1>
    <ul class="dFlex gap2 jcCenter">
      <x-btnLink link='sciences.index' type='light'> Sciences </x-btnLink>
      <x-btnLink link='scientists.index' type='light'> Scientists </x-btnLink>
      <x-btnLink link='discoveries.index' type='light'> Discoveries </x-btnLink>
    </ul>
  </main>
@endsection
