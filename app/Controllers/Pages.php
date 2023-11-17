<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }
    public function topup(): string
    {
        return view('pages/topup');
    }
    public function transaction()
    {
        return view('pages/transaction');
    }
    public function akun()
    {
        return view('pages/akun');
    }
    public function login()
    {
        return view('pages/login');
    }
    public function registration()
    {
        return view('pages/registration');
    }
}
