<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <canvas id="mycanvas" width="500" height="500">
        Tu navegador no soporta canvas
    </canvas>

    <script text="text/javascript">
        var cv = document.getElementById("mycanvas");
        var ctx = cv.getContext('2d');
        var super_x = 240, super_y = 240;

        document.addEventListener('keydown', (e) => {
            console.log(e);

            // Arriba
            if (e.keyCode == 87 || e.keyCode == 38) {
                super_y -= 10;
            }
            
            // Abajo
            if (e.keyCode == 83 || e.keyCode == 40) {
                super_y += 10;
            }
            
            // Izquierda
            if (e.keyCode == 65 || e.keyCode == 37) {
                super_x -= 10;
            }
            
            // Derecha
            if (e.keyCode == 68 || e.keyCode == 39) {
                super_x += 10;
            }

            paint();
            
        });

        function paint() {
            ctx.fillStyle = "white"
            ctx.fillRect(0, 0, 500, 500);
            
            ctx.fillStyle = "red";
            ctx.fillRect(super_x, super_y, 40, 40);
            ctx.strokeRect(super_x, super_y, 40, 40);
        }
        
    </script>
</body>
</html>