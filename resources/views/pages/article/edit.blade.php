@push('scripts')
    <script>
        $('#formArticle').on('submit', function(e) {
            let konten = ($('#editor').children("div").html());

            $("input[name='konten']").val(konten);
        })
    </script>
@endpush

<x-layout title="Edit Artikel">
    <x-component.card>
        <form action="{{ route('article.update', $article->ulid) }}" method="post" autocomplete="off"
            enctype="multipart/form-data" id="formArticle">
            @method('PUT')
            @csrf
            <x-form.image label="Ganti Gambar" name="gambar" gambar="{{ $article->gambar }}" />
            <x-form.input label="Judul" name="judul" :value="$article->judul" :required="true" />
            <x-form.rich label="Konten" name="konten" :required="true">
                {!! $article->konten !!}
            </x-form.rich>

            <div class="flex justify-end">
                <x-button.default type="submit">Submit</x-button.default>
            </div>
        </form>
    </x-component.card>
</x-layout>
