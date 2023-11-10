@extends('layouts.app')

@section('content')
    @include('layouts.menubar')
    @php
    $setting = DB::table('settings')->first();
    $chrage = $setting->shipping_chrage;
    $vat = $setting->vat;
    $cart = Cart::content();
    @endphp

    <style>
        /**
           * The CSS shown here will not be introduced in the Quickstart guide, but shows
           * how you can use CSS to style your Element's container.
           */
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            width: 100%;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact_responsive.css') }}">

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" style="border: 1px solid grey; padding:20px; Border-radius:10px">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">Cart Product</div>
                        <div class="cart_items">
                            <ul class="cart_list">
                                @foreach ($cart as $row)
                                    <li class="cart_item clearfix">
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title"><b>Product Image</b></div>
                                                <div class="cart_item_text"><img src="{{ asset($row->options->image) }}"
                                                        width="133px" height="133px" alt=""></div>
                                            </div>
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title"><b>Product Name</b></div>
                                                <div class="cart_item_text">{{ $row->name }}</div>
                                            </div>
                                            @if ($row->options->color == null)
                                            @else
                                                <div class="cart_item_color cart_info_col">
                                                    <div class="cart_item_title"><b>Color</b></div>
                                                    <div class="cart_item_text">{{ $row->options->color }}</div>
                                                </div>
                                            @endif
                                            @if ($row->options->size == null)

                                            @else
                                                <div class="cart_item_color cart_info_col">
                                                    <div class="cart_item_title"><b>Size</b></div>
                                                    <div class="cart_item_text">{{ $row->options->size }}</div>
                                                </div>
                                            @endif
                                            <div class="cart_item_quantity cart_info_col">
                                                <div class="cart_item_title"><b>Quantity</b></div>
                                                <div class="cart_item_text">{{ $row->qty }}</div>
                                            </div>
                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title"><b>Price</b></div>
                                                <div class="cart_item_text">${{ $row->price }}</div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title"><b>Total</b></div>
                                                <div class="cart_item_text">${{ $row->price * $row->qty }}</div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-8" style="float: right">
                            <div class="product_info">
                                <ul class="list-group">
                                    @if (Session::has('coupon'))
                                        <li class="list-group-item">SubTotal <span
                                                class="float-right">${{ Session::get('coupon')['balance'] }}</span>
                                        </li>
                                        <li class="list-group-item">Coupon:({{ Session::get('coupon')['name'] }})
                                            <a href="{{ route('coupon.remove') }}" class="btn btn-danger btn-sm">X</a>
                                            <span class="float-right">${{ Session::get('coupon')['discount'] }}
                                            </span>
                                        </li>
                                    @else
                                        <li class="list-group-item">SubTotal <span
                                                class="float-right">${{ Cart::Subtotal() }}</span>
                                        </li>
                                    @endif

                                    <li class="list-group-item">Shipping Chrage<span
                                            class="float-right">${{ $chrage }}</span></li>
                                    <li class="list-group-item">Vat<span class="float-right">${{ $vat }}</span>
                                    </li>
                                    @if (Session::has('coupon'))
                                        <li class="list-group-item">Total<span
                                                class="float-right">${{ Session::get('coupon')['balance'] + $chrage + $vat }}</span>
                                        </li>
                                    @else
                                        <li class="list-group-item">Total<span
                                                class="float-right">${{ Cart::total() + $chrage + $vat }}</span></li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="border: 1px solid grey; padding:20px; Border-radius:10px">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">Payment Method</div>
                        <form action="{{route('stripe.chrage')}}" method="post" id="payment-form">
                            @csrf
                            <div class="form-row">
                                <label for="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display Element errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>
                            <br>
                            <input type="hidden" name="shipping" value="{{$chrage}}">
                            <input type="hidden" name="vat" value="{{$vat}}">
                            <input type="hidden" name="total" value="{{Cart::subtotal() + $chrage + $vat}}">

                            <input type="hidden" name="ship_name" value="{{$data['name']}}">
                            <input type="hidden" name="ship_phone" value="{{$data['phone']}}">
                            <input type="hidden" name="ship_email" value="{{$data['email']}}">
                            <input type="hidden" name="ship_address" value="{{$data['address']}}">
                            <input type="hidden" name="ship_city" value="{{$data['city']}}">
                            <input type="hidden" name="payment_type" value="{{$data['payment']}}">

                            <button class="btn btn-info">Pay Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>


    <script type="text/javascript">
        // Create a Stripe client.
        var stripe = Stripe('pk_test_51IqLTZGLh2TdVfNtcWgDjqg3w3npPUx4VSyerfbsFNp4Pu77qF5w9vhXG555B4MLlyfkDuL20ZztjABx3fixjGHi00C0taEOkc');
        // Create an instance of Elements.
        var elements = stripe.elements();
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        // Create an instance of the card Element.
        var card = elements.create('card', {
            style: style
        });
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });
        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }

    </script>


@endsection
