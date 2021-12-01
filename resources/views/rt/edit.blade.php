<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit rt</title>
</head>
<body>
    <form action="/rt/{{$item->id}}" method="post">
        @csrf
        @method('PUT')
            <div>
                <label for="nama_rt">Nama Rt</label>
                : <input type="text" name="nama_rt" id="nama_rt" value="{{$item->nama_rt}}">
            </div>
            <div>
                <label for="masa_jabatan">Masa Jabatan</label>
                : <input type="text" name="masa_jabatan" id="masa_jabatan" value="{{$item->masa_jabatan}}">
            </div>
            <div>
                <label for="no_tlp">Nomor Telepon</label>
                : <input type="number" name="no_tlp" id="no_tlp" value="{{$item->no_tlp}}">
            </div>
            <div>
                <label for="email">Email</label>
                : <input type="email" name="email" id="email" value="{{$item->email}}">
            </div>
            <div>
                <button type="submit">Kirim</button>
            </div>
        </form> 
</body>
</html>