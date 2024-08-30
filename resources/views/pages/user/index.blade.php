<x-layout title="Daftar Pengguna">
    <x-component.card>
        <x-component.datatable id="users">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Usia</th>
                    <th>No. HP</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ Carbon\Carbon::parse($user->tgl_lahir)->isoFormat('DD MMMM YYYY') }}</td>
                        <td>{{ Carbon\Carbon::parse($user->tgl_lahir)->age }} Tahun</td>
                        <td>{{ $user->no_hp }}</td>
                        <td>
                            <x-button.default color="green" size="small"
                                navigate="{{ route('user.edit', $user->ulid) }}">
                                Edit
                            </x-button.default>
                            <form action="{{ route('user.destroy', $user->ulid) }}" method="post" class="inline">
                                @csrf
                                @method('DELETE')
                                <x-button.default color="red" size="small" type="submit">
                                    Hapus
                                </x-button.default>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </x-component.datatable>
    </x-component.card>
</x-layout>
