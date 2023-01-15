@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150
hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100'
            : 'inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800
dark:hover:text-gray-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} href="{{ route('dashboard') }}">
    {{ $slot }}
</a>
