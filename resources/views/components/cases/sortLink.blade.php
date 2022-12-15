  @props(['route', 'sort', 'by'])
  <div class="my-0.5">
      <a href="{{ route($route, ['sort' => $sort, 'by' => $by]) }}">
          @if ($sort === 'asc')
              <img src="{{ url('/images/uparrow.png') }}" alt="up" class="w-3">
          @elseif ($sort === 'desc')
              <img src="{{ url('/images/downarrow.png') }}" alt="down" class="w-3">
          @endif
      </a>
  </div>
