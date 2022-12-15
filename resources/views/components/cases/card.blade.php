   @props(['textColor', 'image', 'text', 'data'])
   <div {{ $attributes(['class' => ' flex flex-col justify-evenly items-center rounded-3xl sm:w-1/3 sm:h-3/6']) }}>
       <img src="{{ url($image) }}" class="w-2/4 h-1/4 sm:w-1/4 sm:h-1/4 " alt="{{ $image }}">
       <p class="text-2xl sm:text-3xl">{{ __($text) }}</p>
       <p class="{{ $textColor }} font-semibold text-4xl sm:text-6xl "> {{ $data }}</p>
   </div>
