<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function index()
    {
        $locations = Location::with('items')->where('user_id', Auth::user()->id)->get();
     
        return Inertia::render('Inventory')->with([
            'locations' => $locations
        ]);
        
    }


    public function submit(){


        $addLocation = Location::create([
            'name' => request('name'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/inventory');

    }


}
