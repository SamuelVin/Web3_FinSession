<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'titre' => 'required',
            'genre' =>'required',
            'annee' =>'required|min:4|max:4',
            'realisateur' =>'required',
            'duree' =>'required',
            'description' =>'required|max:255',
            'image' => 'required|image|mimes:png,jpeg,jpg,gif|max:4096',
            'video' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'titre' =>'Remplir le champs Titre ',
            'genre' => 'Remplir le champs Genre',
            'annee.min' => "L'annee de realisation doit avoir un minimum de 4 caractères",
            'annee.max' => "L'annee de realisation doit avoir un maximum de 4 caractères",
            'annee' =>"Remplir le champs Anne de réalisation",
            'realisateur' => 'Remplir le champs Réalisateur',
            'duree' => 'Remplir le champs Durée du film',
            'description' =>'Une description du film est obligatoire',
            'description.max' => 'La description du film doit avoir un maximum de 255 caractères',
            'image'=>"L'url de l'image est obligatoire",
            'image.mimes' => 'Le type de fichier n\'est pas reconnu (png jpg, gif).',
            'image.max' => 'La taille de l\'image ne peut pas dépasser 4096Kb.',
            'video'=>"L'url de l'image est obligatoire",
        ];
    }
}
