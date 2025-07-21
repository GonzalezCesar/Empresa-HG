<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="stylo.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .col {
            color:rgb(0, 0, 0);
            width: 450px;
            display: inline-block;
            vertical-align: top;
            text-align: justify;
            padding: 20px;
            font-size: 16px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            border-radius: 8px;
        }

        .tituloC {
            color:rgb(0, 0, 0);
            font-family: "Bodoni Moda", serif;
            font-size: 50px;
        }

        img.imagen-con-borde {
            border: 5px solid rgb(75, 137, 196);
        }

        .imagen-con-borde {
            transition: transform 0.3s ease;
            margin-top: 15px;
            margin-left: 30px;
            border-radius: 8px;
        }

        .imagen-con-borde:hover {
            transform: scale(1.2);
        }

        .parra {
            margin: 0 auto;
            padding: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        section {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .col:hover {
            transform: rotate(10deg);
            transition: transform 0.3s ease;
        }

        footer {
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: white;
        }

        footer p, footer ul {
            font-size: 20px;
        }

        footer h1 {
            font-family: Berlin Sans fb;
            font-size: 25px;
            color: rgb(0, 0, 0);
        }

        #tweet, #my_pictures, #my_friends, #fin {
            display: inline-block;
            vertical-align: top;
        }

        #tweet {
            width: 22%;
        }

        #my_pictures {
            width: 22%;
        }

        #my_friends {
            width: 22%;
        }

        #fin {
            width: 29%;
        }

        .posi {
            margin-right: 10px;
            margin-left: 50px;
            color: rgb(0, 0, 0);
            text-align:justify
        }

        .colibri {
            color: rgb(0, 0, 0);
            font-family: 'Times New Roman', Times, serif;
            font-size: 25px;
            margin-top: 30px;
        }

        .just {
            text-align: justify;
            margin-left: 40px;
            color: black;
        }

        .ajust {
            font-size: 25px;
            text-align: center;
        }

        
    </style>

    </head>
    <body>
        <nav class="nave">
            <ul class="menu_horizontal"> 

                <li> <a href="http://localhost/Consejo%20Comunal/principal_pag/paginaMain.php">Inicio</a> </li>


                <li> 
                    <a href="http://localhost/Consejo%20Comunal/principal_pag/paginaMain.php">CRUD</a> 
                    <ul class="menu_vertical">
                        <li><a href="http://localhost/Consejo%20Comunal/entidades/user/user.php">User</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/entidades/consejo_comunal/consejo_comunal.php">Consejo</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/entidades/propietario/propietario.php">Propietario</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/entidades/casa/casa.php">Casa</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/entidades/factura/factura.php">Factura</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/entidades/gastos-Extraordinarios/gastos-extraordinarios.php">Gastos-Extra</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/entidades/gastos-Fijos/gastos-fijos.php">Gastos-Fijos</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/entidades/pago_mensual/pagos-mensuales.php">Pago Mensual</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/entidades/habitantes/habitantes.php">Habitantes</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/entidades/carta/carta.php">Carta</a> </li>
                    </ul>
                </li>


                <li> 
                    <a href="http://localhost/Consejo%20Comunal/principal_pag/paginaMain.php">Reportes</a> 
                    <ul class="menu_vertical">
                        <li><a href="http://localhost/Consejo%20Comunal/reportes/user/">User</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/reportes/consejo_comunal/">Consejo</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/reportes/propietario/">Propietario</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/reportes/casa/">Casa</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/reportes/factura/">Factura</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/reportes/gastos-Extraordinarios/">Gastos-Extra</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/reportes/gastos-Fijos/">Gastos-Fijos</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/reportes/pago_mensual/">Pago Mensual</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/reportes/habitantes/">Habitantes</a> </li>
                        <li><a href="http://localhost/Consejo%20Comunal/reportes/carta/">Carta</a> </li>
                    </ul>
                </li>

                <li> 
                    <a href="http://localhost/Consejo%20Comunal/principal_pag/paginaMain.php">Cartas</a>
                    <ul class="menu_vertical">
                        <li><a href="!">Residencia</a> </li>
                        <li><a href="!">Solteria</a> </li>
                        <li><a href="!">Expensa</a> </li>
                    </ul> 
                </li>

            </ul>
         </nav>

         <section class="bodi">
         
        <section>
        <article>
            <div class="col">
                <h2 class="tituloC parra">Consejo</h2>
                <p class="parra"> Automatizar procesos
                    es lo que buscamos para hacer la 
                    vida mas facil no tengas miedo
                    vamos a avanzar.
                </p>
            </div>
            
        <img src="img/estrella.jpg"height="250" width="350" class="imagen-con-borde">

    </section>

    <footer >
        <div id="tweet">
            <h1 class="posi colibri" style="text-align:justify">Chisme</h1>
            <p class="posi">se desea saber <br> quien 
            es <br> recidente y <br> quien no <br>
        </div>
        
        <div id="my_pictures">
            <h1 class="posi colibri" style="text-align:justify">Enlaces Utiles</h1>
                <p class="posi">Inicio</p> 
                <p class="posi">crud</p>
                <p class="posi">reportes</p>
                <p class="posi">cartas</p>
        </div>
        
        <div id="my_friends">
            <h1 class="posi colibri" style="text-align:justify">De Las Noticias</h1>
            <p class="posi" >el registro automatizado<br>
                para agilizar entregas.</p>

                <hr class="posi colibri">
            
                <p class="posi">mejor consejo<br>
                    automatizado.</p>
                    <p class="posi">20 de mayo de 2025</p>
        </div>

        <div id="fin">
            <h1 class="posi colibri" style="text-align:justify">Nuestro Boletin</h1>
            <p class="posi">Suscribase a nuestro boletin para <br>
                obtener las ultimas noticias y <br>
                registros recidenciales</p>
        </div>

    </footer>

    </section>
    </body>
</html>