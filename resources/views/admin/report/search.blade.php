@extends('admin.admin_master')

@section('admin')

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Search Report</h5>
        </div><!-- sl-page-title -->
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="card pd-20 pd-sm-40">
                    <form method="POST" action="{{route('search.by.date')}}">
                        <div class="modal-body pd-20">
                            @csrf
                            <div class="form-group">
                                <label>Search By Date</label>
                                <input type="date" class="form-control" name="date" value="">
                            </div><!-- modal-body -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                            </div>
                        </div>
                    </form>
                </div><!-- card -->
            </div>
            <div class="col-lg-4 col-12">
                <div class="card pd-20 pd-sm-40">
                    <form method="POST" action="{{route('search.by.month')}}">
                        <div class="modal-body pd-20">
                            @csrf
                            <div class="form-group">
                                <label>Search By Month</label>
                                <select class="form-control" name="month">
                                    <option value="january">January</option>
                                    <option value="february">February</option>
                                    <option value="march">March</option>
                                    <option value="april">April</option>
                                    <option value="may">May</option>
                                    <option value="june">June</option>
                                    <option value="july">July</option>
                                    <option value="augest">Augest</option>
                                    <option value="september">September</option>
                                    <option value="october">October</option>
                                    <option value="november">November</option>
                                    <option value="december">December</option>
                                </select>
                            </div><!-- modal-body -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                            </div>
                        </div>
                    </form>
                </div><!-- card -->
            </div>
            <div class="col-lg-4 col-12">
                <div class="card pd-20 pd-sm-40">
                    <form method="POST" action="{{route('search.by.year')}}">
                        <div class="modal-body pd-20">
                            @csrf
                            <div class="form-group">
                                <label>Search By Year</label>
                                <select class="form-control" name="year">
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                            </div><!-- modal-body -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                            </div>
                        </div>
                    </form>
                </div><!-- card -->
            </div>
        </div>
    </div><!-- sl-mainpanel -->

@endsection
