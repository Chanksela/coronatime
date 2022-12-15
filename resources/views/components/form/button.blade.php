@props(['name'])
<button
    type="submit"{{ $attributes(['class' => 'capitalize bg-green-600 p-1 rounded-md text-white']) }}>{{ $name }}</button>
