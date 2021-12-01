<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index rt</title>
</head>
<body>
    <h1 align="center">Data RT</h1>
    <center><a href="/rt/create">Tambah Data</a></center>
    <table align="center" cellpadding="5" cellspacing="0" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Masa Jabatan</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        @foreach ($collection as $item)
        <tr>

            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama_rt}}</td>
            <td>{{$item->masa_jabatan}}</td>
            <td>{{$item->no_tlp}}</td>
            <td>{{$item->email}}</td>
            <td>
                <form action="/rt/{{$item->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="/rt/{{$item->id}}" btn btn-warning>Edit</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            @endforeach
        </tr>
        </table>
    </body>
    </html>