<x-layout title="Edit Profile">
    <x-component.card>
        <form action="{{ route('profile.update') }}" method="post">
            @csrf
            @method('PUT')
            <x-form.input label="Nama" name="nama" :value="auth()->user()->nama" :required="true" />
            <x-form.input label="Email" name="email" :value="auth()->user()->email" :required="true" />
            <x-form.input label="Password" name="password" type="password"
                helperText="Kosongkan jika tidak ingin diubah" />

            <x-button.default type="submit">Simpan</x-button.default>
        </form>

    </x-component.card>
</x-layout>
