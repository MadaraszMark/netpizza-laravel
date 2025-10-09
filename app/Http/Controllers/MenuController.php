<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Az étlap (menü) megjelenítése.
     * Lehetővé teszi a keresést és a vegetáriánus szűrést.
     */
    public function index(Request $request)
    {
        // Keresés és szűrés beolvasása
        $search = trim($request->get('q', ''));
        $onlyVeg = $request->boolean('veg', false);

        $categories = Category::with(['pizzas' => function ($query) use ($search, $onlyVeg) {
            if ($search !== '') {
                $query->where('nev', 'like', "%{$search}%");
            }

            if ($onlyVeg) {
                $query->where('vegetarianus', true);
            }

            $query->withCount('orders')
                  ->orderBy('nev');
        }])
        ->orderBy('nev')
        ->get();

        return view('layouts.menu', [
            'categories' => $categories,
            'search'     => $search,
            'onlyVeg'    => $onlyVeg,
        ]);
    }
}

