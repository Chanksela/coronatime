@props(['type', 'name', 'placeholder', 'label'])
<div>

    <label for="{{ $name }}" class="font-semibold text-xl">{{ $label }}</label>
    <br>
    @if ($errors->any())
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
            placeholder="{{ $placeholder }}"
            {{ $attributes(['class' => 'border border-red-700 p-1 w-full rounded-md mt-1 mb-3']) }}>
    @else
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
            placeholder="{{ $placeholder }}"
            {{ $attributes(['class' => 'border border-grey p-1 w-full rounded-md mt-1 mb-3']) }}>
    @endif

    <div>
        @error($name)
            <p class="text-red-700 flex"> <span class="mr-1"><img src="{{ url('/images/error.png') }}"
                        alt=""></span>{{ $message }}
            </p>
        @enderror
    </div>
</div>
