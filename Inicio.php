<!DOCTYPE html>
<html>
<head>
<title>BOOX</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="Imagenes/icono.ico">
<link rel="stylesheet" href="estilos/estilo.css">
</head>


<body>
    <div id="todoCuerpo">

        <header>
            <center><img src="Imagenes/Portada.png" ></center>
        
        </header>

        <nav>

            <ul>
           
                
                <li><a href="Inicio.php">Inicio</a></li>
                <li><a href="Promociones.html">Promociones</a></li>
                <li><a href="Cajas Sorpresa.html">Cajas Sorpresa</a></li>
                <li><a href="Carrito de Compra.html">Carrito de Compra</a></li>
                <li><a href="Contacto.html">Contacto</a></li>
                <li><a href="Iniciar Sesion.html">Iniciar Sesión</a></li>
            </ul>

        </nav>

        <section>
            <div id="cont1">
                <figure>
                    <center><img src="imagenes/imagen 1.png"></center>
                </figure>
            </div>

            <div id="cont2">
                <figure>
                    <img src="imagenes/captura 8.PNG"class="rounded float-start" alt="...">
                    <img src="imagenes/captura 7.PNG"class="rounded float-start" alt="...">
                </figure>
            </div>

            
            <div id="cont4">
                <figure>
                    <img src="imagenes/captura 6.PNG"class="rounded float-start" alt="...">
                    <img src="imagenes/captura 5.PNG"class="rounded float-start" alt="...">
                </figure>
            </div>
            
            
            <div id="cont6">
                <figure>
                    <img src="imagenes/captura 4.PNG"class="rounded float-start" alt="...">
                    <img src="imagenes/captura 12.PNG"class="rounded float-start" alt="...">
                </figure>
            </div>
            
            <div id="cont8">
                <figure>
                    <img src="imagenes/captura 11.PNG"class="rounded float-start" alt="...">
                </figure>
            </div>


            <br>


            <div id="cuerpoLateral">
            <div class="row justify-content-center">
                <?php
                 $mysql=new mysqli("localhost","root","","boox_db");
                 $resultado= mysqli_query($mysql, 'SELECT * FROM comentarios');
                 while($comentario= mysqli_fetch_object($resultado))
                 {
                 ?>
                <b>
                <table border="1">
                <tr>
                        <th>Nombre</th>
                        <th> Fecha </th>
                        <th>Comentario</th>
                    </tr> 
                
                <tr>
                    <td><?php echo($comentario->nombre); ?></td>
                </b> 
                    <td><?php echo($comentario->fecha); ?></td>
                <br />
                <td><?php echo($comentario->comentario); ?> </td>
                <br />
                </tr>
                <br />
                <?php
                   }
                ?>
            </table>
            </div>
            </div>
            <form id="formulario" action="enviarcomentario.php" method="post">

                <h3>Nombre:</h3>
                <input type="text" name="txtNombre" id="txtNombre" placeholder= "Escribe tu nombre " />
                <br /><br />
                <h3>Comentario:</h3>
                <textarea name="txtComentario" id="txtComentario" placeholder="Escribe aqui tu comentario" ></textarea>
                <br /><br />
                <input id="btnComentar" type="button" value= "Comentar" />
                            
            

            </form>
                
            

            
            

        </section>


        <footer id="piePagina">
            <div id="pieDePagina">
                <center>Boox-Explosion de Sentimientos <br>
                 <small>Medellin-Colombia </small></center><br>
                 <center><small> Tel: 302 216789</small> </center><br>
                 <center><small>Email: contactoboox@gmail.com</small> </center>
    
    
            </div>
    
    
    
        </footer>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>


<script language= "javascript">
    $("#btnComentar").click(function(){
    var nombre= $('#txtNombre').val();
    var comentario= $('#txtComentario').val();
    if(nombre=="")
    {
    alert('debe escribir un nombre');
    return;
    }
    if(comentario=="")
    {
    alert('debe escrbir un comentario');
    return;
    }
    $('#formulario').submit();
    });
    
    </script>











</html>