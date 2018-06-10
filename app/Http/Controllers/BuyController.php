<?php

namespace App\Http\Controllers;

class BuyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retailers = \App\Retailer::all();

        return view('buy_gift_cards', compact('retailers'));
    }

    public function show()
    {
        $cards = \App\GiftCard::where('retailer_id', 1)
            ->get();

        return view('show_gift_cards', compact('cards'));
    }
}
