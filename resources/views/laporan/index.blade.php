<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Data Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Daftar Laporan</h2>
            </div>
            <div class="col text-end">
                <a href="{{ route('laporan.create') }}" class="btn btn-primary">Tambah Laporan</a>
            </div>
        </div>
        {{-- PESAN SUKSES --}}
        @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        {{-- PESAN SUKSES --}}
        @if ($laporan->isEmpty())
            <p>Tidak ada laporan.</p>
        @else
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Siswa</th>
                        <th scope="col">Jurusan</th> {{-- Menambahkan kolom Jurusan --}}
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        {{-- <th scope="col">File</th> --}}
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporan as $laporan)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $laporan->siswa->nama }}</td>
                            <td>{{ $laporan->siswa->jurusan->nama_jurusan }}</td> {{-- Menampilkan nama jurusan --}}
                            <td>{{ $laporan->title }}</td>
                            <td>{{ $laporan->description }}</td>
                            {{-- <td>{{ $laporan->file_path }}</td> --}}
                            <td>
                                <a href="{{ route('laporan.edit', $laporan->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                ...
                
            </table>
        @endif
    </div>
</body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>