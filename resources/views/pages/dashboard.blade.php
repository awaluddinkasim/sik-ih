<x-layout title="Dashboard">
    <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <div class="p-5 flex items-center">
                <span
                    class="flex justify-center items-center rounded-md size-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                    <i class="uil uil-user"></i>

                </span>

                <span class="ms-3">
                    <span class="text-slate-400 font-semibold block">Total Pengguna</span>
                    <span class="flex items-center justify-between mt-1">
                        <span class="text-xl font-semibold"><span class="counter-value"
                                data-target="{{ $users }}">0</span></span>
                    </span>
                </span>
            </div>
        </div><!--end-->
        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <div class="p-5 flex items-center">
                <span
                    class="flex justify-center items-center rounded-md size-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                    <i class="uil uil-document-layout-left"></i>

                </span>

                <span class="ms-3">
                    <span class="text-slate-400 font-semibold block">Jumlah Artikel</span>
                    <span class="flex items-center justify-between mt-1">
                        <span class="text-xl font-semibold"><span class="counter-value"
                                data-target="{{ $articles }}">0</span></span>
                    </span>
                </span>
            </div>
        </div><!--end-->
        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <div class="p-5 flex items-center">
                <span
                    class="flex justify-center items-center rounded-md size-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                    <i class="uil uil-clock"></i>
                </span>

                <span class="ms-3">
                    <span class="text-slate-400 font-semibold block">Konsultasi Pending</span>
                    <span class="flex items-center justify-between mt-1">
                        <span class="text-xl font-semibold"><span class="counter-value"
                                data-target="{{ $pendingAppointments }}">0</span></span>
                    </span>
                </span>
            </div>
        </div><!--end-->
        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
            <div class="p-5 flex items-center">
                <span
                    class="flex justify-center items-center rounded-md size-14 min-w-[56px] bg-indigo-600/5 dark:bg-indigo-600/10 shadow shadow-indigo-600/5 dark:shadow-indigo-600/10 text-indigo-600">
                    <i class="uil uil-check"></i>
                </span>

                <span class="ms-3">
                    <span class="text-slate-400 font-semibold block">Konsultasi Dikonfirmasi</span>
                    <span class="flex items-center justify-between mt-1">
                        <span class="text-xl font-semibold"><span class="counter-value"
                                data-target="{{ $confirmedAppointments }}">0</span></span>
                    </span>
                </span>
            </div>
        </div><!--end-->
    </div>
</x-layout>
