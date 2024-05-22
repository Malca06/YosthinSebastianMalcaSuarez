<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntradaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Cambiar a true si se requiere autorización
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'placa' => 'required|string|max:15|exists:vehiculos,placa',
            'fecha' => 'required|date',
        ];
    }
    public function messages()
    {
        return [
            'placa.exists' => 'La placa proporcionada no existe en la lista de vehículos.',
        ];
    }
}
