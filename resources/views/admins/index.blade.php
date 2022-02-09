<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Házik Listája</title>
</head>
<body>
    <table>
        <tr>
            <th>Név</th>
            <th>Email cím</th>
            <th>Születési dátum</th>
            <th>Lakcím</th>
        </tr>
        @foreach ($admins as $admin)
        <tr>
            <td>
                <a href="{{ route('admins.show', $admin->id) }}">{{ $admin->name }}</a>
            </td>
            <td>{{ $admin->email }}</td>
            <td>{{ $admin->birthday }}</td>
            <td>{{ $admin->address }}</td>
            <td>
                <form method="POST" action="{{ route('admins.destroy', $admin->id) }}">
                    @csrf
                    @method('DELETE')
                    <button>Törlés</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <form action="{{ route('admins.create') }}">
        <br>
        <button type="submit">Új admin hozzáadása</button>
    </form>
    <form action="{{ route('home') }}">
        <br>
        <button type="submit">Vissza a főoldalra</button>
    </form>
</body>
</html>