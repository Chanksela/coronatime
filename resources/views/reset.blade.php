<x-layout>
    <div class="flex justify-center">
        <x-header class="h-1/3 w-11/12 flex flex-col sm:w-full sm:h-4/6 sm:items-center">
            <a href="{{ route('cases.worldwide') }}"><img src="{{ url('/images/logo.png') }}" alt="logo"></a>
        </x-header>
    </div>
    <div class="h-full w-full">
        <div class="mt-8 mb-8 flex flex-col justify-center items-center sm:block ">
            <div class=" h-1/3 w-11/12 flex flex-col sm:w-full sm:h-4/6">
                <h1 class="capitalize font-semibold text-2xl text-center">{{ __('button.password_reset') }}</h1>
            </div>
        </div>
        <div class=" flex flex-col h-screen items-center sm:justify-center">
            <form method="POST" action="{{ route('password.update', ['token' => $user->token]) }}"
                enctype="multipart/form-data"
                class=" h-5/6 w-11/12 flex flex-col justify-between sm:w-1/4 sm:h-3/4 sm:justify-start">
                @csrf
                <div>
                    <x-form.input type=password name='password' placeholder="{{ __('input.password_placeholder') }}"
                        label="{{ __('input.password') }}" class="p-6 text-lg sm:p-3" />
                    <x-form.input type='password' name='repeat_password' placeholder="{{ __('input.repeat_password') }}"
                        label="{{ __('input.repeat_password_placeholder') }}" class="p-6 text-lg sm:p-3" />
                </div>
                <div>
                    <x-form.button name="{{ __('button.password_reset') }}"
                        class="w-full p-6 font-semibold text-xl sm:p-3" />
                </div>
            </form>
        </div>
    </div>

</x-layout>
