<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	public function scopeIncomplete($query) 
	{
		return $query->where('completed', 0);
	}
}
