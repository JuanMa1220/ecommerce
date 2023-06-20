<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        helper('url');
        return view('Home');
    }
}