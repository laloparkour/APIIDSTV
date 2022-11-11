<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Registro de usuario</h1>
    <form action="{{ url('users') }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}">
        <br>

        <label for="lastname">Apellido</label>
        <input type="text" id="lastname" name="lastname" value="{{ $user->lastname }}">
        <br>

        <label for="email">Correo</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}">
        <br>

        <input type="hidden" name="id" value="{{ $user->id }}">

        <button type="submit">Guardar</button>
    </form>
</body>
</html>