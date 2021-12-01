<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index RW</title>
</head>
<body>
    <h1 align="center">Data Rw </h1>
    <center><a href="/rw/create">Tambah Data</a></center>
    <table align="center" cellpadding="5" cellspacing="0" border="1">
        <tr>
            <th>No</th>
            <th>Nama </th>
            <th>Masa Jabatan</th>
            <th>No Telpon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        @foreach($table as $hasil)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$hasil->nama_rw}}</td>
            <td>{{$hasil->masa_jabatan}}</td>
            <td>{{$hasil->no_tlp}}</td>
            <td>{{$hasil->email}}</td>
            <td>
                <form action="/rw/{{$hasil->id}}" method="post">
                @csrf
                @method('DELETE') 
                 <a href="/rw/{{$hasil->id}}" class="btn btn-warning">Edit</a>      
                @method('DELETE')        
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>