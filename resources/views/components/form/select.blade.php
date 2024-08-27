@props(['label', 'name', 'type' => 'text', 'required' => false])

<div class="mb-3">
    <label class="font-semibold" for="{{ $name }}Input">{{ $label }}</label>
    <select id="{{ $name }}Input" name="{{ $name }}" @if ($required) required @endif
        class="form-select form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
        <option value="" selected hidden>Pilih</option>
        {{ $slot }}
    </select>
</div>
