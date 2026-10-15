<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .container { max-width: 800px; margin: auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input, textarea { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background: #28a745; color: white; border: none; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; margin-top: 30px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Input Data Mahasiswa</h1>

        @if(session('success'))
            <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
        @endif

        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" value="{{ old('nim') }}">
                @error('nim') <p style="color: red; margin: 5px 0;">{{ $message }}</p> @enderror
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
                @error('nama') <p style="color: red; margin: 5px 0;">{{ $message }}</p> @enderror
            </div>

            <div class="form-group">
                <label for="prodi">Prodi:</label>
                <input type="text" id="prodi" name="prodi" value="{{ old('prodi') }}">
                @error('prodi') <p style="color: red; margin: 5px 0;">{{ $message }}</p> @enderror
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                @error('tanggal_lahir') <p style="color: red; margin: 5px 0;">{{ $message }}</p> @enderror
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" rows="3">{{ old('alamat') }}</textarea>
                @error('alamat') <p style="color: red; margin: 5px 0;">{{ $message }}</p> @enderror
            </div>

            <button type="submit">Simpan Mahasiswa</button>
        </form>

        <hr style="margin: 40px 0;">

        <h2>Tabel Daftar Mahasiswa</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mahasiswas as $index => $mhs)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->tanggal_lahir }}</td>
                    <td>{{ $mhs->alamat }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data mahasiswa.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>