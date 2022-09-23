@extends('templates.content', ['controller' => 'sciences'])

@section('title', 'Sciences - ' . $science->name)

@section('page', 'Sciences DB')

@section('main')
  <section class="container960 dFlex flexRowWrap gap1">
    <figure>
      <img src="{{$science->url}}" alt="Science {{$science->name}}">
    </figure>
    <div>
      <h2>{{$science->name}}</h2>
      <p>{{$science->description}}</p>
    </div>
  </section>
@endsection