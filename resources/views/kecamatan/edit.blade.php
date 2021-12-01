<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kecamatan</title>
</head>
<body>
    <form action="/kecamatan/{{$table->id}}" method="post">
        @csrf
        @method('PUT')
            <div>
                <label for="nama_kecamatan">Nama Kecamatan</label>
                : <input type="text" name="nama_kecamatan" id="nama_kecamatan" value="{{$table->nama_kecamatan}}">
            </div>
            <div>
                <label for="nama_camat">Nama Camat</label>
                : <input type="text" name="nama_camat" id="nama_camat" value="{{$table->nama_camat}}">
            </div>
            <div>
                <label for="masa_jabatan">Masa Jabatan</label>
                : <input type="text" name="masa_jabatan" id="masa_jabatan" value="{{$table->masa_jabatan}}">
            </div>
            <div>
                <label for="no_tlp">Nomor Telepon</label>
                : <input type="number" name="no_tlp" id="no_tlp" value="{{$table->no_tlp}}">
            </div>
            <div>
                <label for="email">Email</label>
                : <input type="email" name="email" id="email" value="{{$table->email}}">
            </div>
            <div>
                <button type="submit">Kirim</button>
                <a href="/kecamatan">Kembali</a>
            </div>
        </form> 
</body>
</html>