<x-layout title="Hasil Pemeriksaan {{ $pregnancy->user->nama }}">
    <x-slot:actions>
        <x-form.modal id="formCheckup" label="Tambah" title="Form Checkup" action="{{ route('checkup.store') }}">
            <input type="hidden" name="pregnancy_id" value="{{ $pregnancy->id }}">
            <x-form.input label="Tanggal Pemeriksaan" name="tanggal_pemeriksaan" type="date" :required="true" />
            <x-form.input label="Berat Badan (kg)" name="berat_badan" :numeric="true" :required="true" />
            <x-form.input label="Tekanan Darah Sistol (mmHg)" name="tekanan_darah_sistol" :numeric="true"
                :required="true" />
            <x-form.input label="Tekanan Darah Diastol (mmHg)" name="tekanan_darah_diastol" :numeric="true"
                :required="true" />
            <x-form.textarea label="Catatan (opsional)" name="catatan"></x-form.textarea>
        </x-form.modal>
    </x-slot:actions>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="col-span-1">
            <x-component.card title="Detail Pasien">
                <div class="mb-3">
                    <h3 class="font-bold">Nama</h3>
                    <p>{{ $pregnancy->user->nama }}</p>
                </div>

                <div class="mb-3">
                    <h3 class="font-bold">Tanggal Lahir</h3>
                    <p>{{ Carbon\Carbon::parse($pregnancy->user->tgl_lahir)->isoFormat('DD MMMM YYYY') }}
                    </p>
                </div>

                <div class="mb-3">
                    <h3 class="font-bold">Usia Kehamilan</h3>
                    <p>{{ $pregnancy->usia_kehamilan }} Minggu</p>
                </div>

                <div class="mb-3">
                    <h3 class="font-bold">Perkiraan Tanggal Persalinan</h3>
                    <p>{{ Carbon\Carbon::parse($pregnancy->perkiraan_tanggal_persalinan)->isoFormat('DD MMMM YYYY') }}
                    </p>
                </div>

                <div class="mb-3">
                    <h3 class="font-bold">Riwayat Kesehatan</h3>
                    <p>{{ $pregnancy->user->riwayat_kesehatan ?? '-' }}</p>
                </div>

            </x-component.card>
        </div>
        <div class="col-span-2">
            <x-component.card>
                <x-component.datatable id="checkups">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal Pemeriksaan</th>
                            <th>Berat Badan</th>
                            <th>Tekanan Darah Sistol</th>
                            <th>Tekanan Darah Diastol</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checkups as $checkup)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ Carbon\Carbon::parse($checkup->tanggal_pemeriksaan)->isoFormat('DD MMMM YYYY') }}
                                </td>
                                <td>{{ $checkup->berat_badan }} kg</td>
                                <td>{{ $checkup->tekanan_darah_sistol }} mmHg</td>
                                <td>{{ $checkup->tekanan_darah_diastol }} mmHg</td>
                                <td>
                                    <x-button.default color="green" size="small"
                                        onclick="detail{{ $checkup->id }}.showModal()">
                                        Detail
                                    </x-button.default>
                                    <x-component.modal id="detail{{ $checkup->id }}" title="Detail Hasil Pemeriksaan">
                                        <div class="mb-3">
                                            <h5 class="font-bold">Tanggal Pemeriksaan</h5>
                                            <p>{{ Carbon\Carbon::parse($checkup->tanggal_pemeriksaan)->isoFormat('DD MMMM YYYY') }}
                                            </p>
                                        </div>

                                        <div class="mb-3">
                                            <h5 class="font-bold">Berat Badan</h5>
                                            <p>{{ $checkup->berat_badan }} kg</p>
                                        </div>

                                        <div class="mb-3">
                                            <h5 class="font-bold">Tekanan Darah Sistol</h5>
                                            <p>{{ $checkup->tekanan_darah_sistol }} mmHg</p>
                                        </div>

                                        <div class="mb-3">
                                            <h5 class="font-bold">Tekanan Darah Diastol</h5>
                                            <p>{{ $checkup->tekanan_darah_diastol }} mmHg</p>
                                        </div>

                                        <div class="mb-3">
                                            <h5 class="font-bold">Catatan</h5>
                                            <p>{{ $checkup->catatan ?? '-' }}</p>
                                        </div>
                                    </x-component.modal>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </x-component.datatable>
            </x-component.card>
        </div>
    </div>
</x-layout>
