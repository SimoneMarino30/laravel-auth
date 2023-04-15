@extends('layouts.app')

@section('title', 'Projects.create')

@section('content')
  <h1 class="my-3">Insert details :</h1>
<form 
action="{{ route('admin.projects.store') }}" 
enctype="multipart/form-data" 
method="POST" class="row gy-3">

@csrf

<div class="col-6">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
  @error('title')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-6">
  <label for="date" class="form-label">Date</label>
  <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}">
  @error('date')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-6">
  <label for="description" class="form-label">Description</label>
  <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}">
  @error('description')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-12">
  <label for="link" class="form-label">Link</label>
  <input type="file" class="form-control @error('link') is-invalid @enderror" id="link" name="link"  value="{{ old('link') }}">
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