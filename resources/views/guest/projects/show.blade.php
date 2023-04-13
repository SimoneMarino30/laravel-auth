@extends('layouts.guest')

@section('title', $project->title)

@section('guest-view')
 <div class="card-box">
    <div class="card" style="width: 18rem;">
      <figure>
        <img src="{{ $project->link }}" class="card-img-top" alt="...">
        <figcaption>{{ $project->date }}</figcaption>
      </figure>
      <div class="card-body">
      <h5 class="card-title" style="height: 5rem;">{{ $project->title }}</h5>
      <p class="card-text" style="height: 8rem;">{{ $project->description }}</p>
    </div>
  </div>
  <a href="{{ route('projects.index') }}" class="btn btn-outline-primary">
    Back to projects
  </a>
@endsection