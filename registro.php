<?php
$titulo ="Red Social - Registrarse";
require('header.php');

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

$errorNombre = $errorApellido = $errorUsuario = $errorFecha = $errorMail = $errorPassword = '';

if( $_GET){

    $_GET['nombre']=trim( $_GET['nombre'] );
      $_GET['apellido']=trim( $_GET['apellido'] );
           $_GET['mail']=trim( $_GET['mail'] );
                $_GET['password']=trim( $_GET['password'] );

    if( empty($_GET['nombre']) ){
      $errorNombre = 'Debe ingresar el nombre';
    }else if( strlen( $_GET['nombre'] )<2 ){
      $errorNombre = 'El Nombre debe tener al menos 2 letras';
    }

    if( empty($_GET['apellido']) ){
      $errorApellido = 'Debe ingresar el apellido';
    }else if( strlen( $_GET['apellido'] )<2 ){
      $errorApellido = 'El Nombre debe tener al menos 2 letras';
    }

    if( empty($_GET['nombreUsuario']) ){
      $errorUsuario = 'Debe ingresar el nombre de usuario';
    }else if( strlen( $_GET['nombreUsuario'] )<2 ){
      $errorUsuario = 'El Nombre debe tener al menos 2 letras';
    }

    if( empty($_GET['fecha']) ){
      $errorFecha = 'Debe ingresar el fecha';
    }

    if( empty($_GET['mail']) ){
      $errorMail = 'Debe ingresar el Correo';
    }else if (filter_var( $_GET['mail'] , FILTER_VALIDATE_EMAIL )===false) {
      $errorMail = 'El Correo es inválido';
    }

    if( empty($_GET['password']) ){
      $errorPassword = 'Debe ingresar el password';
    }else if( strlen( $_GET['password'] )<2 ){
      $errorPassword = 'El Nombre debe tener al menos 2 letras';
    }



  if( empty($errorNombre) && empty($errorApellido) && empty($errorUsuario) && empty($errorFecha) && empty($errorMail) && empty($errorPassword) ){
    $usu = '$usuarios [] = ["nombre" => "'.$_GET['nombre'].'", "apellido" => "'.$_GET['apellido'].'", "nombreUsuario" => "'.$_GET['nombreUsuario'].'", "fecha" =>"'.$_GET['fecha'].'", "mail" => "'.$_GET['mail'].'", "password" => "'.$_GET['password'].'","recordarme" => "'.$_GET['recordarme'].'"];';

    file_put_contents('usuarios.php', $usu.PHP_EOL, FILE_APPEND);

    header("Location:perfil.php");
  }


}




?>
  <!-- LOGO -->
  <section class="p-5">
    <div class="text-center">
      <img src="https://via.placeholder.com/350x150" alt="">
    </div>
  </section>
  <!-- FIN LOGO-->
  <main class="my-3">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <article class="registrarse bg-dark text-light p-5">
             <form action="registro.php" method="GET" enctype="multipart/form-data">
              <div class="form-group d-inline-block mr-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre..">
                <span class="text-danger">
                  <?php echo $errorNombre; ?>
                </span>
              </div>
              <div class="form-group d-inline-block ml-3">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su nombre..">
                <span class="text-danger">
                  <?php echo $errorApellido; ?>
                </span>
              </div>
              <div class="form-group">
                <label for="nombreUsuario">Usuario</label>
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Ingrese su nombre..">
                <span class="text-danger">
                  <?php echo $errorUsuario; ?>
                </span>
              </div>
              <div class="form-group">
                <label for="fechaDeNacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaDeNacimiento" name="fecha">
                <span class="text-danger">
                  <?php echo $errorFecha; ?>
                </span>
              </div>
              <div class="form-group">
                <label for="correoElectronico">Correo Electronico</label>
                <input type="email" class="form-control" id="correoElectronico" aria-describedby="emailHelp" name="mail" placeholder="Ingrese su Correo Electronico..">
                <span class="text-danger">
                  <?php echo $errorMail; ?>
                </span>
              </div>
              <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="password" placeholder="Ingrese su Contraseña..">
                <span class="text-danger">
                  <?php echo $errorPassword; ?>
                </span>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="recordarme" id="recordarme">
                <label class="form-check-label" for="recordarme">Recordarme</label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-outline-light">Registrarse</button>
              </div>
            </form>
          </article>
        </div>
        <div class="col-12 col-md-6">
          <article class="descripcion bg-light p-5">
                <div class="d-titulo ">
                  <h2>Descripcion</h2>
                </div>
                <div class="d-descripcion">
                  <p>Aliquid at maiores deserunt voluptates nam? Ad facilis
                    voluptatem fugit illum praesentium earum iste deleniti
                    quia quibusdam. Sit nulla, voluptatem atque qui!</p>
                </div>
          </article>
        </div>
      </div>
    </div>
  </main>

  <?php

    require('footer.php');

  ?>
