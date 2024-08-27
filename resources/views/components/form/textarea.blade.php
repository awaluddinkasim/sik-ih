@props(['label', 'name', 'rows' => '3', 'required' => false])

<div class="mb-3">
    <label class="form-label font-semibold" for="{{ $name }}Input">{{ $label }}</label>
    <textarea id="{{ $name }}Input" name="{{ $name }}" @if ($required) required @endif
        rows="{{ $rows }}"
        class="form-input w-full py-2 px-3 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2">{{ $slot }}</textarea>
</div>
