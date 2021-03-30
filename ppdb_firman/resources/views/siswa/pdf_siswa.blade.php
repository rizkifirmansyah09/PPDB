<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Siswa</title>
</head>
<body>
    <hr>
    <h1 style="text-align: center;">Report Data</h1>
    <hr style="margin-bottom: 20px;">
    <table border="1" cellspacing="0" cellpading="5" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">Nis</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->GenderDefinition }}</td>
                <td>{{ $siswa->tempat_lahir }}</td>
                <td>{{ $siswa->tgl_lahir }}</td>
                <td>{{ $siswa->asal_sekolah }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>{{ $siswa->jurusan }}</td>              
            </tr>
        </tbody>
    </table>
</body>
</html>