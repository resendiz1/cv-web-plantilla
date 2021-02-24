@extends('layout')
@section('title', 'Inicio de sesión')
@section('contenido')

        <!-- ======= login Section ======= -->
       
            <div class="container mt-5" data-aos="fade-up">
              <div class="section-title">
                <h2>Inicio de Sesión</h2>
              </div>
              <div class="row justify-content-center ">
                <div class="col-lg-5 mt-5 mt-lg-0 p-3 shadow">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-row">
                      <div class="col-md-12 form-group">
                             <input id="email" type="email" placeholder="Correo electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                      <div class="col-md-12 form-group">
                            <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>

                    <div class="form-group row mb-0 justify-content-center">
                        <div class="col-md-8 ">
                            <button type="submit" class="btn btn-primary btn-block">
                               Entrar
                            </button>
                        </div>
                    </div>
                  </form>
      
                </div>
      
              </div>
            </div>
            
    