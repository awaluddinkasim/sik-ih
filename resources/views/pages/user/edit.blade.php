<x-layout title="Edit Pengguna">
    <x-component.card title="Form User">
        <form action="{{ route('user.update', $user->ulid) }}" method="post">
            @method('PUT')
            @csrf
            <x-form.input label="Nama" name="nama" :value="$user->nama" :required="true" />
            <x-form.input label="Email" name="email" :value="$user->email" :required="true" />
            <x-form.input label="Password" type="password" name="password"
                helperText="Kosongkan jika tidak
                ingin diubah" />
            <x-form.input label="Tanggal Lahir" name="tgl_lahir" type="date" :value="$user->tgl_lahir" :required="true" />
            <x-form.textarea label="Alamat" name="alamat" rows="3"
                :required="true">{{ $user->alamat }}</x-form.textarea>
            <x-form.input label="No. HP" name="no_hp" :value="$user->no_hp" :required="true" />
            <x-form.textarea label="Riwayat Kesehatan" name="riwayat_kesehatan" rows="5"
                :required="true">{{ $user->riwayat_kesehatan }}</x-form.textarea>

            <x-button.default type="submit">Simpan</x-button.default>
        </form>
    </x-component.card>
</x-layout>
