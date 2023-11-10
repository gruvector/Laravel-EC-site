@extends('admin.admin_master')

@section('admin')


        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Update Coupon Table</h5>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40"> 
                <h6 class="card-body-title">Update Coupon</h6>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('coupon.update', $edit_coupon->id) }}">
                <div class="modal-body pd-20">
                    @csrf
                    <div class="form-group">
                        <label for="couponname">Update Coupon Code</label>
                        <input id="couponname" type="text" class="form-control" name="coupon" value="{{$edit_coupon->coupon}}"
                            placeholder="Coupon Code">
                    </div>
                    <div class="form-group">
                        <label for="couponper">Update Coupon Discount (%)</label>
                        <input id="couponper" type="text" class="form-control" name="discount" value="{{$edit_coupon->discount}}"
                            placeholder="Coupon Discount">
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
