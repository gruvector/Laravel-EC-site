@extends('layouts.app')

@section('content')
    {{-- @include('layouts.menubar') --}}
    @php
    use App\Models\Admin\Brand;
    @endphp
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/shop_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/shop_responsive.css') }}">
    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg">
        </div>
        <div class="home_overlay"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title">SubCategory Name</h2>
        </div>
    </div>

    <!-- Shop -->

    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <!-- Shop Sidebar -->
                    <div class="shop_sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">Categories</div>
                            <ul class="sidebar_categories">
                                @foreach ($category as $row)
                                    <li><a href="#">{{ $row->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar_section filter_by_section">
                            <div class="sidebar_title">Filter By</div>
                            <div class="sidebar_subtitle">Price</div>
                            <div class="filter_price">
                                <div id="slider-range" class="slider_range"></div>
                                <p>Range: </p>
                                <p><input type="text" id="amount" class="amount" readonly
                                        style="border:0; font-weight:bold;"></p>
                            </div>
                        </div>
                        <div class="sidebar_section">
                            <div class="sidebar_subtitle brands_subtitle">Brands</div>
                            <ul class="brands_list">
                                @foreach ($brands as $row)
                                    @php
                                        $brand = Brand::where('id', $row->brand_id)->first();
                                    @endphp
                                    <li class="brand"><a href="#">{{ $brand->brand_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-9">

                    <!-- Shop Content -->

                    <div class="shop_content">
                        <div class="shop_bar clearfix">
                            <div class="shop_product_count"><span>186</span> products found</div>
                            <div class="shop_sorting">
                                <span>Sort by:</span>
                                <ul>
                                    <li>
                                        <span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
                                        <ul>
                                            <li class="shop_sorting_button"
                                                data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
                                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name
                                            </li>
                                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "price" }'>
                                                price</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product_grid row">
                            <div class="product_grid_border"></div>
                            @foreach ($product as $row)
                                <!-- Product Item -->
                                <div class="product_item is_new discount">
                                    <div class="product_border"></div>
                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ asset($row->image_one) }}" width="100px" height="100px">
                                    </div>
                                    <div class="product_content">
                                        @if ($row->discount_price == null)
                                            <div class="product_price discount">${{ $row->selling_price }}
                                            </div>
                                        @else
                                            <div class="product_price discount">
                                                ${{ $row->discount_price }}<span>${{ $row->selling_price }}</span>
                                            </div>
                                        @endif
                                        <div class="product_name">
                                            <div><a
                                                    href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">{{ $row->product_name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                    <ul class="product_marks">
                                        @if ($row->discount_price == null)
                                            <li class="product_mark product_new">New</li>
                                        @else
                                            <li class="product_mark product_discount">
                                                @php
                                                    $amount = $row->selling_price - $row->discount_price;
                                                    $discount = ($amount / $row->selling_price) * 100;
                                                @endphp
                                                {{ intval($discount) }}%
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            @endforeach

                        </div>

                        <!-- Shop Page Navigation -->

                        <div class="shop_page_nav d-flex flex-row">
                            <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i
                                    class="fas fa-chevron-left"></i></div>
                            <ul class="page_nav d-flex flex-row">
                                {{ $product->links() }}

                            </ul>
                            <div class="page_next d-flex flex-column align-items-center justify-content-center"><i
                                    class="fas fa-chevron-right"></i></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
