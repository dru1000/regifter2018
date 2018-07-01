@extends('layouts.app') 
@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Homepage</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but
            not too short so folks don't simply skip over it entirely.</p>
        <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
    </div>

</section>

<div class="album py-5 bg-light">
    <div class="container">

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
</div>
@endsection