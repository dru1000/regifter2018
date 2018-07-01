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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = \App\GiftCard::where('active', 1)
            ->orderBy('discount', 'desc')
            ->get();

        $cards = $cards->unique('retailer_id');

        $cards->values()->all();

        return view('home', compact('cards'));
    }
}
