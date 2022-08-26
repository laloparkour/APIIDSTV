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
        var player2 = null;
        var super_x = 240, super_y = 240;
        
        var direction = 'left';
        var score = 0;
        var pause = false;
        var obstaculos = Array();
        var speed = 5;

        var bee = new Image();
        var flor = new Image();
        var wall = new Image();
        var wall2 = new Image();
        var wall3 = new Image();
        
        var sonido1 = new Audio();

        function start () {
            cv = document.getElementById("mycanvas");
            ctx = cv.getContext('2d');
            player1 = new Cuadrado(super_x, super_y, 40, 40, "red");
            player2 = new Cuadrado(generateRandomInteger(500), generateRandomInteger(500), 40, 40, "red");
/* 
            obstaculos = [
                obstaculo1 = new Obstaculo(100, 100, 40, 40),
                obstaculo2 = new Obstaculo(140, 100, 40, 40),
                obstaculo3 = new Obstaculo(180, 100, 40, 40),
                obstaculo4 = new Obstaculo(220, 100, 40, 40),
                obstaculo5 = new Obstaculo(260, 100, 40, 40),
                obstaculo6 = new Obstaculo(300, 100, 40, 40),
                obstaculo7 = new Obstaculo(340, 100, 40, 40),
                obstaculo8 = new Obstaculo(100, 220, 40, 40),
                obstaculo9 = new Obstaculo(100, 260, 40, 40),
                obstaculo10 = new Obstaculo(100, 300, 40, 40),
                obstaculo11 = new Obstaculo(340, 220, 40, 40),
                obstaculo12 = new Obstaculo(340, 260, 40, 40),
                obstaculo13 = new Obstaculo(340, 300, 40, 40),
            ]; */
            obstaculo1 = new Obstaculo(100, 100, 340, 40);
            obstaculo2 = new Obstaculo(100, 180, 40, 260);
            obstaculo3 = new Obstaculo(400, 180, 40, 260);

            bee.src = 'abejorro.png';
            flor.src = 'flor.png';
            wall.src = 'wall.png';
            wall2.src = 'wall.png';
            wall3.src = 'wall.png';

            sonido1.src = "cuac.mp3"

            paint();
        }

        function paint() {
            window.requestAnimationFrame(paint);
            ctx.fillStyle = "gray";
            ctx.fillRect(0, 0, 500, 500);
            
            ctx.fillStyle = "white";
            ctx.font = "25px Arial";
            ctx.fillText('SCORE: ' + score, 10, 30); 
            
            player1.c = random_rgba();
            player1.dibujar(ctx);
            player2.dibujar(ctx);
            obstaculo1.dibujar(ctx);
            obstaculo2.dibujar(ctx);
            obstaculo3.dibujar(ctx);

/*             obstaculos.forEach(o => {
                o.dibujar(ctx);
            }); */

            ctx.drawImage(bee, player1.x, player1.y);
            ctx.drawImage(flor, player2.x, player2.y);
            ctx.drawImage(wall, obstaculo1.pos_x, obstaculo1.pos_y, 340, 40);
            ctx.drawImage(wall, obstaculo2.pos_x, obstaculo2.pos_y, 40, 260);
            ctx.drawImage(wall, obstaculo3.pos_x, obstaculo3.pos_y, 40, 260);

            if (!pause) {
                update();
            } else {
                ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
                ctx.fillRect(0, 0, 500, 500); 
                ctx.fillStyle = "white";
                ctx.font = "25px Arial"; 
                ctx.fillText('P A U S E', 200, 250);
            }
        }
        function Cuadrado(x, y, w, h, c) {
            this.x = x;
            this.y = y;
            this.w = w;
            this.h = h;
            this.c = c;
            this.se_tocan = function (target) { 
                if(this.x < target.x + target.w &&
                this.x + this.w > target.x && 
                this.y < target.y + target.h && 
                this.y + this.h > target.y) {
                    return true;
                }  
            };
/*             this.colision = function (obstaculos) {
                for (const obstaculo of obstaculos) {
                    if(this.x < obstaculo.pos_x + obstaculo.width &&
                        this.x + this.w > obstaculo.pos_x && 
                        this.y < obstaculo.pos_y + obstaculo.height && 
                        this.y + this.h > obstaculo.pos_y) {
                        return true;
                    }
    
                    return false;
                    
                } 
            } */
            this.colision = function (obstaculo) {
                if(this.x < obstaculo.pos_x + obstaculo.width &&
                    this.x + this.w > obstaculo.pos_x && 
                    this.y < obstaculo.pos_y + obstaculo.height && 
                    this.y + this.h > obstaculo.pos_y) {
                    return true;
                } 
            }
            this.dibujar = function(ctx) {
                ctx.fillStyle = this.c;
                ctx.fillRect(this.x, this.y, this.w, this.h);
                ctx.strokeRect(this.x, this.y, this.w, this.h);
            }
        }
        class Obstaculo {
            constructor(pos_x, pos_y, width, height) {
                this.pos_x = pos_x;
                this.pos_y = pos_y;
                this.width = width;
                this.height = height;
                this.color = "green"
            }
            dibujar(ctx) {
                ctx.fillStyle = this.color;
                ctx.fillRect(this.pos_x, this.pos_y, this.width, this.height);
                ctx.strokeRect(this.pos_x, this.pos_y, this.width, this.height);
            }
        }
        function update() {
            if (direction == 'right') {
                player1.x += speed; 
                if (player1.x > 500) {
                    player1.x = 0;
                }
            } 
            if (direction == 'left') {
                player1.x -= speed; 
                if (player1.x < 0) {
                    player1.x = 500;
                }
            }
            if (direction == 'down') {
                player1.y += speed; 
                if (player1.y > 500) {
                    player1.y = 0;
                }
            }
            if (direction == 'up') {
                player1.y -= speed; 
                if (player1.y < 0) {
                    player1.y = 500;
                }
            }
            if (player1.se_tocan(player2)) {
                player2.x = generateRandomInteger(500);
                player2.y = generateRandomInteger(500);
                score += 10;

                sonido1.play();
                
            }
            
            if (player1.colision(obstaculo1)) {
                speed = 0;
            } else if (player1.colision(obstaculo2)) {
                speed = 0;
            } else if (player1.colision(obstaculo3)) {
                speed = 0;
            }
/* 
            if (player1.colision(obstaculos)) {
                speed = 0;
            } */
        }
        document.addEventListener('keydown', (e) => {
            // Arriba
            if (e.keyCode == 87 || e.keyCode == 38) {
                direction = 'up';
            }
            
            // Abajo
            if (e.keyCode == 83 || e.keyCode == 40) {
                direction = 'down';
            }
            
            // Izquierda
            if (e.keyCode == 65 || e.keyCode == 37) {
                direction = 'left';
            }
            
            // Derecha
            if (e.keyCode == 68 || e.keyCode == 39) {
                direction = 'right';
            }
            // Pausa
            if (e.keyCode == 32) {
                pause = (pause) ? false : true;
            }
            
        });
        function generateRandomInteger(max) {
            return Math.floor(Math.random() * max) + 1;
        }
        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
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
        
    </script>
</body>
</html>