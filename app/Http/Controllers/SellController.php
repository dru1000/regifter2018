<?php

namespace App\Http\Controllers;

use Auth;

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

    public function create()
    {
        //dd(request()->all());
        //$request->user();
        $user = Auth::user();

        $card = new \App\GiftCard;
        $card->user_id = $user->id;
        $card->retailer_id = request('retailer_id');
        $card->value = request('value');
        $card->discount = request('discount');
        $card->sale_price = request('sale_price');

    }
}
