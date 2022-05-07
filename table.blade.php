@extends('theme.welcome')
@section('title')
table form
@endsection
@section('content')
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th style="color: black">Name</th>
            <th style="color: black">Qualification</th>
            <th style="color: black">age</th>
            <th style="color: black">course</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
        <tr>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->qualification}}</td>
            <td>{{$teacher->age}}</td>
            <td>{{$teacher->course}}</td>
            <td>
                <a  class="btn btn-primary" href="{{route('admin.editTeachers',$teacher->id)}}">edit</a>
            </td>
            <td>
                
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$teacher->id}}">
                    Delete
                  </button>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>

@foreach ($teachers as $teacher)
{{-- laravel modaal  --}}
<div class="modal fade" id="exampleModal{{$teacher->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Do you really want to delete this?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a type="button" class="btn btn-primary" href="{{route('admin.deleteTeachers',$teacher->id)}}">Delete</a>
        </div>
      </div>
    </div> 
  </div>
@endforeach
@endsection