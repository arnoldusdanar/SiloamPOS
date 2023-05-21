<?php

namespace App\Controllers;

class Kasir extends BaseController
{
    public function index()
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
