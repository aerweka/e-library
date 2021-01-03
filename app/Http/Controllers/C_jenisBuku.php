<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_jenisBuku extends Controller
{
    public function jenisbuku()
    {
        $jenis_buku = DB::table('jenis_buku')->get();

    	$data = array(
    		'menu' => 'data_master',
            'submenu' => 'jenisbuku',
            'jenis_buku' => $jenis_buku
    	);

    	return view('admin/DM_jenisBuku.pageJenisBuku', $data);
    }

    public function addJenisBuku()
    {
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'jenisbuku'
        );

        return view('admin/DM_jenisBuku.addJenisBuku', $data);
    }

    public function insertData(Request $post)
    {
    	DB::table('jenis_buku')->insert([
    		'id_jb' => '',
    		'nama_jb' => $post->name,
    		'kode_jb' => $post->code
    	]);
    	
    	return redirect('/jenisbuku');
    }

    public function editJenisBuku($id_jb)
    {
        $jenis_buku = DB::table('jenis_buku')->where('id_jb', $id_jb)->get();

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'jenisbuku',
            'jenis_buku' => $jenis_buku
        );

        return view('admin/DM_jenisBuku.editJenisBuku', $data);
    }

    public function updateData(Request $post)
    {
    	DB::table('jenis_buku')->where('id_jb', $post->id_jb)->update([
    		'nama_jb' => $post->name,
    		'kode_jb' => $post->code
    	]);

    	return redirect('/jenisbuku');
    }
}
