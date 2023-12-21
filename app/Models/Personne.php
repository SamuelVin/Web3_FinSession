<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Personne extends Model
{
    
    protected $fillable = ['nom', 'prenom', 'dateNaissance', 'genre', 'image'];
    public function films(){
        return $this->belongsToMany('App\Models\Film');
    }
}