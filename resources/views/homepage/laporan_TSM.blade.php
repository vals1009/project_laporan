<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Laporan Jurusan TBSM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Daftar Laporan Jurusan TBSM</h2>
            </div>
        </div>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Siswa</th>
                        <th scope="col">Jurusan</th> {{-- Menambahkan kolom Jurusan --}}
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">File PDF</th>
                        <th scope="col">File Word</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporan as $tbsm)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $tbsm->siswa->nama }}</td>
                            <td>{{ $tbsm->siswa->jurusan->nama_jurusan }}</td> {{-- Menampilkan nama jurusan --}}
                            <td>{{ $tbsm->title }}</td>
                            <td>{{ $tbsm->description }}</td>
                            <td>
                                <a href="{{ asset('storage/' . $tbsm->document_pdf) }}" target="_blank" class="btn btn-primary btn-sm">Lihat PDF</a>
                            </td>
                            <td>
                                <a href="{{ asset('storage/' . $tbsm->document_word) }}" target="_blank" class="btn btn-success btn-sm">Download Document</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>