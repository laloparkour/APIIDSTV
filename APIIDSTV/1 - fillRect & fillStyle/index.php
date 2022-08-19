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


            /*          
            ctx.strokeStyle = "white";
            ctx.strokeRect(10, 10, 50, 50);
            
            ctx.strokeStyle = "red";
            ctx.strokeRect(20, 150, 50, 50); 
            */

            ctx.fillStyle = "rgb(200, 0, 0)";
            ctx.fillRect(10,10,55,50);

            ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
            ctx.fillRect(50,50,55,50);

            ctx.fillStyle = "pink";
            ctx.fillRect(90,90,55,50);


        </script>
</body>
</html>