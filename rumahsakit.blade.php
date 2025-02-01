<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body>
    <h1 class="text-center mb-4">Data Rumah Sakit</h1>

    <div class="container">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <h2>Pasien</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasien as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->tanggal_lahir }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->nomor_telepon }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Dokter</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Spesialisasi</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dokter as $index => $d)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->spesialisasi }}</td>
                    <td>{{ $d->nomor_telepon }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Jadwal Dokter</h2>
        <table class="table" style="width: 104%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Dokter</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal as $index => $j)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $j->dokter->nama }}</td>
                    <td>{{ $j->hari }}</td>
                    <td>{{ $j->jam }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Obat</h2>
        <table class="table" style="width: 132%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Obat</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                 
                </tr>
            </thead>
            <tbody>
                @foreach ($obat as $index => $o)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $o->nama_obat }}</td>
                    <td>{{ $o->harga }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Rekam Medis</h2>
        <table class="table" style="width: 96%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Pasien</th>
                    <th>Dokter</th>
                    <th>Tanggal</th>
                    <th>Diagnosa</th>
                    <th>Obat</th>
                    <th>Aksi</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($rekamMedis as $index => $r)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $r->pasien->nama }}</td>
                    <td>{{ $r->dokter->nama }}</td>
                    <td>{{ $r->tanggal }}</td>
                    <td>{{ $r->diagnosa }}</td>
                    <td>{{ $r->obat->nama_obat }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
