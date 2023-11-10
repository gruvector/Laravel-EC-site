@extends('admin.admin_master')

@section('admin')

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Coupon Table</h5>

            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Coupon List
                    <a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal"
                        data-target="#modaldemo3">Add New</a>
                </h6>


                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-15p">ID</th>
                                <th class="wd-15p">Coupon Code</th>
                                <th class="wd-15p">Coupon Percentage</th>
                                <th class="wd-20p">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupon as $key=>$row)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $row->coupon }}</td>
                                <td>{{ $row->discount }} %</td>
                                <td>
                                    <a href="{{ URL::to('edit/coupon/' . $row->id) }} "
                                        class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{ URL::to('delete/coupon/' . $row->id) }}"
                                        class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-mainpanel -->

        <!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                    <div class="modal-header pd-x-20">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Coupon</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('coupon.store') }}">
                        <div class="modal-body pd-20">
                            @csrf
                            <div class="form-group">
                                <label for="couponname">Coupon Code</label>
                                <input id="couponname" type="text" class="form-control" name="coupon"
                                    placeholder="Coupon Code">
                            </div>
                            <div class="form-group">
                                <label for="couponper">Coupon Discount (%)</label>
                                <input id="couponper" type="text" class="form-control" name="discount"
                                    placeholder="Coupon Discount">
                            </div>
                        </div><!-- modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->
    @endsection
