<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class C_penerbit extends Controller
{
    public function penerbit()
    {
        $penerbit = DB::table('penerbit')->get();

    	$data = array(
    		'menu' => 'data_master',
            'submenu' => 'penerbit',
            'penerbit' => $penerbit
    	);

    	return view('admin/DM_penerbit.pagePenerbit', $data);
    }

    public function addPenerbit()
    {
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'penerbit'
        );

        return view('admin/DM_penerbit.addPenerbit', $data);
    }

    public function insertData(Request $post)
    {
    	DB::table('penerbit')->insert([
    		'id_penerbit' => '',
            'nama_penerbit' => $post->name,
            'alamat_penerbit' => $post->address,
            'no_telp_penerbit' => $post->phone,
            'email_penerbit' => $post->email
    	]);
    	
    	return redirect('/penerbit');
    }

    public function editPenerbit($id_penerbit)
    {
        $penerbit = DB::table('penerbit')->where('id_penerbit', $id_penerbit)->get();

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'penerbit',
            'penerbit' => $penerbit
        );

        return view('admin/DM_penerbit.editPenerbit', $data);
    }

    public function updateData(Request $post)
    {
    	DB::table('penerbit')->where('id_penerbit', $post->id_penerbit)->update([
    		'nama_penerbit' => $post->name,
            'alamat_penerbit' => $post->address,
            'no_telp_penerbit' => $post->phone,
            'email_penerbit' => $post->email
    	]);

    	return redirect('/penerbit');
    }
}
