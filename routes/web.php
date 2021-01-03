<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ajax
Route::get('/indexAjax', 'C_ajax@index');
Route::get('/indexAjax/action', 'C_ajax@tesAjax');

//openFirst
Route::get('/', 'C_auth_login@login');

//login
Route::get('/forgotPassword', 'C_auth_login@forgotPassword');
Route::post('/forgotPassword', 'C_auth_login@sentEmailResetPassword')->name('post_email');
Route::get('/recoverPassword', 'C_auth_login@recoverPassword');
Route::post('/recoverPassword', 'C_auth_login@updatePassword')->name('recover');

//auth
Route::get('/login', 'C_auth_login@preLogin');
Route::post('/login', 'C_auth_login@postLogin')->name('/auth');
Route::get('/register', 'C_auth_login@preRegister');
Route::post('/register', 'C_auth_login@postRegister')->name('post_register');
Route::get('/logout', 'C_auth_login@Logout');

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
    //route:blankpage
    Route::get('/index_admin', 'c_blankpage@index')->name('/index');
    Route::post('/index', 'c_blankpage@index');

    //route:anggota
    Route::get('/anggota', 'c_anggota@index');
    Route::get('/anggota/addAnggota', 'c_anggota@addAnggota');
    Route::post('/anggota/insertData', 'c_anggota@insertData');
    Route::get('/anggota/editAnggota/{nis_nip}', 'c_anggota@editAnggota');
    Route::post('/anggota/updateData', 'c_anggota@updateData');
    Route::get('/anggota/delete/{nis_nip}', 'c_anggota@delete');

    //route:pegawai
    Route::get('/pegawai', 'C_Pegawai@pegawai');
    Route::get('/pegawai/addPegawai', 'C_Pegawai@addPegawai');
    Route::post('/pegawai/insertData', 'C_Pegawai@insertData');
    Route::get('/pegawai/editPegawai/{nip}', 'C_Pegawai@editPegawai');
    Route::post('/pegawai/updateData', 'C_Pegawai@updateData');

    //DataMaster
    //route:buku
    Route::get('/buku', 'C_buku@buku');
    Route::get('/buku/addBuku', 'C_buku@addBuku');
    Route::post('/buku/insertData', 'C_buku@insertData');
    Route::get('/buku/editBuku/{id_buku}', 'C_buku@editBuku');
    Route::post('/buku/updateData', 'C_buku@updateData');
    Route::get('/buku/delete/{id_buku}', 'C_buku@delete');

    //route::jenisbuku
    Route::get('/jenisbuku', 'C_jenisBuku@jenisbuku');
    Route::get('/jenisbuku/addJenisBuku', 'C_jenisBuku@addJenisBuku');
    Route::post('/jenisbuku/insertData', 'C_jenisBuku@insertData');
    Route::get('/jenisbuku/editJenisBuku/{id_jb}', 'C_jenisBuku@editJenisBuku');
    Route::post('/jenisbuku/updateData', 'C_jenisBuku@updateData');

    //route:bahasa
    Route::get('/bahasa', 'C_bahasa@bahasa');
    Route::get('/bahasa/addBahasa', 'C_bahasa@addBahasa');
    Route::post('/bahasa/insertData', 'C_bahasa@insertData');
    Route::get('/bahasa/editBahasa/{id_bhs}', 'C_bahasa@editBahasa');
    Route::post('/bahasa/updateData', 'C_bahasa@updateData');
    Route::get('/bahasa/delete/{id_bhs}', 'C_bahasa@delete');

    //route:penerbit
    Route::get('/penerbit', 'C_penerbit@penerbit');
    Route::get('/penerbit/addPenerbit', 'C_penerbit@addPenerbit');
    Route::post('/penerbit/insertData', 'C_penerbit@insertData');
    Route::get('/penerbit/editPenerbit/{id_penerbit}', 'C_penerbit@editPenerbit');
    Route::post('/penerbit/updateData', 'C_penerbit@updateData');

    //route:eksemplar buku
    Route::get('/eksemplar', 'C_eksemplar@eksemplar');
    // Route::get('/eksemplar/addEksemplar', 'C_eksemplar@addEksemplar');
    // Route::post('/eksemplar/insertData', 'C_eksemplar@insertData');
    Route::get('/eksemplar/editEksemplar/{kode_buku}/{no_isbn}', 'C_eksemplar@editEksemplar');
    Route::post('/eksemplar/updateData', 'C_eksemplar@updateData');

    //route:peminjaman
    Route::get('/peminjaman', 'C_peminjaman@index');
    Route::get('/peminjaman/addPeminjaman', 'C_peminjaman@addPeminjaman');
    Route::post('/peminjaman/insertData', 'C_peminjaman@insertData');
    Route::get('/peminjaman/editPeminjaman/{id_peminjaman}', 'C_peminjaman@editPeminjaman');
    Route::post('/peminjaman/updateData', 'C_peminjaman@updateData');
    Route::get('/peminjaman/historiPeminjaman', 'C_peminjaman@histori');
    Route::get('/peminjaman/historiPeminjamanAnggota', 'C_peminjaman@historiAnggota');
    Route::post('/peminjaman/detail', 'C_peminjaman@detail');

    //route:penerimaan
    Route::get('/penerimaan', 'c_penerimaan@penerimaan');
    Route::get('/penerimaan/addPenerimaan', 'c_penerimaan@addPenerimaan');
    Route::post('/penerimaan/insertData', 'c_penerimaan@insertData');
    Route::get('/penerimaan/editPenerimaan/{nis_nip}', 'c_penerimaan@editPenerimaan');
    Route::post('/penerimaan/updateData', 'c_penerimaan@updateData');
    Route::post('/penerimaan/insertBuku', 'c_penerimaan@insertBuku');
});

