<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
    {
        return view('layouts.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:5|max:2000',
        ]);

        Message::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Üzeneted sikeresen elküldve! Köszönjük, hogy írtál nekünk.');
    }
}

