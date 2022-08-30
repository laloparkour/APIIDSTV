<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <canvas id="mycanvas" width="800" height="520">
        Tu navegador no soporta canvas
    </canvas>
    <script text="text/javascript">
        var cv = null;
        var ctx = null;
        var player1 = null;
        var player2 = null;
        var pared = null;
        var paredes = new Array()
        var techos = new Array();

        var super_x = 240, super_y = 240;
        
        var direction = 'right';
        var score = 0;
        var speed = 5;

        var bee = new Image();
        var flor = new Image();
        var wall = new Image();
        var techo = new Image();

        var sonido1 = new Audio();

        var pause = false;
      
        function start () {
            cv = document.getElementById("mycanvas");
            ctx = cv.getContext('2d');
            ctx.strokeStyle = "rgba(1, 1, 1, 0)";

            player1 = new Cuadrado(super_x, super_y, 40, 40, "red"); 

            player2 = new Cuadrado(generateRandomInteger(500), generateRandomInteger(500), 40, 40, "red");

            
            for (let i = 0; i < 799; i+=40) {
                for (let j = 0; j < 520; j+=40) {
                    if (i < 799 && j == 0) {
                        paredes.push(new Cuadrado(i, j, 40, 40, "green"));
                    }
                    
                    if (i == 0 && j >= 40 && j < 499) {
                        paredes.push(new Cuadrado(i, j, 40, 40, "green"));
                    }
                     
                    if (i == 760 && j >= 40 && j < 499) { 
                        paredes.push(new Cuadrado(i, j, 40, 40, "green"));
                    }

                    if (i < 799 && j == 480) {
                        paredes.push(new Cuadrado(i, j, 40, 40, "green"));
                    }
                }
            };
            
            for (let i = 0; i < 799; i+=40) {
                for (let j = 0; j < 520; j+=40) {

                    if (i >= 40 && i < 760 && j == 40) { 
                        techos.push(new Cuadrado(i, j, 40, 40, "green"));
                    }
                }
            };



            pared = new Cuadrado(40, 80, 30, 300, "red");

            bee.src = 'cf.png';
            flor.src = 'mf.png';
            wall.src = 'wall.png';
            techo.src = 'techo.png';

            sonido1.src = "no.mp3"

            paint();
        }

        function paint() {
            window.requestAnimationFrame(paint);
            
            ctx.fillStyle = "white";
            ctx.fillRect(0, 0, 800, 520);
            
            ctx.fillStyle = "white";
            ctx.font = "25px Arial";
            /* ctx.fillText('SCORE: ' + score, 10, 30); */

            player1.c = random_rgba();

            //player1.dibujar(ctx);
            ctx.drawImage(bee, player1.x, player1.y);
            
            //player2.dibujar(ctx);
            ctx.drawImage(flor, player2.x, player2.y);
             
            paredes.forEach(pared => {
                ctx.drawImage(techo, pared.x, pared.y, pared.w, pared.h);
            });

            techos.forEach(techo => {
                ctx.drawImage(wall, techo.x, techo.y, techo.w, techo.h);
            });

            if (!pause) {
                update();
            } else {
                ctx.fillStyle = "rgba(0, 0, 0, 0.5)";
                ctx.fillRect(0, 0, 800, 520); 
                ctx.fillStyle = "white";
                ctx.font = "25px Arial"; 
                ctx.fillText('P A U S E', 350, 260);
            }
        }

        function Cuadrado(x, y, w, h, c) {
            this.x = x; 
            this.y = y;
            this.w = w;
            this.h = h;
            this.c = c;

            this.se_tocan = function (target) {

                if (this.x < target.x + target.w && 
                this.x + this.w > target.x && 
                this.y < target.y + target.h && 
                this.y + this.h > target.y) {
                    return true;
                }  
            };

            this.dibujar = function(ctx) {
                ctx.fillStyle = this.c;
                ctx.fillRect(this.x, this.y, this.w, this.h);
                ctx.strokeRect(this.x, this.y, this.w, this.h);
            }
        }

        function update() {
            if (direction == 'right') {
                player1.x += speed; 
                if (player1.x > 800) {
                    player1.x = 0;
                }
            } 

            if (direction == 'left') {
                player1.x -= speed; 
                if (player1.x < 0) {
                    player1.x = 800;
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
                /* speed += 5; */

                sonido1.play();
                
            }
            
            if (player1.se_tocan(pared)) {
                if (direction == 'right') {
                    player1.x -= speed;
                }

                if (direction == 'left') {
                    player1.x += speed;
                }

                if (direction == 'down') {
                    player1.y -= speed;
                }

                if (direction == 'up') {
                    player1.y += speed;
                }
            }
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

        function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
        }

        function generateRandomInteger(max) {
            return Math.floor(Math.random() * max) + 1;
        }
        
    </script>
</body>
</html>