<x-layout title="Data Kehamilan">
    <x-component.card>
        <x-component.datatable id="pregnancies">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Ibu Hamil</th>
                    <th>No. HP</th>
                    <th>Usia Kehamilan</th>
                    <th>Perkiraan Tanggal Persalinan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pregnancies as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->no_hp }}</td>
                        <td>{{ $user->kehamilan->usia_kehamilan }} Minggu</td>
                        <td>{{ Carbon\Carbon::parse($user->kehamilan->perkiraan_tanggal_persalinan)->isoFormat('DD MMMM YYYY') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </x-component.datatable>
    </x-component.card>

</x-layout>
