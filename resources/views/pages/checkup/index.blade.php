<x-layout title="Hasil Pemeriksaan">
    <x-slot:actions>
        <x-form.modal id="newCheckup" label="Tambah" title="Form Checkup" action="{{ route('checkup.store') }}">
            <x-form.select label="Pilih Pasien" name="pregnancy_id" :required="true">
                @foreach ($checkups as $user)
                    <option value="{{ $user->kehamilan->id }}">{{ $user->nama }}</option>
                @endforeach
            </x-form.select>
            <x-form.input label="Berat Badan (kg)" name="berat_badan" :numeric="true" :required="true" />
            <x-form.input label="Tekanan Darah Sistol (mmHg)" name="tekanan_darah_sistol" :numeric="true"
                :required="true" />
            <x-form.input label="Tekanan Darah Diastol (mmHg)" name="tekanan_darah_diastol" :numeric="true"
                :required="true" />
            <x-form.input label="Tanggal Pemeriksaan" type="date" name="tanggal_pemeriksaan" :required="true" />
            <x-form.textarea label="Catatan (opsional)" name="catatan" rows="5"></x-form.textarea>
        </x-form.modal>
    </x-slot:actions>

    <x-component.card>
        <x-component.datatable id="checkups">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Usia Kehamilan</th>
                    <th>Tanggal Pemeriksaan Terakhir</th>
                    <th>Total Pemeriksaan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($checkups as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>
                            {{ $user->kehamilan->usia_kehamilan }} Minggu
                        </td>
                        <td>
                            @if ($user->kehamilan->checkups->count() > 0)
                                {{ Carbon\Carbon::parse($user->kehamilan->checkups->last()->tanggal_pemeriksaan)->isoFormat('DD MMMM YYYY') }}
                            @else
                                Belum Pernah
                            @endif
                        </td>
                        <td>{{ $user->kehamilan->checkups->count() }}</td>
                        <td>
                            <x-button.default color="green" size="small"
                                navigate="{{ route('checkup.detail', $user->kehamilan->ulid) }}">
                                Lihat
                            </x-button.default>
                        </td>
                    </tr>
                @endforeach
        </x-component.datatable>
    </x-component.card>
</x-layout>
