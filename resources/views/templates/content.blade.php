@extends('templates.template')

@php
    $routes = ['.index' => 'Home', '.create' => 'Create']
@endphp
@section('body')
  <header class="dFlex jcBetween">
    <h1 class="letter3h light">@yield('page')</h1>
    <nav class="dFlex aiCenter gap1h">
        <x-btnLink model="main" link="welcome">Science BD</x-btnLink>
      @foreach ($routes as $index=>$route)
        <x-btnLink model="main" :link="$controller.$index">{{ $route }}</x-btnLink>
      @endforeach
    </nav>
  </header>
  <main>
    @section('main')
    @show
  </main>
  <footer>
    
  </footer>
@endsection
