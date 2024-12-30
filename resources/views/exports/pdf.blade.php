<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            line-height: 1.5;
        }

        h3 {
            margin-top: 0;
        }

        h4 {
            margin-top: 0;
            font-weight: normal
        }

        .text-center {
            text-align: center;
        }

        .text-muted {
            color: #888;
        }
    </style>
</head>

<body>
    <h3>Laporan Pasien</h3>
    <table>
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
            @forelse ($reports as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ Carbon\Carbon::parse($user->konsultasi->tanggal_appointment)->isoFormat('DD MMMM YYYY') }}
                    </td>
                    <td>{{ $user->konsultasi->tujuan }}</td>
                    <td>{{ $user->konsultasi->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
