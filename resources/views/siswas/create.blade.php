<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>

    <h2>Tambah Siswa</h2>

    <form action="{{ route('siswas.store') }}" method="POST">
        @csrf

        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="{{ route('siswas.index') }}">Kembali</a>

</body>
</html>