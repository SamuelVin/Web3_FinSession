<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Usager extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $fillable=[
      'nom',
      'prenom',
      'sexe',
      'email',
      'password'
    ];

    protected $hidden= [
      'password',
      'remember_token',
    ];

}
