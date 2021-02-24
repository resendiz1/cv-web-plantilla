@extends('layout')
@section('title', 'Nuevo Proyecto')
@section('contenido')
    

<!-- ======= Contact Section ======= -->
<section id="new-project" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Agregar nuevo proyecto</h2>
      </div>

      <div class="row mt-1 justify-content-center ">
        <div class="col-lg-6 mt-5 mt-lg-0  p-3 shadow ">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">

              <div class="form-group col-12">
                <label for="name">Nombre del proyecto</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre del proyecto"  data-msg="Esta seccion requiere por lo menos 4 caracteres" />
                <div class="validate"></div>
              </div>


              <div class="form-group">
                <label for="descripcion">Descripción</label>
              <textarea name="descricpcion" class="form-control" id="descripcion" cols=71 rows="10" placeholder="Descripción del preoyecto"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="lenguajes">Link GitHub</label>
              <input type="url" class="form-control" name="lenguajes" id="lenguajes" placeholder="Link GitHub" data-rule="minlen:4" data-msg="Esta seccion requiere por lo menos 8 caracteres" />
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <label for="lenguajes">Lenguajes usados</label>
              <input type="text" class="form-control" name="lenguajes" id="lenguajes" placeholder="php, css, js, html, mysql..." data-rule="minlen:4" data-msg="Esta seccion requiere por lo menos 8 caracteres" />
              <div class="validate"></div>
            </div>

            
            <div class="form-group">
             <input type="file" class="form-control" multiple>
              <div class="validate"></div>
            </div>


            <div class="mb-3">
              <div class="loading">Cargando</div>
              <div class="error-message"></div>
              <div class="sent-message">Gracias por tu mensaje ne breve te contactare!</div>
            </div>
            <div class="text-center"><button type="submit">Agregar</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  @endsection