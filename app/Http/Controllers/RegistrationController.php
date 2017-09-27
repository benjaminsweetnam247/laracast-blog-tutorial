<?php

namespace Blog\Http\Controllers;

use Blog\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
	public function Create()
	{
			return view('registration.create');
	}

	public function store()
	{
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required',
			'password' => 'required|confirmed'
		]);

		$user = User::create(request(['name', 'email', 'password']));

		auth()->login($user);

		return redirect()->home();
	}
}
