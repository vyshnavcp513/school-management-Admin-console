@extends('theme.welcome')
@section('title')
Home Page
@endsection
@section('content')
<a type="button" class="btn btn-primary" href="{{route('admin.viewCreateTeachers')}}">add teacher</a>

<a type="button" class="btn btn-primary" href="{{route('admin.viewTeachers')}}">View Teachers</a>
@endsection