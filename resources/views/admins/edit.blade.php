<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>{{ $admins->name }} admin adatai</h1>
    <form method='POST' action="{{ route('admins.update', $admins->id) }}">
        @method('PATCH')
        @csrf
        <div>
            Név:<br>
            <input type="text" name="name" value="{{ $admins->name }}">
        </div>
        <div>
            Email cím:<br>
            <input type="email" name="email" value="{{ $admins->email }}">
        </div>
        <div>
            Születési dátum:<br>
            <input type="date" name="birthday" value="{{ $admins->birthday }}">
        </div>
        <div>
            Lakcím:<br>
            <input type="text" name="address" value="{{ $admins->address }}">
        </div>
        <div>
            <br>
            <input type="submit" value="Értékelés">
        </div> 
    </form>
    <form action="{{ route('admins.show', $admins->id) }}">
        <br>
        <button type="submit">Vissza az előző oldalra</button>
    </form>
</body>
</html>