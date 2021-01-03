<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_peminjaman extends Controller
{
    public function index()
    {
        $peminjaman = DB::table('peminjaman')->get();
        $pegawai = DB::table('pegawai')->get();
        $anggota = DB::table('anggota')->get();
        $data = array(
            'menu' => 'peminjaman',
            'submenu' => 'index',
            'peminjaman' => $peminjaman,
            'pegawai' => $pegawai,
            'anggota' => $anggota
        );
        return view('admin.peminjaman.pagePeminjaman', $data);
    }

    public function addPeminjaman()
    {
        $pegawai = DB::table('pegawai')->get();
        $anggota = DB::table('anggota')->get();
        $eksemplar = DB::table('eksemplar_buku')
            ->join('buku', 'eksemplar_buku.no_isbn', '=', 'buku.no_isbn')
            ->get();
        $data = array(
            'menu' => 'peminjaman',
            'submenu' => 'index',
            'pegawai' => $pegawai,
            'anggota' => $anggota,
            'eksemplar' => $eksemplar
        );
        return view('admin.peminjaman.addPeminjaman', $data);
    }

    public function insertData(Request $post)
    {
        DB::table('peminjaman')->insert([
            'id_peminjaman' => '',
            'jml_buku' => $post->jml_buku,
            'tgl_pinjam' => $post->tgl_pinjam,
            'nis_nip' => $post->nis_nip,
            'nip' => $post->nip
        ]);

        $id_peminjaman = DB::table('peminjaman')
            ->select('peminjaman.id_peminjaman')
            ->orderByDesc('id_peminjaman')
            ->limit(1)
            ->get();

        foreach ($id_peminjaman as $id) {
            $id = $id->id_peminjaman;
        }

        DB::table('det_peminjaman')->insert([
            'id_peminjaman' => $id,
            'kode_buku' => $post->kode_buku,
            'tgl_harusKembali' => date('Y-m-d', strtotime("+7 days"))
        ]);

        return redirect('/peminjaman');
    }

    public function editPeminjaman($id_peminjaman)
    {
        $peminjaman = DB::table('peminjaman')->where('id_peminjaman', $id_peminjaman)->get();
        $pegawai = DB::table('pegawai')->get();
        $anggota = DB::table('anggota')->get();
        $det_pinjam = DB::table('det_peminjaman')
            ->where('id_peminjaman', $id_peminjaman)
            ->select('det_peminjaman.*', 'eksemplar_buku.*', 'buku.*')
            ->join('eksemplar_buku', 'det_peminjaman.kode_buku', '=', 'eksemplar_buku.kode_buku')
            ->join('buku', 'eksemplar_buku.no_isbn', '=', 'buku.no_isbn')
            ->get();
        $data = array(
            'menu' => 'peminjaman',
            'submenu' => 'index',
            'peminjaman' => $peminjaman,
            'pegawai' => $pegawai,
            'anggota' => $anggota,
            'det' => $det_pinjam
        );

        return view('admin.peminjaman.editPeminjaman', $data);
    }

    public function updateData(Request $post)
    {
        DB::table('peminjaman')->where('id_peminjaman', $post->id_peminjaman)->update([
            'id_peminjaman' => $post->id_peminjaman,
            'jml_buku' => $post->jml_buku,
            'tgl_pinjam' => $post->tgl_pinjam,
            'nis_nip' => $post->nis_nip,
            'nip' => $post->nip
        ]);

        DB::table('det_peminjaman')->where('id_peminjaman', $post->id_peminjaman)->update([
            'kode_buku' => $post->kode_buku,
            'id_peminjaman' => $post->id_peminjaman,
            'status_peminjaman' => $post->status_peminjaman,
            'denda_perbuku' => $post->denda_perbuku,
            'tgl_harusKembali' => $post->tgl_harusKembali,
            'tgl_kembali' => $post->tgl_kembali,
            'perpanjangan' => $post->perpanjangan,
            'status_verif' => $post->status_verif
        ]);

        return redirect('/peminjaman');
    }

    public function detail(Request $post)
    {
        // DB::table('det_peminjaman')->when('id_peminjaman', $id_peminjaman)->get();
        return json_encode(DB::table('det_peminjaman')->where('id_peminjaman', $post->id)->get());
    }

    public function histori()
    {
        $peminjaman = DB::table('peminjaman')->get();
        $data = array(
            'menu' => 'peminjaman',
            'submenu' => 'histori_buku',
            'peminjaman' => $peminjaman
        );
        //mengirim ke view
        return view('admin.peminjaman.historiPeminjaman', $data);
    }

    public function historisiswapage()
    {
        //mengambil data dari customer
        //$peminjaman = peminjaman::all();
        $data = array(
            'menu' => 'historianggota',
            'submenu' => ''
        );
        //mengirim ke view
        return view('pages/siswa/peminjaman', $data);
    }

    public function historiAnggota()
    {
        //mengambil data dari customer
        //$peminjaman = peminjaman::all();
        $data = array(
            'menu' => 'peminjaman',
            'submenu' => 'histori_anggota'
        );
        //mengirim ke view
        return view('admin.peminjaman.historiPeminjamanOlehAnggota', $data);
    }
}
