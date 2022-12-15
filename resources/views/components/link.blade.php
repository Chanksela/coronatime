@props(['route', 'param' => null, 'name'])
<a href="{{ route($route, $param) }}" {{ $attributes(['class' => 'uppercase']) }}>{{ $name }}</a>
