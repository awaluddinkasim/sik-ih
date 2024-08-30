@props(['id', 'label', 'title', 'action', 'hasFile' => false, 'smallButton' => false])


@php
    if ($smallButton) {
        $class =
            'py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md inline';
    } else {
        $class =
            'py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md';
    }
@endphp

<button type="button" class="{{ $class }}" onclick="{{ $id }}.showModal()">
    {{ $label }}
</button>

<x-component.modal id="{{ $id }}" title="{{ $title }}">
    <form action="{{ $action }}" method="post" autocomplete="off"
        @if ($hasFile) enctype="multipart/form-data" @endif>
        @csrf
        {{ $slot }}
        <div class="flex justify-end">
            <x-button.default type="submit">Submit</x-button.default>
        </div>
    </form>
</x-component.modal>
