@extends('layout')

@section('step_number','2')

@section('form_content')
	<div class="titolo form-titolo">
		<h3>{{ __('messages.insert_your_data') }}</h3>
	</div>

	<div class="form">
		<form id="registration-form" name="registration-form" action="send-code" method="POST">
			@csrf

			<input type="text" id="name" name="name" value="" placeholder="{{ __('messages.name') }}" @error('name')class="validation-error" @enderror/>
			@error('name')
			<div class="validation-message text-red">{!! $message !!}</div>
			@enderror

			<input type="text" id="surname" name="surname" value="" placeholder="{{ __('messages.surname') }}" @error('surname')class="validation-error" @enderror/>
			@error('surname')
			<div class="validation-message text-red">{!! $message !!}</div>
			@enderror

			<input type="email" id="email" name="email" value="" placeholder="{{ __('messages.email') }}" @error('email')class="validation-error" @enderror/>
			@error('email')
			<div class="validation-message text-red">{!! $message !!}</div>
			@enderror

			<div class="row">
				<div class="privacy-div testo">
					<input type="checkbox" id="privacy" name="privacy" value="1" />
					{!! __('messages.privacy',['privacy' => 'https://www.microrganismieffettivi.net/privacy-policy/']) !!}
					@error('privacy')
					<div class="validation-message text-red">{!! $message !!}</div>
					@enderror
				</div>
				
				<input type="submit" id="submit" name="submit" value="{{ __('messages.send_code') }}" />
			</div>
		</form>
	</div>
@endsection