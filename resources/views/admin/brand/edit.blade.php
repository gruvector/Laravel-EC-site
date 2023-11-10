@extends('admin.admin_master')

@section('admin')

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update Brand Table</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Update Brand</h6>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('brand.update', $edit_brand->id) }}" enctype="multipart/form-data">
                <div class="modal-body pd-20">
                    @csrf
                    <div class="form-group">
                        <label for="catname">Update Brand Name</label>
                        <input id="catname" type="text" class="form-control" name="brand_name"
                            value="{{ $edit_brand->brand_name }}" placeholder="Input category here">
                    </div>
                    <div class="form-group">
                        <label for="brandlogo">Brand Logo</label>
                        <input id="brandlogo" type="file" class="form-control" name="brand_logo"
                            placeholder="Upload Brand logo here">
                    </div>
                    <div class="form-group">
                        <label for="oldbrandlogo">Old Brand Logo</label>
                        <img src="{{ URL::to($edit_brand->brand_logo) }}" width="80px" height="70px">
                        <input type="hidden" name="old_logo" value="{{ $edit_brand->brand_logo }}">
                    </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info pd-x-20">Update</button>
                </div>
            </form>

            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">

                </table>
            </div><!-- table-wrapper -->
        </div><!-- card -->
    </div><!-- sl-mainpanel -->

@endsection
