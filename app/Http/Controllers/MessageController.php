<?php

namespace App\Http\Controllers;

use App\Models\Message;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Üzenetek lekérése legújabb elöl
        $messages = Message::orderBy('created_at', 'desc')->get();

        return view('layouts.messages', compact('messages'));
    }
}