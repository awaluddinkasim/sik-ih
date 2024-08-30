<x-layout title="Artikel Kehamilan">
    <x-slot:actions>
        <x-button.default navigate="{{ route('article.create') }}">
            Tambah
        </x-button.default>
    </x-slot:actions>
    @if ($articles->count())
        <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-6">
            @foreach ($articles as $article)
                <div class="relative rounded-md shadow dark:shadow-gray-700 overflow-hidden bg-white dark:bg-slate-900">
                    <img src="{{ asset('files/article/' . $article->gambar) }}" alt=""
                        style="height: 250px; width: 100%; object-fit: cover">

                    <div class="content p-6">
                        <a href="{{ route('article.detail', $article->ulid) }}"
                            class="title h5 text-lg font-medium hover:text-indigo-600 duration-500">
                            {{ Str::limit($article->judul, 50, '...') }}
                        </a>
                        <p class="text-slate-400 mt-3">
                            {{ Str::limit(strip_tags($article->konten), 80, '...') }}
                        </p>

                        <div class="mt-4">
                            <a href="{{ route('article.detail', $article->ulid) }}"
                                class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500">Read
                                More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center mt-10">
            <p class="text-gray-500 dark:text-gray-300">Tidak ada data</p>
        </div>
    @endif
</x-layout>
