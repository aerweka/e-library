<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class c_anggota extends Controller
{

	public function index()
	{
		$anggota = DB::table('anggota')->get();

		$data = array(
			'menu' => 'anggota',
			'submenu' => '',
			'anggota' => $anggota
		);

		return view('admin/anggota/pageAnggota', $data);
	}

	public function addAnggota()
	{
		$data = array(
			'menu' => 'anggota',
			'submenu' => ''
		);

		return view('admin/anggota/addAnggota', $data);
	}

	public function insertData(Request $post)
	{
		DB::table('anggota')->insert([
			'nis_nip' => '',
			'nama_anggota' => $post->name,
			'tahun_masuk' => $post->year_in,
			'kelas' => $post->class,
			'username' => $post->username,
			'password' => $post->password,
			'status' => $post->status
		]);

		return redirect('anggota');
	}

	public function editAnggota($nis_nip)
	{
		$anggota = DB::table('anggota')->where('nis_nip', $nis_nip)->get();

		$data = array(
			'menu' => 'anggota',
			'submenu' => '',
			'anggota' => $anggota
		);

		return view('admin/anggota/editAnggota', $data);
	}

	public function updateData(Request $post)
	{
		DB::table('anggota')->where('nis_nip', $post->nis_nip)->update([
			'nama_anggota' => $post->name,
			'tahun_masuk' => $post->year_in,
			'kelas' => $post->class,
			'username' => $post->username,
			'password' => $post->password,
			'status' => $post->status
		]);

		return redirect('/anggota');
	}

	public function delete($nis_nip)
	{
		DB::table('anggota')->where('nis_nip', $nis_nip)->delete();
		return redirect('/anggota');
	}
}
