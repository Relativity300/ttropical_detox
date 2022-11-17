<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/loginf.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
    
  </head>
  <body>

  <?php

include('campo/Nav.php')
?>

    <div class="contenedor">
  

      <div class="login">
        <article class="fondo">
          <img src="../IMG/Logo.jpeg" alt="User">
          <h3>Inicio de Sesión</h3>
          <form name="frmAcceso" action="" method="POST">
            <span class="icon-user"></span><input class="inp" type="text" name="usuario" id="usuario" placeholder="Digite su Correo" >
            <br>
            <span class="icon-key"></span><input class="inp" type="password" name="contrasena" id="contrasena" placeholder="Digite su contraseña" >
            <br>
            <a href="restablecer.php" class="he">He olvidado mi contraseña // </a>
            <a href="registro.php" class="he">Ya estoy registrado</a>
            <button type="submit" name="acceder"  class="boton">Iniciar Sesión</button>
          </form>
        </article>
      </div>

    </div>
    <?=require_once'campo/footer.php';?>
  </body>
</html>
