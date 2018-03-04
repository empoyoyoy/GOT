<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $fillable = [
        'book_id','book_title','book_auth','book_desc','book_yr','book_genre','book_section','book_added_by','created_at',
        'book_updated_by','updated_at','book_removed','book_borrowed','book_borrowed_by','book_borrowed_date','book_returned_date'
    ];

    

    
}
