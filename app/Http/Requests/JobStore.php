<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobStore extends FormRequest
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
            'entreprise' => 'required',
            'entreprise_mail' => 'required',
            'description_entreprise' => 'required',
            'job_lieu' => 'required',
            'entreprise_adresse' => 'required',
            'postale' => 'required|integer',
            'ville' => 'required',
            'departement' => 'required',
            'pays' => 'required',
            'profil' => 'nullable',
            'description' => 'required',
            'aspect' => 'nullable',
            'type' => 'required',
            'disponibilite' => 'required',
            'diplome' => 'required',
            'salaire' => 'required|integer',
        ];
    }
}
