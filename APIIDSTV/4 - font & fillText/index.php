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

            // Textos
            // Texto normal
            ctx.font = "50px Arial";
            ctx.fillStyle = "red";
            ctx.fillText("Isaac", 150, 60);

            // Stroke text
            ctx.strokStyle = "red";
            ctx.strokeText("Isaac", 150, 130);

            
        </script>
</body>
</html>