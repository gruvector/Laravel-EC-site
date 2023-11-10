@extends('admin.admin_master')

@section('admin')
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Show Post
                <a href="{{ route('all.post') }}" class="btn btn-info btn-sm float-right">All Post</a>
            </h6>

            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Post Title (English): <span class="tx-danger"></span></label>
                            <strong>{{ $show->post_title_en }}</strong>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Post Title (Hindi): <span class="tx-danger"></span></label>
                            <strong>{{ $show->post_title_in }}</strong>
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-6">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Category (English): <span class="tx-danger"></span></label>
                            <strong>{{ $show->postcategory->category_name_en }}</strong>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Category (Hindi): <span class="tx-danger"></span></label>
                            <strong>{{ $show->postcategory->category_name_in }}</strong>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Post Details (English): <span
                                    class="tx-danger"></span></label>
                            <p>{!! $show->details_en !!}</p>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Post Details (Hindi): <span class="tx-danger"></span></label>
                            <p>{!! $show->details_in !!}</p>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label custom-file">Post Image (Thumbnail): <span
                                    class="tx-danger"></span></label>
                            <label class="custom-file">
                                <img src="{{ URL::to($show->post_image) }}" width="115px" height="115px">
                            </label>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->
            </div><!-- form-layout -->
        </div><!-- card -->
    </div>
@endsection
