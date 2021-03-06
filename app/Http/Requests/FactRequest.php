<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "fait" => 'required|min:10|max:255',
        ];
    }

    public function messages(){
        return [
            'fait.required' => 'Un fait est requis',
            'fait.min' => 'La longueur du fait doit être d\'au moins 10 caractères',
            'fait.max' => 'La longueur du fait doit avoir un maximum de 255 caractères',
        ];
    }
}
