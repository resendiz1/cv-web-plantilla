@extends('layout')
@section('title', 'Nuevo Proyecto')
@section('contenido')
    

<!-- ======= Contact Section ======= -->
<section id="new-project" class="contact">
    <div class="container" data-aos="fade-up">
      @include('partials.session-status')   
      <div class="section-title">
        <h2>Agregar nuevo proyecto</h2>
      </div>
      <div class="row mt-1 justify-content-center ">
        <div class="col-lg-6 mt-5 mt-lg-0  p-3 shadow ">
          <form action="{{route('project.store')}}" method="post" role="form" enctype="multipart/form-data" >
            <div class="form-row">
              @include('proyectos.formularios', ['btnText'=> 'Guardar'])
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  @endsection