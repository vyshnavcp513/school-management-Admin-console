@extends('theme.welcome')
@section('title')
teacher form 
@endsection
@section('content')
<form action="{{route('admin.saveTeacher')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name" class="required form-label">name<small class="text-danger">*</small></label>
      <input type="text" class="form-control" name="name" aria-describedby="name" placeholder="Enter yor name " required>
    </div>
    <div class="form-group">
      <label for="age">age<small class="text-danger">*</small></label>
      <input type="text" class="form-control" name="age" placeholder="enter you age" required>
    </div>
    <div class="form-group">
        <label for="qualification">qualification<small class="text-danger">*</small></label>
        <input type="text" class="form-control" name="qualification" placeholder="enter your qualification" required>
      </div>

      <div class="form-group">
        <label for="course">course</label>
        <input type="text" class="form-control" name="course" placeholder="enter the course">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
