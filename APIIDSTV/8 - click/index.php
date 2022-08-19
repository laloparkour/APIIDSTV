<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        canvas{
            background-color: rgba(0, 0, 200, 0.5);
        }
    </style>
</head>
<body>
    <canvas id="mycanvas" width="500" height="500">
        Tu navegador no soporta canvas
    </canvas>

    <script text="text/javascript">
        var cv = document.getElementById("mycanvas");
        var ctx = cv.getContext('2d');

        cv.addEventListener('click', (e) => {
            
            ctx.beginPath();
            ctx.arc(e.offsetX, e.offsetY, 50, 0, 2*Math.PI);
            ctx.fillStyle = "rgba(255, 0, 200, 0.5)";
            ctx.strokeStyle = "green";
            ctx.stroke();
            ctx.fill();

        });
        

        
    </script>
</body>
</html>