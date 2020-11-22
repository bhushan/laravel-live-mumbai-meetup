<?php

namespace App\Http\Controllers;

use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }
}
