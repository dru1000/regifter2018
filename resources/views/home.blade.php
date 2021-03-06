@extends('layouts.app') 
@section('content')

<section class="text-center home-hero d-flex align-items-center h-50" style="margin-bottom: 130px">
    <div class="container text-left">

        <h1 class="display-3">NZ's Gift Card Marketplace</h1>
        <p class="lead w-50">Buy and sell unwanted gift cards for cash</p>
        <p>
            <a href="#" class="btn btn-lg btn-primary my-2 mr-3">Buy Gift Cards</a>
            <a href="#" class="btn btn-lg btn-secondary my-2">Sell Gift Cards</a>
        </p>

    </div>

</section>

{{--
<hr class="hr-section my-0">
<img src="{{ asset('img/red-arrow.png') }}" alt="arrow" class="red-arrow mx-auto d-block"> --}}

<div class="container mt-5">

    <h2 class="text-center display-4 my-5">Todays best deals</h2>

    <div class="d-flex justify-content-around">

        @foreach ($cards as $card)

        <div class="card mb-3 mx-3 box-shadow gift-card-card gift-card-card-large">
            <a href="/buy-gift-cards/{{ $card->retailer->url }}"><img class="card-img-top" src="{{ asset('img/').'/retailers/'.$card->retailer->logo }}" alt="Card image cap"></a>
            <div class="card-body px-3">
                <h4 class="card-text"><a href="/buy-gift-cards/{{ $card->retailer->url }}">{{ $card->retailer->name }}</a></h4>

                <div class="d-flex justify-content-between align-items-center">
                    <a href="/buy-gift-cards/{{ $card->retailer->url }}" class="btn btn-sm btn-outline-primary">View</a>
                    <small class="text-muted">Save up to {{ $card->discount }}%</small>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>
@endsection