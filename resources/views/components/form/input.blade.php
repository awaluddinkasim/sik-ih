@props(['label', 'name', 'type' => 'text', 'value' => '', 'placeholder', 'required' => false, 'helperText'])

<div class="mb-3">
    <label class="form-label font-semibold" for="{{ $name }}Input">{{ $label }}</label>
    <input type="{{ $type }}" value="{{ $value }}"
        @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
        class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2"
        id="{{ $name }}Input" name="{{ $name }}" @if ($required) required @endif>
    @isset($helperText)
        <small class="italic text-gray-500">{{ $helperText }}</small>
    @endisset
</div>
