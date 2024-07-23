<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;

class ContactoController extends Controller
{
    public function store(){
        $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3'
        ],[
            'nombre.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo correo es obligatorio',
            'asunto.required' => 'El campo asunto es obligatorio',
            'mensaje.required' => 'El campo mensaje es obligatorio'
        ]);
        Mail::to('t012700620@unitru.edu.pe')->send(new MensajeRecibido($mensaje));
        return new MensajeRecibido($mensaje);
        return "Datos validados";
    }
}
