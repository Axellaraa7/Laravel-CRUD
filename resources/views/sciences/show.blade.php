@extends('templates.content', ['controller' => 'sciences'])

@section('title', 'Sciences - ' . $science->name)

@section('page', 'Sciences DB')

@php
    $routes = ['.edit' => 'Edit', '.destroy' => 'Delete']
@endphp

@section('main')
  <section class="container960 dFlex flexRowWrap gap1 showSection">
    <figure>
      <img src="{{$science->url}}" alt="Science {{$science->name}}">
    </figure>
    <article class="dFlex flexColumnWrap">
      <div class="dFlex jcBetween aiCenter gap1">
        <h2 class="letter2h light">{{$science->name}}</h2>
        <x-btnLink link="sciences.index" type="dark">Volver</x-btnLink>
      </div>
      <div class="py-1 letter0h flexAuto">{{$science->description}}</div>
      <div class="dFlex jcEvenly aiCenter py-1">
        @foreach($routes as $index=>$route)
          <x-btnLink :link="'sciences'.$index" type="main" :id="$science->id">{{ $route }}</x-btnLink>
        @endforeach
      </div>
    </article>
  </section>
@endsection