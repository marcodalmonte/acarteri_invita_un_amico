<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RefereeController extends Controller
{
    public function show() {
		return view('referee');
	}
	
	public function verify(Request $request) {
		$request->validate([
			'name' => 'required',
			'surname' => 'required',
		]);
		
		$name = $request->post('name');
		$surname = $request->post('surname');
		
		$query = DB::table('wp_wc_customer_lookup')
				->select('customer_id', 'first_name', 'last_name', 'email')
				->where('first_name',$name)
				->where('last_name',$surname)
				->orderBy('customer_id','desc');
		
		$count = $query->count();
		
		if ($count > 0) {
			$referee = $query->limit(1)->get();
			
			session()->put('referee',$referee);
			
			redirect('/registration');
		}
		
		$errors = ['no_customer_found' => 'messages.no_customer_found'];
		
		Redirect::back()->with('errors',$errors);
	}
}
