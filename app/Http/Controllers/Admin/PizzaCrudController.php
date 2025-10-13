<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use App\Models\Category;
use Illuminate\Http\Request;

class PizzaCrudController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::with('category')->orderBy('kategorianev')->get();

        return view('admin.pizzas.index', compact('pizzas'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.pizzas.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nev' => 'required|string|max:255|unique:pizza,nev',
            'kategorianev' => 'required|string|exists:kategoria,nev',
            'vegetarianus' => 'required|boolean',
        ]);

        Pizza::create($validated);

        return redirect()->route('pizzas.index')->with('success', 'Pizza sikeresen hozzáadva!');
    }

    public function edit(Pizza $pizza)
    {
        $categories = Category::all();
        return view('admin.pizzas.edit', compact('pizza', 'categories'));
    }

    public function update(Request $request, Pizza $pizza)
    {
        $validated = $request->validate([
            'nev' => 'required|string|max:255|unique:pizza,nev,' . $pizza->nev . ',nev',
            'kategorianev' => 'required|string|exists:kategoria,nev',
            'vegetarianus' => 'required|boolean',
        ]);

        $pizza->update($validated);

        return redirect()->route('pizzas.index')->with('success', 'Pizza sikeresen módosítva!');
    }

    public function destroy(Pizza $pizza)
    {
        $pizza->delete();
        return redirect()->route('pizzas.index')->with('success', 'Pizza törölve!');
    }
}


