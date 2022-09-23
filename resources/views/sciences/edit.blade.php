@extends('templates.content', ['controller' => 'sciences'])

@section('title', 'Sciences - ' . $science->name)

@section('page', 'Sciences DB')

@section('main')
  @include('templates.formTemplate', [
    'meta' => ['title' => 'Edit '.$science->name, 'route' => 'sciences.update', 'method' => 'put'],
    'inputs' => [] 
  ])
@endsection