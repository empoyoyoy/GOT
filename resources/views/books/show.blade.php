@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $book->book_title }}</div>

                <div class="card-body">
                    <p>
                    <strong>Book Title:</strong> {{ $book->book_title }}<br>
                    <strong>Author:</strong> {{ $book->book_auth }}<br>
                    <strong>Genre:</strong> {{ $book->book_genre }}<br>
                    <strong>Section:</strong> {{ $book->book_section }}<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection