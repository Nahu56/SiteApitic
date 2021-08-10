<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Personnage;
use App\Models\Classe;
use App\Models\Race;
use App\Models\Armure;
use App\Models\Specialisation;




class tab{
    public $Pseudo;
    public $Race;
    public $ptsVie;
    public $Armure;
    public $Details;
}


class accueilController extends Controller
{


    //------------------------- INDEX -------------------------
    public function index()
    {
        // $personnage = Personnage::all();
        //$personnages = DB::table('personnages')->get();
        $races = DB::table('races')->get();
        $classes = DB::table('classes')->get();
        $armures = DB::table('armures')->get();
        $specialisations = Specialisation::all();

        $personnages = DB::table('personnages')
            ->orderBy('idClasse')
            ->orderBy('idSpecialisation')
            ->get();

        /*
        

        $tab = array();

        $m = count($personnages);

        for($i=0; $i<$m; $i++)
        {
            $tab[$i] = new tab;

            $tab[$i]->Pseudo = $personnages[$i]->Pseudo;
            $tab[$i]->Race = $races[$personnages[$i]->idRace]->libelle;
            $tab[$i]->ptsVie = $classes[$personnages[$i]->idClasse]->ptsdevie;
            $tab[$i]->Armure = $armures[$personnages[$i]->idArmure]->libelle;


            $Dlibel = $classes[$personnages[$i]->idClasse]->libelle;
            $Dcouppref = $classes[$personnages[$i]->idClasse]->couppref;
            $tab[$i]->Details = "Je suis un " .$Dlibel. " et mon coup préféré est " .$Dcouppref;

            return view('accueil', ['personnages' => $personnages, 'classes' => $classes, 'armures' => $armures, 'tab' => $tab]);
        }
        */

        return view('accueil', ['personnages' => $personnages, 'classes' => $classes, 'armures' => $armures, 'races' => $races, 'specs' => $specialisations]);
    }


    //------------------------- CREATE -------------------------
    public function create()
    {
        $classes = Classe::all();
        $races = Race::all();
        $armures = Armure::all();
        $specialisations = Specialisation::all();


        return view("createPersonnage", ['classes' => $classes, 'races' => $races, 'armures' => $armures, 'specs' => $specialisations]);
    }


    //------------------------- STORE -------------------------
    public function store(Request $request)
    {

        $request->validate([
            "Pseudo"=>"required",
            "idRace"=>"required",
            "idClasse"=>"required",
            "idArmure"=>"required",
            "idSpecialisation"=>"required"
        ]);

        Personnage::create($request->all());
        
        return back()->with("success", "Personnage créé avec succès !");
    }


    //------------------------- DELETE -------------------------
    public function delete($personnage)
    {
        Personnage::find($personnage)->delete();
        //$personnage->delete();

        return back()->with("successDelete", "Le personnage à été supprimé avec succès");
    }


    //------------------------- UPDATE -------------------------
    public function update(Request $request, Personnage $personnage)
    {
        $request->validate([
            "Pseudo"=>"required",
            "idRace"=>"required",
            "idClasse"=>"required",
            "idArmure"=>"required"
        ]);

        $personnage->update([
            "Pseudo" => $request->Pseudo,
            "idRace" => $request->idRace,
            "idClasse" => $request->idClasse,
            "idArmure" => $request->idArmure
        ]);
        
        return back()->with("success", "Personnage mis à jour avec succès !");
    }


    //------------------------- EDIT -------------------------
    public function edit(Personnage $personnage)
    {
        $classes = Classe::all();
        $races = Race::all();
        $armures = Armure::all();
        $specs = Specialisation::all();

        return view("editPersonnage", compact("personnage", "classes", "races", "armures", "specs"));
    }


    public function criteriachange($idClasse)
    {


        $filterSpe = DB::table('Specialisation')
                        ->select(DB::raw('id'))
                        ->where('idClasse', '=', $idClasse)
                        ->get();

        return back()->with(['filterSpe' => $filterSpe]);
    }






        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

