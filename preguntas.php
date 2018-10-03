<?php

$titulo ="Red Social - Preguntas";

require('header.php');

?>
  <!-- LOGO -->
  <section class="logo p-5">
    <div class="text-center">
      <img src="https://via.placeholder.com/350x150" alt="">
    </div>
  </section>
  <!-- FIN LOGO-->
  <main class="preguntas my-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div>
            <div class="p-titulo jumbotron jumbotron-fluid mb-5">
              <div class="container">
                <h1 class="display-4">Preguntas y Respuestas Frecuentes</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space
                   its parent.</p>
              </div>
            </div>

            <div class="accordion" id="accordionExample">
              <div class="card mb-3">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                      Collapsible Group Item #1
                    </button>
                  </h5>
                </div>

                <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                      Collapsible Group Item #1
                    </button>
                  </h5>
                </div>

                <div id="collapseOne2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                      Collapsible Group Item #1
                    </button>
                  </h5>
                </div>

                <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>

    <?php

      require('footer.php');

    ?>
