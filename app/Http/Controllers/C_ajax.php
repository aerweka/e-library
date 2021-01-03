<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_ajax extends Controller
{
    function index()
    {
        return view('ajax');
    }

    function tesAjax()
    {
        return 'Ajax Sukses';
    }
}
