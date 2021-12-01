<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index kelurahan</title>
</head>
<body>
    <h1 align="center">Data Kecamatan</h1>
    <center><a href="/kecamatan/create">Tambah Data</a></center>
    <table align="center" cellpadding="5" cellspacing="0" border="1">
        <tr>
            <th>No</th>
            <th>Nama Kecamatan</th>
            <th>Nama Camat</th>
            <th>Masa Jabatan</th>
            <th>No Telpon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        @foreach($table as $hasil)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$hasil->nama_kecamatan}}</td>
            <td>{{$hasil->nama_camat}}</td>
            <td>{{$hasil->masa_jabatan}}</td>
            <td>{{$hasil->no_tlp}}</td>
            <td>{{$hasil->email}}</td>
            <td>
                <form action="/kecamatan/{{$hasil->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="/kecamatan/{{$hasil->id}}" btn btn-warning>Edit</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>