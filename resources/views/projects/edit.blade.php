@extends('layouts.app')

@section('content')


  <div class="container">
    <h1>Modifica Progetto:</h1>
    <h2>"{{ $project->title }}"</h2>
  </div>
  

  <div class="container">
    <form action="{{ route('projects.update',$project) }}" method="POST">

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
      </div>
      <div class="mb-3">
        <label for="client" class="form-label">Cliente</label>
        <input type="text" class="form-control" id="client" name="client" value="{{ $project->client}}" >
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $project->description}}" >
      </div>

      <div class="mb-3">
        <label for="url" class="form-label">Url</label>
        <input type="text" class="form-control" id="url" name="url" value="{{ $project->url}}" >
      </div>

      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{ $project->slug}}" >
      </div>
      

      <button type="submit" class="btn btn-primary">MODIFICA E SALVA</button>


    </form>
  </div>
    
@endsection