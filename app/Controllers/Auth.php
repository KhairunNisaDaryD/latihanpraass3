<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		if ($this->request->getMethod() === 'post'){

			return'Disini Proses Login';
		}

		return view('auth/login');
	}
}
