<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>

    <h2>Edit Siswa</h2>

    <form action="{{ route('siswas.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')

<label>Nama:</label><br>
<input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>

<label>Kelas:</label><br>
<input type="text" name="kelas" value="{{ $siswa->kelas }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>

    <a href="{{ route('siswas.index') }}">Kembali</a>

</body>
</html>