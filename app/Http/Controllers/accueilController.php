<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Personnage;


class tab{
    public $Pseudo;
    public $Race;
    public $ptsVie;
    public $Armure;
    public $Details;
}


class accueilController extends Controller
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
        $armures = DB::table('armures')->get();


        return view('accueil', ['personnages' => $personnages, 'classes' => $classes, 'armures' => $armures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = DB::table('classes')->get();
        $races = DB::table('races')->get();
        $armures = DB::table('armures')->get();
        

        return view("createPersonnage", ['classes' => $classes, 'races' => $races, 'armures' => $armures]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->race_id);

        $request->validate([
            "Pseudo"=>"required",
            "idRace"=>"required",
            "idClasse"=>"required",
            "idArmure"=>"required"
        ]);

        Personnage::create($request->all());
        
        return back()->with("success", "Personnage créé avec succès !");
    }

    public function delete(Personnage $personnage)
    {
        $personnage->delete();

        return back()->with("successDelete", "Le personnage à été supprimé avec succès");
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

