@extends('templates.content', ['controller' => 'sciences'])

@section('title', 'Sciences - Home')

@section('page', 'Sciences DB')

@section('main')
  @if(session('alert'))
    <x-alert model="main">{{session('alert')}}</x-alert>
  @endif
  <div class="container960 dFlex flexRowWrap jcEvenly gap1">
    @foreach ($sciences as $science)
      <x-card1 :img="$science->url" :title="$science->name" :body="$science->description" controller="sciences" :id="$science->id"/>
    @endforeach
  </div>
@endsection
