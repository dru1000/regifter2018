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
                    <h2>Set Sales price</h2>


                    <div class="form-group">
                        <label for="value">Gift Card Value</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">$</span>
                            </div>
                            <input name="value" type="number" class="form-control form-control-lg" id="value" aria-describedby="emailHelp" placeholder="Enter gift card value"
                                required>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">We accept gift cards up the the value of $200.</small>
                    </div>

                    <div>
                        <p class="mb-1">Percentage Discount</p>

                        <div class="d-flex">
                            <div class="mt-2 mr-2 w-100" name="slider" id="slider" style=""></div>
                            <div class="h4" id="discount">15%</div>
                        </div>
                        <input type="hidden" id="discount_hidden" name="discount_hidden" value="0">
                        <small id="emailHelp" class="form-text text-muted">Minimum discount is 10%.</small>
                    </div>


                    <div class="my-5">
                        <h3 class="mr-2 d-inline">Your sale price = </h3>
                        <div class="alert alert-success h3 d-inline" id="sale_price" role="alert">
                            $0.00
                        </div>
                    </div>

                    <hr>

                    <h2>Gift Card Details</h2>

                    <div class="form-group">
                        <label for="expiry">Expiry Date</label>
                        <input type="text" name="datepicker" id="datepicker" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="serial">Serial Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">
                                        <i class="fas fa-lock"></i>
                                    </span>
                            </div>
                            <input name="serial" type="text" class="form-control form-control-lg" id="serial" required>
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
                            <input name="pin" type="text" class="form-control form-control-lg" id="pin" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">Submit Gift Card</button>

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




    </div>
@endsection
 
@section('js')

    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script>
        $(document).ready(function () {

        $("#value").on('input', function () {
            var discountValue = $("#value").val() * ($("#discount").val() / 100);
            var salePrice = $("#value").val() - discountValue;
            //alert("Sale Price = " + salePrice);
            $("#sale_price").text("$" + salePrice.toFixed(2));
        });

        //JQUERY RANGE SLIDER
        $( "#slider" ).slider({
        orientation: "horizontal",
        range: "min",
        min:0,
        max: 90,
        value: 20,
        //When the sliders value us changed
        slide: function(event, ui) {
                //Stop the user being able to move the slider below the minimum 
                if (ui.value < 10) {
                    return false;
                }
                //Update percentage discount text
                $("#discount").text(ui.value + "%");
                //Update sales price amount text
                var discountValue = $("#value").val() * (ui.value / 100);
                var salePrice = $("#value").val() - discountValue;
                $("#sale_price").text("$" + salePrice.toFixed(2));
            }
        });

        $( "#datepicker" ).datepicker({
            dateFormat: "dd-MM-yy",
            changeMonth: true,
            changeYear: true
        });


    });
    </script>


    <script>

    </script>
@endsection