<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_eksemplar extends Controller
{
    public function eksemplar()
    {
        $eksemplar = DB::table('eksemplar_buku')->get();
        $buku = DB::table('buku')->get();

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'eksemplar_buku',
            'eksemplar' => $eksemplar,
            'buku' => $buku
        );

        return view('admin.eksemplar.pageEksemplar', $data);
    }

    // public function addEksemplar()
    // {
    //     $eksemplar = DB::table('eksemplar_buku')->get();
    //     $buku = DB::table('buku')->get();

    //     $data = array(
    //         'menu' => 'data_master',
    //         'submenu' => 'eksemplar_buku',
    //         'eksemplar' => $eksemplar,
    //         'buku' => $buku
    //     );

    //     return view('admin.eksemplar.addEksemplar', $data);
    // }

    // public function insertData(Request $post)
    // {
    //     DB::table('eksemplar_buku')->insert([
    //         'kode_buku' => '',
    //         'status' => $post->status,
    //         'kondisi_eksemplar' => $post->condition,
    //         'no_isbn' => $post->no_isbn
    //     ]);

    //     return redirect('eksemplar');
    // }

    public function editEksemplar($kode_buku, $no_isbn)
    {
        $eksemplar = DB::table('eksemplar_buku')->where('kode_buku', $kode_buku)->get();
        $buku = DB::table('buku')->where('no_isbn', $no_isbn)->get();

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'eksemplar_buku',
            'eksemplar' => $eksemplar,
            'buku' => $buku
        );

        return view('admin.eksemplar.editEksemplar', $data);
    }

    public function updateData(Request $post)
    {
        DB::table('eksemplar_buku')->where('kode_buku', $post->kode_buku)->update([
            'status' => $post->status,
            'kondisi_eksemplar' => $post->condition
        ]);

        return redirect('eksemplar');
    }
}
