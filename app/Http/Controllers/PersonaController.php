<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;


class PersonaController extends Controller
{

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
        return redirect()->route('personas.index');
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
        return redirect()->route('persona.show', $persona);
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index');
    }

}
