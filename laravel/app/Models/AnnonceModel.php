<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceModel extends Model
{
    use HasFactory;
    $utilisateur = new App\AnnonceModel;
    $utilisateur->email = request('email');
    $utilisateur->mot_de_passe = request('password');
}
