@props(['is_active'=>false])
<li class="nav-item">
          <a class="nav-link {{ $is_active ? "active": "" }}" {{ $is_active ? 'aria-current="page"' : '' }} href="{{ $attributes->get('href') }}">{{ $slot }}</a>
</li>