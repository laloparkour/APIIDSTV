<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue</title>
</head>
<body>

<!--     <div id="myapp">
        <h1>Hello {{ name }}</h1>
    </div> -->

    <div id="contenedor">



        <h1>
            {{ name }}
        </h1>
        <p>{{ lastName }}</p>

        <fieldset>
            <legend>Datos personales</legend>
            <input type="text" v-model="name" name="">
            <input type="text" v-model="lastName" name="">
            <button @click="saludar">
                Saludar
            </button>
        </fieldset>

        <hr>
        
        <fieldset>
            <legend>Calculdora</legend>
            <input type="number" v-model="n_uno">
            <input type="number" v-model="n_dos">
            <button @click="sumar">
                Sumar
            </button>
            <p>{{ resultado }}</p>

        </fieldset>

    </div>

    <!-- Nos permite editar el DOM sin mayor complejidad -->
    <!-- Directiva: es todo lo que empieza con v en VueJs -->

    <script src="https://unpkg.com/vue@3"></script>
    <script type="text/javascript">
        
        const { createApp } = Vue;

        const { app } = createApp({
            data() {
                return {
                    name: 'Isaac',
                    lastName: 'Emiliano',
                    n_uno: 0,
                    n_dos: 0,
                    resultado: 0,
                }
            },
            methods: {
                saludar() {
                    alert("Hola: " + this.name + " " + this.lastName)
                },
                sumar() {
                    this.resultado = this.n_uno + this.n_dos
                }
            },
        }).mount('#contenedor');

    </script>
</body>
</html>