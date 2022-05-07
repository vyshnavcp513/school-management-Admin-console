@extends('theme.welcome')
@section('title')
student page    
@endsection

@section('content')
<form action="{{route('submit')}}" method="post">
  @csrf
    <div class="form-group">
      <label for="name" class="form-label">name</label>
      <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name" required>
      
    </div>
    <div class="form-group">
        <label for="name">Rollnumber</label>
        <input name="roll_number" type="text" class="form-control" id="rollnumber" aria-describedby="rollnumber" placeholder="Enter your rollnumber" required>
        
      </div>
      <div class="form-group">
        <label for="name">Description</label>
        <input name="description" type="text" class="form-control" id="description" aria-describedby="description" placeholder="description" required>
        
      </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
