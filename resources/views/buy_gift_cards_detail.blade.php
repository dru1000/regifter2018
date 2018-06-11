@extends('layouts.app') 
@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-auto">
                <img src="{{ asset('img/').'/retailers/'.$retailer->logo }}" alt="{{ $retailer->name }} Gift Card">
            </div>
            <div class="col-md-auto">
                <h1 class="jumbotron-heading">{{ $retailer->name }} Gift Card</h1>
            </div>
        </div>


    </div>

</section>

<div class="album py-5 bg-light">
    <div class="container w-50">

        <ul class="list-group">
            <li class="h5 list-group-item d-flex justify-content-between align-items-center">
                Card Value
                <span class="h5">${{ $card->value }}</span>
            </li>
            <li class="h5 list-group-item d-flex justify-content-between align-items-center">
                Discount
                <span class="h5">{{ $card->discount }}%</span>
            </li>
            <li class="h5 list-group-item d-flex justify-content-between align-items-center list-group-item-secondary">
                You Pay
                <span class="h5">${{ $card->sale_price }}</span>
            </li>
        </ul>

        <a href="#" class="mt-5 btn btn-primary btn-lg btn-block" role="button" aria-disabled="true">Buy Now</a>
    </div>
</div>
@endsection