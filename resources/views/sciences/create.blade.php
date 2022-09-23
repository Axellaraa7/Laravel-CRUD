@extends('templates.content', ['controller' => 'sciences'])

@section('title', 'Sciences - Create')

@section('page', 'Sciences DB')

@section('main')
  
    @include('templates.formTemplate',[
      'meta' => ['title' => 'New Science','route'=>'sciences.store'],
      'input' => []
    ])
  </section>
@endsection