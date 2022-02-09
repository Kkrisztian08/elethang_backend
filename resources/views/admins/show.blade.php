<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $admins->name }} adatlapja</title>
</head>
<body>
    <h1>Név: {{ $admins->name }}</h1>
    <h3>Email cím: {{ $admins->email}}</h3>
    <p>Születési dátum: {{ $admins->birthday }}</p>
    <p>Lakcím: {{ $admins->address }}</p>
    <form action="{{ route('admins.edit', $admins->id) }}">
        <br>
        <button type="submit">Értékelés és modositás</button>
    </form>
    <form action="{{ route('admins.index') }}">
        <br>
        <button type="submit">Vissza az előző oldalra</button>
    </form>
</body>
</html>