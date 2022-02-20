<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\RefereePostRequest;

class RefereeController extends Controller
{
    public function show() {
		return view('referee');
	}
	
	public function verify(RefereePostRequest $request) {
		$request->validate($request->rules());
		
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
			$found = $query->limit(1)->first();
			
			$referee = new \stdClass();
			$referee->name = $found->first_name;
			$referee->surname = $found->last_name;
			$referee->email = $found->email;
			
			session()->put('referee',$referee);
			
			return redirect()->to('registration');
		}
		
		$error = trans('messages.no_customer_found',['name' => $name, 'surname' => $surname]);
		
		return redirect()->to('/#referee-form')->with('error',$error);
	}
}
