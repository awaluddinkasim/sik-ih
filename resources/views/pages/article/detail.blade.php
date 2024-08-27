<x-layout title="{{ $article->judul }}">
    <x-component.card>
        <img src="{{ asset('files/articles/' . $article->gambar) }}" class="rounded-md" alt="">
        <div class="mt-6">
            {!! $article->konten !!}
        </div>
    </x-component.card>
</x-layout>
