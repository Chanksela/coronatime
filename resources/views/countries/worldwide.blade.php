 <x-cases.layout class="flex flex-col h-screen gap-5">
     <x-cases.header />
     <x-cases.navbar text='texts.worldwide_statistics' />
     <div
         class="mb-4 flex flex-wrap h-screen gap-2 sm:items-start sm:flex sm:h-full sm:flex-nowrap sm:grow sm:justify-between sm:gap-6">
         <x-cases.card data='{{ $confirmed }}' text='texts.new_cases' image='/images/confirmed.svg'
             textColor='text-blue-800' class="w-full bg-blue-100/75" />
         <x-cases.card image='/images/recovered.svg' textColor='text-green-800' text='texts.recovered'
             data='{{ $recovered }}' class="grow bg-green-100/75 " />
         <x-cases.card image='/images/deaths.svg' textColor='text-yellow-800' text='texts.deaths'
             data='{{ $deaths }}' class="grow bg-yellow-100/75 " />
     </div>
 </x-cases.layout>
