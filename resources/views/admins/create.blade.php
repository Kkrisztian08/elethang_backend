<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új házi hozzáadása</title>
</head>
<body>
<h1>Új admin</h1>
    <form method='POST' action="{{ route('admins.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Név:<br>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>
        <div>
            Email cím:<br>
            <input type="email" name="email" value="{{ old('email') }}"> 
        </div>
        <div>
            Jelszó:<br>
            <input type="password" name="password" value="{{ old('password') }}">
        </div>
        <div>
            Születési dátum:<br>
            <input type="date" name="birthday" value="{{ old('birthday') }}">
        </div>
        <div>
            Lakcím:<br>
            <input type="text" name="address" value="{{ old('address') }}">
        </div>
        <div>
            <br>
            <input type="submit" value="Létrehozás">
        </div>
    </form>
    <form action="{{ route('admins.index') }}">
        <br>
        <button type="submit">Vissza az előző oldalra</button>
    </form>
</body>
</html>