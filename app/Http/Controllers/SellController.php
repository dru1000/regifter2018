<?php

namespace App\Http\Controllers;

use App\GiftCard;
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

    public function create($url)
    {
        $retailer = \App\Retailer::where('url', $url)->first();

        return view('sell_gift_cards_form', compact('retailer'));
    }

    public function store()
    {

        if (Auth::check()) {
            $user = Auth::user();

            $this->validate(request(), [
                'retailer_id' => 'required|integer',
                'value' => 'required|integer',
                //'discount' => 'required|integer',
                //'sale_price' => 'required|integer',
            ]);

            GiftCard::create([
                'user_id' => $user->id,
                'retailer_id' => request('retailer_id'),
                'serial' => request('serial'),
                'value' => request('value'),
                'discount' => 15,
                'expiry_date' => date('Y-m-d', strtotime(request('expiry'))),
                'sale_price' => 15,
            ]);

            return view('card_submitted');

        } else {
            return view('auth/login');
        }

    }
}
