<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'genre', 'annee', 'realisateur', 'duree','description', 'image', 'video' ];

    public function personnes(){

        return $this->belongsToMany('App\Models\Personne');
    }

   
}
