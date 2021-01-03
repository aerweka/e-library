<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_blankpage extends Controller
{
    public function index()
    {
        $data = array(
    		'menu' => '',
			'submenu' => ''
        );
        
    	return view('admin/blankpage', $data);
    }
    
}   