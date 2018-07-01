<?php

namespace App\Http\Controllers;

class HomeController extends Controller
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
     * Return the gift cards with the biggest discount
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = \App\GiftCard::where('active', 1)
            ->orderBy('discount', 'desc')
            ->get();

        //Only return one of each retailer
        $cards = $cards->unique('retailer_id')->take(4);

        //Resets the index after the unique method
        $cards->values()->all();

        return view('home', compact('cards'));
    }
}
