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
                <label for="">Correo electronico</label>
                <input type="text" v-model="email">
                <br>
                <label for="">Password</label>
                <input type="password" v-model="password">
                <br>
                <button @click="login">
                    Acceder
                </button>
            </fieldset>
        </form>
    </div>

    <script src="https://unpkg.com/vue@3"></script>
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

                    var tmp_mail = this.email;
                    var tmp_pwd = this.password;

                    let acces = this.users.map(function(u) {
                        if (tmp_mail === u.email) {
                            if (tmp_pwd === u.password) {
                                alert("correctos");
                                // windows location
                            }
                        }
                    })

                    alert("datos incorrectos");
                    
                    e.preventDefault();
                    
                },
            },
            mounted() {
                fetch('data/users.json')
                .then((res) => res.json())
                .then((json) => ( this.users = json ))
                .catch((err) => ( alert('no data') ))
            },
        }).mount('#contenedor');

        // mount =  es un objeto de tipo vue y despues se lo montamos al contenedor

        // mounted = es algo que se va ejecutar cuando el evento del montado de vue se ejecute por lo tanto se va a ejecutar la primera vez cuando vue se ejecute, dentro de mounted se pueden crear metodo y invocarlos

    </script>
</body>
</html>