<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function show() {
		// The prospect has not provided the name of the referee
		$referee = session()->get('referee');
		
		if ($referee == null) {
			return redirect()->to('/')->with('error',trans('messages.no_referee_provided'));
		}
		
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
		
		// Check if the person has already been referred in the past
		$query = DB::connection('mysql')
				->table('prospects')
				->select('name', 'surname', 'email')
				->where('name',$prospect->name)
				->where('surname',$prospect->surname)
				->where('email',$prospect->email);
		
		$count = $query->count();
		
		// Already received a discount...cannot get another one
		if ($count > 0) {
			return redirect()->to('/')->with('error',trans('messages.discount_already_sent'));
		}
		
		// This prospect is not in the database yet, let's add it
		DB::connection('mysql')
			->table('prospects')
			->insert([
				'name' => $prospect->name,
				'surname' => $prospect->surname,
				'email' => $prospect->email,
				'created_at' => new \DateTime(),
				'updated_at' => new \DateTime(),
			]);
		
		$referee = session()->get('referee');
		
		session()->remove('referee');
		
		if (!$this->sendEmail($referee, 'referee')) {
			return redirect()->to('/')->with('error',trans('messages.issues_sending_discount_codes'));
		}
		
		if (!$this->sendEmail($prospect, 'prospect')) {
			return redirect()->to('/')->with('error',trans('messages.issues_sending_discount_codes'));
		}
		
		return redirect()->to('/')->with('sent_email',trans('messages.discount_codes_sent'));
	}
	
	private function sendEmail($person, $email_type) {
		$mail = new PHPMailer();
		$mail->SMTPDebug = 2;
		$mail->IsSMTP(); 
		if ('' != trim(env('MAIL_ENCRYPTION'))){
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
		
		if ('' != trim($email_type)) {
			$file_path = resource_path('views/emails/' . $email_type . '.blade.php');
			
			if (file_exists($file_path)) {
				$mail->Body = file_get_contents($file_path);				
				$mail->Body = str_replace(':name',$person->name,$mail->Body);
				$mail->Body = str_replace(':surname',$person->surname,$mail->Body);
			}
		}
		
		$mail->addAddress($person->email, $person->name . ' ' . $person->surname);
		$mail->addCc(env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'));
		
		$sent = $mail->Send();
		
		if ($sent) {
			Log::info('Discount code successfully sent to ' . $person->email);
		} else {
			Log::error('Cannot send email to ' . $person->email . ': ' . $mail->ErrorInfo);
		}

		return $sent;
	}
}
