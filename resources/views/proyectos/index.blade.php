@extends('layout')
@section('title', 'Portafolio')

@section('contenido')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">
          @include('partials.session-status')
          <div class="section-title">
            <h2>Portofolio</h2>
         
            <p>Durante mi aprendizaje desarrolle varios proyectos que son presentados dentro de este portafolio, se muestra un titulo, una descripción, algunas capturas y un enlace al repositorio de GitHub para poder acceder a estos proyectos.</p>
          </div>

  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @forelse ($proyectos as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
              <img src="{{Storage::url($item->imagen1)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$item->titulo}}</h4>
                <p>{{$item->descripcion}}</p>
                  <div class="portfolio-links">
                    <a href="{{Storage::url($item->imagen1)}}" data-gall="portfolioGallery" class="venobox" title="{{$item->titulo .'  - '.$item->created_at->diffForHumans()}}"><i class="bx bx-plus"></i></a>
                    <a href="{{route('project.show', $item)}}"  title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
        @empty
            <li>No hay proyectos que mostrar</li>
        @endforelse   
          </div>
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center"  data-aos-delay="100">
                {{$proyectos->links()}}
            </div>
          </div>
    
        </div>
      </section><!-- End Portfolio Section -->
@endsection