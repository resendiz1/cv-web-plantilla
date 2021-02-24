@extends('layout')
@section('title', 'Portafolio | '.$proyecto->titulo)

@section('contenido')
    
<main id="main">

    <!-- ======= Portfolio Details ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        @include('partials.session-status')   
        <div class="row">
          <div class="col-lg-8">
          <h2 class="portfolio-title">Proyecto: {{$proyecto->titulo}}</h2>
          <div class="row d-flex justify-content-end">
            <a class="btn btn-info mb-2 my-1 mr-3" href="{{route('project.index')}}">Regresar</a>
            @auth
            <a class="btn btn-dark mb-2 ml-4" href="{{route('project.edit', $proyecto)}}"> Editar</a>
          <form method="POST" action="{{route('project.destroy', $proyecto)}}">
              @csrf @method('delete')
              <button class="btn btn-danger mb-2 ml-4 mr-3"> Eliminar</button>
            </form>
            @endauth 
          </div>
            <div class="owl-carousel portfolio-details-carousel">
            <img src="{{Storage::url($proyecto->imagen1)}}" class="img-fluid" alt="">
              <img src="{{Storage::url($proyecto->imagen2)}}" class="img-fluid" alt="">
              <img src="{{Storage::url($proyecto->imagen3)}}" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-4 portfolio-info">
          <h3>Información general </h3>
            <ul>
            <li><strong>Fecha de creación</strong>: {{$proyecto->created_at->diffForHumans()}}</li>
            <li><strong>Lenguajes usados</strong>: {{$proyecto->lenguajes}}</li>
            <li><strong class="mr-3">Enlace GitHub :</strong> <a  href="{{$proyecto->enlaceGit}}"> Visitar</a></li>
           
            </ul>

            <p>
              {{$proyecto->descripcion}}
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details -->

  </main><!-- End #main -->


  @endsection





  