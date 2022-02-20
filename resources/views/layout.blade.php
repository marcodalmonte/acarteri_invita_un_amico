<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }} - {{ __('messages.step') }} @yield('step_number')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700&display=swap" />

        <link type="text/css" rel="stylesheet" href="css/style.css" />
    </head>
    <body>
		<div class="container">
			<div class="logo-container">
				<img src="images/micronative-logo.png" class="logo" alt="MicroNative Logo" title="MicroNative Logo" />
			</div>
			
			@if(session('error'))	
			<div class="text-final-result text-bordered-red text-red">{!! session('error') !!}</div>
			@endisset
					
			@if(session('sent_email'))
			<div class="text-final-result text-bordered-green text-green">{!! session('sent_email') !!}</div>
			@endisset
			</div>

			<div class="titolo">
				<h3>{{ Str::of(__('messages.invite_a_friend'))->upper() }} - {{ Str::of(__('messages.step'))->upper() }} @yield('step_number')</h3>
			</div>

			@yield('referee_content')
			
			@yield('form_content')

			<div class="footer titolo">
				<div class="logo-container logo-container-light">
					<img src="images/micronative-light.png" class="logo" alt="MicroNative Logo" title="MicroNative Logo" />
				</div>

				<div class="center">
					&copy; 2022 Microrganismieffettivi.net - Via Monte Cricco 2B, 37014 Castelnuovo del Garda - Verona<br/>
					P. Iva: 04840820239 - Privacy Policy
				</div>
			</div>
		</div>
    </body>
</html>
