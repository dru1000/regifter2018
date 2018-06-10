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

    public function show($url)
    {
        //Get the retailers name
        $name = \App\Retailer::where('url', $url)->pluck('name');

        //Get the retailers ID
        $retailer_id = \App\Retailer::where('url', $url)->pluck('id');

        //Find all gift cards belonging to the retailer with that ID
        $cards = \App\GiftCard::where('retailer_id', $retailer_id)
            ->get();

        return view('show_gift_cards', compact('cards', 'name'));
    }
}
