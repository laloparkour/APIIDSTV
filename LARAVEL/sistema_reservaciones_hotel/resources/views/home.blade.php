<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola {{ Auth::user()->name }}</h1>

    
    <form action="{{ url('logout') }}" method="POST">
        @csrf


        <a href="{{ url('users/') }}">Ir a usuarios</a>


        <button type="submit">Salir</button>

    </form>

</body>
</html>