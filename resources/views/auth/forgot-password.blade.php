@extends('layouts.login')

@section('content')

    <x-auth-card>
        <x-slot name="logo">
            <img class="img-fluid w-20"
                 src="img/herny_svet_logo.jpeg" alt="logo">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Zabudli ste heslo? Nieje problem. Iba nám dajte vedieť vašu e-mailovú adresu a my vám zašleme link na obnovenie hesla') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Zaslať obnovenie hesla na e-mail') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>

@endsection
