<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        //si recibe datos por post
        if ($this->request->getMethod() == 'post') {
            d($_POST);
        }

        return view('Login/login');
    }

    public function verificar()
    {
        d($_POST);
    }

    //funcion para registrar usuarios
    public function registrate()
    {
        //si recibe datos por post
        if ($this->request->getMethod() == 'post') {
            d($_POST);
        }

        return view('Login/register');
    }

    //funcion para restablecer clave
    public function restablecerclave()
    {
        //si recibe datos por post
        if ($this->request->getMethod() == 'post') {
            d($_POST);
        }

        return view('Login/restablecerclave');
    }
}
