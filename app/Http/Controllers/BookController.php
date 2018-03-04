<?php

namespace App\Http\Controllers;
use App\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    
     public function index()
     {
         if(Auth::user()){
             if(Auth::user()->usertype == 0) {
                $books = Books::all();
                return view('books.index',compact('books',$books));
             }else if(Auth::user()->usertype == 1){
                $books = DB::table('books')->where('book_borrowed', '=', 0)->get();
                return view('books.index',compact('books',$books));
                
             }
         }else{
            return redirect('login');
         }
     }
 
     public function create()
     {
        if(Auth::user()){
             return view('books.create');
        }else{
            return redirect('login');
        }     
     }
 
     public function store(Request $request)
     {
        if(Auth::user()){
            $request->validate([
                'b_title' => 'required',
                'b_genre' => 'required',
                'b_sect' => 'required',
                'b_auth' => 'required',
            ]);
            
            $book = Books::create([
                'book_title' => $request->b_title,
                'book_auth' => $request->b_auth,
                'book_genre' => $request->b_genre,
                'book_section' => $request->b_sect,
                'book_borrowed' => 0
            
            ]);
            $request->session()->flash('message', 'Book Successfully Added!');
            return redirect('books');

        }else{
            return redirect('login');
        }       
     }


    public function show(Books $book)
    {
        if(Auth::user()){
            return view('books.show',compact('book',$book));
        }else{
            return redirect('login');
        }      
    }


    public function edit(Books $book)
    {
        if(Auth::user()){
            return view('books.edit',compact('book',$book));
        }else{
            return redirect('login');
        }     
    }

    public function update(Request $request, Books $book)
    {
        if(Auth::user()){
            $request->validate([
                'b_title' => 'required',
                'b_genre' => 'required',
                'b_sect' => 'required',
                'b_auth' => 'required',
            ]);
            
            $book->book_title = $request->b_title;
            $book->book_auth = $request->b_auth;
            $book->book_genre = $request->b_genre;
            $book->book_section = $request->b_sect;

            $book->save();
            $request->session()->flash('message', 'Book Successfully modified!');
            return redirect('books');
        }else{
            return redirect('login');
        } 
    }    

    public function destroy(Request $request, Books $book)
    {
        if(Auth::user()){
            $book->delete();
            $request->session()->flash('message', 'Book Successfully deleted!');
            return redirect('books');
        }else{
            return redirect('login');
        } 
    }

    public function borrowed($id, Books $book)
    {
        if(Auth::user()){
            $book = DB::table('books')->where('id', '=', $id)->get();
            return view('books.borrowed',compact('book',$book));
           //var_dump($book);
           //echo $books;
        }else{
            return redirect('login');
        }     
    }

    
    public function borrowed_update(Request $request,$id,Books $book)
    {
        if(Auth::user()){    
            $request->validate([
                'b_bby' => 'required',
                'b_bdate' => 'required',
            ]);
                    
            DB::table('books')
             ->where('id', $id)
             ->update(['book_borrowed' => 1,'book_borrowed_by' => $request->b_bby,'book_borrowed_date' => $request->b_bdate]);

             $request->session()->flash('message', 'Book Successfully Borrowed!');
            return redirect('books');
        }else{
            return redirect('login');
        }  
    }


    public function borrowed_return(Request $request,$id,Books $book)
    {
        if(Auth::user()){    
            $request->validate([
                'b_rdate' => 'required',
            ]);
                    
            DB::table('books')
             ->where('id', $id)
             ->update(['book_borrowed' => 0,'book_returned_date' => $request->b_rdate]);

             $request->session()->flash('message', 'Book Successfully Returned!');
             return redirect('books');
        }else{
            return redirect('login');
        }  
    }

}
