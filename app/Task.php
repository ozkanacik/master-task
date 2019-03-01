<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	public $timestamps = false;
	protected $table = "tasks";
    protected $fillable = ['title','overview','badge','assigned_user_id'];
   protected $guarded=["id"];


}
