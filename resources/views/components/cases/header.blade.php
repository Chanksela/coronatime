  <div class="flex justify-between items-center">
      <a href="{{ route('cases.worldwide') }}">
          <img src="{{ url('/images/logo.png') }}" alt="dashboard-logo" class="block sm:hidden">
          <img src="{{ url('/images/logo2.svg') }}" alt="dashboard-logo" class="hidden sm:block">
      </a>
      <div class="flex justify-between  w-2/5 text-right sm:w-1/5 ">
          <div x-data="{ show: false }" class="w-1/3 sm:grow ">
              <div @click="show = !show" @click.away="show=false" class="hover:cursor-pointer flex justify-end">
                  @if (app()->currentLocale() === 'ka')
                      <div class="flex items-center justify-start">
                          <p class="text-left">Georgian</p>
                          <img src="{{ url('/images/downarrow2.png') }}" alt="">
                      </div>
                  @elseif (app()->currentLocale() === 'en')
                      <div class="flex items-center justify-start ">
                          <p class="text-left ">English</p>
                          <img src="{{ url('/images/downarrow2.png') }}" alt="">
                      </div>
                  @endif
                  <div x-show="show"
                      class="flex flex-col items-start justify-center fixed top-8 right-26 sm:mr-4 bg-white  "
                      style="display: none">
                      <x-link route='locale' param='ka' name='georgian' class="capitalize hover:font-medium" />
                      <x-link route='locale' param='en' name='english' class="capitalize hover:font-medium" />
                  </div>
              </div>
          </div>
          <div class="sm:grow hidden font-medium cursor-default capitalize sm:visible sm:block sm:w-1/3">
              <p>
                  {{ auth()->user()->username }}
              </p>

          </div>
          <div class="sm:grow mr-2 w-1/3 hidden sm:block ">
              <form action="{{ route('user.logout') }}" method="POST">
                  @csrf
                  <span class="border border-darken4-100 mr-1"></span> <button
                      type="submit">{{ __('button.logout') }}</button>
              </form>
          </div>
          <div class="mr-2 w-full flex justify-end h-full grow sm:hidden ">
              <form action="{{ route('user.logout') }}" method="POST">
                  <div x-data="{ show: false }" class="w-1/3 grow">
                      <div @click="show = !show" @click.away="show=false" class="hover:cursor-pointer w-8">
                          <img src="{{ url('/images/menu.png') }}">

                      </div>
                      <div x-show="show" class="fixed top-10 right-4">
                          @csrf
                          <button type="submit">{{ __('button.logout') }}</button>
                      </div>
                  </div>
              </form>
          </div>


      </div>
  </div>
