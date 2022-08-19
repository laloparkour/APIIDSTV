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

    <img src="img.png" id="imagen" style="display: none">

    <script text="text/javascript">
        var cv = document.getElementById("mycanvas");

        var ctx = cv.getContext('2d');
        var color = 'red';
        var fig = 'arc';
        var press = false;

        cv.addEventListener('click', (e) => {

            ctx.fillStyle = color;
            ctx.lineWidth = "2";

            if (fig == 'rec' ) {
                ctx.fillRect(e.offsetX-20, e.offsetY-20, 40, 40);
                ctx.strokeRect(e.offsetX-20, e.offsetY-20, 40, 40);
            } else {
                ctx.beginPath();
                ctx.arc(e.offsetX, e.offsetY, 50, 0, 2*Math.PI);
                ctx.strokeStyle = "green";
                ctx.stroke();
                ctx.fill();
            }

        });

        cv.addEventListener('mouseover', (e) => {
            color = random_rgba();
        });
        
        cv.addEventListener('mouseout', (e) => {
            fig = (fig == 'arc') ? 'rec' : 'arc';
        });

        cv.addEventListener('mousemove', (e) => {
            
            if (press) {                
                ctx.fillStyle = random_rgba();
                ctx.fillRect(e.offsetX, e.offsetY, 10, 10);
            }
        });

        cv.addEventListener('mousedown', function(e) {
            press = true;
        });

        cv.addEventListener('mouseup', function(e) {
            press = false;
        });

        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
        }
        
    </script>
</body>
</html>