@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Update Book</strong></div>

                <div class="card-body">
                    <form action="{{url('books', [$book->id])}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for="title">Book Title</label>
                    <input type="text" value="{{$book->book_title}}" class="form-control" id="bookTitle"  name="b_title">
                    </div>
                    <div class="form-group">
                    <label for="description">Book Author</label>
                    <input type="text" value="{{$book->book_auth}}" class="form-control" id="bookAuth" name="b_auth">
                    </div>
                    <div class="form-group">
                    <label for="description">Genre</label>
                    <input type="text" value="{{$book->book_genre}}" class="form-control" id="bookGenre" name="b_genre">
                    </div>
                    <div class="form-group">
                    <label for="description">Section</label>
                    <input type="text" value="{{$book->book_section}}" class="form-control" id="bookSection" name="b_sect">
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{ url('/books') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection