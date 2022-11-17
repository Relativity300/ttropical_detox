
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/registro.css">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <title>Formulario Registro</title>
</head>
<body>
<?php

include('campo/Nav.php')
?>

  <section class="form-register">
    <h4>Ingrese su correo</h4>
    <form name="frmUsuario" id="frmUsuario" method="POST" action="">
    <input class="controls" type="email" name="correoelectronico" id="correoelectronico" placeholder="juan@gmail.com" required>

    
    
    
    <p>Correo con el que creaste tu cuenta </p>
    <button class="botons" type="submit" onclick="myFunction()" >Enviar correo de recuperacion</button>
    
    
    </form>
  </section>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<?=require_once'campo/footer.php';?>

<script>
function myFunction() {
  alert("Se enviado un correo al gmail proporcionado");
}
</script>
</body>
</html>