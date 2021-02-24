@extends('layout')
@section('title', 'Contacto')

@section('contenido')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Contacto</h2>
      </div>

      <div class="row mt-1 justify-content-center shadow p-3">
        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Ciudad de origen:</h4>
              <p>Tecamachalco, Puebla</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>resendiz.galleta@gmail.com</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Llama al:</h4>
              <p>249- 172- 5430</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          @include('partials.session-status')   
         
        <form  method="post" action="{{route('contacto')}}">
          @csrf
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" 
                name="name" 
              class="form-control {{$errors->first('name', 'is-invalid')}}" 
                id="name" 
                placeholder="Nombre completo" 
                value="{{old('name')}}" />
                {!! $errors->first('name', '<strong class="text-danger">:message</strong>')  !!}
              </div>


              <div class="col-md-6 form-group">
              <input 
              type="email" 
              class="form-control {{$errors->first('email', 'is-invalid')}}" 
              name="email" 
              id="email" 
              placeholder="Correo eléctronico" 
              value="{{old('email')}}" />
                {!! $errors->first('email', '<strong class="text-danger">:message</strong>') !!}
              </div>
            </div>
            <div class="form-group">

            <input 
            type="text" 
            class="form-control {{$errors->first('asunto', 'is-invalid')}} " 
            name="asunto" 
            id="subject" 
            placeholder="Asunto" 
            value="{{old('asunto')}}" />
              {!! $errors->first('asunto', '<strong class="text-danger"> :message </strong>') !!}
            
            </div>
            <div class="form-group">
            <textarea 
            class="form-control {{$errors->first('message','is-invalid')}} " name="message" rows="5" 
            data-rule="required" 
            placeholder="Mensaje ...">{{old('message')}}</textarea>
            {!!$errors->first('message', '<strong class="text-danger">:message</strong>')!!}

            </div>
            <div class="text-center php-email-form"><button type="submit">Enviar mensaje</button></div>
          </form>
        
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->




  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="d-none">
      <h3>Creditos de frontend a: <p class="h4">Brandon Johnson</p></h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

    
@endsection