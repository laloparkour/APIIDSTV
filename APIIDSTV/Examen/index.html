<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="number"></div>
    <canvas id="mycanvas" width="1320" height="760">
        Tu navegador no soporta canvas
    </canvas>
    <script text="text/javascript">
        var cv = null;
        var ctx = null;
        var player = null;
        var enemy = null;
        var enemy2 = null;
        var finish = null;
        var flag = false;
        
        var roofs = new Array();
        var walls = new Array()
        var floors = new Array();
        
        var super_x = 40, super_y = 280;
        var direction = 'right';
        var speed = 0;
        var speedMonster = 2;
        var time = 1;

        var knight = new Image();
        var minotauro = new Image();
        var walli = new Image();
        var roofi = new Image();
        var floori = new Image();
        var meta = new Image();

        var sonido1 = new Audio();
        var sonido2 = new Audio();
        var sonido3 = new Audio();

        var pause = false;
      
        function start () {
            cv = document.getElementById("mycanvas");
            ctx = cv.getContext('2d');
            ctx.strokeStyle = "rgba(1, 1, 1, 0)";

            player = new Cuadrado(super_x, super_y, 30, 30, "white");
            
            // enemy = new Cuadrado(generateRandomInteger(500), generateRandomInteger(500), 40, 40, "white");
            enemy = new Cuadrado(600, 80, 40, 40, "white");
            enemy2 = new Cuadrado(400, 280, 40, 40, "white");
            enemy3 = new Cuadrado(760, 480, 40, 40, "white");

            meta1 = new Cuadrado(1280, 280, 40, 40, "white");
            meta2 = new Cuadrado(1280, 680, 40, 40, "white");

            // Roof
            for (let i = 0; i < 1319; i+=40) {
                for (let j = 0; j < 799; j+=40) {
                    if (i < 1319 && j == 0) {
                        roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                    }
                    
                    if (i == 0) {
                        if (j < 220 || j > 300) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }
                    
                    if (i == 1280) {
                        if (j < 260 || j > 300 && j < 680) { 
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (i < 1319 && j == 720) {
                        roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                    }

                    if (j == 120) {

                        if (i == 120 
                            || i >= 200 && i <= 360 
                            || i >= 440 && i <= 560 
                            || i >= 640 && i <= 760 
                            || i >= 840 && i <= 960
                            || i >= 1040 && i <= 1280) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }
                    
                    if (j == 160) {
                        if (i == 120 || i == 200 
                            || i == 360 || i == 440 
                            || i == 560 || i == 640
                            || i == 760 || i == 840
                            || i == 960 || i == 1160) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 200) {
                        if (i >= 40 && i < 160 
                            || i == 200 || i >= 360 && i < 480 
                            || i >= 560 && i < 680
                            || i >= 760 && i < 880
                            || i == 960 || i == 1160) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }
                    
                    if (j == 240) {
                        if (i > 920 && i < 1120 || i == 1160) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 280) {
                        if (i == 960 || i == 1160) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 320) {
                        if (i > 0 && i < 240 || i > 240 && i < 400 || i > 400 && i < 560
                            || i > 560 && i < 1000) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 360) {
                        if (i == 200 || i == 360 || i == 440 || i == 720 || i > 840 && i < 1320) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 400) {
                        if (i == 200 || i == 360 || i == 440 || i == 720) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 440) {
                        if (i > 80 && i < 320 || i == 360 || i > 400 && i < 760 || i == 800) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 480) {
                        if (i == 120 || i == 360 || i == 800 || i == 920 || i > 1000 && i < 1240) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 520) {
                        if (i == 120 || i == 360 || i > 760 && i < 1080) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 560) {
                        if (i == 120 || i == 360 || i == 440 || i == 800 || i == 920 || i == 1040) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 600) {
                        if (i > 80 && i < 400 || i > 400 && i < 760 || i == 800 || i == 920 || i == 1040 || i > 1080 && i < 1280) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 640) {
                        if (i == 720 || i == 1040) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }

                    if (j == 680) {
                        if (i == 720 || i == 1040) {
                            roofs.push(new Cuadrado(i, j, 40, 40, "white"));
                        }
                    }
                    
                }
            }; 
            
            // Walls
            for (let i = 0; i < 1319; i+=40) {
                for (let j = 0; j < 799; j+=40) {

                    if (i >= 40 && i < 1280 && j == 40) { 
                        walls.push(new Cuadrado(i, j, 40, 40, "green"));
                    }

                    if (j == 160) {
                        if (i >= 240 && i < 340
                            || i >= 480 && i < 560
                            || i >= 680 && i < 760
                            || i >= 880 && i < 960
                            || i > 1000 && i < 1160
                            || i > 1160 && i < 1280) { 
                            walls.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }
                    
                    if (j == 240) {
                        if (i >= 0 && i < 160 || i == 200
                            || i > 320 && i < 460
                            || i > 520 && i < 680
                            || i > 740 && i < 860) {
                            walls.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }
                    
                    if (j == 280) {
                        if (i > 960 && i < 1120) {
                            walls.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 360) {
                        if (i > 0 && i < 180 || i > 260 && i < 360 || i > 400 && i < 540 
                            || i > 580 && i < 700 || i > 740 && i < 860) {
                            walls.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 400) {
                        if (i > 840 && i < 1280) {
                            walls.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 480) {
                        if (i > 120 && i < 320 || i > 400 && i < 740) {
                            walls.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 520) {
                        if (i > 1040 && i < 1240) {
                            walls.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 560) {
                        if (i > 800 && i < 920 || i > 940 && i < 1040) {
                            walls.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 640) {
                        if (i > 80 && i < 400 || i > 400 && i < 700 || i == 800 || i == 920 || i > 1100 && i < 1280) {
                            walls.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                }
            };
            
            // Floor
            for (let i = 0; i < 1319; i+=40) {
                for (let j = 0; j < 799; j+=40) {

                    if (i >= 40 && i < 1280 && j == 80) { 
                        floors.push(new Cuadrado(i, j, 40, 40, "green"));
                    }
                    
                    if (j == 120) {
                        if (i >= 40 && i < 120 
                            || i == 160 || i == 400
                            || i == 600 || i == 800
                            || i == 1000) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }
                    
                    if (j == 160) {
                        if (i >= 40 && i < 120 
                            || i == 160 || i == 400
                            || i == 600 || i == 800
                            || i == 1000) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }
                    
                    if (j == 200) {
                        if (i == 160 ||  i > 200 && i <= 320
                            || i > 460 && i < 540
                            || i > 640 && i < 760
                            || i > 840 && i < 960
                            || i > 960 && i < 1160
                            || i > 1160 && i < 1280) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }
                    
                    if (j == 240) {
                        if (i == 160 || i > 200 && i < 360
                            || i > 440 && i < 560
                            || i > 640 && i < 760
                            || i > 840 && i < 960
                            || i == 1120 || i > 1160 && i < 1280) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 280) {
                        if (i >= 0 && i < 960 || i == 1120 || i >= 1180 && i < 1320) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 320) {
                        if (i == 240 || i == 400 || i == 560 || i > 960 && i < 1280) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 360) {
                        if (i == 240 || i == 400 || i == 560) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 400) {
                        if (i > 0 && i < 200 || i > 200 && i < 360 || i == 400
                            || i > 440 && i < 720 || i > 720 && i < 880) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 440) {
                        if (i > 0 && i < 120 || i == 320 || i == 400 || i == 760 || i > 800 && i < 1280) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 480) {
                        if (i > 0 && i < 120 || i == 320 || i == 400 || i == 760 
                            || i > 800 && i < 920 
                            || i > 920 && i < 1040 
                            || i == 1240) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 520) {
                        if (i > 0 && i < 120 || i > 120 && i < 360 || i > 360 && i < 800 || i == 1240) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 560) {
                        if (i > 0 && i < 120 || i > 120 && i < 360 || i == 400 || i > 440 && i < 800 || i > 1040 && i < 1240 || i == 1240) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 600) {
                        if (i > 0 && i < 120 || i == 400 || i == 760 || i > 800 && i < 920 || i > 920 && i < 1040 || i == 1080) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 640) {
                        if (i > 0 && i < 120 || i == 400 || i == 760 || i > 800 && i < 920 || i > 920 && i < 1040 || i == 1080) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }

                    if (j == 680) {
                        if (i > 0 && i < 720 || i > 720 && i < 1040 || i > 1040 && i < 1320) {
                            floors.push(new Cuadrado(i, j, 40, 40, "green"));
                        }
                    }
                
                }
            };

            knight.src = 'cf.png';
            minotauro.src = 'mf.png';
            walli.src = 'wall.png';
            roofi.src = 'roof.png';
            floori.src = 'floor.png';
            meta.src = 'flag.png';

            sonido1.src = "no.mp3";
            sonido2.src = "dungeon.mp3";
            sonido3.src = "victory.mp3";

            paint();
        }

        function paint() {
            
            window.requestAnimationFrame(paint);

            ctx.fillStyle = "white";
            ctx.fillRect(0, 0, 1320, 760);

            player.c = random_rgba();

            roofs.forEach(roof => {
                ctx.drawImage(roofi, roof.x, roof.y, roof.w, roof.h);
            });
            
            walls.forEach(wall => {
                ctx.drawImage(walli, wall.x, wall.y, wall.w, wall.h);
            });
            
            floors.forEach(floor => {
                ctx.drawImage(floori, floor.x, floor.y, floor.w, floor.h);
            });

            ctx.drawImage(knight, player.x, player.y);
             
            ctx.drawImage(minotauro, enemy.x, enemy.y);
            ctx.drawImage(minotauro, enemy2.x, enemy2.y);
            ctx.drawImage(minotauro, enemy3.x, enemy3.y);

            ctx.drawImage(meta, meta1.x, meta1.y);
            ctx.drawImage(meta, meta2.x, meta2.y);

            ctx.fillStyle = "white";
            ctx.font = "30px Arial";
            ctx.fillText('Tiempo: ' + time, 0, 30);

            if (!pause) {
                update();
            } else {
                ctx.fillStyle = "rgba(0, 0, 0, 0.5)"; 
                ctx.fillRect(0, 0, 1320, 760); 
                ctx.fillStyle = "white";
                ctx.font = "50px Arial"; 
                ctx.fillText('P A U S E', 570, 380);
                sonido2.pause();
            }

            if (flag) {
                ctx.fillStyle = "white";
                ctx.font = "50px Arial";
                ctx.fillText('Ganaste', 570, 380);
            } else {
                ctx.fillText(' ', 570, 380);
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
            sonido2.play();
            sonido2.loop = true;

            if (direction == 'right') {
                player.x += speed; 
            } 

            if (direction == 'left') {
                player.x -= speed; 
            }

            if (direction == 'down') {
                player.y += speed; 
            }

            if (direction == 'up') {
                player.y -= speed; 
            }

            // Enemigo
            enemy.x += speedMonster;
            if (enemy.x > 1240) {
                enemy.x = 40;
            }
            
            enemy2.x += speedMonster;
            if (enemy2.x > 940) {
                enemy2.x = 400;
            }

            enemy3.y += 1;
            if (enemy3.y > 680) {
                enemy3.y = 480;
            }

            if (player.se_tocan(enemy)) {
                player.x = 0;
                player.y = 280;
                time = 0;
                sonido1.play();
            }

            if (player.se_tocan(enemy2)) {
                player.x = 0;
                player.y = 280;
                time = 0;
                sonido1.play();
            }

            if (player.se_tocan(enemy3)) {
                player.x = 0;
                player.y = 280;
                time = 0;
                sonido1.play();
            }
            
            if (player.se_tocan(meta1) || player.se_tocan(meta2)) {
                player.x = 0;
                player.y = 280;
                time = 0;
                sonido3.play();
                flag = true;
            }
            
            roofs.forEach(r => {
                if (player.se_tocan(r)) {
                    if (direction == 'right') {
                        player.x -= speed;
                    }

                    if (direction == 'left') {
                        player.x += speed;
                    }

                    if (direction == 'down') {
                        player.y -= speed;
                    }

                    if (direction == 'up') {
                        player.y += speed;
                    }
                } 
            });

            walls.forEach(w => {
                if (player.se_tocan(w)) {
                    if (direction == 'right') {
                        player.x -= speed;
                    }

                    if (direction == 'left') {
                        player.x += speed;
                    }

                    if (direction == 'down') {
                        player.y -= speed;
                    }

                    if (direction == 'up') {
                        player.y += speed;
                    }
                } 
            });
            
        }

        /* time = setInterval(contar(time), 1000); */
        
        document.addEventListener('keydown', (e) => {
            // Arriba
            if (e.keyCode == 87 || e.keyCode == 38) {
                direction = 'up';
                speed = 3;
            }
            
            // Abajo
            if (e.keyCode == 83 || e.keyCode == 40) {
                direction = 'down';
                speed = 3;
            }
            
            // Izquierda
            if (e.keyCode == 65 || e.keyCode == 37) {
                direction = 'left';
                speed = 3;
            }
            
            // Derecha
            if (e.keyCode == 68 || e.keyCode == 39) {
                direction = 'right';
                speed = 3;
            }
            // Pausa
            if (e.keyCode == 32) {
                pause = (pause) ? false : true;
            }
            
        });

        document.addEventListener('keyup', (e) => {
            // Arriba
            if (e.keyCode == 87 || e.keyCode == 38) {
                direction = 'up';
                speed = 0;
            }
            
            // Abajov
            if (e.keyCode == 83 || e.keyCode == 40) {
                direction = 'down';
                speed = 0;
            }
            
            // Izquierda
            if (e.keyCode == 65 || e.keyCode == 37) {
                direction = 'left';
                speed = 0;
            }
            
            // Derecha
            if (e.keyCode == 68 || e.keyCode == 39) {
                direction = 'right';
                speed = 0;
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

        
        window.setInterval(function() {
            time++
        }, 1000);
        
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