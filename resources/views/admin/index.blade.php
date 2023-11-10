@extends('admin.admin_master')

@section('admin')

    @php
    use App\Models\Order;
    use App\Models\User;
    use App\Models\Admin\Category;
    use App\Models\Admin\Subcategory;
    use App\Models\Admin\Brand;
    $date = date('d-m-y');
    $today = Order::where('date', $date)->sum('total');

    $month = date('F');
    $month = Order::where('month', $month)->sum('total');

    $year = date('Y');
    $year = Order::where('year', $year)->sum('total');

    $today_delivery = Order::where('date', $date)
        ->where('status', 3)
        ->sum('total');

    $month_delivery = date('F');
    $month_delivery = Order::where('month', $month_delivery)
        ->where('status', 3)
        ->sum('total');
    $year_delivery = date('Y');
    $year_delivery = Order::where('year', $year_delivery)
        ->where('status', 3)
        ->sum('total');

    $return = Order::where('return_order', 2)->sum('total');
    $cancel = Order::where('status', 4)->sum('total');

    $category = Category::get();
    $subcategory = Subcategory::get();
    $brand = Brand::get();
    $user= User::get();
    @endphp
    <div class="sl-pagebody">

        <div class="row row-sm">
            <div class="col-sm-6 col-xl-4">
                <div class="card pd-20 bg-primary">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h3 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Sales</h3>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $today }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-4 mg-t-20 mg-sm-t-0">
                <div class="card pd-20 bg-info">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $month }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-4 mg-t-20 mg-xl-t-0">
                <div class="card pd-20 bg-purple">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $year }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
        </div><!-- row -->
        <br>
        <div class="row row-sm">
            <div class="col-sm-6 col-xl-4">
                <div class="card pd-20 bg-success">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Delivery</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $today_delivery }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-4 mg-t-20 mg-sm-t-0">
                <div class="card pd-20 bg-warning">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Delivery</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $month_delivery }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-4 mg-t-20 mg-xl-t-0">
                <div class="card pd-20 bg-secondary">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Delivery</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $year_delivery }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
        </div><!-- row -->
        <br>
        <div class="row row-sm">
            <div class="col-sm-6 col-xl-4">
                <div class="card pd-20 bg-danger">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Returns</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $return }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-4 mg-t-20 mg-sm-t-0">
                <div class="card pd-20 bg-dark">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Cancel</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">${{ $cancel }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-4 mg-t-20 mg-xl-t-0">
                <div class="card pd-20 bg-purple">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total User</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($user) }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
        </div><!-- row -->
        <br>
        <div class="row row-sm">
            <div class="col-sm-6 col-xl-4">
                <div class="card pd-20 bg-success">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Category</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($category) }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-4 mg-t-20 mg-sm-t-0">
                <div class="card pd-20 bg-warning">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total SubCategory</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($subcategory) }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-4 mg-t-20 mg-xl-t-0">
                <div class="card pd-20 bg-secondary">
                    <div class="d-flex justify-content-between align-items-center mg-b-10">
                        <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Brand</h6>
                        <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                    </div><!-- card-header -->
                    <div class="d-flex align-items-center justify-content-between">
                        <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                        <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($brand) }}</h3>
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-3 -->
        </div><!-- row -->
        <br>

    </div><!-- sl-pagebody -->

@endsection
