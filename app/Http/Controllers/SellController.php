<?php

namespace App\Http\Controllers;

class SellController extends Controller
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

        return view('sell_gift_cards', compact('retailers'));
    }

    public function sell($url)
    {
        $retailer = \App\Retailer::where('url', $url)->first();

        return view('sell_gift_cards_form', compact('retailer'));
    }
}
