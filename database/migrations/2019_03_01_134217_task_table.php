<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaskTable extends Migration
{
        public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',500);
                 $table->string('overview',550);
             $table->integer('badge');
                 $table->integer('assigned_user_id');
          
        });
    }



   
}
