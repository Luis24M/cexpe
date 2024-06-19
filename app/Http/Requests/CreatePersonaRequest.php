<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cPerApellido' => 'required',
            'cPerNombre' => 'required',
            'cPerDireccion' => 'required',
            'cPerFecNac' => 'required',
            'nPerEdad' => 'required',
            'cPerSexo' => 'required',
            'nPerSueldo' => 'required',
            'cPerRnd' => 'required',
            'nPerEstado' => 'required',
            'remember_token' => 'required',
        ];
    }

    public function messages(): array
    { 
        return [
            'cPerApellido.required' => 'El apellido es requerido',
            'cPerNombre.required' => 'El nombre es requerido',
            'cPerDireccion.required' => 'La dirección es requerida',
            'cPerFecNac.required' => 'La fecha de nacimiento es requerida',
            'nPerEdad.required' => 'La edad es requerida',
            'cPerSexo.required' => 'El sexo es requerido',
            'nPerSueldo.required' => 'El sueldo es requerido',
            'cPerRnd.required' => 'El RND es requerido',
            'nPerEstado.required' => 'El estado es requerido',
            'remember_token.required' => 'El token es requerido',
        ];
    }
}
