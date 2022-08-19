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
        var cv = null;
        var ctx = null;
        var player1 = null;
        var super_x = 240, super_y = 240;

        function start () {
            cv = document.getElementById("mycanvas");
            ctx = cv.getContext('2d');
            player1 = new Cuadrado(super_x, super_y, 40, 40, "red");
            paint();
        }

        function paint() {

            window.requestAnimationFrame(paint);

            ctx.fillStyle = "white";
            ctx.fillRect(0, 0, 500, 500);
            
            player1.c = random_rgba();
            player1.dibujar(ctx);
/*             ctx.fillStyle = random_rgba();
            ctx.fillRect(super_x, super_y, 40, 40);
            ctx.strokeRect(super_x, super_y, 40, 40); */

            update();

        }

        function Cuadrado(x, y, w, h, c) {
            this.x = x;
            this.y = y;
            this.w = w;
            this.h = h;
            this.c = c;

            this.dibujar = function(ctx) {
                ctx.fillStyle = this.c;
                ctx.fillRect(this.x, this.y, this.w, this.h);
                ctx.strokeRect(this.x, this.y, this.w, this.h);
            }

        }

        function update() {
            player1.x += 10; 
            if (player1.x > 500) {
                player1.x = 0;
            }

            player1.y += 10; 
            if (player1.y > 500) {
                player1.y = 0;
            }


        }

        window.addEventListener('load', start);

        window.requestAnimationFrame = (function () {
            // Son paquetes que dependen del navegador que utilizemos
            return window.requestAnimationFrame || 
            window.webkitRequestAnimationFrame || 
            window.mozRequestAnimationFrame || 
            function (callback) {
                window.setTimeout(callback, 17);
            };

        }());

        document.addEventListener('keydown', (e) => {

        });

        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
        }
        
    </script>
</body>
</html>