<?php

$titulo ="Red Social - Perfil";

require('header.php');
require('arrays/usuarios.php');

// echo '<pre>';
// var_dump($usuarios);
// echo '</pre>';

// foreach ($usuarios as $usuario) {
//    echo var_dump($usuario);
// }

?>

  <!-- PRINCIPAL-->
  <main class="perfil">
    <!-- TITULO -->
    <section class="perfil-titulo">
      <h2 class="">Mis Recuerdos</h2>
    </section>
    <!-- FIN TITULO -->
    <!-- PERFIL DATOS-->
    <section class="d-perfil m-auto py-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="row">
                <div class="col-12 col-md-4">
                  <div class="dp-imagen text-center">
                    <div>
                      <img src="https://via.placeholder.com/200x200" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-8 ">
                  <div class="dp-informacion">
                    <div class="">
                      <ul class=" d-inline-block ">
                        <li>Nombre: Jhon</li>
                        <li>Apellido: Salchijhon</li>
                        <li>Edad: 17</li>
                        <li>Instrumento: Guitarra</li>
                        <li>Banda: Ninguna/ En Busqueda</li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FIN PERFIL DATOS-->
    <!-- PERFIL TIMELINE-->
    <section class="tl-perfil py-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="w-50 m-auto">
              <!--posteo-->
              <div class="post bg-light mb-2 p-2">
                <!--posteo imagen-->
                <div class="post-img">
                  <div class="">
                    <img class="w-100 m-auto" src="https://via.placeholder.com/350x250" alt="">
                  </div>
                </div>
                <!--posteo imagen-->
                <!--posteo descripcion-->
                <div class="post-desc p-2">
                  <ul>
                    <li>
                      <h3>Titulo Descripcion</h3>
                    </li>
                    <li>
                      <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
                    </li>
                  </ul>
                </div>
                <!--fin posteo descripcion-->
              </div>
              <!--fin posteo-->
              <!--posteo-->
              <div class="post bg-light mb-2 p-2">
                <!--posteo imagen-->
                <div class="post-img">
                  <div class="">
                    <img class="w-100" src="https://via.placeholder.com/350x250" alt="">
                  </div>
                </div>
                <!--posteo imagen-->
                <!--posteo descripcion-->
                <div class="post-desc p-2">
                  <ul>
                    <li>
                      <h3>Titulo Descripcion</h3>
                    </li>
                    <li>
                      <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
                    </li>
                  </ul>
                </div>
                <!--fin posteo descripcion-->
              </div>
              <!--fin posteo-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- PERFIL TIMELINE-->
  </main>
  <!-- FIN PRINCIPAL-->

  <?php

    require('footer.php');

  ?>
