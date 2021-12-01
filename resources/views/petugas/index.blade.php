<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index petugas</title>
</head>
<body>
    <h1 align="center">Data Petugas</h1>
    <center><a href="/petugas/create">Tambah Data</a></center>
    <table>
        <tr>
            <th>Nama Petugas</th>
            <th>Email</th>
            <th>No Telpon</th>
            <th>Aksi</th>
        </tr>

        @foreach ($table as $item)
            <td>{{$item->nama_petugas}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->passwoard}}</td>
            <td>{{$item->no_tlp}}</td>
            <td>
                <form action="/petugas/{{$item->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/petugas/{{$item->id}}" btn btn-warning>Edit</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        @endforeach
    </table>
</body>
</html>