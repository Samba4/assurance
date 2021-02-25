<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdRequest extends FormRequest
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
            'intitule' => 'required',
            'description' => 'required',
            'experiences' => 'required',
            'localisation' => 'required',
            'diplome' => 'required',
            'salaire' => 'required',
            'langue' => 'required',
            'type' => 'required',
            'disponible' => 'required',
        ];
    }
}
