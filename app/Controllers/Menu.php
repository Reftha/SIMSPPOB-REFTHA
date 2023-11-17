<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function pbb()
    {
        return view('menu/pbb');
    }
    public function listrik()
    {
        return view('menu/listrik');
    }
    public function pulsa()
    {
        return view('menu/pulsa');
    }
    public function pdam()
    {
        return view('menu/pdam');
    }
    public function pgn()
    {
        return view('menu/pgn');
    }
    public function tv()
    {
        return view('menu/tv');
    }
    public function musik()
    {
        return view('menu/musik');
    }
    public function vg()
    {
        return view('menu/vg');
    }
    public function vm()
    {
        return view('menu/vm');
    }
    public function kurban()
    {
        return view('menu/kurban');
    }
    public function zakat()
    {
        return view('menu/zakat');
    }
    public function paket()
    {
        return view('menu/paket');
    }
    public function edit_akun()
    {
        return view('menu/edit_akun');
    }
}