Route::group(['middleware' => ['auth', 'CheckRole:user']], function () {
    //route:blankpage
    Route::get('/index', 'c_user@index')->name('index_user');

    Route::get('/buku', 'C_user@viewBuku');

    Route::post('/buku', 'C_user@cariBuku')->name('cari_buku');
});


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// //route:blankpage
// Route::get('/index', 'c_blankpage@index')->name('/index');
// Route::post('/index', 'c_blankpage@index');

// //route:customer
// Route::get('/customer', 'c_customer@index');
// Route::get('/customer/addCustomer', 'c_customer@addCustomer');
// Route::post('/customer/insertData', 'c_customer@insertData');
// Route::get('/customer/editCustomer/{idCustomer}', 'c_customer@editCustomer');
// Route::post('/customer/updateCustomer', 'c_customer@updateCustomer');

// //route:anggota
// Route::get('/anggota', 'c_anggota@index');
// Route::get('/anggota/addAnggota', 'c_anggota@addAnggota');
// Route::post('/anggota/insertData', 'c_anggota@insertData');
// Route::get('/anggota/editAnggota/{nis_nip}', 'c_anggota@editAnggota');
// Route::post('/anggota/updateData', 'c_anggota@updateData');
// Route::get('/anggota/delete/{nis_nip}', 'c_anggota@delete');

// //route:pegawai
// Route::get('/pegawai', 'C_Pegawai@pegawai');
// Route::get('/pegawai/addPegawai', 'C_Pegawai@addPegawai');
// Route::post('/pegawai/insertData', 'C_Pegawai@insertData');
// Route::get('/pegawai/editPegawai/{nip}', 'C_Pegawai@editPegawai');
// Route::post('/pegawai/updateData', 'C_Pegawai@updateData');

// //DataMaster
// //route:buku
// Route::get('/buku', 'C_buku@buku');
// Route::get('/buku/addBuku', 'C_buku@addBuku');
// Route::post('/buku/insertData', 'C_buku@insertData');
// Route::get('/buku/editBuku/{id_buku}', 'C_buku@editBuku');
// Route::post('/buku/updateData', 'C_buku@updateData');
// Route::get('/buku/delete/{id_buku}', 'C_buku@delete');

// //route::jenisbuku
// Route::get('/jenisbuku', 'C_jenisBuku@jenisbuku');
// Route::get('/jenisbuku/addJenisBuku', 'C_jenisBuku@addJenisBuku');
// Route::post('/jenisbuku/insertData', 'C_jenisBuku@insertData');
// Route::get('/jenisbuku/editJenisBuku/{id_jb}', 'C_jenisBuku@editJenisBuku');
// Route::post('/jenisbuku/updateData', 'C_jenisBuku@updateData');

// //route:bahasa
// Route::get('/bahasa', 'C_bahasa@bahasa');
// Route::get('/bahasa/addBahasa', 'C_bahasa@addBahasa');
// Route::post('/bahasa/insertData', 'C_bahasa@insertData');
// Route::get('/bahasa/editBahasa/{id_bhs}', 'C_bahasa@editBahasa');
// Route::post('/bahasa/updateData', 'C_bahasa@updateData');
// Route::get('/bahasa/delete/{id_bhs}', 'C_bahasa@delete');

// //route:penerbit
// Route::get('/penerbit', 'C_penerbit@penerbit');
// Route::get('/penerbit/addPenerbit', 'C_penerbit@addPenerbit');
// Route::post('/penerbit/insertData', 'C_penerbit@insertData');
// Route::get('/penerbit/editPenerbit/{id_penerbit}', 'C_penerbit@editPenerbit');
// Route::post('/penerbit/updateData', 'C_penerbit@updateData');

// //route:eksemplar buku
// Route::get('/eksemplar', 'C_eksemplar@eksemplar');
// // Route::get('/eksemplar/addEksemplar', 'C_eksemplar@addEksemplar');
// // Route::post('/eksemplar/insertData', 'C_eksemplar@insertData');
// Route::get('/eksemplar/editEksemplar/{kode_buku}/{no_isbn}', 'C_eksemplar@editEksemplar');
// Route::post('/eksemplar/updateData', 'C_eksemplar@updateData');

// //route:peminjaman
// Route::get('/peminjaman', 'C_peminjaman@index');
// Route::get('/peminjaman/addPeminjaman', 'C_peminjaman@addPeminjaman');
// Route::post('/peminjaman/insertData', 'C_peminjaman@insertData');
// Route::get('/peminjaman/editPeminjaman/{id_peminjaman}', 'C_peminjaman@editPeminjaman');
// Route::post('/peminjaman/updateData', 'C_peminjaman@updateData');
// Route::get('/peminjaman/historiPeminjaman', 'C_peminjaman@histori');
// Route::get('/peminjaman/historiPeminjamanAnggota', 'C_peminjaman@historiAnggota');
// Route::post('/peminjaman/detail', 'C_peminjaman@detail');

// //route:penerimaan
// Route::get('/penerimaan', 'c_penerimaan@penerimaan');
// Route::get('/penerimaan/addPenerimaan', 'c_penerimaan@addPenerimaan');
// Route::post('/penerimaan/insertData', 'c_penerimaan@insertData');
// Route::get('/penerimaan/editPenerimaan/{nis_nip}', 'c_penerimaan@editPenerimaan');
// Route::post('/penerimaan/updateData', 'c_penerimaan@updateData');