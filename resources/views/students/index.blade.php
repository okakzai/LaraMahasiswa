@extends('layout/main')
@section('title','Daftar Student')
@section('container')
  <div class="container">
      <div class="row">
        <div class="col-10">  
          <h1 class="mt-3">Daftar Student</h1>
          	<a href="{{ url('/students') }}/create" class="btn btn-primary my-3">Tambah Data Student</a>
			@if (session('status'))
    		<div class="alert alert-success">
        		{{ session('status') }}
    		</div>
			@endif
			<ul class="list-group">
				@foreach($students as $student)
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				    {{$student->nama}}
				    <a href="{{ url('/students') }}/{{$student->id}}" class="badge badge-info">Detail</a>
				  </li>  
				@endforeach
			</ul>
        </div>
      </div>
  </div>
@endsection    