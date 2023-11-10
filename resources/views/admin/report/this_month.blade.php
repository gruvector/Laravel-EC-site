@extends('admin.admin_master')

@section('admin')

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Monthly Order Reports</h5>

        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Monthly Order List</h6>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">Payment Type</th>
                            <th class="wd-15p">Transection Id</th>
                            <th class="wd-15p">Subtotal</th>
                            <th class="wd-15p">Shipping</th>
                            <th class="wd-15p">Vat</th>
                            <th class="wd-15p">Total</th>
                            <th class="wd-15p">Date</th>
                            <th class="wd-15p">Status</th>
                            <th class="wd-20p">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $row)
                            <tr>
                                <td>{{ $row->payment_type }}</td>
                                <td>{{ $row->blnc_transection }}</td>
                                <td>${{ $row->subtotal }}</td>
                                <td>${{ $row->shipping }}</td>
                                <td>${{ $row->vat }}</td>
                                <td>${{ $row->total }}</td>
                                <td>{{ $row->date }}</td>
                                <td>
                                    @if ($row->status == 0)
                                        <span class="badge badge-warning">pending</span>
                                    @elseif($row->status==1)
                                        <span class="badge badge-info">Payment Accept</span>
                                    @elseif($row->status==2)
                                        <span class="badge badge-info">Progress</span>
                                    @elseif($row->status==3)
                                        <span class="badge badge-success">Delivered</span>
                                    @else
                                        <span class="badge badge-danger">cancel</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ URL::to('admin/view/order/' . $row->id) }} "
                                        class="btn btn-sm btn-info">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
            <a href="{{ URL::to('admin/download/report') }} " class="btn btn-primary btn-sm float-right ">Download Reports</a>
        </div><!-- card -->
    </div><!-- sl-mainpanel -->
@endsection
