<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_user extends Controller
{
    /*  CONTROLLER UNTUK USER 
    */

    public function index()
    {
        $data = array(
            'menu' => '',
            'submenu' => ''
        );
        return view('user.blankpage', $data);
    }

    public function viewBuku()
    {
        $buku = DB::table('buku')->get();

        $data = array(
            'menu' => 'buku',
            'submenu' => '',
            'buku' => $buku
        );

        return view('user.pageBuku', $data);
    }

    public function cariBuku(Request $post)
    {
        $buku_dicari = DB::table('buku')->where('judul_buku', 'like', '%' . $post->key . '%')->get();
        $data = array(
            'menu' => 'buku',
            'submenu' => '',
            'buku' => $buku_dicari
        );
        return view('user.pageBuku', $data);
    }
}
