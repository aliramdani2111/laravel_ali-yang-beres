<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

    <h2>Data Siswa</h2>

    <a href="{{ route('siswas.create') }}">+ Tambah Siswa</a>

    <br><br>

    @foreach ($siswas as $siswa)
        <p>
            Nama: {{ $siswa->nama }} |
            Kelas: {{ $siswa->kelas }}

            <a href="{{ route('siswas.edit', $siswa->id) }}">Edit</a>

            <form action="{{ route('siswas.destroy', $siswa->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </p>
    @endforeach

</body>
</html>