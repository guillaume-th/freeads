<?php

namespace App\Http\Controllers;
use App\Models\AnnonceModel;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    protected function create(array $data)
    {
        return AnnonceModel::create([
            'titre' => $data['titre'],
            'description' => $data['description'],
            'photographie' => $data['photographie'],
            'prix' => $data['prix'],
        ]);
    }
}
