<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avatar en canvas</title>
</head>
<body>
        <canvas id="mycanvas" width="1000" height="1000">
            Tu  navegador no soporta canvas
        </canvas>

        <img src="logo.png" id="logo" style="display: none">

        <script type="text/javascript">

            var cv = document.getElementById("mycanvas");
            var ctx = cv.getContext('2d');

            // Cabeza
            ctx.beginPath();
            ctx.arc(500, 150, 55, 0, 2*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "#9a5833";
            ctx.fill();

            // Pelo
            ctx.beginPath();
            ctx.arc(500, 150, 55, 1.2*Math.PI, 1.8*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "black";
            ctx.fill();

            // Ojos
            ctx.beginPath();
            ctx.arc(480, 150, 7, 0, 2*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "black";
            ctx.fill();

            ctx.beginPath();
            ctx.arc(520, 150, 7, 0, 2*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "black";
            ctx.fill();

            // Boca
            ctx.beginPath();
            ctx.arc(500, 170, 15, 0, 1*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "black";
            ctx.fill();
            
            // Orejas
            ctx.beginPath();
            ctx.arc(445, 150, 10, 0.5*Math.PI, 1.5*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "#9a5833";
            ctx.fill();
            
            ctx.beginPath();
            ctx.arc(555, 150, 10, 1.5*Math.PI, 0.5*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "#9a5833";
            ctx.fill();

            // Cuello
            ctx.fillStyle = "#9a5833";
            ctx.fillRect(488, 198,25, 25);

            // Torso
            ctx.fillStyle = "#1a1a33";
            ctx.fillRect(445, 221, 120, 140);

            // Logos y texto
            ctx.font = "8px Arial";
            ctx.fillStyle = "white";
            ctx.fillText("REDES", 458, 260);

            let logo = document.getElementById("logo");
            ctx.drawImage(logo, 530, 250);

            // Mangas
            ctx.beginPath();
            ctx.moveTo(445, 222);
            ctx.lineTo(400, 260);
            ctx.lineTo(415, 285);
            ctx.lineTo(445, 260);
            ctx.stroke();
            ctx.fillStyle = "#1a1a33";
            ctx.fill();

            ctx.beginPath();
            ctx.moveTo(565, 222);
            ctx.lineTo(610, 260);
            ctx.lineTo(595, 285);
            ctx.lineTo(565, 260);
            ctx.stroke();
            ctx.fillStyle = "#1a1a33";
            ctx.fill();

            // Brazos
            ctx.beginPath();
            ctx.moveTo(403, 263);
            ctx.lineTo(360, 305);
            ctx.lineTo(370, 318);
            ctx.lineTo(413, 280);
            ctx.stroke();
            ctx.fillStyle = "#9a5833";
            ctx.fill();
            
            ctx.beginPath();
            ctx.moveTo(607, 264);
            ctx.lineTo(648, 304);
            ctx.lineTo(638, 315);
            ctx.lineTo(599, 280);
            ctx.stroke();
            ctx.fillStyle = "#9a5833";
            ctx.fill();

            // Manos
            ctx.beginPath();
            ctx.arc(360, 315, 10, 0, 2*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "#9a5833";
            ctx.fill();

            ctx.beginPath();
            ctx.arc(649, 315, 10, 0, 2*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "#9a5833";
            ctx.fill();

            // Pantalones
            ctx.beginPath();
            ctx.moveTo(445, 361);
            ctx.lineTo(452, 515);
            ctx.lineTo(485, 515);
            ctx.lineTo(505, 410);
            ctx.lineTo(535, 515);
            ctx.lineTo(565, 515);
            ctx.lineTo(565, 361);
            ctx.stroke();
            ctx.fillStyle = "black";
            ctx.fill();
            
            // Zapatos
            ctx.beginPath();
            ctx.arc(445, 535, 25, 1*Math.PI, 0);
            ctx.stroke();
            ctx.fillStyle = "#9a5833";
            ctx.fill();

            ctx.moveTo(471, 534);
            ctx.lineTo(485, 515);
            ctx.lineTo(463, 516);
            ctx.stroke();
            ctx.fillStyle = "black";
            ctx.fill();
            
            ctx.beginPath();
            ctx.arc(463, 517, 5, 0, 2*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "black";
            ctx.fill();

            ctx.beginPath();
            ctx.arc(570, 535, 25, 1*Math.PI, 0);
            ctx.stroke();
            ctx.fill();
            
            ctx.moveTo(544, 534);
            ctx.lineTo(535, 515);
            ctx.lineTo(554, 515);
            ctx.stroke();
            ctx.fillStyle = "black";
            ctx.fill();            

        </script>
</body>
</html>