<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\NomsDeDomaine;
use App\Models\Client;

class SeewebController extends Controller
{
    public function index()
    {
        $tempo = DB::table('clients_2') //Notre table principal pour le join se nomme clients_2
                    ->join('noms_de_domaine_2','clients_2.id_nom_domaine',"=",'noms_de_domaine_2.nom_domaine')
                    ->select('clients_2.*','noms_de_domaine_2.nom_domaine as noms_nomDomaine','noms_de_domaine_2.cout_annuel as noms_coutAnnuel') //Désormais nom_domaine auras pour nom noms_nomDomaine
                    ->get();                                                                                                                      //Et cout_annuel sera noms_coutAnnuel

        return view('listeBDD', ['clients_2' => $tempo]); //index fait référence au fichier index qui ce trouve dans le dosser users
                    
    }

    public function delete($id)
    {
        $delete = DB::table('noms_de_domaine_2')
                    ->where('nom_domaine',$id)
                    ->delete();

        $delete = DB::table('clients_2')
                    ->where('id_nom_domaine',$id)
                    ->delete();

        return redirect('listeBDD');
    }
    
}