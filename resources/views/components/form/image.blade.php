@props(['label', 'name', 'required' => false, 'helperText'])

@push('scripts')
    <script>
        $("#{{ $name }}Input").on('change', function() {
            let extension = $(this).val().split('.').pop().toLowerCase();
            if (extension != 'jpg' && extension != 'png' && extension != 'jpeg') {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'File harus berupa gambar',
                })
                $(this).val('');

                return false;
            }

            $('#{{ $name }}Preview').html(
                `<img src="${URL.createObjectURL(event.target.files[0])}" class="w-fullobject-contain" style="height: 100%;" />`
            );
        })
    </script>
@endpush


<div class="mb-3">
    <label class="form-label font-semibold" for="{{ $name }}Input">{{ $label }}</label>
    <input type="file"
        class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2"
        id="{{ $name }}Input" name="{{ $name }}" @if ($required) required @endif>
    @isset($helperText)
        <small class="italic text-gray-500">{{ $helperText }}</small>
    @endisset
    <div class="h-64 w-full border-dotted border-2 border-gray-300 rounded-lg mt-2 flex justify-center items-center bg-slate"
        id="{{ $name }}Preview">
        <span class="text-gray-500">Pilih Gambar</span>
    </div>
</div>
