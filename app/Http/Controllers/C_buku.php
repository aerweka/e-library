<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_buku extends Controller
{
    public function buku()
    {
        $buku = DB::table('buku')->get();

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'buku',
            'buku' => $buku
        );

        return view('admin.DM_buku.pageBuku', $data);
    }

    public function addBuku()
    {
        $jenis_buku = DB::table('jenis_buku')->get();
        $penerbit = DB::table('penerbit')->get();
        $bahasa = DB::table('bahasa')->get();

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'buku',
            'jenis_buku' => $jenis_buku,
            'penerbit' => $penerbit,
            'bahasa' => $bahasa
        );

        return view('admin.DM_buku.addBuku', $data);
    }

    public function insertData(Request $post)
    {

        DB::table('buku')->insert([
            'no_isbn' => $post->no_isbn,
            'judul_buku' => $post->title,
            'tahun_terbit' => $post->year,
            'penulis' => $post->author,
            'cetakan_ke' => $post->print,
            'harga' => $post->price,
            'jml_eksemplar' => $post->copy,
            'kategori_buku' => $post->category,
            'id_jb' => $post->id_jb,
            'id_penerbit' => $post->id_penerbit,
            'id_bhs' => $post->id_bhs
        ]);
        return redirect('/buku');
    }

    public function editBuku($no_isbn)
    {
        $buku = DB::table('buku')->where('no_isbn', $no_isbn)->get();
        $jenis_buku = DB::table('jenis_buku')->get();
        $penerbit = DB::table('penerbit')->get();
        $bahasa = DB::table('bahasa')->get();

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'buku',
            'buku' => $buku,
            'jenis_buku' => $jenis_buku,
            'penerbit' => $penerbit,
            'bahasa' => $bahasa
        );
        return view('admin.DM_buku.editBuku', $data);

        // $jenis_buku = DB::table('jenis_buku')->where('active', true)->orderBy('nama_jb')->pluck('nama_jb', 'id_jb');
        // $selectedId = $no_isbn;

    }

    public function updateData(Request $post)
    {
        DB::table('buku')->where('no_isbn', $post->no_isbn)->update([
            'judul_buku' => $post->title,
            'tahun_terbit' => $post->year,
            'penulis' => $post->author,
            'cetakan_ke' => $post->print,
            'harga' => $post->price,
            'jml_eksemplar' => $post->copy,
            'kategori_buku' => $post->category,
            'id_jb' => $post->id_jb,
            'id_penerbit' => $post->id_penerbit,
            'id_bhs' => $post->id_bhs
        ]);

        return redirect('/buku');
    }

    public function delete($no_isbn)
    {
        DB::table('buku')->where('no_isbn', $no_isbn)->delete();

        return redirect('/buku');
    }
}
