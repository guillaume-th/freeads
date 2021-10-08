<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        // echo Storage::download($request->input('photographie'));
        return redirect()->route('home')
            ->with('success', 'Product add successfully');
    }
    public function show()
    {
        $annonce = Annonce::all()->toArray();
        return view('show', ['annonce' => $annonce]);
    }
    public function Delete($id)
    {
        $annonce = Annonce::where('id', $id)->delete();
        $annonce = Annonce::all()->toArray();
        return view('show', ['annonce' => $annonce]);
    }
    public function Updatepage($id)
    {

        $users = DB::table('annonces')
            ->select('*')
            ->where('id','=',$id)
            ->get()
            ->toArray();
        return view('Updatepage', ['id' => $id,'users'=>$users[0]]);
    }
    public static function Update(Request $request)
    {
        $affected = DB::table('annonces')
              ->where('id',$request->input('id'))
              ->update(['titre' => $request->input('titre'),'prix' => $request->input('prix'),'description' => $request->input('description'),'photographie' => $request->input('photographie')]);
        return redirect()->route('show')
            ->with('success', 'Product add successfully');
    }
    public function Search(Request $request)
    {
        $users = DB::table('annonces')
            ->select('*')
            ->where('titre','like',"%".$request->input('search')."%")
            ->get();
        return view('Search', ['users'=>$users]);
    }
}
