<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba canvas</title>
    <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
    <canvas id="canvas">
        
    </canvas>
    <button id="export">Exportar</button>
    <img src="" alt="" id="img">
    <script>
        const canvas = document.getElementById('canvas');

        function draw() {
            if (canvas.getContext) {
                var ctx = canvas.getContext('2d');

                ctx.beginPath();
                ctx.arc(75,75,50,0,Math.PI*2,true); // Círculo externo
                ctx.moveTo(110,75);
                ctx.arc(75,75,35,0,Math.PI,false);   // Boca (contra reloj)
                ctx.moveTo(65,65);
                ctx.arc(60,65,5,0,Math.PI*2,true);  // Ojo izquierdo
                ctx.moveTo(95,65);
                ctx.arc(90,65,5,0,Math.PI*2,true);  // Ojo derecho
                ctx.stroke();
            }
        }
        draw();

        document.querySelector('#export').addEventListener('click', function(){
            convertCanvasToImage();
        });

        function convertCanvasToImage(canvas) {
	        var image = new Image();
	        document.querySelector('#img').src = document.getElementById('canvas').toDataURL("image/png");
            image = document.getElementById('canvas').toDataURL("image/png");

            $.ajax({
                type: 'POST',
                url: 'php/Controller.php',
                data:{
                    printPDF: 1,
                    chart: image
                }
            }).done(function(r){
                console.log(r);
            });
        }
    </script>
</body>
</html>