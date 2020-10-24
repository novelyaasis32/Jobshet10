<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
         Schema::create('user', function (Blueprint $table) {  
         $table->bigIncrements('id'); 
         $table->string('title'); 
         $table->string('author'); 
         $table->string('publication'); 
         $table->unsignedInteger('year'); 
         $table->timestamps(); 
         }); 
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
