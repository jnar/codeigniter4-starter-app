<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!auth()->loggedIn()) {
            return redirect()->to(base_url('login'));
        }
        return view('dashboard');
    }
}
