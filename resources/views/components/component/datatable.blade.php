@props(['id'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/libs/datatable/datatables.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/libs/datatable/datatables.min.js') }}"></script>
    <script>
        new DataTable("#{{ $id }}", {
            ordering: false,
        })
    </script>
@endpush

<table id="{{ $id }}" class="display" style="width:100%">
    {{ $slot }}
</table>
