
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
    <h4>Formulario Registro</h4>
    <form name="frmUsuario" id="formulario" method="POST" action="">
    <input class="controls" type="text" name="nombreusuario" id="nombre" placeholder="Ingrese su Nombre" minlength="6" maxlength="20" required>
    <input class="controls" type="text" name="nombreusuario" id="apellido" placeholder="Ingrese su Apellido" minlength="6" maxlength="20" required>
    <input class="controls" type="text" name="nombreusuario" id="cedula" placeholder="Ingrese su Identificacion" minlength="6" maxlength="20" required>
    <input class="controls" type="email" name="correoelectronico" id="correo" placeholder="Ingrese su Correo" required>
    <input class="controls" type="text" name="direccion" id="direccion" placeholder="Ingrese su Dirección" required>
    <input class="controls" type="number" name="telefono" id="telefono" placeholder="Ingrese su Teléfono" required >
    <input class="controls" type="password" name="contrasenausuario" id="contrasenia" placeholder="Ingrese su Contraseña" minlength="2" maxlength="10" required>
    <input class="controls" type="password" name="contrasenausuario" id="Confirmclave" placeholder="Repita su contraseña" minlength="2" maxlength="10" required>
    
    
    </select>
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <button class="botons" type="submit" name="submit" id="submit" >Registrar</button>
    <p><a href="login.php">¿Ya tengo Cuenta?</a></p>
    
    
    </form>
  </section>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<br>

<?php require_once'campo/footer.php';?>

<script>

  document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});
function validarFormulario(evento) {
    evento.preventDefault();

    var Valnombre = document.getElementById('nombre').value;
    var Valapellido = document.getElementById('apellido').value;
    var Valcedula = document.getElementById('cedula').value;
    var Valdireccion = document.getElementById('direccion').value;
    var Valcorreo = document.getElementById('correo').value;
    var Valtelefono = document.getElementById('telefono').value;
    var Valcontraseina = document.getElementById('contrasenia').value;
    var Valconfirmcontraseina = document.getElementById('Confirmclave').value;


    //TODOS LOS CAMPOS VACIOS 
    if(!Valnombre && !Valcedula && !Valcorreo && !Valcontraseina && !Valapellido && !Valtelefono && !Valdireccion && !Valconfirmcontraseina){
      return Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tienes que ingresar todos los campos'
      })
    }

    //NOOMBRE
    if(!Valnombre){
      return Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tienes que ingresar el nombre'
      })
    }
    if(typeof Valnombre === "number"){
      return Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El nombre no puede contener numeros'
      })
    }
    if(!Valcedula){
      return Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tienes que ingresar la cedula'
      })
    }

    if(!Valcorreo){
      return Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tienes que ingresar el correo'
      })
    }
     var expReg= /^[a-z0-9!#$%&'+/=?^_`{|}~-]+(?:.[a-z0-9!#$%&'+/=?^_`{|}~-]+)@(?:[a-z0-9](?:[a-z0-9-][a-z0-9])?.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var valido = expReg.test(document.getElementById("correo").value);
    if(!valido){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'el correo tiene que terminar en "@gmail.com"'
      })
      return;
    }
    if(!Valcontraseina){
      return Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tienes que ingresar la contraseña'
      })
    }
    if(!(Valconfirmcontraseina === Valcontraseina)){
      return Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Las contraseñas tienen que ser igual'
      })

    this.submit();
  }
}
</script>
</body>
</html>