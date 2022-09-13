<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vehicle Route Tracking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid" style="background:url('http://223.27.94.123/vehicle/public/images/111.png'); background-size:cover; background-position:center;">
    <div class="row">
<div class="col-md-6"></div>
<div class="col-md-6">
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h1 style="font-size:23px; font-weight:bold; color:white;">Vehicle Route Tracking System</h1>
        </x-slot>
<style>
    .bg-gray-100{
        background: none !important;
    }
    .text-sm{
        font-size: 15px !important;
    }
    @media only screen and (min-width: 600px) {
  .sm\:max-w-md{
        max-width: 50%;
    }
}

</style>
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" style="margin-bottom:15px;" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" style="margin-bottom:20px;" value="" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" style="margin-bottom:15px;" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" value="" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>

    </x-jet-authentication-card>
     <p style="text-align:center;">
         <a href="https://acquaintbd.com/" target="_blank">Design</a> and <a href="https://acquaintbd.com/" target="_blank">Developed</a> by <a href="https://acquaintbd.com/" target="_blank">Acquaint Technologies</a>
     </p>
</x-guest-layout>
</div>
  </div>
</div>

</body>
</html>


