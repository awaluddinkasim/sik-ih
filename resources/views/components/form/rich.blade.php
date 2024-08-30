@props(['name', 'label'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/libs/quill/quill.snow.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/libs/quill/quill.js') }}"></script>
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });

        $('#editor').on('keyup onchange', function() {
            $("input[name='{{ $name }}']").val(quill.root.innerHTML);
        })
    </script>
@endpush

<div class="mb-3">
    <label class="form-label font-semibold">{{ $label }}</label>

    <input type="hidden" name="{{ $name }}" value="{{ $slot }}" required>

    <div id="editor" style="height: 400px" class="mb-3">
        {{ $slot }}
    </div>

</div>
