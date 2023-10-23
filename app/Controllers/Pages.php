<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function signin(): string
    {
        return view('templates/header')
            . view('pages/signin')
            . view('templates/footer');
    }
    public function signup(): string
    {
        return view('templates/header')
            . view('pages/signup')
            . view('templates/footer');
    }
    public function forgotpassword(): string
    {
        return view('templates/header')
            . view('pages/forgotpassword')
            . view('templates/footer');
    }
}
