@extends('layouts.app')

@section('title', $project->title)

@section('content')
  {{-- @dump($project) --}}
<section class="clearfix">
  <h3 class="my-5">{{ $project->title }}</h3>
  <img src="{{ $project->link }}" alt="" class="float-start mx-3">
  <p class="py-5">{{ $project->date }}: {{ $project->description }}</p>
  
</section>
  <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-primary my-5 mx-3">
  Back to list
  </a>
@endsection

