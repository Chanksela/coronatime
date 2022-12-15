  @props(['name', 'route', 'sort', 'by'])
  <div class="flex justify-between mr-1 items-center break-all py-2 sm:justify-start ">
      <p class="font-medium text-sm ">
          {{ $name }}
      </p>
      <div class="flex flex-col sm:ml-2">
          {{ $slot }}
      </div>
  </div>
