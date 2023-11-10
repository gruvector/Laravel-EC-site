@extends('admin.admin_master')

@section('admin')

    @php
    use App\Models\PostCategory;
    $postcat = PostCategory::all();
    @endphp

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Update Post
                <a href="{{ route('all.post') }}" class="btn btn-info btn-sm float-right">All Post</a>
            </h6>
            <p class="mg-b-20 mg-sm-b-30">Update Post Form</p>

            <form method="POST" action="{{ url('/update/post/withoutphoto', $edit_post->id) }}">
                @csrf

                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Post Title (English): <span
                                        class="tx-danger"></span></label>
                                <input class="form-control" type="text" name="post_title_en"
                                    value="{{ $edit_post->post_title_en }}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Post Title (Hindi): <span
                                        class="tx-danger"></span></label>
                                <input class="form-control" type="text" name="post_title_in"
                                    value="{{ $edit_post->post_title_in }}">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Category (English): <span
                                        class="tx-danger"></span></label>
                                <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                                    <option label="Choose Category English"></option>
                                    @foreach ($postcat as $row)
                                        <option value="{{ $row->id }}" <?php if ($row->id ==
                                            $edit_post->category_id) {
                                            echo 'selected';
                                            } ?>
                                            >{{ $row->category_name_en }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Category (Hindi): <span class="tx-danger"></span></label>
                                <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                                    <option label="Choose Category Hindi"></option>
                                    @foreach ($postcat as $row)
                                        <option value="{{ $row->id }}" <?php if ($row->id ==
                                            $edit_post->category_id) {
                                            echo 'selected';
                                            } ?>
                                            >{{ $row->category_name_in }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Post Details (English): <span
                                        class="tx-danger"></span></label>
                                <textarea class="form-control" name="details_en" id="summernote_en">
                                            {{ $edit_post->details_en }}
                                        </textarea>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Post Details (Hindi): <span
                                        class="tx-danger"></span></label>
                                <textarea class="form-control" name="details_in" id="summernote_in">
                                            {{ $edit_post->details_in }}
                                        </textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                    <br><br>

                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>


    <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Update Images </h6>
            <form method="post" action="{{ url('/update/post/photo/' . $edit_post->id) }} "
                enctype="multipart/form-data">
                @csrf


                <div class="row">
                    <div class="col-lg-6 col-sm-6">

                        <label class="form-control-label">Post Image (Thumbnali): <span
                                class="tx-danger">*</span></label><br>
                        <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input" name="post_image"
                                onchange="readURL(this);">
                            <span class="custom-file-control"></span>
                            <input type="hidden" name="old_one" value="{{ $edit_post->post_image }}">
                            <img src="#" id="one">
                        </label>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <img src=" {{ URL::to($edit_post->post_image) }} " style="width: 115px; height: 115px;">
                    </div>

                </div><!-- col-4 -->

                <br><br>

                <button type="submit" class="btn btn-info"> Update Photo</button>
            </form>

        </div>
    </div>

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

@endsection
