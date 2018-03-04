@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @foreach ($book as $object)
               
                @if ($object->book_borrowed == 1)
                <div class="card-header alert alert-fail">
                    <strong>Book Borrowed</strong>
                </div>
                @endif
                @if ($object->book_borrowed == 0)
                <div class="card-header alert alert-success">
                    <strong>Book Available</strong>
                </div>
                @endif

                  
                    <div class="card-body">
                    @if ($object->book_borrowed == 0)   
                    <form action="{{url('books/borrow', [$object->id])}}" method="POST">
                    @endif

                    @if ($object->book_borrowed == 1)   
                    <form action="{{url('books/breturn', [$object->id])}}" method="POST">
                    @endif

                    <input type="hidden" name="_method" value="PUT">
                    <p class="card-text">
                    <strong>Book Title:</strong> {{ $object->book_title }}<br>
                    <strong>Author:</strong> {{ $object->book_auth }}<br>
                    <strong>Genre:</strong> {{ $object->book_genre }}<br>
                    <strong>Section:</strong> {{ $object->book_section }}<br>   
                    @if ($object->book_borrowed == 1)
                    <strong>Borrowed by:</strong> {{ $object->book_borrowed_by }}<br>
                    <strong>Borrowed by:</strong> {{ $object->book_borrowed_date }}<br>
                    @endif 
                    </p>
                    {{ csrf_field() }}
                    @if ($object->book_borrowed == 0) 
                    
                    @if  (Auth::user()->usertype == 0)   
                    <div class="form-group">              
                    <label for="description">Borrowed By</label>
                    <input type="text" class="form-control" id="bookSection" name="b_bby">
                    </div>
                    @endif
                    @if  (Auth::user()->usertype == 1)
                    <div class="form-group">              
                    <label for="description">Borrowed By:</label><br>
                    <label for="description">{{Auth::user()->name}}</label>
                    <input type="text" value="{{Auth::user()->name}}" hidden class="form-control" id="bookSection" name="b_bby">
                    </div>
                    @endif

                    <div class="form-group">
                    <label for="description">Borrowed Date</label>
                    <input type="date" class="form-control" id="bookSection" name="b_bdate">
                    </div>
                    @endif   

                    @if ($object->book_borrowed == 1)
                    <div class="form-group">                      
                    <label for="description">Return Date</label>
                    <input type="date" class="form-control" id="bookSection" name="b_rdate">
                    </div>
                    @endif


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
                    
            @endforeach
            

            </div>
        </div>
    </div>
</div>
@endsection



                