


@csrf
<div class="form-group col-12">
    <label for="name">Nombre del proyecto</label>
  <input type="text" name="titulo" class="form-control {{$errors->first('titulo', 'is-invalid')}}" id="name" placeholder="Nombre del proyecto"  data-msg="Esta seccion requiere por lo menos 4 caracteres" value="{{old('titulo', $proyecto->titulo)}}" />
  <strong class="text-danger"> {{$errors->first('titulo')}}</strong>
  </div>
  <div class="form-group col-12">
    <label for="url">URL amigable</label>
  <input type="text" name="url" class="form-control {{$errors->first('url', 'is-invalid')}}" id="url" placeholder="url-amigable-proyecto"  data-msg="Esta seccion requiere por lo menos 4 caracteres" value="{{old('url', $proyecto->url)}}"/>
   <strong class="text-danger"> {{$errors->first('url')}}</strong>
  </div>

  <div class="form-group">
    <label for="descripcion">Descripción</label>
  <textarea name="descripcion" class="form-control {{$errors->first('descripcion','is-invalid')}}"  cols=71 rows="10" placeholder="Descripción del preoyecto">{{old('descripcion',$proyecto->descripcion)}}</textarea>
  <strong class="text-danger"> {{$errors->first('descripcion')}}</strong>
  </div>
</div>

<div class="form-group">
  <label for="lenguajes">Link GitHub</label>
<input type="url" class="form-control {{$errors->first('enlaceGit','is-invalid')}}" name="enlaceGit" placeholder="Link GitHub" data-rule="minlen:4" data-msg="Esta seccion requiere por lo menos 8 caracteres" value="{{old('enlaceGit', $proyecto->enlaceGit)}}" />
<strong class="text-danger"> {{$errors->first('enlaceGit')}}</strong>
</div>

<div class="form-group">
  <label for="lenguajes">Lenguajes usados</label>
<input type="text" class="form-control {{$errors->first('lenguajes','is-invalid')}}" name="lenguajes" id="lenguajes" placeholder="php, css, js, html, mysql..." data-rule="minlen:4" data-msg="Esta seccion requiere por lo menos 8 caracteres" value="{{old('lenguajes', $proyecto->lenguajes)}}" />
<strong class="text-danger"> {{$errors->first('lenguajes')}}</strong>

</div>


<div class="form-group text-center ">
 
 <input type="file" accept="image/*"  class="form-control" name="imagen1" >
 <img class="img-fluid p-4 mb-3" src="{{Storage::url($proyecto->imagen1)}}" alt="">
 {{$errors->first('imagen1')}}
 <input type="file" accept="image/*"  class="form-control" name="imagen2" >
 <img class="img-fluid p-4 mb-3" src="{{Storage::url($proyecto->imagen2)}}" alt="">
 {{$errors->first('imagen2')}}
 <input type="file" accept="image/*"  class="form-control" name="imagen3" >
 <img class="img-fluid p-4 mb-3" src="{{Storage::url($proyecto->imagen3)}}" alt="">
 {{$errors->first('imagen3')}}
</div>




<div class="text-center php-email-form"><button type="submit">{{$btnText}}</button></div>