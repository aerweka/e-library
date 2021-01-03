<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class c_customer extends Controller
{
    public function index()
    {
    	//mengambil data dari db
    	$customer = DB::table('customer')->get();

	    //mengirim data
	    return view('admin/customer/customer_page',['customer' => $customer]);
    }

    public function addCustomer()
    {
    	return view('admin/customer/customer_add');
    }
    
    public function insertData(Request $post)
    {
    	DB::table('customer')->insert([
    		'first_name' => $post->f_name,
    		'last_name' => $post->l_name,
    		'phone' => $post->phone,
    		'email' => $post->email,
    		'street' => $post->street,
    		'city' => $post->city,
    		'state' => $post->state,
    		'zip_code' => $post->zip_code
    	]);
    	
    	return redirect('/customer');
    }

    public function editCustomer($idCustomer)
    {
    	$customer = DB::table('customer')->where('customer_id', $idCustomer)->get();
		return view('admin/customer/customer_edit',['customer' => $customer]);
    }

    public function updateCustomer(Request $post)
    {
    	DB::table('customer')->where('customer_id', $post->customer_id)->update([
    		'first_name' => $post->f_name,
    		'last_name' => $post->l_name,
    		'phone' => $post->phone,
    		'email' => $post->email,
    		'street' => $post->street,
    		'city' => $post->city,
    		'state' => $post->state,
    		'zip_code' => $post->zip_code
    	]);

    	return redirect('/customer');
    }
}
