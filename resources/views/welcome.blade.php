@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            
        <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to RioLibrary</h1>
    @if(Auth::guest())
              <a href="/login" class="btn btn-info"> Start Borrowing books</a>
    @endif
   
  </div>
</div>
           
            
        </div>
    </div>
</div>
@endsection 