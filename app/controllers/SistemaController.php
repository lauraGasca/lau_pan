<?php

use Panaderia\Repositories\UserRepo;

class SistemaController extends BaseController
{
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->userRepo = $userRepo;
    }
    
    public function getIndex()
    {
        return View::make('layouts.login');
    }

    public function postLogin()
    {
        $data = Input::all();

        $credentials = ['user' => $data['user'], 'password' => $data['password']];

        if (Auth::attempt($credentials, Input::get('remember')))
        {
            return Redirect::to('suscripciones');
        }
        return Redirect::back()->with('login_errors', true)->withInput();

    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('sistema');
    }
}