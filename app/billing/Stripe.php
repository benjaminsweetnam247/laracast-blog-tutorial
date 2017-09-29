<?php

namespace Blog\Billing;

class Stripe
{
	protected $key;

	public function __construct($key)
	{
		$this->key = $key;
	}
}