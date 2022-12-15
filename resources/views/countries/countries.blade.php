 <x-cases.layout class="flex flex-col h-screen gap-3 ml-4 mr-4">
     <x-cases.header />
     <x-cases.navbar text='texts.statistics_by_country' />
     <form action="{{ route('country.search') }}" method='GET'>
         <label class="relative block w-full sm:w-1/5">
             <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                 <img src="{{ url('/images/searchGlass.svg') }}" alt="">
             </span>
             <input
                 class="w-full bg-white placeholder:font-italitc border border-gray-200-100 rounded-lg py-3 pl-10 pr-4 focus:outline-none"
                 placeholder="search by country" type="search" name="search" />
         </label>
     </form>
     <div class="h-2/3 flex flex-col justify-start">
         <x-cases.grid-wrapper class="bg-dark4-100 border ">
             <x-cases.sorter name="{{ __('texts.country') }}">
                 <x-cases.sortLink route='cases.countries' sort='asc' by='name' />
                 <x-cases.sortLink route='cases.countries' sort='desc' by='name' />
             </x-cases.sorter>
             <x-cases.sorter name="{{ __('texts.new_cases') }}">
                 <x-cases.sortLink route='cases.countries' sort='asc' by='confirmed' />
                 <x-cases.sortLink route='cases.countries' sort='desc' by='confirmed' />
             </x-cases.sorter>
             <x-cases.sorter name="{{ __('texts.recovered') }}">
                 <x-cases.sortLink route='cases.countries' sort='asc' by='recovered' />
                 <x-cases.sortLink route='cases.countries' sort='desc' by='recovered' />
             </x-cases.sorter>
             <x-cases.sorter name="{{ __('texts.deaths') }}">
                 <x-cases.sortLink route='cases.countries' sort='asc' by='deaths' />
                 <x-cases.sortLink route='cases.countries' sort='desc' by='deaths' />
             </x-cases.sorter>
         </x-cases.grid-wrapper>
         <x-cases.grid-wrapper class="border border-dark4-100">
             <p class="p-1">{{ __('texts.worldwide') }}</p>
             <p class="p-1"> {{ $countries->sum('confirmed') }}</p>
             <p class="p-1">{{ $countries->sum('recovered') }}</p>
             <p class="p-1"> {{ $countries->sum('deaths') }}</p>
         </x-cases.grid-wrapper>

         <div class="overflow-auto h-5/6 break-all  ">
             @foreach ($countries as $country)
                 <x-cases.grid-wrapper class="border border-dark4-100 ">
                     <p class="p-1 flex items-center">{{ $country['name'] }}</p>
                     <p class="p-1 flex items-center">{{ $country['confirmed'] }}</p>
                     <p class="p-1 flex items-center">{{ $country['recovered'] }}</p>
                     <p class="p-1 flex items-center">{{ $country['deaths'] }}</p>
                 </x-cases.grid-wrapper>
             @endforeach
         </div>
     </div>
 </x-cases.layout>
