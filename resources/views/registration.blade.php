@extends('layout')

@section('step_number','2')

@section('content')
	<form id="referee-form" name="referee-form" class="bg-white p-6 rounded status-md" action="send-code" method="POST">
		@csrf

		<div class="mb-5">
			<label for="name" class="block text-xs uppercase font-semibold mb-1">{{ __('messages.name') }}</label>
			<input type="text" id="name" name="name" class="border px-2 py-1 text-sm w-full" value="" />
			@error('name')
			<div class="text-red-500 text-xs">{!! $message !!}</div>
			@enderror
		</div>

		<div class="mb-5">
			<label for="name" class="block text-xs uppercase font-semibold mb-1">{{ __('messages.surname') }}</label>
			<input type="text" id="surname" name="surname" class="border px-2 py-1 text-sm w-full" value="" />
			@error('surname')
			<div class="text-red-500 text-xs">{!! $message !!}</div>
			@enderror
		</div>

		<div class="mb-5">
			<label for="email" class="block text-xs uppercase font-semibold mb-1">{{ __('messages.email') }}</label>
			<input type="email" id="email" name="email" class="border px-2 py-1 text-sm w-full" value="" />
			@error('email')
			<div class="text-red-500 text-xs">{!! $message !!}</div>
			@enderror
		</div>

		<input type="submit" id="submit" name="submit" class="bg-blue-500 py-2 text-white rounded-full text-sm w-full" value="{{ __('messages.send_code') }}" />
	</form>
@endsection