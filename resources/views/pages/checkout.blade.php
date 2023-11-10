@extends('layouts.app')

@section('content')
    {{-- @include('layouts.menubar') --}}
    @php
    $setting = DB::table('settings')->first();
    $chrage = $setting->shipping_chrage;
    $vat = $setting->vat;
    @endphp
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/cart_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/cart_responsive.css') }}">

    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart_container">
                        <div class="cart_title">Checkout Pages</div>
                        <div class="cart_items">
                            <ul class="cart_list">
                                @foreach ($cart as $row)
                                    <li class="cart_item clearfix">
                                        <div class="cart_item_image"><img src="{{ asset($row->options->image) }}" alt="">
                                        </div>
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title">Name</div>
                                                <div class="cart_item_text">{{ $row->name }}</div>
                                            </div>
                                            @if ($row->options->color == null)
                                            @else
                                                <div class="cart_item_color cart_info_col">
                                                    <div class="cart_item_title">Color</div>
                                                    <div class="cart_item_text">{{ $row->options->color }}</div>
                                                </div>
                                            @endif
                                            @if ($row->options->size == null)

                                            @else
                                                <div class="cart_item_color cart_info_col">
                                                    <div class="cart_item_title">Size</div>
                                                    <div class="cart_item_text">{{ $row->options->size }}</div>
                                                </div>
                                            @endif
                                            <div class="cart_item_quantity cart_info_col">
                                                <div class="cart_item_title">Quantity</div>
                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="cartid" value="{{ $row->rowId }}">
                                                    <input type="number" name="qty" value="{{ $row->qty }}"
                                                        style="width: 50px;">
                                                    <button type="submit" class="btn btn-success btn-sm"><i
                                                            class="fas fa-check-square"></i></button>
                                                </form>
                                            </div>
                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title">Price</div>
                                                <div class="cart_item_text">${{ $row->price }}</div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title">Total</div>
                                                <div class="cart_item_text">${{ $row->price * $row->qty }}</div>
                                            </div>
                                            <div class="cart_item_total cart_info_col">
                                                <div class="cart_item_title">Action</div><br>
                                                <a href="{{ url('remove/cart/' . $row->rowId) }}"
                                                    class="btn btn-sm btn-danger">X</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <br><br>

                        <!-- Order Total -->
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="coupon_section">
                                    @if (Session::has('coupon'))

                                    @else
                                        <h5>Apply Coupon</h5>
                                        <form class="form-inline" method="POST" action="{{ route('apply.coupon') }}">
                                            @csrf
                                            <label class="sr-only" for="inlineFormInputName2">Name</label>
                                            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                                                name="coupon" placeholder="Enter Your Coupon">
                                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-2 col-12">
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
                                        <li class="list-group-item">Vat<span
                                                class="float-right">${{ $vat }}</span></li>
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

                        <div class="cart_buttons">
                            <a href="{{ route('payment.stap') }}" class="button cart_button_checkout">Final Stap</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
