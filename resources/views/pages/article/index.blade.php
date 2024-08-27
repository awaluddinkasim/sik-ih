<x-layout title="Artikel Kehamilan">
    <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-6">
        <div class="relative rounded-md shadow dark:shadow-gray-700 overflow-hidden bg-white dark:bg-slate-900">
            <img src="assets/images/blog/01.jpg" alt="">

            <div class="content p-6">
                <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500">
                    {{ Str::limit('Design your apps in your own way', 50, '...') }}
                </a>
                <p class="text-slate-400 mt-3">
                    {{ Str::limit('The phrasal sequence of the is now so that many campaign and benefit', 80, '...') }}
                </p>

                <div class="mt-4">
                    <a href="#"
                        class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500">Read
                        More <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>
</x-layout>
