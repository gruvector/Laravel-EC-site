<!-- Banner -->
@php
use App\Models\Product;
$banner = Product::where('main_slider', 1)
    ->orderBy('id', 'asc')
    ->first();
@endphp

<div class="banner">
    <div class="banner_background" style="background-image:url({{ asset('frontend/images/banner_background.jpg') }})">
    </div>
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="banner_product_image"><img src="{{ URL::to($banner->image_one) }}" width="521px"
                    height="459px"></div>
            <div class="col-lg-5 offset-lg-4 fill_height">
                <div class="banner_content">
                    <h1 class="banner_text">{{ $banner->product_name }}</h1>
                    <div class="banner_price">
                        @if ($banner->discount_price == null)
                            <h4>${{ $banner->selling_price }}</h4>
                        @else
                            <span>${{ $banner->selling_price }}</span>${{ $banner->discount_price }}
                        @endif
                    </div>
                    <div class="banner_product_name">{{ $banner->brand->brand_name }}</div>
                    <div class="button banner_button"><a href="#">Shop Now</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
