<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class DevisController extends Controller
{
    public function index(){
        $vehicles = Vehicle::all() ; 

        return view('devis.index', ['vehicle'=>$vehicles]);
    }
    public function result(Request $Request){
        $vehicle_id = $Request->get('vehicule');
        $started = $Request->get('starting_at');
        $ended = $Request->get('ending_at');

        $vehicle = Vehicle::findOrFail($vehicle_id);
        $datetime1 = date_create($started); 
        $datetime2 = date_create($ended); 
        $interval = date_diff($datetime1, $datetime2);
        $time = $interval->format('%a');
        $Ht = $vehicle->price * $time;
        $TTC = $Ht *1.2;
        return view('devis.result', ['TTC'=>$TTC, 'Ht'=>$Ht, 'vehicle'=>$vehicle->name]);
    }
    
}   