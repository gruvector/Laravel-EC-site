@extends('user.user_master')

@section('user')
    <!--middle content wrapper-->
    <div class="middle_content_wrapper">
        <!-- counter_area -->
        <section class="counter_area">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-code"></i></span>
                            <h2 class="timer count-number" data-to="300" data-speed="1500"></h2>
                        </div>

                        <p class="count-text ">SomeText GoesHere</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-coffee"></i></span>
                            <h2 class="timer count-number" data-to="1700" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">SomeText GoesHere</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fas fa-user"></i></span>
                            <h2 class="timer count-number" data-to="11900" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">SomeText GoesHere</p>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-bug"></i></span>
                            <h2 class="timer count-number" data-to="157" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">SomeText GoesHere</p>
                    </div>
                </div>
            </div>
        </section>
        <!--/ counter_area -->
        <!-- table area -->
        <section class="table_area">
            <div class="panel">
                <div class="panel_header">
                    <div class="panel_title"><span>FooTable with row toggler, sorting, filter and
                            pagination</span></div>
                </div>
                <div class="panel_body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Job Title</th>
                                    <th>Started On</th>
                                    <th data-hide="all">Date of Birth</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dennise</td>
                                    <td>Fuhrman</td>
                                    <td>High School History Teacher</td>
                                    <td>November 8th 2011</td>
                                    <td>July 25th 1960</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Elodia</td>
                                    <td>Weisz</td>
                                    <td>Wallpaperer Helper</td>
                                    <td>October 15th 2010</td>
                                    <td>March 30th 1982</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Raeann</td>
                                    <td>Haner</td>
                                    <td>Internal Medicine Nurse Practitioner</td>
                                    <td>November 28th 2013</td>
                                    <td>February 26th 1966</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Junie</td>
                                    <td>Landa</td>
                                    <td>Offbearer</td>
                                    <td>October 31st 2010</td>
                                    <td>March 29th 1966</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Solomon</td>
                                    <td>Bittinger</td>
                                    <td>Roller Skater</td>
                                    <td>December 29th 2011</td>
                                    <td>September 22nd 1964</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Bar</td>
                                    <td>Lewis</td>
                                    <td>Clown</td>
                                    <td>November 12th 2012</td>
                                    <td>August 4th 1991</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Usha</td>
                                    <td>Leak</td>
                                    <td>Ships Electronic Warfare Officer</td>
                                    <td>August 14th 2012</td>
                                    <td>November 20th 1979</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Lorriane</td>
                                    <td>Cooke</td>
                                    <td>Technical Services Librarian</td>
                                    <td>September 21st 2010</td>
                                    <td>April 7th 1969</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Lorriane</td>
                                    <td>Cooke</td>
                                    <td>Technical Services Librarian</td>
                                    <td>September 21st 2010</td>
                                    <td>April 7th 1969</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- /table -->
            <!-- chart area -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel chart_area">
                        <div class="panel_header">
                            <div class="panel_title">
                                <span class="panel_icon"><i class="far fa-chart-bar"></i></span>
                                <span>bar chat</span>
                            </div>
                        </div>
                        <div class="panel_body">
                            <div id="bar-chart">
                                <div id="bar-legend"></div>
                                <canvas id="bar-canvas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel_header">
                            <div class="panel_title">
                                <span class="panel_icon"><i class="fas fa-chart-pie"></i></span>
                                <span>pie chat</span>
                            </div>
                        </div>
                        <div class="panel_body">
                            <div id="piechart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--/middle content wrapper-->

@endsection
