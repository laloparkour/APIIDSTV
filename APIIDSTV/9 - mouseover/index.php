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
        var color = 'red';
        
        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
        }

        cv.addEventListener('click', (e) => {
            
            ctx.beginPath();
            ctx.arc(e.offsetX, e.offsetY, 50, 0, 2*Math.PI);
            ctx.fillStyle = color;
            ctx.strokeStyle = "green";
            ctx.stroke();
            ctx.fill();

        });

        cv.addEventListener("mouseover", (e) => {
            color = random_rgba();
        });
        

        
    </script>
</body>
</html>