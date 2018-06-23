@extends('layouts.app') 
@section('css')
<link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
@endsection
 
@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Sell {{ $retailer->name }} Gift Cards</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but
            not too short so folks don't simply skip over it entirely.</p>
    </div>

</section>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">

            <div class="col-md-8 pr-5">
                <form method="POST" action="/gift-cards">
                    {{ csrf_field() }}
                    <h2>Sales price</h2>


                    <div class="form-group">
                        <label for="value">Gift Card Value</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">$</span>
                            </div>
                            <input name="value" type="number" class="form-control form-control-lg" id="value" aria-describedby="emailHelp" placeholder="Enter gift card value">
                        </div>
                        <small id="emailHelp" class="form-text text-muted">We accept gift cards up the the value of $200.</small>
                    </div>

                    <div class="form-group">
                        <label for="discount">Percentage Discount</label>
                        <input name="discount" type="number" class="form-control form-control-lg" id="discount" placeholder="Discount">
                    </div>


                    <div class="my-5">
                        <h3 class="mr-2 d-inline">Your sale price = </h3>
                        <div class="alert alert-primary h3 d-inline" id="sale_price" role="alert">
                            $0.00
                        </div>
                    </div>

                    <hr>

                    <h2>Gift Card Details</h2>

                    <div class="form-group">
                        <label for="expiry">Expiry Date</label>
                        <input name="expiry" type="text" class="form-control form-control-lg" id="expiry">
                    </div>
                    <div class="form-group">
                        <label for="serial">Serial Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">
                                        <i class="fas fa-lock"></i>
                                    </span>
                            </div>
                            <input name="serial" type="text" class="form-control form-control-lg" id="serial">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pin">PIN</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">
                                        <i class="fas fa-lock"></i>
                                    </span>
                            </div>
                            <input name="pin" type="text" class="form-control form-control-lg" id="pin">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                    <input type="hidden" id="retailer_id" name="retailer_id" value="{{ $retailer->id }}">
                </form>


            </div>

            <div class="col-md-4 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Information</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Why we need the serial number</h6>
                            <small class="text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Where to find the PIN</h6>
                            <small class="text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</small>
                        </div>
                    </li>
                </ul>
            </div>

        </div>



        <div id="slider" style=""></div>
    </div>
@endsection
 
@section('js')

    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script>
        $(document).ready(function () {
        //Calculate Sale Price
        $("#discount").on('input', function () {
            var discountValue = $("#value").val() * ($("#discount").val() / 100);
            var salePrice = $("#value").val() - discountValue;
            //alert("Sale Price = " + salePrice);
            $("#sale_price").text("$" + salePrice.toFixed(2));
        });

        $("#value").on('input', function () {
            var discountValue = $("#value").val() * ($("#discount").val() / 100);
            var salePrice = $("#value").val() - discountValue;
            //alert("Sale Price = " + salePrice);
            $("#sale_price").text("$" + salePrice.toFixed(2));
        });


//$( "#slider" ).slider();

    $( "#slider" ).slider({
      orientation: "horizontal",
      range: "min",
      min:50,
      max: 255,
      value: 127
    });


    });
    </script>


    <script>

    </script>
@endsection