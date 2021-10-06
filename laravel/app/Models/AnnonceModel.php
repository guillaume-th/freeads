<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceModel extends Model
{
    use HasFactory;
}
$AnnonceModel = new AnnonceModel;
$AnnonceModel->titre = request('titre');
$AnnonceModel->description = request('description');
$AnnonceModel->prix = request('prix');
$AnnonceModel->photographie = request('photographie');
