<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Élethang adminok</title>
</head>
<body>
<h1>Üdvözlöm az Élethang alapitvány adminokat leiró oldalán</h1>
    <p>Összes beadott munka: {{ $adminCount ?? ""}}</p>
    <form action="{{ route('admins.index') }}">
        <br>
        <button type="submit">Lássuk a részleteket</button>
    </form>
</body>
</html>