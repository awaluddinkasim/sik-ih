<x-layout title="Laporan Pasien">
    <x-component.card>
        <div class="flex justify-end mb-3">
            <x-button.default color="red" navigate="{{ route('laporan.export') }}">Export PDF</x-button.default>
        </div>
        <x-component.datatable id="reports">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tanggal Konsultasi</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ Carbon\Carbon::parse($user->konsultasi->tanggal_appointment)->isoFormat('DD MMMM YYYY') }}
                        </td>
                        <td>{{ $user->konsultasi->tujuan }}</td>
                        <td>{{ $user->konsultasi->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </x-component.datatable>
    </x-component.card>
</x-layout>
