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
                        <h1 class="capitalize font-semibold text-xl">{{ __('signup.welcome') }}</h1>
                        <p class="capitalize text-lg">{{ __('signup.welcome_text') }}</p>
                    </div>
                </div>
                <div class="flex flex-col justify-center  items-center sm:block">
                    <form action="{{ route('user.store') }}" method="POST"
                        class="h-1/3 w-11/12 flex flex-col  sm:w-3/5 sm:h-4/6">
                        @csrf
                        <x-form.input type=text name='username' placeholder="{{ __('signup.username_placeholder') }}"
                            label="{{ __('input.username') }}" class="p-4 text-lg" />
                        <x-form.input type=email name='email' placeholder="{{ __('input.email_placeholder') }}"
                            label="{{ __('input.email') }}" class="p-4 text-lg" />
                        <x-form.input type='password' name='password'
                            placeholder="{{ __('input.password_placeholder') }}" label="{{ __('input.password') }}"
                            class="p-4 text-lg" />
                        <x-form.input type='password' name='repeat_password'
                            placeholder="{{ __('input.repeat_password') }}"
                            label="{{ __('input.repeat_password_placeholder') }}" class="p-4 text-lg" />
                        <div class="mt-4 flex justify-between w-full mb-6">
                            <label for="remember" class="font-semibold">
                                <input type="checkbox" name="remember" id="remember">
                                {{ __('signup.remember_devie') }}
                            </label>
                        </div>
                        <x-form.button name="{{ __('button.signup') }}" class="p-4" />
                        <div class="flex justify-center mt-6">
                            {{ __('signup.alredy_have_account') }}
                            <x-link route='login' class="capitalize font-semibold" name="{{ __('link.login') }}" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden sm:block sm:w-full">
        <img class="h-full w-full" src="{{ url('/images/vaccines.jpg') }}" alt="vaccines">
    </div>
</x-layout>
