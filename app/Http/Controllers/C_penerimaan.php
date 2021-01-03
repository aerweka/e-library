<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_penerimaan extends Controller
{
    public function penerimaan()
    {
        $penerimaan = DB::table('penerimaan')->get();
        $data = array(
            'menu' => 'penerimaan',
            'submenu' => '',
            'penerimaan' => $penerimaan
        );

        return view('admin.penerimaan.pagePenerimaan', $data);
    }

    public function addPenerimaan()
    {
        $pegawai = DB::table('pegawai')->get();
        $asal = DB::table('asal')->get();
        $data = array(
            'menu' => 'penerimaan',
            'submenu' => '',
            'pegawai' => $pegawai,
            'asal' => $asal
        );

        return view('admin.penerimaan.addPenerimaan', $data);
    }

    public function insertData(Request $post)
    {
        DB::table('penerimaan')->insert([
            'tgl_penerimaan' => $post->receiveDate,
            'jml_buku_diterima' => $post->total_rec_book,
            'ket' => $post->p_s,
            'nip' => $post->nip,
            'id_asal' => $post->source
        ]);

        $id_penerimaan = DB::table('penerimaan')
            ->select('penerimaan.id_penerimaan')
            ->orderByDesc('id_penerimaan')
            ->limit(1)
            ->get();

        foreach ($id_penerimaan as $id) {
            $id = $id->id_penerimaan;
        }

        $jenis_buku = DB::table('jenis_buku')->get();
        $penerbit = DB::table('penerbit')->get();
        $bahasa = DB::table('bahasa')->get();

        $data = array(
            'menu' => 'data_master',
            'submenu' => 'buku',
            'count' => $post->total_rec_book,
            'jenis_buku' => $jenis_buku,
            'penerbit' => $penerbit,
            'bahasa' => $bahasa,
            'id' => $id
        );

        return view('admin.penerimaan.addBuku', $data);
        // return redirect('/penerimaan');
    }

    public function insertBuku(Request $post)
    {
        if ($post->count > 1) {
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

            DB::table('det_penerimaan')->insert([
                'id_penerimaan' => $post->id,
                'no_isbn' => $post->no_isbn,
                'jumlah_eksemplar_perbuku' => $post->copy
            ]);

            $count = $post->count;
            $count--;

            $id_penerimaan = DB::table('penerimaan')
                ->select('penerimaan.id_penerimaan')
                ->orderByDesc('id_penerimaan')
                ->limit(1)
                ->get();

            foreach ($id_penerimaan as $id) {
                $id = $id->id_penerimaan;
            }

            $jenis_buku = DB::table('jenis_buku')->get();
            $penerbit = DB::table('penerbit')->get();
            $bahasa = DB::table('bahasa')->get();

            $data = array(
                'menu' => 'data_master',
                'submenu' => 'buku',
                'count' => $count,
                'jenis_buku' => $jenis_buku,
                'penerbit' => $penerbit,
                'bahasa' => $bahasa,
                'id' => $id
            );
            return view('admin.penerimaan.addBuku', $data);
        } else {
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
    }

    public function editPenerimaan($id_penerimaan)
    {
        $penerimaan = DB::table('penerimaan')->where('id_penerimaan', $id_penerimaan)->get();
        $pegawai = DB::table('pegawai')->get();
        $asal = DB::table('asal')->get();

        $data = array(
            'menu' => 'penerimaan',
            'submenu' => '',
            'penerimaan' => $penerimaan,
            'pegawai' => $pegawai,
            'asal' => $asal
        );

        return view('admin.penerimaan.editPenerimaan', $data);
    }

    public function updateData(Request $post)
    {
        DB::table('penerimaan')->where('id_penerimaan', $post->id_penerimaan)->update([
            'tgl_penerimaan' => $post->receiveDate,
            'jml_buku_diterima' => $post->total_rec_book,
            'ket' => $post->p_s,
            'nip' => $post->nip,
            'id_asal' => $post->source
        ]);

        return redirect('/penerimaan');
    }
}
