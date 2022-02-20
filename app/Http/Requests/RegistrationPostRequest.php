<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
			'surname' => 'required',
			'email' => 'required|email',
        ];
    }
	
	/**
	 * Get the error messages for the defined validation rules.
	 * 
	 * @return array
	 */
	public function messages()
	{
		$trans_required = trans('validation.required');
		$trans_email = trans('validation.email');
		
		return [
			'name.required' => str_replace(':attribute','"' . trans('messages.name') . '"',$trans_required),
			'surname.required' => str_replace(':attribute','"' . trans('messages.surname') . '"',$trans_required),
			'email.required' => str_replace(':attribute','"' . trans('messages.email') . '"',$trans_required),
			'email.email' => str_replace(':attribute','"' . trans('messages.email') . '"',$trans_email),
		];
	}
}
