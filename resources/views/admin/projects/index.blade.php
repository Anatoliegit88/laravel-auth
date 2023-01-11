@extends('layouts.admin')

@section('content')
<div class="container">
  <h2 class="text-center">List of Projects!!</h2>
  <div class="row justify-content-center">
    <div class="col-8">
      <table class="table bg-slate-500">
        <thead>
          <tr>
              <th scope="col">Title</th>
              <th scope="col">Date</th>
              <th scope="col">Actions</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
        <tr>
          <th scope="row">{{ $project->title }}</th>
             <td>{{ $project->created_at }}</td>
              <td>
              <a class="btn btn-success" href="{{ route('admin.projects.show', $project->slug) }}"><i class="fa-solid fa-eye"></i> </a>
              </td>                 
        </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
</div>
    
@endsection