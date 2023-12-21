<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom' => 'required',
            'prenom' => 'required',
            'sexe'=> 'required',
            'email'=> 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'nom' =>'Remplir le champs Nom ',
            'prenom' => 'Remplir le champs prenom',
            'sexe'=> 'Remplir le champs sexe',
            'email'=> 'Remplir le champs email',
            'password' =>'Remplir le champs password ',
            
          
        ];
    }
}
