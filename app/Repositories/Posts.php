<?php

namespace Blog\Repositories;

use Blog\Post;
use Blog\Redis;

class Posts
{
	protected $redis;

	public function __construct(Redis $redis)
	{
		$this->redis = $redis;
	}

	public function all()
	{
		return Post::all();
	}
}