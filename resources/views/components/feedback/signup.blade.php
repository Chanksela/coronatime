<x-layout>

    <div class="flex justify-center">
        <x-header class="h-1/3 w-11/12 flex flex-col sm:w-full sm:h-4/6 sm:items-center">
            <a href="{{ route('cases.worldwide') }}"><img src="{{ url('/images/logo.png') }}" alt="logo"></a>
        </x-header>
    </div>
    <div class=" h-screen flex flex-col justify-center items-center gap-12">
        <img src="{{ url('/images/success.png') }}" alt="logo">
        <p class="text-center">{{ __('feedback.registered') }}</p>
    </div>
</x-layout>
