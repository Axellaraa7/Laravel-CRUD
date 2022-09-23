@extends('templates.content', ['controller' => 'sciences'])

@section('title', 'Sciences - ' . $science->name)

@section('page', 'Sciences DB')

@php
    $routes = ['.edit' => 'Edit', '.destroy' => 'Delete']
@endphp

@section('main')
  <section class="container960 dFlex flexRowWrap aiCenter gap1 showSection">
    <figure>
      <img src="{{$science->url}}" alt="Science {{$science->name}}">
    </figure>
    <article class="dFlex flexColumnWrap">
      <div class="dFlex jcBetween aiCenter gap1">
        <h2 class="letter2h light">{{$science->name}}</h2>
        <x-btnLink link="sciences.index" model="dark">Volver</x-btnLink>
      </div>
      <div class="py-1 letter0h flexAuto textJustify">{{$science->description}}</div>
      <div class="dFlex jcEvenly aiCenter py-1">
        <x-btnLink link="sciences.edit" model="main" :id="$science->id">Edit</x-btnLink>
        <x-button model="main" id="delete">Delete</x-button>
      </div>
    </article>
  </section>
  <x-modal :id="$science->id" title="Title of the modal">Are you sure you want to delete this element -> {{$science->name}}?</x-modal>
@endsection