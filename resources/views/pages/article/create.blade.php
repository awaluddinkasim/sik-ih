@push('scripts')
    <script>
        $('#formArticle').on('submit', function(e) {
            let konten = ($('#editor').children("div").html());

            $("input[name='konten']").val(konten);
        })
    </script>
@endpush

<x-layout title="Buat Artikel">
    <x-component.card>
        <form action="{{ route('article.store') }}" method="post" autocomplete="off" enctype="multipart/form-data"
            id="formArticle">
            @csrf
            <x-form.image label="Gambar" name="gambar" :required="true" />
            <x-form.input label="Judul" name="judul" :required="true" />
            <x-form.rich label="Konten" name="konten" :required="true" />

            <div class="flex justify-end">
                <x-button.default type="submit">Submit</x-button.default>
            </div>
        </form>
    </x-component.card>
</x-layout>
