<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class accueil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $personnage = Personnage::all();
        $personnages = DB::table('personnages')->get();
        $races = DB::table('races')->get();
        $classes = DB::table('classes')->get();
        $Armures = DB::table('armures')->get();

        $m = count($personnages);

        for($i=0; $i<$m; $i++)
        {
            $tab[$i]->Pseudo = $personnages[$i]->Pseudo;
            $tab[$i]->Race = $races[$personnages[$i]->idRace]->libelle;
            $tab[$i]->ptsVie = $classes[$personnages[$i]->idClasse]->ptsdevie;
            $tab[$i]->Armure = $armures[$personnages[$i]->idArmure]->libelle;
        }

        // $A = $classes[$personnages[1]->idClasse]->ptsdevie;


        return view('accueil', ['value' => dd($tab)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
