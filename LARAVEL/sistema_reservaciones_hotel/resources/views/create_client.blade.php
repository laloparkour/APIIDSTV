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
    <form action="http://127.0.0.1:8000/clients/" method="post">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name">
        <br>

        <label for="lastname">Apellido</label>
        <input type="text" id="lastname" name="lastname">
        <br>

        <label for="email">Correo</label>
        <input type="email" id="email" name="email">
        <br>

        <label for="phone_number">Teléfono</label>
        <input type="tel" id="phone_number" name="phone_number">
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>