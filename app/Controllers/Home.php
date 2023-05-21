<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Auth/Login');
    }
    public function kasir()
    {
        return view('Kasir/TransaksiBarang');
    }
    public function Grosir()
    {
        return view('Kasir/TransaksiGrosir');
    }
    public function Nakes()
    {
        return view('Kasir/TransaksiNakes');
    }
}
