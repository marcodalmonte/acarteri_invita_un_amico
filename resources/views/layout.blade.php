<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }} - {{ __('messages.step') }} @yield('step_number')</title>

        <!-- Fonts -->
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" />

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="css/normalize.css" />

        <link type="text/css" rel="stylesheet" href="css/style.css" />
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h3 class="text-2xl font-bold text-center">{{ __('messages.step') }} @yield('step_number')</h3>
                </div>
				
				<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
				@if(session('error'))	
					<div class="text-red-500 text-base">{{ session('error') }}</div>
				@endisset
					
				@if(session('sent_email'))
					<div class="text-green-500 text-base">{{ session('sent_email') }}</div>
				@endisset
				</div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
