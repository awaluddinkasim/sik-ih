@props(['title'])

<div class="shadow dark:shadow-slate-800 rounded bg-white dark:bg-slate-900">
    @if (isset($title))
        <div class="p-5">
            <h5 class="text-lg font-semibold">{{ $title }}</h5>
        </div>
    @endif
    <div class="p-5 border-t border-gray-100 dark:border-slate-800">
        {{ $slot }}
    </div>
</div>
