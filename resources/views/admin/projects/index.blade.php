@extends('layouts.app')

@section('title', 'Projects.index')

@section('content')
<div class="row my-4">
      <form class="col-8 d-flex justify-content-start" role="search">
        <input class="form-control me-2" name="term" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-0" type="submit">Search</button>
      </form>
      <div class="col-4 d-flex justify-content-end">
        <a type="button" href="{{ route('admin.projects.create') }}" class="btn btn-outline-success">Create New Project</a>
      </div>
  </div>

  <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse($projects as $project)
    <tr>
      <th scope="row">{{ $project->id }}</th>
      <td>{{ $project->title }}</td>
      <td>{{ $project->date }}</td>
      <td>
        <a href="{{ route('admin.projects.show', $project) }}">
        <i class="bi bi-eye-fill"></i>
        </a>
      </td>
    </tr>
    @empty
    @endforelse
  </tbody>
</table>
{{ $projects->links() }}
@endsection