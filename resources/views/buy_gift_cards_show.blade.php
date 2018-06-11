@extends('layouts.app') 
@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">{{ $name[0] }} Gift Cards</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but
            not too short so folks don't simply skip over it entirely.</p>
    </div>

</section>

<div class="album py-5 bg-light">
    <div class="container">

        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Retailer</th>
                    <th scope="col">Value</th>
                    <th scope="col">Discount</th>
                    <th scope="col">You Pay</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cards as $card)
                <tr>
                    <th scope="row">{{ $name[0] }}</th>
                    <td>${{ $card->value }}</td>
                    <td>{{ $card->discount }}%</td>
                    <td>${{ $card->sale_price }}</td>
                    <td><a class="btn btn-primary" href="/buy-gift-cards/id/{{ $card->id }}" role="button">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection