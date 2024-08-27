@props(['id', 'label', 'title', 'hasFile' => false])

<button type="button"
    class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"
    onclick="{{ $id }}.showModal()">
    {{ $label }}
</button>

<x-component.modal id="{{ $id }}" title="{{ $title }}">
    <form action="" method="post" autocomplete="off"
        @if ($hasFile) enctype="multipart/form-data" @endif>
        @csrf
        {{ $slot }}
        <div class="flex justify-end">
            <x-button.default type="submit">Submit</x-button.default>
        </div>
    </form>
</x-component.modal>
