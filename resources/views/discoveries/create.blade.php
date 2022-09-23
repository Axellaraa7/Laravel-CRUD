@extends('templates.content', ['controller' => 'sciences'])

@section('title', 'Sciences - ' . $science->name)

@section('page', 'Sciences DB')

@php
    $routes = ['']
@endphp

@section('main')
  <section class="container960 dFlex flexRowWrap gap1 showSection">
    <figure>
      <img src="{{$science->url}}" alt="Science {{$science->name}}">
    </figure>
    <article>
      <div class="dFlex jcBetween aiCenter gap1">
        <h2 class="letter2h light">{{$science->name}}</h2>
        <x-btnLink link="sciences.index" type="dark">Volver</x-btnLink>
      </div>
      <div class="py-1 letter0h">{{$science->description}}</div>
      <div class="dFlex jcEvenly aiCenter">
        <x-btnLink link="sciences.edit" type="main" :id="$science->id"></x-btnLink>
      </div>
    </article>
  </section>
@endsection