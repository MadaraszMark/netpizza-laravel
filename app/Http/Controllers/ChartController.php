<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Pizza;

class ChartController extends Controller
{
    public function index()
    {
        $data = Category::withCount('pizzas')->get();

        $labels = $data->pluck('nev');
        $counts = $data->pluck('pizzas_count');

        return view('layouts.chart', compact('labels', 'counts'));
    }
}

