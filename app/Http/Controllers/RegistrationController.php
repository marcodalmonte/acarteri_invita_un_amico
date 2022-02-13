<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class RegistrationController extends Controller
{
    public function show() {
		return view('registration');
	}
	
	public function store(Request $request) {
		$request->validate([
			'name' => 'required',
			'surname' => 'required',
			'email' => 'required|email',
		]);
		
		$prospect = new \stdClass();
		$prospect->name = $request->post('name');
		$prospect->surname = $request->post('surname');
		$prospect->email = $request->post('email');
		
		DB::table('prospects')
			->insert([
				'name' => $prospect->name,
				'surname' => $prospect->surname,
				'email' => $prospect->email,
			]);
		
		$referee = session()->get('referee');
		
		if ($referee == null) {
			$errors = [ 'no_referee_provided' => 'messages.no_referee_provided' ];
			
			redirect()->to('/referee')->with('errors',$errors);
		}
		
		sendEmail($referee, 'referee');
		sendEmail($prospect, 'prospect');
	}
	
	private function sendEmail($person, $email_type) {
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		if('' != env('MAIL_ENCRYPTION')){
			$mail->SMTPSecure = env('MAIL_ENCRYPTION');
			$mail->Port = env('MAIL_PORT');
		}

		$mail->IsHTML(true);
		$mail->SMTPKeepAlive = 'true';
		$mail->CharSet = 'UTF-8';
		$mail->Host = env('MAIL_HOST');

		if ('' != env('MAIL_USERNAME')) {
			$mail->Username = env('MAIL_USERNAME');
			$mail->Password = env('MAIL_PASSWORD');
			$mail->SMTPAuth = true;
		}
		$mail->From = env('MAIL_FROM_ADDRESS');
		$mail->FromName = env('MAIL_FROM_NAME');
		$mail->Subject = trans('messages.email_discount');
		$mail->Body = '';
		
		if ($email_type != '') {
			$file_path = resource_path('views/templates/emails/' . $email_type . '.blade.php');
			
			if (file_exists($file_path)) {
				$mail->Body = file_get_contents($file_path);				
				$mail->Body = str_replace(':name',$person->name);
				$mail->Body = str_replace(':surname',$person->surname);
			}
		}
		
		// la riga sotto serve per debug invio form
		//$mail->SMTPDebug = 2;

		$mail->addAddress($person->email, $person->name . ' ' . $person->surname);
		$mail->addCc(env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'));

		return $mail->Send();
	}
}
