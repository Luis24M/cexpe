<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;


class PersonaController extends Controller
{

    public function __construc(){
        // $this->middleware('auth')->only('create','store','edit','update','destroy');
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        $personas = Persona::get();
        return view('personas', compact('personas'));
    }


    public function create()
    {
        return view('create');
    }

    public function store(CreatePersonaRequest $request)
    {
        Persona::create($request->validated());
        return redirect()->route('personas.index')->with('estado','El servicio se ha creado con éxito');
    }

    public function show(Persona $persona)
    {
        return view('show', [
            'persona' => $persona,
        ]);
    }

    public function edit(Persona $persona)
    {
        return view('edit', [
            'persona' => $persona,
        ]);
    }

    public function update(Persona $persona, CreatePersonaRequest $request)
    {
        $persona->update($request->validated());
        return redirect()->route('personas.show', $persona)->with('estado','El servicio se ha actualizado con éxito');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('estado','El servicio se ha eliminado con éxito');
    }

}
