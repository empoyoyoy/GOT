<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('usertype');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'id'  => 1,
                'name'  => 'librarian' , 
                'email'  => 'librarian@riolibrary.com', 
                'password'  => '$2y$10$k1bF4k6G8.10hfOUJa4ZkuywuEFK7piRWQDhrYSg9KgiGMHsYan22', 
                'usertype'  => '0',
                'remember_token'  => NULL, 
                'created_at'  => NULL,
                'updated_at'  => NULL
            )
            
        );

        DB::table('users')->insert(
            array(
                'id'  => 2,
                'name'  => 'bookworm' , 
                'email'  => 'bookworm@riolibrary.com', 
                'password'  => '$2y$10$J/kXKfyX0vjc/sqJJvcoUuitGlJOrXTVqavG8r1rPrAgJVCLJg7Cu', 
                'usertype'  => '1',
                'remember_token'  => NULL, 
                'created_at'  => NULL,
                'updated_at'  => NULL
            )
        );


        DB::statement("ALTER TABLE users AUTO_INCREMENT = 3;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
