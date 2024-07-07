<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cperApellido' => 'required|string|max:255',
            'cPerNombre' => 'required|string|max:255',
            'cPerDireccion' => 'nullable|string|max:255',
            'dPerFechaNac' => 'nullable|date',
            'nPerEdad' => 'nullable|integer|min:18',
            'nPerSueldo' => 'nullable|numeric|min:0',
            'nPerEstado' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'cperApellido.required' => 'El apellido es obligatorio.',
            'cPerNombre.required' => 'El nombre es obligatorio.',
            'dPerFechaNac.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'nPerEdad.integer' => 'La edad debe ser un número entero.',
            'nPerEdad.min' => 'La edad mínima permitida es 18 años.',
            'nPerSueldo.numeric' => 'El sueldo debe ser un valor numérico.',
            'nPerSueldo.min' => 'El sueldo no puede ser negativo.',
            'nPerEstado.required' => 'El estado es obligatorio.',
            'nPerEstado.boolean' => 'El estado debe ser un valor booleano.',
        ];
    }
}
