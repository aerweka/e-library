<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_bahasa extends Controller
{
    public function bahasa()
    {
        $bahasa = DB::table('bahasa')->get();

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'bahasa',
            'bahasa' => $bahasa
        );

        return view('admin/DM_bahasa.pageBahasa', $data);
    }

    public function addBahasa()
    {
        $data = array(
            'menu' => 'data_master',
            'submenu' => 'bahasa'
        );

        return view('admin/DM_bahasa.addBahasa', $data);
    }

    public function insertData(Request $post)
    {
        DB::table('bahasa')->insert([
            'id_bhs' => '',
            'nama_bhs' => $post->name
        ]);

        return redirect('/bahasa');
    }

    public function editBahasa($id_bhs)
    {
        $bahasa = DB::table('bahasa')->where('id_bhs', $id_bhs)->get();

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'bahasa',
            'bahasa' => $bahasa
        );

        return view('admin/DM_bahasa.editBahasa', $data);
    }

    public function updateData(Request $post)
    {
        DB::table('bahasa')->where('id_bhs', $post->id_bhs)->update([
            'nama_bhs' => $post->name
        ]);

        return redirect('/bahasa');
    }

    public function delete($id_bhs)
    {
        DB::table('bahasa')->where('id_bhs', $id_bhs)->delete();
        return redirect('/bahasa');
    }
}
