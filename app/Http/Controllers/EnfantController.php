<?php

namespace App\Http\Controllers;

use App\Enfant;
use App\Commune;
use Illuminate\Http\Request;
use App\Vaccination;

class EnfantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfants = Enfant::all();
        return view('enfants.index',compact('enfants'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enfants.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enfant =new Enfant();

        $enfant->id = "5555";
        $enfant->nom = request('nom');
        $enfant->prenom = "has";
        $enfant->sex = 1;
        $enfant->observation = "this is 	observation";
        $enfant->pere_id = 5;
        $enfant->date_naissance = '1995-06-12';
        $enfant->lieu_naissance = 'djorf';
        $enfant->commune_id = 1;

        $enfant->save();
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function show(Enfant $enfant)
    {
        $vaccinations = Vaccination::all()->where('enfant_id',$enfant->id);
        $ages=Vaccination::distinct('age')-> get('age');
        return view('enfants.enfant',compact('enfant','vaccinations','ages'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function edit(Enfant $enfant)
    {
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enfant $enfant)
    {
        dd("update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enfant  $enfant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enfant $enfant)
    {
        //
    }
}
