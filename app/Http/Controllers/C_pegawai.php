<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_pegawai extends Controller
{
    public function pegawai()
    {
        $pegawai = DB::table('pegawai')->get();
        $data = array(
            'menu' => 'pegawai',
            'submenu' => '',
            'pegawai' => $pegawai
        );

        return view('admin.Pegawai.pagePegawai', $data);
    }

    public function addpegawai()
    {
        $data = array(
            'menu' => 'pegawai',
            'submenu' => ''
        );

        return view('admin.Pegawai.addpegawai', $data);
    }

    public function insertData(Request $post)
    {
        DB::table('pegawai')->insert([
            'nip' => $post->nip,
            'nama_pegawai' => $post->name,
            'username' => $post->username,
            'password' => $post->password,
            'status' => $post->status
        ]);

        return redirect('/pegawai');
    }

    public function editpegawai($nip)
    {
        $pegawai = DB::table('pegawai')->where('nip', $nip)->get();

        $data = array(
            'menu' => 'pegawai',
            'submenu' => '',
            'pegawai' => $pegawai
        );

        return view('admin.Pegawai.editPegawai', $data);
    }

    public function updateData(Request $post)
    {
        DB::table('pegawai')->where('nip', $post->nip)->update([
            'nip' => $post->nip,
            'nama_pegawai' => $post->name,
            'username' => $post->username,
            'password' => $post->password,
            'status' => $post->status
        ]);

        return redirect('/pegawai');
    }
}
