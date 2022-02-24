@extends('layout')

@section('step_number','1')

@section('referee_content')
	<p class="testo">
		Per te, che sei interessato ad entrare nel nostro fantastico Eco-Mondo,<br/>
		Micronative ha piacere di farti un regalo di benvenuto.
	</p>
	<p class="testo">E non solo!</p>
	<p class="testo">Anche la persona che ti ha parlato di noi riceverà il tuo stesso presente...</p>

	<img src="images/promo-micronative.jpg" class="micronative-promo" alt="{{ __('messages.promotion') }}" title="{{ __('messages.promotion') }}" />

	<p class="testo">
		Registrandoti in questa pagina, tu e l'amico che ti ha presentato riceverete subito<br/>
		uno sconto del 15% valevole su tutti i prodotti MicroNative,<br/>
		e con l'ordine che andrete ad effettuare una bottiglia di<br/>
		MicroNative per la pulizia della casa da 250 ml. ed un<br/>
		nebulizzatore da 500 ml. saranno in regalo!
	</p>
@endsection

@section('form_content')
	<div class="titolo form-titolo">
		<h3>{{ __('messages.insert_friend_data') }}</h3>
	</div>

	<div class="form">
		<form id="referee-form" name="referee-form" action="verify" method="POST">
			@csrf

			<input type="text" id="name" name="name" value="" placeholder="{{ __('messages.name') }}" @error('name')class="validation-error" @enderror/>
			@error('name')
			<div class="validation-message text-red">{!! $message !!}</div>
			@enderror

			<input type="text" id="surname" name="surname" value="" placeholder="{{ __('messages.surname') }}" @error('surname')class="validation-error" @enderror/>
			@error('surname')
			<div class="validation-message text-red">{!! $message !!}</div>
			@enderror

			<input type="submit" id="submit" name="submit" value="{{ __('messages.next') }}" />
		</form>
	</div>
@endsection