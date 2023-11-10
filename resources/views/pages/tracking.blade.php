@extends('layouts.app')

@section('content')

    <div class="order_track_from">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h3 class="text-center">Your Order Status</h3>
                    <div class="progress">
                        @if ($track->status == 0)
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($track->status == 1)
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($track->status == 2)
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($track->status == 3)
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="22"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        @else
                            <div class="progress-bar bg-danger" role="progressbar" style="width:100%" aria-valuenow="100 "
                                aria-valuemin="0" aria-valuemax="100"></div>
                        @endif
                    </div>
                    <br>
                    @if ($track->status == 0)
                        <p>Your order are under review</p>
                    @elseif($track->status == 1)
                        <p>Payment accept under process</p>
                    @elseif($track->status == 2)
                        <p>Packing done handover process</p>
                    @elseif($track->status == 3)
                        <p>Order complete</p>
                    @else
                        <p>Order cancel</p>
                    @endif
                </div>
                <div class="col-lg-6 col-12">
                    <h3 class="text-center">Your Order Details</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><b>Payment Type: </b>{{$track->payment_type}}</li>
                        <li class="list-group-item"><b>Transction Id: </b>{{$track->payment_id}}</li>
                        <li class="list-group-item"><b>Banglce Id: </b>{{$track->payment_type}}</li>
                        <li class="list-group-item"><b>Subtotal: </b>${{$track->subtotal}}</li>
                        <li class="list-group-item"><b>Shipping: </b>${{$track->shipping}}</li>
                        <li class="list-group-item"><b>Vat: </b>${{$track->vat}}</li>
                        <li class="list-group-item"><b>Total: </b>${{$track->total}}</li>
                        <li class="list-group-item"><b>Date: </b>{{$track->date}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
