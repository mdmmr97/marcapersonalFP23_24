<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class EstudianteController extends Controller
{

    public function getIndex(){
        return view('estudiantes.index',['arrayEstudiantes' => Estudiante::all()]);
    }

    public function getShow($id)
    {
        return view('estudiantes.show')
            ->with('estudiante', Estudiante::findOrFail($id));
    }

    public function getEdit($id) {
        return view('estudiantes.edit')
            ->with("estudiante", Estudiante::findOrFail($id));
    }

    public function putEdit(Request $request, $id) {
        $estudiante = Estudiante::findOrFail($id);
        //Metodo estatico
        $estudiante->update($request->all());
        /*//Metodo no estatico
        $estudiante->nombre = $request->nombre;
        $estudiante->apellidos = $request->apellidos;
        $estudiante->direccion = $request->direccion;
        $estudiante->votos = $request->votos;
        $estudiante->ciclo = $request->ciclo;
        $estudiante->save();*/
        return redirect(action([self::class, 'getShow'], ['id' => $estudiante->id]));
    }

    public function getCreate(){
        return view('estudiantes.create');
    }

    public function store(Request $request){
        $estudiante = Estudiante::create($request->all());
        return redirect(action([self::class, 'getShow'], ['id' => $estudiante->id]));
    }
}
