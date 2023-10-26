<?php

namespace App\Controllers;

class PagesController extends BaseController
{
    private function render($ViewFile):string
    {
        return view('templates/header')
        . view('component/alert')
        . view('pages/'.$ViewFile)
        . view('templates/footer');
    }
    
    public function signin(): string
    {
        return $this->render('signin');
    }

    public function signup(): string
    {
        return $this->render('signup');
    }

    public function forgotpassword(): string
    {
        return $this->render('forgotpassword');
    }

    public function home(): string
    {
        return $this->render('home');
    }
}
