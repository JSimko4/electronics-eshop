@extends('layouts.login')

@section('content')

        <section class="">
            <div class="container py-5 h-100">

                <div class="row d-flex justify-content-center align-items-center h-100">

                    <div class="col col-xl-10 d-flex justify-content-center align-items-center">

                        <div class="card login-border col-12 col-md-9 col-lg-7 col-xl-8 ">
                            <div class="row g-0 ">
                                <div class="col-md-6 col-lg-5 d-none d-md-block text-center">
                                    <img
                                        src="img/gamer.jpg"
                                        alt="gamepad photo"
                                        class="img-fluid  login-border-image"
                                    />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black ">
                                        <x-slot name="logo">

                                        </x-slot>

                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4" :status="session('status')"/>

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                                        <form class="" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- Email Address -->
                                            <div class="">
                                                <x-label for="email" :value="__('E-mail')"/>

                                                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                                         :value="old('email')" required autofocus/>
                                            </div>

                                            <!-- Password -->
                                            <div class="mt-4 ">
                                                <x-label for="password" :value="__('Heslo')"/>

                                                <x-input id="password" class="block mt-1 w-full"
                                                         type="password"
                                                         name="password"
                                                         required autocomplete="current-password"/>
                                            </div>

                                            <!-- Remember Me -->
                                            <div class="block mt-4">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox"
                                                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                           name="remember">
                                                    <span
                                                        class="ml-2 text-sm text-gray-600">{{ __('Zapamätať prihlasenie') }}</span>
                                                </label>
                                            </div>

                                            <div class="flex items-center justify-end mt-4">
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                       href="{{ route('password.request') }}">
                                                        {{ __('Zabudli ste heslo ?') }}
                                                    </a>
                                                @endif

                                                <x-button class="ml-3">
                                                    {{ __('Prihĺasiť sa') }}
                                                </x-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
