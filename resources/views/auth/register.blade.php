<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="/postregister" method="post">
    @csrf
        <div align="center">
            <div>
                <h1>Register</h1>
            </div>
            <div>
                <input type="radio" name="role" id="alumni" value="Alumni"><label for="alumni">Alumni</label>
                <input type="radio" name="role" id="murid" value="Murid"><label for="murid">Murid</label>
            </div>
            <div>
                <label for="nama">Nama</label>
                : <input type="text" name="nama" id="nama">
            </div>
            <div>
                <label for="nik">NIK</label>
                : <input type="text" name="nik" id="nik">
            </div>
            <div>
                <label for="email">Email</label>
                : <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                : <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="no_tlp">no_tlp</label>
                : <input type="number" name="no_tlp" id="no_tlp">
            </div>
            <div>
                <button type="submit">Kirim</button>
            </div>
        </div>
            
    </form>
</body>
</html>