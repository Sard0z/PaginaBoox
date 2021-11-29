<!DOCTYPE html>
<html>
<head>
<title>BOOX</title>
<link rel="icon" href="imagenes/icono.ico">
<link rel="stylesheet" href="estilos/estilo.css">
</head>

<body>
    <div id="todoCuerpo">
      
  <header>
    <center><img src="Imagenes/Portada.png" ></center>
    <nav>

      <ul>
        <li><a href="Inicio.php">Inicio</a></li>
        <li><a href="Promociones.html">Promociones</a></li>
        <li><a href="Cajas Sorpresa.html">Cajas Sorpresa</a></li>
        <li><a href="Carrito de Compra.html">Carrito de Compra</a></li>
        <li><a href="Contacto.html">Contacto</a></li>
        <li><a href="Iniciar Sesion.html">Iniciar Sesion</a></li>
      </ul>

  </nav> 
 <center>
    <h1> Registro de usuario </h1> 
 </center>
  <section>
    
  </div>
  <div id= "FormDatos">
      <center><fieldset>
    
      <legend><h2>Registro</h2></legend>
     
      <form action="Registro.php" method="POST" name="formulario" >
        
            <label for="">Nombres y apellidos completos </label>
        <input type=" text" name="Nombres" placeholder="" id="Nombres" require="">
        <br>
        <br>
        <label for="">Correo Electronico </label>
        <input type="text" name="correo" placeholder="" id="correo" require="">
        <br>
        <br>
        <label for="">Numero de Celular </label>
        <input type="text" name="Celular" placeholder="" id="Celular" require="">
        <br>
        <br>
        <label for="">Contraseña </label>
        <input type="text" name="password" placeholder="" id="password">
        <br>
        <br>
        <label for="">Confirme su Contraseña</label>
        <input type="text" name="rePassword" placeholder="" id="rePassword">
        

        <br>
        <br>
        <input type="submit" name="registrar" value="Registrar">
        </form>
        <?php
        
        ?>
        
        
      </center>
  
        
</div>


</section>


</center>

<footer id="piePagina">
  <div id="pieDePagina">
      <center>Boox-Explosion de Sentimientos <br>
       <small>Medellin-Colombia </small></center><br>
       <center><small> Tel: 302 216789</small> </center><br>
       <center><small>Email: contactoboox@gmail.com</small> </center>


  </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</div>

</html>