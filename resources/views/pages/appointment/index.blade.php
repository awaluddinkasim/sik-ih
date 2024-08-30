<x-layout title="Data Konsultasi">
    <x-component.card>
        <x-component.datatable id="appointments">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>No. HP</th>
                    <th>Tanggal Konsultasi</th>
                    <th>Tujuan</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $appointment->user->nama }}</td>
                        <td>{{ $appointment->user->no_hp }}</td>
                        <td>
                            {{ Carbon\Carbon::parse($appointment->tanggal_appointment)->isoFormat('DD MMMM YYYY') }}
                        </td>
                        <td>{{ $appointment->tujuan }}</td>
                        <td>{{ Str::ucfirst($appointment->status) }}</td>
                        <td class="text-center">
                            @if ($appointment->status == 'pending' || $appointment->status == 'confirmed')
                                @if ($appointment->status == 'pending')
                                    <x-form.modal id="confirmation{{ $appointment->id }}" label="Konfirmasi"
                                        :smallButton="true" title="Konfirmasi Konsultasi"
                                        action="{{ route('appointment.confirm', $appointment->ulid) }}">
                                        <x-form.input label="Tanggal Konsultasi" name="tanggal_appointment" type="date"
                                            value="{{ $appointment->tanggal_appointment }}" :required="true" />
                                    </x-form.modal>
                                @endif
                                <form action="{{ route('appointment.cancel', $appointment->ulid) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    <x-button.default type="submit" color="red"
                                        size="small">Batalkan</x-button.default>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </x-component.datatable>
    </x-component.card>
</x-layout>
