<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url)
    {
        //Get the retailers name
        $name = \App\Retailer::where('url', $url)->pluck('name');

        //Get the retailers ID
        $retailer_id = \App\Retailer::where('url', $url)->pluck('id');

        //Find all gift cards belonging to the retailer with that ID
        $cards = \App\GiftCard::where('retailer_id', $retailer_id)
            ->get();

        return view('buy_gift_cards_list', compact('cards', 'name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card = \App\GiftCard::where('id', $id)->first();

        //Get the retailers name
        $retailer = \App\Retailer::where('id', $card->retailer_id)->first();

        return view('buy_gift_cards_detail', compact('card', 'retailer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
