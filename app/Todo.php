<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
	use SoftDeletes;

	protected $guarded=[];

	protected $dates = ['deleted_at'];
	
	public function comments(){
		return $this->morphMany(Comment::class,'commentable');
	}
}