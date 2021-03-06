<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('student', function (Blueprint $table) 
     {      $table->increments('id');
            $table->timestamps();
            $table->string('email')->index();
            $table->string('name');
            $table->string('password');
            $table->integer('classroom_id')->unsigned();
           $table->foreign('classroom_id')->references('id')->on('classroom');
           $table->softDeletes();
            
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
    }
}
