<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="/postlogin" method="post">
    @csrf
        <div align="center">
            <div>
                <h1>Login</h1>
            </div>
            <div>
                <label for="nik">nik</label>
                : <input type="nik" name="nik" id="nik">
            </div>
            <div>
                <label for="password">Password</label>
                : <input type="password" name="password" id="password">
            </div>
            <div>
                <button type="submit">Kirim</button>
            </div>
        </div>
            
    </form>
</body>
</html>