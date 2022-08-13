<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MealsController extends Controller
{
    
    public function index()
    {

        $meals = Auth::user()->meals;
     
        return Inertia::render('Meals')->with([
            'meals' => $meals
        ]);
        
    }

    public function show(Meal $meal)
    {
        return Inertia::render('Recipe')->with([
            'meal' => $meal
        ]);
        
    }

}
