@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                @if(Auth::check())
                    @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    @if  (Auth::user()->usertype == 0)
                                <div class="alert">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="searchbook" placeholder="Search for title,genre or section">
                                        </div>
                                        <div class="col-md-1">
                                            
                                                <a href="/books/create">
                                                <button class="btn btn-main">
                                                Add Book
                                                </button>
                                                </a>
                                            
                                            
                                        </div>

                                    </div>
                                </div>
                                <table class="table">
                                <thead class="thead-light">
                                <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Section</th>
                                <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody  id="tabid">
                                @foreach($books as $book)
                                <tr >
                                <td>
                                <a href="/books/{{$book->id}}">{{$book->book_title}}</a><br>
                                @if ($book->book_borrowed == 1)<mark><font color="red">BOOK BORROWED</font></mark> @endif 
                                </td>
                                <td>{{$book->book_auth}}</td>
                                <td>{{$book->book_genre}}</td>
                                <td>{{$book->book_section}}</td>
                                <td>
                                <div class="btn-group" role="group" aria-label="Basic example">                      
                                @if ($book->book_borrowed == 0)
                                <a href="{{ URL::to('books/' . $book->id . '/borrowed') }}">
                                <button type="button" class="btn btn-secondary">Borrow</button>  
                                </a>&nbsp;
                                @endif    
                                
                                @if ($book->book_borrowed == 1)
                                <a href="{{ URL::to('books/' . $book->id . '/borrowed') }}">
                                <button type="button" class="btn btn-secondary">Return</button>  
                                </a>&nbsp;
                                @endif 

                                <a href="{{ URL::to('books/' . $book->id . '/edit') }}">
                                <button type="button" class="btn btn-warning">Edit</button>
                                </a>&nbsp;
                                <form action="{{url('books', [$book->id])}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-danger" value="Delete"/>
                                </form>
                                </div>
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                                </table>
                        @endif
                        @if  (Auth::user()->usertype == 1)
                        <div class="alert">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="searchbook" placeholder="Search for title,genre or section">
                                        </div>
                                        

                                    </div>
                                </div>
                                <table class="table">
                                <thead class="thead-light">
                                <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Section</th>
                                <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody  id="tabid">
								@if (count($books)<1) 
                                <tr >
                                <td colspan="5">No available books</td>
                                
                                <td>
                                @endif
                                @foreach($books as $book)
                                <tr>
                                <td><a href="/books/{{$book->id}}">{{$book->book_title}}</a></td>
                                <td>{{$book->book_auth}}</td>
                                <td>{{$book->book_genre}}</td>
                                <td>{{$book->book_section}}</td>
                                <td>
                                <div class="btn-group" role="group" aria-label="Basic example">                      
                                @if ($book->book_borrowed == 0)
                                <a href="{{ URL::to('books/' . $book->id . '/borrowed') }}">
                                <button type="button" class="btn btn-secondary">Borrow</button>  
                                </a>&nbsp;
                                @endif      
                                
                                </div>
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                                </table>                           

                        @endif

                   @endif 
                   
                </div>    
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('js/books.js')}}"></script>
@endsection