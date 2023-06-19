<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\NomsDeDomaine;
use App\Models\Client;

class AddController extends Controller
{
    public function index()
    {
        return view('AddBDD');
    }


    public function add(Request $request)
    {
        $request->validate([
            'nom_domaine' => 'required',
            'cout_annuel' => 'required',
            'societe' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        $query = DB::table('noms_de_domaine_2')->insert([
            'nom_domaine' => $request->input('nom_domaine'),
            'cout_annuel' => $request->input('cout_annuel'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        $query2 = DB::table('clients_2')->insert([
            'societe' => $request->input('societe'),
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'id_nom_domaine' => $request->input('nom_domaine'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        

        if($query && $query2){
            return back()->with('success','Les données ont été créés avec succèes');
        } else {
            return back()->with('fail','Une erreur s est produite');
        }


        /*return $request->input();*/ //Afficher le contenue du token

        /*

        //Autre méthode

        DB::table('noms_de_domaine_2')->insert([
            'nom_domaine' => $request->input('nom_domaine'),
            'cout_annuel' => $request->input('cout_annuel'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('clients_2')->insert([             
            'societe' => $request->input('societe'),
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'id_nom_domaine' => $request->input('nom_domaine'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('AddBDD')->with('success', 'Nom de domaine ajouté avec succès.');*/
        
    }
}













