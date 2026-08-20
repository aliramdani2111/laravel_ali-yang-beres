<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">

    <h2>Data Siswa</h2>

    <a href="{{ route('siswas.create') }}" class="btn-tambah">
        + Tambah Siswa
    </a>

    @foreach ($siswas as $siswa)

        <div class="data-siswa">

            Nama: {{ $siswa->nama }} |
            Kelas: {{ $siswa->kelas }}

            <a href="{{ route('siswas.edit', $siswa->id) }}" class="btn-edit">
                Edit
            </a>

            <form action="{{ route('siswas.destroy', $siswa->id) }}"
                  method="POST"
                  style="display:inline;">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn-hapus">
                    Hapus
                </button>

            </form>

        </div>

    @endforeach

</div>

</body>
</html>