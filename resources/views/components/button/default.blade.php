@props(['type' => 'button', 'color' => 'indigo', 'size' => 'default', 'full' => false])

@php
    if ($size == 'small') {
        $class = "py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-$color-600 hover:bg-$color-700 border-$color-600 hover:border-$color-700 text-white rounded-md";
    } else {
        $class = "py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-$color-600 hover:bg-$color-700 border-$color-600 hover:border-$color-700 text-white rounded-md";
    }
@endphp

<button type="{{ $type }}" class="{{ $class }} {{ $full ? 'w-full' : '' }}">
    {{ $slot }}
</button>
