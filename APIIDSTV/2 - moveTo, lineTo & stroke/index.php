<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        canvas {
            background-color: rgba(0, 0, 200, 0.5);
        }
    </style>
</head>
<body>
        <canvas id="mycanvas" width="500" height="500">
            Tu  navegador no soporta canvas
        </canvas>

        <script type="text/javascript">

            var cv = document.getElementById("mycanvas");
            var ctx = cv.getContext('2d');

            // Lineas

            // Donde empieza
             ctx.moveTo(100, 50);

            // Donde termina si son dos
            ctx.lineTo(400, 350);

            // Rayar o trazar
            ctx.stroke();

            // Triangulo
            ctx.strokeStyle = "black";
            ctx.moveTo(350, 400);
            ctx.lineTo(150, 150);
            ctx.lineTo(150, 350);
            ctx.lineTo(350, 400);
            ctx.stroke();
            
        </script>
</body>
</html>