<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Pizza;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::orderBy('nev')->get();
        return view('order', compact('pizzas'));
    }

    public function store(Request $request)
    {
        $rules = [
            'pizzanev' => 'required|exists:pizza,nev',
            'darab' => 'required|integer|min:1|max:10',
        ];

        if (!Auth::check()) {
            $rules['email'] = 'required|email';
        }

        $validated = $request->validate($rules);

        if (Auth::check()) {
            $user = Auth::user();
        } 
        else {
            $user = User::firstOrCreate(
                ['email' => $validated['email']],
                [
                    'name' => 'Vendég Felhasználó',
                    'password' => bcrypt('guest123'),
                    'role' => 'guest',
                ]
            );
        }


        Order::create([
            'user_id' => $user->id,
            'pizzanev' => $validated['pizzanev'],
            'darab' => $validated['darab'],
            'felvetel' => Carbon::now(),
            'kiszallitas' => Carbon::now()->addHours(2),
        ]);

        return redirect()
            ->route('order.index')
            ->with('success', 'Rendelésed sikeresen rögzítve!');
    }
}



