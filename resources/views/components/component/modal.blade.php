@props(['id', 'title'])

<!-- Start Modal -->
<dialog id="{{ $id }}"
    class="rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white">
    <div class="relative h-auto md:w-[480px] w-300px">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-700">
            <h3 class="font-bold text-lg">{{ $title }}</h3>
            <form method="dialog">
                <button
                    class="size-6 flex justify-center items-center shadow dark:shadow-gray-800 rounded-md btn-ghost"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x size-4">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button>
            </form>
        </div>
        <div class="p-6">
            {{ $slot }}
        </div>
    </div>
</dialog>
<!-- End Modal -->
