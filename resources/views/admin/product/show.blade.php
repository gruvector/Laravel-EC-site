@extends('admin.admin_master')

@section('admin')

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">New Product ADD
            <a href="{{ route('all.product') }}" class="btn btn-info btn-sm float-right">All Product</a>
        </h6>
        <p class="mg-b-20 mg-sm-b-30">New Product Add Form</p>

        <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->product_name }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->product_code }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->product_quantity }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Discount Price: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->discount_price }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->category->category_name }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->subcategory->subcategory_name }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->brand->brand_name }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->product_size }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->product_color }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->selling_price }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                        <br>
                        <p>{!! $show->product_details !!}</p>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                        <br>
                        <strong>{{ $show->video_link }}</strong>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label custom-file">Image One (Main Thumbnail): <span
                                class="tx-danger">*</span></label>
                        <label class="custom-file">
                            <img src="{{ URL::to($show->image_one) }}" width="115px" height="115px">
                        </label>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label custom-file">Image Two: <span class="tx-danger">*</span></label>
                        <label class="custom-file">
                            <img src="{{ URL::to($show->image_two) }}"  width="115px" height="115px">
                        </label>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label custom-file">Image Three: <span class="tx-danger">*</span></label>
                        <label class="custom-file">
                            <img src="{{ URL::to($show->image_three) }}"  width="115px" height="115px">
                        </label>
                    </div>
                </div><!-- col-4 -->

            </div><!-- row -->

            <br><br><br><br><br>

            <div class="row">

                <div class="col-lg-4">
                    <label class="">
                        @if ($show->main_slider == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif
                        <span>Main Slider</span>
                    </label>

                </div> <!-- col-4 -->

                <div class="col-lg-4">
                    <label class="">
                        @if ($show->hot_deal == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif
                        <span>Hot Deal</span>
                    </label>

                </div> <!-- col-4 -->

                <div class="col-lg-4">
                    <label class="">
                        @if ($show->best_rated == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif
                        <span>Best Rated</span>
                    </label>

                </div> <!-- col-4 -->

                <div class="col-lg-4">
                    <label class="">
                        @if ($show->trend == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif
                        <span>Trend Product </span>
                    </label>

                </div> <!-- col-4 -->

                <div class="col-lg-4">
                    <label class="">
                        @if ($show->mid_slider == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif
                        <span>Mid Slider</span>
                    </label>

                </div> <!-- col-4 -->

                <div class="col-lg-4">
                    <label class="">
                        @if ($show->hot_new == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif
                        <span>Hot New </span>
                    </label>
                </div> <!-- col-4 -->

            </div><!-- end row -->
        </div><!-- form-layout -->
    </div><!-- card -->
@endsection
