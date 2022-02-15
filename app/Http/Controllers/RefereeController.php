<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
		
		$query = DB::connection('wp')
				->table('wp_wc_customer_lookup')
				->select('customer_id', 'first_name', 'last_name', 'email')
				->where('first_name',$name)
				->where('last_name',$surname)
				->orderBy('customer_id','desc');
		
		$count = $query->count();
		
		if ($count > 0) {
			$referee = $query->limit(1)->get();
			
			session()->put('referee',$referee);
			
			return redirect()->to('registration');
		}
		
		$error = trans('messages.no_customer_found',['name' => $name, 'surname' => $surname]);
		
		return redirect()->to('/')->with('error',$error);
	}
}
