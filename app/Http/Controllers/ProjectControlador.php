<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectControlador extends Controller
{


    public function __construct(){

        $this ->middleware('auth')->except('index', 'show');
    }




    public function index()
    {
      
        $proyectos = Project::latest()->paginate('8');

        //retornando vista
        return view('proyectos.index', compact('proyectos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.create',[
            'proyecto' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {


            
            $imagen1 = $request->file('imagen1')->store('public');
            $imagen2 = $request->file('imagen2')->store('public');
            $imagen3 = $request->file('imagen3')->store('public');
    
//Lo hice como el UPDATE, por que ya no encontre la forma de utilizar el VALIDATED() sin que me diera error al subir la imagen
//Lo siento yo del futuro :(
        Project::create([
            'titulo'=> request('titulo'),
            'descripcion'=>request('descripcion'),
            'enlaceGit'=> request('enlaceGit'),
            'lenguajes' => request('lenguajes'),
            'url' => request('url'),
             'imagen1'=> $imagen1,
             'imagen2' => $imagen2,
             'imagen3' => $imagen3
        ]);
       return redirect()->route('project.index')->with('status', 'Proyecto creado');
    }



    public function update(Project $proyecto, SaveProjectRequest $request)
    {
        //Verifico que haya imagen para que no de error si lo mando vacio, se que no es lo m´s optimo pero 
        //aún son mis primeros pasos con Laravel y de momento asi lo dejare hasta que encuentre algo mejor
        if($request->hasFile('imagen1') && $request->hasFile('imagen2') && $request->hasFile('imagen3')){
            
        $imagen1 = $request->file('imagen1')->store('public');
        $imagen2 = $request->file('imagen2')->store('public');
        $imagen3 = $request->file('imagen3')->store('public');

       $proyecto->update([
           'titulo'=> request('titulo'),
           'descripcion'=>request('descripcion'),
           'enlaceGit'=> request('enlaceGit'),
           'lenguajes' => request('lenguajes'),
           'url' => request('url'),
            'imagen1'=> $imagen1,
            'imagen2' => $imagen2,
            'imagen3' => $imagen3
       ]);

        }
        else{

            $proyecto->update([
                'titulo'=> request('titulo'),
                'descripcion'=>request('descripcion'),
                'enlaceGit'=> request('enlaceGit'),
                'lenguajes' => request('lenguajes'),
                'url' => request('url')
                ]);
        
        }


       return redirect()->route('project.index')->with('status', 'Proyecto actualizado');
    }


    public function destroy(Project $proyecto)
    {
        $proyecto->delete();


        return redirect()->route('project.index')->with('status', 'Proyecto eliminado');
        
    }

    public function show(Project $proyecto)
    {
       return view('proyectos.show', 
       [ 'proyecto' => $proyecto]);
    }



    public function edit(Project $proyecto)
    {
        return view('proyectos.edit', 
        [ 'proyecto' => $proyecto]);
    }


}
