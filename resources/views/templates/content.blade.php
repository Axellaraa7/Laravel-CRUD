@extends('templates.template')

@php
    $routes = ['.index' => 'Home', '.create' => 'Create']
@endphp
@section('body')
  <header class="dFlex jcBetween">
    <h1 class="letter3h light">@yield('page')</h1>
    <nav class="dFlex aiCenter gap1h">
      @foreach ($routes as $index=>$route)
        <x-btnLink type="main" :link="$controller.$index">{{ $route }}</x-btnLink>
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
