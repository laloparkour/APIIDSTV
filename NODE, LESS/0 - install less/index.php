<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Panel</title>
    <link rel="stylesheet" href="public/css/main.css">
</head>
<body>
    
    <div class="container">

        <p>Ola</p>


        <fieldset>            
            <legend>Acceso al panel</legend>
            <form action="">                

                <div class="">
                    <label for="">Email</label>
                    <input type="Email">
                </div>

                <div class="">
                    <label for="">Contraseña</label>
                    <input type="password">
                </div>
    
                <button type="submit">Acceder</button>
                
            </form>    
        </fieldset>
    </div>

    {{ templateSaludo }}


    <script>
export default {
  data() {
    return {
      greeting: 'ola'
    }
  }
}
</script>

<templateSaludo>
  <p class="greeting">{{ greeting }}</p>
</templateSaludo>

<style>
.greeting {
  color: red;
  font-weight: bold;
}
</style>
</body>
</html>