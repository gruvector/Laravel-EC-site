@extends('admin.admin_master')

@section('admin')

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Order</strong> Details
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>{{ $order->name }}</th>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <th>{{ $order->phone }}</th>
                                    </tr>
                                    <tr>
                                        <th>Payment Type</th>
                                        <th>{{ $order->payment_type }}</th>
                                    </tr>
                                    <tr>
                                        <th>Payment Id</th>
                                        <th>{{ $order->payment_id }}</th>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <th>${{ $order->total }}</th>
                                    </tr>
                                    <tr>
                                        <th>Month</th>
                                        <th>{{ $order->month }}</th>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <th>{{ $order->date }}</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Shipping</strong> Details
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>{{ $shipping->ship_name }}</th>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <th>{{ $shipping->ship_phone }}</th>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>{{ $shipping->ship_email }}</th>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <th>{{ $shipping->ship_address }}</th>
                                    </tr>
                                    <tr>
                                        <th>City</th>
                                        <th>${{ $shipping->ship_city }}</th>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <th>
                                            @if ($order->status == 0)
                                                <span class="badge badge-warning">pending</span>
                                            @elseif($order->status==1)
                                                <span class="badge badge-info">Payment Accept</span>
                                            @elseif($order->status==2)
                                                <span class="badge badge-info">Progress</span>
                                            @elseif($order->status==3)
                                                <span class="badge badge-success">Delivered</span>
                                            @else
                                                <span class="badge badge-danger">cancel</span>
                                            @endif
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Product</strong> Details
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">Product Id</th>
                                        <th class="wd-15p">Product Name</th>
                                        <th class="wd-15p">Image</th>
                                        <th class="wd-15p">Color</th>
                                        <th class="wd-15p">Size</th>
                                        <th class="wd-15p">Quantity</th>
                                        <th class="wd-15p">Single Price</th>
                                        <th class="wd-15p">Total Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($details as $row)
                                        <tr>
                                            <td>{{ $row->product_id }}</td>
                                            <td>{{ $row->product_name }}</td>
                                            <td><img src="{{ URL::to($row->image_one) }}" width="115px" height="115px">
                                            </td>
                                            <td>{{ $row->product_color }}</td>
                                            <td>{{ $row->product_size }}</td>
                                            <td>{{ $row->quantity }}</td>
                                            <td>{{ $row->singleprice }}</td>
                                            <td>{{ $row->totalprice }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            @if ($order->status == 0)
                <a href="{{ url('admin/payment/accept/' . $order->id) }}" class="btn btn-info">Payment Accept</a>
                <a href="{{ url('admin/payment/cancel/' . $order->id) }}" class="btn btn-danger float-right">Order
                    Cancel</a>
            @elseif($order->status == 1)
                <a href="{{ url('admin/process/delivery/' . $order->id) }}" class="btn btn-info">Process Delivery</a>
            @elseif($order->status == 2)
                <a href="{{ url('admin/delivery/done/' . $order->id) }}" class="btn btn-success">Delivery Done</a>
            @elseif($order->status == 4)
            <strong class="text-danger text-center">This Product is Successfully Cancel</strong>
            @else
                <strong class="text-success text-center">This Product is Successfully Delivered</strong>
            @endif

        </div><!-- sl-page-title -->

    </div><!-- sl-mainpanel -->
@endsection
