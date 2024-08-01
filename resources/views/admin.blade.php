<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Je suis admin</h1>
    <form action="/search" method="GET" role="search">
            {{ csrf_field() }}
            <div>
                <input type="text" " placeholder="Rechercher..." name="q">
            <button type="submit">Go!</button>
            </div>
    </form>
    <ul>
        @foreach(DB::table('users')->orderBy('lastname', 'asc')->get() as $user)
        <div class="flex">
                <p>{{$user->lastname}}</p>
                <p>{{$user->firstname}}</p>
                <p>{{$user->roles()->name}}</p>
        </div>
        @endforeach
    </ul>

</body>
</html>