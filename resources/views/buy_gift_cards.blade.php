@extends('layouts.app') 
@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Buy Gift Cards</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but
            not too short so folks don't simply skip over it entirely.</p>
    </div>

</section>

<div class="py-5 bg-light">
    <div class="container justify-content-center">

        <div class="d-inline-flex flex-wrap justify-content-center">

            @foreach ($retailers as $retailer)

            <div class="card mb-3 mx-3 box-shadow gift-card-card">
                <a href="/buy-gift-cards/{{ $retailer->url }}"><img class="card-img-top" src="{{ asset('img/').'/retailers/'.$retailer->logo }}" alt="Card image cap"></a>
                <div class="card-body px-3">

                    <h4 class="card-text"><a href="/buy-gift-cards/{{ $retailer->url }}">{{ $retailer->name }}</a></h4>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="/buy-gift-cards/{{ $retailer->url }}" class="btn btn-sm btn-outline-primary">View</a>
                        <small class="text-muted">Save up to 15%</small>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
@endsection