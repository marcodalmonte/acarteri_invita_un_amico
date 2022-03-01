@extends('layout')

@section('step_number','1')

@section('referee_content')
	<p class="testo">
		Per te, che sei interessato ad entrare nel nostro fantastico Eco-Mondo,<br/>
		<b>Micronative</b> ha piacere di farti <b>un regalo di benvenuto</b>.
	</p>
	<p class="testo"><b>E non solo!</b></p>
	<p class="testo">Anche la persona che ti ha parlato di noi <b>riceverà il tuo stesso presente...</b></p>

	<img src="images/promo-micronative.jpg" class="micronative-promo" alt="{{ __('messages.promotion') }}" title="{{ __('messages.promotion') }}" />

	<p class="testo">
		Registrandoti in questa pagina, tu e l'amico che ti ha presentato riceverete subito<br/>
		uno <b>sconto del 15%</b> valevole su tutti i prodotti MicroNative,<br/>
		e con l'ordine che andrete ad effettuare una <b>bottiglia di<br/>
		MicroNative per la pulizia della casa</b> da 250 ml. ed un<br/>
		<b>nebulizzatore da 500 ml</b> saranno in regalo!
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