<html>
    <head>
        <title>Hora de la repugnancia</title>
        <meta charset="UTF-8">
        <style>img[alt="www.000webhost.com"]{display:none;}</style>
    </head>
    <body>
        <link rel="stylesheet" href="horarepu.css">
        <section class="repugnancia">
            <div>
                <h2>El mejor dia de la historia</h2>
                <div class="countdown">
                    <div class="container-year">
                        <h3 class="year">Tiempo</h3>
                        <h3>Años</h3>
                    </div>
                    <div class="container-month">
                        <h3 class="month">Tiempo</h3>
                        <h3>Meses</h3>
                    </div>
                    <div class="container-day">
                        <h3 class="day">Tiempo</h3>
                        <h3>Dias</h3>
                    </div>
                    <div class="container-hour">
                        <h3 class="hour">Tiempo</h3>
                        <h3>Horas</h3>
                    </div>
                    <div class="container-minute">
                        <h3 class="minute">Tiempo</h3>
                        <h3>Minutos</h3>
                    </div>
                    <div class="container-second">
                        <h3 class="second">Tiempo</h3>
                        <h3>Segundos</h3>
                    </div>
                    <!--<div>
                        <h3>Letra de hoy</h3>
                        <h3 class="letra">letra</h3>
                    </div>-->
                </div>
            </div>
        </section>
        <script>
            /*function getLetter() {
                var tiempoHttps = new XMLHttpRequest();
                tiempoHttps.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.querySelector(".letra").innerText = this.responseText;
                    }
                };
                tiempoHttps.open("GET", "coger.php", true);
                tiempoHttps.send();
            }*/

            setInterval(()=>{
                var tiempoHttps = new XMLHttpRequest();
                tiempoHttps.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var tiempo = this.responseText.split(" ");

                        var years = tiempo[0];
                        var meses = tiempo[1];
                        var dias = tiempo[2];
                        var horas = tiempo[3];
                        var minutos = tiempo[4];
                        var segundos = tiempo[5];

                        document.querySelector(".year").innerText = years;
                        document.querySelector(".month").innerText = meses;
                        document.querySelector(".day").innerText = dias;
                        document.querySelector(".hour").innerText = horas;
                        document.querySelector(".minute").innerText = minutos;
                        document.querySelector(".second").innerText = segundos;

                        if(tiempo[3] == "cambio"){
                            getLetter();
                        }
                    }
                };
                tiempoHttps.open("GET", "countdown.php", true);
                tiempoHttps.send();
            }, 1000);

            getLetter();
        </script>
    </body>
</html>