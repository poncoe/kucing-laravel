<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Web Icon -->
    <link rel="icon" href="https://avatars0.githubusercontent.com/u/11747628?s=460&v=4" type="image/icon type">

    <!-- Title Web -->
    <title>Animolz : Login</title>

</head>

<body>

    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <!-- <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div> -->

                <!-- Password -->
                <!-- <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div> -->

                <!-- Remember Me -->
                <!-- <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> -->

                <div class="mb-4 text-sm text-gray-600">
                    <h6>Jadi walaupun nama kelompok ini Isenk Doank, tapi kita bikin login google
                        buat antisipasi terhadap orang-orang isenk yang mungkin masuk ke dashboard dan ngacak2 apatau dah, hahaha!</h6>
                </div>

                <div class="col s12 m6 offset-m3 center-align">
                    <a class="oauth-container btn darken-4 white black-text" href="{{ route('google.login') }}" style="text-transform:none">
                        <div class="left">
                            <img width="20px" style="margin-top:7px; margin-right:8px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                        </div>
                        Login with Google
                    </a>
                </div>

                <!-- <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a> -->
                @endif

                <!-- <x-button class="ml-3">
                        {{ __('Log in') }}
                    </x-button> -->
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>

</html>