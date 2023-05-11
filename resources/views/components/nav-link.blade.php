@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-link '
            : 'nav-link collapsed';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
