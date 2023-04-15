@extends('layouts.app')

@section('title', 'Projects.edit')

{{-- @section('cdn')
Bootstrap Icons
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection --}}

@section('content')

<h1 class="my-3 text-success">Edit details of project n° {{ $project->id }}:</h1>

<form action="{{ route('admin.projects.update', $project) }}" method="POST" class="row gy-3">
  @csrf
  @method('PUT')

<div class="col-6">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" 
  value="{{ old('title') ?? $project->title }}">
  @error('title')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-6">
  <label for="date" class="form-label">Date</label>
  <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" 
  value="{{ old('date') ?? $project->date}}">
  @error('date')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-6">
  <label for="description" class="form-label">Description</label>
  <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" 
  value="{{ old('description') ?? $project->description }}">
  @error('description')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-12">
  <label for="link" class="form-label">Link</label>
  <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link"  
  value="{{ old('link') ?? $project->link }}">
  @error('link')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-12 d-flex">
  <button type="submit" class="btn btn-outline-success ms-auto">Save</button>
</div>

</form>
@endsection