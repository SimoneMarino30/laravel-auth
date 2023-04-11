@extends('layouts.app')

@section('title', 'Projects')

@section('content')
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