<x-layout class="sm:flex">
    <div class="h-screen w-screen sm:ml-4">
        <div class="flex justify-center">
            <x-header class="h-1/3 w-11/12 flex flex-col sm:w-full sm:h-4/6">
                <a href="{{ route('cases.worldwide') }}"><img src="{{ url('/images/logo.png') }}" alt="logo"></a>
            </x-header>
        </div>
        <div class="h-full w-full">
            <div class="h-full w-full">
                <div class="mt-8 mb-8 flex flex-col justify-center items-center item sm:block">
                    <div class="h-1/3 w-11/12 flex flex-col  sm:w-3/5 sm:h-4/6">
                        <h1 class="capitalize font-semibold text-xl">{{ __('login.welcome') }}</h1>
                        <p class="capitalize text-lg">{{ __('login.welcome_text') }}</p>
                    </div>
                </div>
                <div class="flex flex-col justify-center  items-center sm:block">
                    <form action="{{ route('user.login') }}" method="POST"
                        class="h-1/3 w-11/12 flex flex-col  sm:w-3/5 sm:h-4/6">
                        @csrf

                        <x-form.input type=text name='username' placeholder="{{ __('login.username_placeholder') }}"
                            label="{{ __('input.username') }}" class="p-4 text-lg" />
                        @if (session()->has('error'))
                            <p class="text-red-700 flex"> <span class="mr-1"><img src="{{ url('/images/error.png') }}"
                                        alt=""></span> {{ session()->get('error') }}
                            </p>
                        @endif
                        <x-form.input type='password' name='password'
                            placeholder="{{ __('input.password_placeholder') }}" label="{{ __('input.password') }}"
                            class="p-4 text-lg" />



                        <div class="mt-4 flex justify-between w-full mb-6">
                            <label for="remember" class="font-semibold">
                                <input type="checkbox" name="remember" id="remember">
                                {{ __('signup.remember_devie') }}
                            </label>
                            <x-link route='password.forgot' name="{{ __('login.forgot_password') }}"
                                class="text-blue-600 capitalize" />
                        </div>
                        <x-form.button name="{{ __('button.login') }}" class="p-4" />
                        <div class="flex justify-center mt-6">
                            {{ __("login.don't_have_account") }}
                            <x-link route='signup' class="font-semibold capitalize" name="{{ __('link.signup') }}" />
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="hidden sm:block sm:w-full">
        <img class="h-full w-full" src="{{ url('/images/vaccines.jpg') }}" alt="vaccines">
    </div>
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show">
        @if (session()->has('unverified'))
            <div>
                <p class="text-white fixed bottom-1 left-1 p-2 bg-red-500 rounded">
                    {{ session('unverified') }}</p>
            </div>
        @elseif (session()->has('failed'))
            <div>
                <p class="text-white fixed bottom-1 left-1 p-2 bg-red-500 rounded">
                    {{ session('failed') }}</p>
            </div>
        @endif

    </div>

</x-layout>
