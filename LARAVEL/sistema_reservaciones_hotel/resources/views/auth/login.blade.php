<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Inicia sesión</h1>

    <form action="{{ url('login') }}" method="post">
        @csrf

        <label for="email">Correo</label>
        <input type="email" id="email" name="email">
        <br>

        <label for="passsword">password</label>
        <input type="tel" id="password" name="password">
        <br>

        <button type="submit">Acceder</button>
    </form>

</body>
</html>