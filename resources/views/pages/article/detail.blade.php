<x-layout title="{{ $article->judul }}">
    <div class="grid xl:grid-cols-4 gap-6">
        <div class="xl:col-span-3">
            <x-component.card>
                <div class=" rounded-md bg-gray-500" style="height: 450px">
                    <img src="{{ asset('files/article/' . $article->gambar) }}" class="mx-auto" alt=""
                        style="height: 100%">
                </div>
                <div class="mt-6">
                    {!! $article->konten !!}
                </div>
            </x-component.card>
        </div>
        <div class="xl:col-span-1">
            <x-component.card>
                <x-button.default type="button" :full="true"
                    navigate="{{ route('article.edit', $article->ulid) }}">
                    Edit
                </x-button.default>
                <form action="{{ route('article.destroy', $article->ulid) }}" method="post" class="mt-3">
                    @csrf
                    @method('DELETE')
                    <x-button.default type="submit" color="red" :full="true">
                        Hapus
                    </x-button.default>
                </form>
            </x-component.card>
        </div>
    </div>
</x-layout>
