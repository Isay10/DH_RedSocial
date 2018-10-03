<?php

$titulo ="Red Social - Inicio";

require_once('header.php');
require_once('autoload.php');

$posteos = Post::getPosts();

//echo '<pre>';
//var_dump($posteos);
//echo '</pre>';

// foreach ($usuarios as $usuario) {
//    echo var_dump($usuario);
// }

?>
  <!-- PRINCIPAL-->
  <main class="perfil">
    <!-- PERFIL SUB MENU-->
    <section class="sub-menu-perfil bg-dark py-3">
      <div class="">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" href="#">Muro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Fotos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contactos</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- FIN PERFIL SUB MENU-->
    <!-- PERFIL TIMELINE-->
    <section class="tl-perfil py-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="w-50 m-auto">
              <?php
                foreach ($posteos as $post) {
              ?>
              <!--posteo-->
              <div class="post bg-light mb-2 p-2">
                <!--posteo imagen-->
                <div class="post-img">
                  <div class="">
                    <img class="w-100 m-auto" src="<?php echo $post['image']; ?>" alt="">
                  </div>
                </div>
                <!--posteo imagen-->
                <!--posteo descripcion-->
                <div class="post-desc p-2">
                  <ul>
                    <li>
                      <h3><?php echo $post['title']; ?></h3>
                    </li>
                    <li>
                      <p><?php echo $post['description']; ?></p>
                    </li>
                  </ul>
                </div>
                <!--fin posteo descripcion-->
              </div>
              <!--fin posteo-->
              <?php
              }
               ?>
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
