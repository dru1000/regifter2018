@extends('layouts.app') 
@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Sell Gift Cards</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but
            not too short so folks don't simply skip over it entirely.</p>
    </div>

</section>

<div class="album py-5 bg-light">
    <div class="container">
        @guest
        <div class="row justify-content-center">
            <a class="btn btn-primary" href="{{ route('login') }}" role="button">Login to start selling</a>
        </div>
        @else
        <h2 class="mb-5 text-center">Choose a retailer to start selling</h2>
        <div class="row">
            @foreach ($retailers as $retailer)

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <a href="/sell-gift-cards/{{ $retailer->url }}"><img class="card-img-top" src="{{ asset('img/').'/retailers/'.$retailer->logo }}" alt="Card image cap"></a>
                    <div class="card-body">

                        <h3 class="card-text"><a href="/sell-gift-cards/{{ $retailer->url }}">{{ $retailer->name }}</a></h3>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        @endguest
    </div>
</div>
@endsection