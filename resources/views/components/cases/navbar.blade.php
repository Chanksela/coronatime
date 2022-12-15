@props(['text'])
<div class="w-fit sm:grow-0">
    <h1 class="text-2xl font-semibold sm:w-fit">{{ __($text) }}</h1>
    <div class="w-5/6 sm:w-inherit flex justify-between mt-4 mb-4">
        <x-link route='cases.worldwide' name="{{ __('texts.worldwide') }}"
            class="{{ request()->routeIs('cases.worldwide') ? 'capitalize underline underline-offset-8 decoration-2 font-medium' : 'capitalize' }}" />
        <x-link route='cases.countries' name="{{ __('texts.countries') }}"
            class="{{ request()->routeIs('cases.countries') ? 'capitalize underline underline-offset-8 decoration-2 font-medium' : 'capitalize' }}" />
    </div>
</div>
