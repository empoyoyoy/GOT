<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_title')->nullable()->default(null);
            $table->string('book_auth')->nullable()->default(null);
            $table->string('book_desc')->nullable()->default(null);
            $table->string('book_yr')->nullable()->default(null);
            $table->string('book_genre')->nullable()->default(null);
            $table->string('book_section')->nullable()->default(null);
            $table->string('book_added_by')->nullable()->default(null);
            $table->dateTime('created_at')->nullable()->default(null);
            $table->string('book_updated_by')->nullable()->default(null);
            $table->dateTime('updated_at')->nullable()->default(null);
            $table->boolean('book_removed')->nullable()->default(null);
            $table->boolean('book_borrowed')->nullable()->default(null);
            $table->string('book_borrowed_by')->nullable()->default(null);
            $table->dateTime('book_borrowed_date')->nullable()->default(null);
            $table->dateTime('book_returned_date')->nullable()->default(null);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('books');
    }
}
