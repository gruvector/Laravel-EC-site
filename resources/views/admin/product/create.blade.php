@extends('admin.admin_master')

@section('admin')

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">New Product ADD
            <a href="{{ route('all.product') }}" class="btn btn-info btn-sm float-right">All Product</a>
        </h6>
        <p class="mg-b-20 mg-sm-b-30">New Product Add Form</p>

        <form method="POST" action="{{ route('store.product') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="product_name" placeholder="Enter Product Name">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="product_code" placeholder="Enter Product Code">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="product_quantity"
                                placeholder="Enter Product Quantity">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Discount Price: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="discount_price"
                                placeholder="Enter Product Discount Price">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                                <option label="Choose Category"></option>
                                @foreach ($category as $row)
                                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" data-placeholder="Choose Category" name="subcategory_id">
                                <option label="Choose Sub Categories"></option>
                                @foreach ($subcat as $row)
                                    <option value="{{ $row->id }}">{{ $row->subcategory_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" data-placeholder="Choose Category" name="brand_id">
                                <option label="Choose Brand"></option>
                                @foreach ($brand as $row)
                                    <option value="{{ $row->id }}">{{ $row->brand_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput"
                                placeholder="Enter Product Size">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="product_color" id="color" data-role="tagsinput"
                                placeholder="Enter Product Color">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="selling_price" placeholder="Enter Product Price">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                            <textarea class="form-control" name="product_details" id="summernote"></textarea>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                            <input class="form-control" name="video_link" placeholder="Video Link">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label custom-file">Image One (Main Thumbnail): <span
                                    class="tx-danger">*</span></label>
                            <label class="custom-file">
                                <input type="file" id="file1" class="custom-file-input" name="image_one"
                                    onchange="readURL1(this);">
                                <span class="custom-file-control"></span>
                                <img src="#" id="one">
                            </label>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label custom-file">Image Two: <span
                                    class="tx-danger">*</span></label>
                            <label class="custom-file">
                                <input type="file" id="file2" class="custom-file-input" name="image_two"
                                    onchange="readURL2(this);">
                                <span class="custom-file-control"></span>
                                <img src="#" id="two">
                            </label>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label custom-file">Image Three: <span
                                    class="tx-danger">*</span></label>
                            <label class="custom-file">
                                <input type="file" id="file3" class="custom-file-input" name="image_three"
                                    onchange="readURL3(this);">
                                <span class="custom-file-control"></span>
                                <img src="#" id="three">
                            </label>
                        </div>
                    </div><!-- col-4 -->

                </div><!-- row -->

                <hr>
                <br><br>

                <div class="row">

                    <div class="col-lg-4">
                        <label class="ckbox">
                            <input type="checkbox" name="main_slider" value="1">
                            <span>Main Slider</span>
                        </label>

                    </div> <!-- col-4 -->

                    <div class="col-lg-4">
                        <label class="ckbox">
                            <input type="checkbox" name="hot_deal" value="1">
                            <span>Hot Deal</span>
                        </label>

                    </div> <!-- col-4 -->



                    <div class="col-lg-4">
                        <label class="ckbox">
                            <input type="checkbox" name="best_rated" value="1">
                            <span>Best Rated</span>
                        </label>

                    </div> <!-- col-4 -->


                    <div class="col-lg-4">
                        <label class="ckbox">
                            <input type="checkbox" name="trend" value="1">
                            <span>Trend Product </span>
                        </label>

                    </div> <!-- col-4 -->

                    <div class="col-lg-4">
                        <label class="ckbox">
                            <input type="checkbox" name="mid_slider" value="1">
                            <span>Mid Slider</span>
                        </label>

                    </div> <!-- col-4 -->

                    <div class="col-lg-4">
                        <label class="ckbox">
                            <input type="checkbox" name="hot_new" value="1">
                            <span>Hot New </span>
                        </label>

                    </div> <!-- col-4 -->
                    <div class="col-lg-4">
                        <label class="ckbox">
                            <input type="checkbox" name="buyone_getone" value="1">
                            <span>Buyone Getone </span>
                        </label>

                    </div> <!-- col-4 -->


                </div><!-- end row -->
                <br><br>

                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
    </div><!-- card -->
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script type="text/javascript">
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#one')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    <script type="text/javascript">
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#two')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>
    <script type="text/javascript">
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#three')
                        .attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

@endsection
