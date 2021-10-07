<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public static function create(Request $request)
    {
         Annonce::firstOrCreate([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'photographie' => $request->input('photographie'),
            'prix' => $request->input('prix'),
        ]);
        return redirect()->route('home')
        ->with('success','Product add successfully');
    }
    public function show(Request $annonce){
        return view('show',compact($annonce));
    }
}
