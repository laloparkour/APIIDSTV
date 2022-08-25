<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avatar en canvas</title>
    <style>
        canvas {
            background-color: #7cdaf9;
        }
    </style>
</head>
<body>
        <canvas id="mycanvas" width="1000" height="1000">
            Tu  navegador no soporta canvas
        </canvas>

        <img src="logo.png" id="logo" style="display: none">

        <script type="text/javascript">

            var cv = document.getElementById("mycanvas");
            var ctx = cv.getContext('2d');

            // SOL
            ctx.beginPath();
            ctx.arc(35, 35, 55, 1.8*Math.PI , 1.5*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "yellow";
            ctx.fill();

            // Rayos del sol
            ctx.beginPath();
            ctx.lineWidth = "2";
            ctx.strokeStyle = "yellow";
            ctx.moveTo(25, 90);
            ctx.lineTo(15, 120);
            ctx.stroke();
            ctx.fillStyle = "yellow";
            ctx.fill();

            ctx.beginPath();
            ctx.moveTo(45, 90);
            ctx.lineTo(50, 120);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.moveTo(65, 80);
            ctx.lineTo(75, 110);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.moveTo(81, 65);
            ctx.lineTo(100, 97);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.moveTo(87, 43);
            ctx.lineTo(115, 68);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.moveTo(90, 25);
            ctx.lineTo(120, 35);
            ctx.stroke();
            ctx.fill();

            // Casa
            ctx.fillStyle = "green";
            ctx.fillRect(350, 700, 300, 300);

            // Ventanas
            ctx.fillStyle = "white";
            ctx.fillRect(380, 730, 80, 80);

            ctx.beginPath();
            ctx.lineWidth = "2";
            ctx.strokeStyle = "black";
            ctx.moveTo(380, 770);
            ctx.lineTo(460, 770);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.lineWidth = "2";
            ctx.strokeStyle = "black";
            ctx.moveTo(420, 730);
            ctx.lineTo(420, 810);
            ctx.stroke();
            ctx.fill();
            
            ctx.fillStyle = "white";
            ctx.fillRect(540, 730, 80, 80);

            ctx.beginPath();
            ctx.lineWidth = "2";
            ctx.strokeStyle = "black";
            ctx.moveTo(540, 770);
            ctx.lineTo(620, 770);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.lineWidth = "2";
            ctx.strokeStyle = "black";
            ctx.moveTo(580, 730);
            ctx.lineTo(580, 810);
            ctx.stroke();
            ctx.fill();

            // Puerta
            ctx.fillStyle = "#9a5833";
            ctx.fillRect(460, 870, 80, 130);

            ctx.beginPath();
            ctx.arc(525, 940, 5, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fillStyle = "black";
            ctx.fill();

            // Techo
            ctx.beginPath();
            ctx.strokeStyle = "red";
            ctx.moveTo(350, 700);
            ctx.lineTo(300, 700);
            ctx.lineTo(500, 550);
            ctx.lineTo(700, 700);
            ctx.stroke();
            ctx.fillStyle = "red"
            ctx.fill();
            
            // Chimenea
            ctx.beginPath();
            ctx.strokeStyle = "black";
            ctx.moveTo(580, 609);
            ctx.lineTo(580, 550);
            ctx.lineTo(610, 550);
            ctx.lineTo(610, 631);
            ctx.stroke();
            ctx.fillStyle = "green"
            ctx.fill();

            // Nubes
            ctx.beginPath();
            ctx.arc(160, 300, 50, 0 , 2*Math.PI);
            ctx.strokeStyle = "white";
            ctx.stroke();
            ctx.fillStyle = "white";
            ctx.fill();

            ctx.beginPath();
            ctx.arc(220, 260, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(290, 260, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(350, 300, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(220, 340, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(290, 340, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(260, 300, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(620, 300, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(680, 260, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(750, 260, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(810, 300, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(680, 350, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(750, 350, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            ctx.beginPath();
            ctx.arc(720, 310, 50, 0 , 2*Math.PI);
            ctx.stroke();
            ctx.fill();

            // Arboles
            ctx.fillStyle = "#9a5833";
            ctx.fillRect(160, 920, 10, 80);

            ctx.beginPath();
            ctx.lineWidth = "2";
            ctx.strokeStyle = "black";
            ctx.moveTo(160, 920);
            ctx.lineTo(120, 920);
            ctx.lineTo(165, 750);
            ctx.lineTo(210, 920);
            ctx.lineTo(160, 920);
            ctx.stroke();
            ctx.fillStyle = "green";
            ctx.fill();

            ctx.fillStyle = "#9a5833";
            ctx.fillRect(850, 920, 10, 80);

            ctx.beginPath();
            ctx.lineWidth = "2";
            ctx.strokeStyle = "black";
            ctx.moveTo(850, 920);
            ctx.lineTo(810, 920);
            ctx.lineTo(855, 750);
            ctx.lineTo(900, 920);
            ctx.lineTo(850, 920);
            ctx.stroke();
            ctx.fillStyle = "green";
            ctx.fill();

        
        </script>
</body>
</html>