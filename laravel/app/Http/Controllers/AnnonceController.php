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
    public function show(){
        $annonce = Annonce::all()->toArray();
        return view('show',['annonce'=>$annonce]);
    }
    public function Delete($id){
        $annonce = Annonce::where('id',$id)->delete();
        $annonce = Annonce::all()->toArray();
        return view('show',['annonce'=>$annonce]);
    }
    public function Updatepage($id){
        return view('Updatepage',['id'=>$id]);
    }
}
