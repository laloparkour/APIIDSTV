<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue</title>
    
</head>
<body>

    <div id="contenedor">
        <form action="">
            <fieldset>
                <legend>
                    Datos de acceso
                </legend>
                <label>Correo electronico</label>
                <input type="text" v-model="email">
                <br>
                <label>Password</label>
                <input type="password" v-model="password">
                <br>
                <button @click="login">
                    Acceder
                </button>
            </fieldset>
        </form>
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

/*                     var tmp_mail = this.email;
                    var tmp_pwd = this.password;

                    let acces = this.users.map(function(u) {
                        if (tmp_mail === u.email) {
                            if (tmp_pwd === u.password) {

                                let tmp_usr = {
                                    id: u.id,
                                    name: u.name,
                                    username: u.username,
                                    email: u.email,
                                    phone: u.phone,
                                    website: u.website,
                                };
                                
                                alert("Correctos");

                                localStorage.setItem('user', JSON.stringify(tmp_usr));
                                
                                window.location.href = 'users.html';
                                 
                            }
                        }
                    })

                    alert("Datos incorrectos"); */


                    //var axios = require('axios');
                    //var FormData = require('form-data');
                    var data = new FormData();
                    data.append('username', this.email);
                    data.append('password', this.password);
                    data.append('request_token', '');

                    var config = {
                    method: 'post',
                    url: 'https://api.themoviedb.org/3/authentication/token/validate_with_login',
                    headers: { 
                        'Authorization': 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJlMjU5MTAxNzQwYzM4Njk3NzNiYjBiN2UzODlmMjU1MCIsInN1YiI6IjYxOGU5Y2I5MjBlNmE1MDAyYzUwNWUyNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.wzHg_l28yVYvXQ0J8fkjGZ5Rg0jUwYp--t3fx2HqK5M', 
                        //...data.getHeaders()
                    },
                    data : data
                    };

                    axios(config)
                    .then(function (response) {
                        if (response.data.success) {
                            localStorage.setItem('peliculas', JSON.stringify(response));
                            window.location.href = 'users.html';

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
/*                 fetch('data/users.json')
                .then((res) => res.json())
                .then((json) => ( this.users = json ))
                .catch((err) => ( alert('no data') )) */
            },
        }).mount('#contenedor');

    </script>
</body>
</html>