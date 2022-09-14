<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
</head>
<body class="m-0 vh-100 d-flex justify-content-center align-items-center">
    <div id="contenedor">
        <div class="row">
            <div class="col p-5 text-center card">
                <form action="" class="">
                    <h1 class="h3 mb-3 fw-normal">
                        Iniciar sesión
                    </h1>
                    <div class="mb-3">
                        <input type="text" class="form-control" v-model="email" placeholder="Correo electrónico">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" v-model="password" placeholder="Contraseña">
                    </div>
                    <div class="">
                        <button class="w-100 btn btn-lg btn-primary" @click="login">
                            Acceder
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script type="text/javascript">

        const { createApp } = Vue;

        const { app } = createApp({
            data() {
                return {
                    users: null,
                    email: '',
                    password: '',
                }
            },
            methods: {
                login(e) {

                    var data = new FormData();
                    data.append('username', this.email);
                    data.append('password', this.password);
                    data.append('request_token', '');

                    var config = {
                    method: 'post',
                    url: 'https://api.themoviedb.org/3/authentication/token/validate_with_login',
                    headers: { 
                        'Authorization': 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMjU5MTAxNzQwYzM4Njk3NzNiYjBiN2UzODlmMjU1MCIsInN1YiI6IjYxOGU5Y2I5MjBlNmE1MDAyYzUwNWUyNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.wzHg_l28yVYvXQ0J8fkjGZ5Rg0jUwYp--t3fx2HqK5M', 
                    },
                    data : data
                    };

                    axios(config)
                    .then(function (response) {
                        if (response.data.success) {
                            localStorage.setItem('peliculas', JSON.stringify(response));
                            window.location.href = 'movies.html';

                        } else {
                            alert("Datos incorrectos");
                        }
                        
                    })
                    .catch(function (error) {
                    console.log(error);
                    });

                    
                    e.preventDefault();
                    
                },
            },
            mounted() {

            },
        }).mount('#contenedor');

    </script>
</body>
</html>