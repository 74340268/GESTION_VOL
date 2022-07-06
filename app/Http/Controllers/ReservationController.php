<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\vol;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations =Reservation::all();

        return view('reserv.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vols =vol::all();

        return view('reserv.create', compact('vols'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required',
            'sexe' => 'required',
            'place_A' => 'required',
            'prix_A' => 'required',
            'place_B' => 'required',
            'prix_B' => 'required',
            'id_vol' => 'required',
        ]); 
        
        
    $reservation = Reservation::create($validatedData);

    return redirect('/reservations')->with('success', 'reservation créer avec succès');
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
        $reservation = Reservation::findOrFail($id);

        return view('reserv.edit', compact('reservation'));
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
        $validatedData = $request->validate([
        'nom' => 'required|max:255',
        'prenom' => 'required',
        'sexe' => 'required',
        'place_A' => 'required',
        'prix_A' => 'required',
        'place_B' => 'required',
        'prix_B' => 'required',
    ]); 
    
    
$reservation = Reservation::create($validatedData);

return redirect('/reservations')->with('success', 'reservation mise à jour avec succès');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
    
        return redirect('/reservations')->with('success', 'reservation supprimer avec succès');
    }
}
