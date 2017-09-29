<?php

namespace Blog\Http\Controllers;

use Blog\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
	public function Create()
	{
			return view('registration.create');
	}

	public function store(RegistrationRequest $form)
	{
		$form->persist();

		session()->flash('message', 'Thanks for all the fish!');

		return redirect()->home();
	}
}
