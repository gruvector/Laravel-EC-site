@extends('layouts.app')

@section('content')
    <!-- Characteristics -->
    

    {{-- Header Start --}}

    <div class="nav">
        <div class="nav_img1">
            <div class="topnav">
                <a href="#">
                    <div class="nav_logo__div">
                        <div class="nav_logo__circle">
                            <span class="nav_logo_circle__span"></span>
                        </div>
                        <div class="nav_logo_text__div">
                            <p class="nav_logo__text">ロゴ</p>
                        </div>
                    </div>
                </a>

                <div class="nav2">
                    <div class = "mainnav">
                        <div class="mainnav_inside">
                            <a href="{{ route('home') }}" class="mainnav_inside__link">HOME </a>
                            <a href="{{ route('intro') }}" class="mainnav_inside__link">テキスト</a>
                            <a href="{{ route('condition') }}" class="mainnav_inside__link">テキスト</a>
                            <a href="{{ route('EC-intro')}}" class="mainnav_inside__link">テキスト</a>
                            <a href="{{ route('voice1')}}" class="mainnav_inside__link">テキスト</a>
                            <a href="{{ route('voice2')}}" class="mainnav_inside__link">テキスト</a>
                        </div>
                    </div>
                </div>

                <div class="rightnav">
                    <a class='loginNav' href="{{ route('userlogin') }}">
                        <div class="loginNav_avartar">
                            <img src={{ 'assets/img/Path_26071.png' }} alt="loginAvartar" class="loginNav_img" />
                        </div>
                        <div class="loginNav_text">
                            ログイン
                        </div>
                    </a>
                    <div class='loginNav'>
                        <div class="loginNav_avartar">
                            <img src={{ 'assets/img/Path_26071.png' }} alt="loginAvartar" class="loginNav_img" />
                        </div>
                        <div class="loginNav_text">
                            カート
                        </div>
                    </div>
                    <div class='basketNav'>
                        <div class="basketNav_avartar">
                            <img src={{ 'assets/img/Path_26070.png' }} alt="basketNavAvartar" class="basketNav_img" />
                        </div>
                        <div class="basketNav_text">
                            ご注文はこちら
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_img1"></div>
    </div>

    {{-- Header End --}}

    {{-- Topics Start --}}
    <div class="login_part">
        <div class="login_desc">
            <div class="login_desc0">ログインする</div>
            <div class="login_desc1">
                会員登録がお済みでない方は、<br />
                <a href="#">こちら</a>から無料会員登録してください。
            </div>
        </div>
        <form action="" method="post" class="loginform">
            @csrf
            <label for="login_user">ユーザー名またはメールアドレス</label>
            <div class="email_icon">
                <input type="email" name="login_user" class="login_user__input" required>
                <img src="{{ "assets/img/email_icon.png" }}" alt="">
            </div>
            <label for="login_pwd">パスワード</label>
            <div class="email_icon">
                <input type="password" name="login_pwd" class="login_user__input" required>
                <img src="{{ "assets/img/pwd_icon.png" }}" alt="">
            </div>
            <div class="login_bottom">
                <div><input type="checkbox" name="login_remember" id="">ログイン情報を記憶する</div>
                <a class="login_forget">パスワード紛失の方へ</a>
            </div>
            <button type="submit" class="custom_topics_btn__button" style="width: 100%;">ログイン</button>
        </form>
    </div>
    {{-- Topics End --}}

    {{-- Cart Part Start --}}

    <div class="container cart_box">
        <form method="post" id="cart_register_form">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link cart_active_tab1" style="border:1px solid #ccc" id="cart_list_login_details">Login Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cart_inactive_tab1" id="cart_list_personal_details" style="border:1px solid #ccc">Personal Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link cart_inactive_tab1" id="cart_list_contact_details" style="border:1px solid #ccc">Contact Details</a>
                </li>
            </ul>
            <div class="tab-content" style="margin-top:16px;">
                <div class="tab-pane active" id="cart_login_details">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Enter Email Address</label>
                                    <input type="text" name="email" id="cart_email" class="form-control" />
                                <span id="cart_error_email" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="password" id="cart_password" class="form-control" />
                                <span id="cart_error_password" class="text-danger"></span>
                            </div>
                            <div>
                                <button type="button" name="btn_login_details" id="cart_btn_login_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cart_personal_details">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Enter First Name</label>
                                <input type="text" name="first_name" id="cart_first_name" class="form-control" />
                                <span id="cart_error_first_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Enter Last Name</label>
                                <input type="text" name="last_name" id="cart_last_name" class="form-control" />
                                <span id="cart_error_last_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="male" checked> Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="female"> Female
                                </label>
                            </div>
                            <div>
                                <button type="button" name="previous_btn_personal_details" id="cart_previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
                                <button type="button" name="btn_personal_details" id="cart_btn_personal_details" class="btn btn-info btn-lg">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cart_contact_details">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Enter Address</label>
                                <textarea name="address" id="cart_address" class="form-control"></textarea>
                                <span id="cart_error_address" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Enter Mobile No.</label>
                                <input type="text" name="mobile_no" id="cart_mobile_no" class="form-control" />
                                <span id="cart_error_mobile_no" class="text-danger"></span>
                            </div>
                            <div>
                                <button type="button" name="previous_btn_contact_details" id="cart_previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
                                <button type="button" name="btn_contact_details" id="cart_btn_contact_details" class="btn btn-success btn-lg">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        
            $('#cart_btn_login_details').click(function(){
            
                var error_email = '';
                var error_password = '';
                
                if($.trim($('#cart_email').val()).length == 0) {
                    error_email = 'Email is required';
                    $('#cart_error_email').text(error_email);
                    $('#cart_email').addClass('cart_has-error');
                } 
                
                if($.trim($('#cart_password').val()).length == 0) {
                    error_password = 'Password is required';
                    $('#cart_error_password').text(error_password);
                    $('#cart_password').addClass('cart_has-error');
                } else {
                    error_password = '';
                    $('#cart_error_password').text(error_password);
                    $('#cart_password').removeClass('cart_has-error');
                }
    
                if(error_email != '' || error_password != '') {
                    return false;  
                } else {
                    $('#cart_list_login_details').removeClass('active cart_active_tab1');
                    $('#cart_list_login_details').removeAttr('href data-toggle');
                    $('#cart_login_details').removeClass('active');
                    $('#cart_list_login_details').addClass('cart_inactive_tab1');
                    $('#cart_list_personal_details').removeClass('cart_inactive_tab1');
                    $('#cart_list_personal_details').addClass('cart_active_tab1 active');
                    $('#cart_list_personal_details').attr('href', '#cart_personal_details');
                    $('#cart_list_personal_details').attr('data-toggle', 'tab');
                    $('#cart_personal_details').addClass('active in');
                }
            });
            
            $('#cart_previous_btn_personal_details').click(function() {
                $('#cart_list_personal_details').removeClass('active cart_active_tab1');
                $('#cart_list_personal_details').removeAttr('href data-toggle');
                $('#cart_personal_details').removeClass('active in');
                $('#cart_list_personal_details').addClass('cart_inactive_tab1');
                $('#cart_list_login_details').removeClass('cart_inactive_tab1');
                $('#cart_list_login_details').addClass('cart_active_tab1 active');
                $('#cart_list_login_details').attr('href', '#cart_login_details');
                $('#cart_list_login_details').attr('data-toggle', 'tab');
                $('#cart_login_details').addClass('active in');
            });
            
            $('#cart_btn_personal_details').click(function() {
                var error_first_name = '';
                var error_last_name = '';
                
                if($.trim($('#cart_first_name').val()).length == 0) {
                    error_first_name = 'First Name is required';
                    $('#cart_error_first_name').text(error_first_name);
                    $('#cart_first_name').addClass('cart_has-error');
                }
                else {
                    error_first_name = '';
                    $('#cart_error_first_name').text(error_first_name);
                    $('#cart_first_name').removeClass('cart_has-error');
                }
                
                if($.trim($('#cart_last_name').val()).length == 0) {
                    error_last_name = 'Last Name is required';
                    $('#cart_error_last_name').text(error_last_name);
                    $('#cart_last_name').addClass('cart_has-error');
                } else {
                    error_last_name = '';
                    $('#cart_error_last_name').text(error_last_name);
                    $('#cart_last_name').removeClass('cart_has-error');
                }
    
                if (error_first_name != '' || error_last_name != '') {
                    return false;
                } else {
                    $('#cart_list_personal_details').removeClass('active cart_active_tab1');
                    $('#cart_list_personal_details').removeAttr('href data-toggle');
                    $('#cart_personal_details').removeClass('active');
                    $('#cart_list_personal_details').addClass('cart_inactive_tab1');
                    $('#cart_list_contact_details').removeClass('cart_inactive_tab1');
                    $('#cart_list_contact_details').addClass('cart_active_tab1 active');
                    $('#cart_list_contact_details').attr('href', '#cart_contact_details');
                    $('#cart_list_contact_details').attr('data-toggle', 'tab');
                    $('#cart_contact_details').addClass('active in');
                }
            });
            
            $('#cart_previous_btn_contact_details').click(function() {
                $('#cart_list_contact_details').removeClass('active cart_active_tab1');
                $('#cart_list_contact_details').removeAttr('href data-toggle');
                $('#cart_contact_details').removeClass('active in');
                $('#cart_list_contact_details').addClass('cart_inactive_tab1');
                $('#cart_list_personal_details').removeClass('cart_inactive_tab1');
                $('#cart_list_personal_details').addClass('cart_active_tab1 active');
                $('#cart_list_personal_details').attr('href', '#cart_personal_details');
                $('#cart_list_personal_details').attr('data-toggle', 'tab');
                $('#cart_personal_details').addClass('active in');
            });
            
            $('#cart_btn_contact_details').click(function() {
                var error_address = '';
                var error_mobile_no = '';
                var mobile_validation = /^\d{10}$/;
                if($.trim($('#cart_address').val()).length == 0) {
                    error_address = 'Address is required';
                    $('#cart_error_address').text(error_address);
                    $('#cart_address').addClass('cart_has-error');
                } else {
                    error_address = '';
                    $('#cart_error_address').text(error_address);
                    $('#cart_address').removeClass('cart_has-error');
                }
                
                if($.trim($('#cart_mobile_no').val()).length == 0) {
                    error_mobile_no = 'Mobile Number is required';
                    $('#cart_error_mobile_no').text(error_mobile_no);
                    $('#cart_mobile_no').addClass('cart_has-error');
                } else {
                    if (!mobile_validation.test($('#cart_mobile_no').val())) {
                        error_mobile_no = 'Invalid Mobile Number';
                        $('#cart_error_mobile_no').text(error_mobile_no);
                        $('#cart_mobile_no').addClass('cart_has-error');
                    } else {
                        error_mobile_no = '';
                        $('#cart_error_mobile_no').text(error_mobile_no);
                        $('#cart_mobile_no').removeClass('cart_has-error');
                    }
                }
                if(error_address != '' || error_mobile_no != '') {
                    return false;
                } else {
                    $('#cart_btn_contact_details').attr("disabled", "disabled");
                    $(document).css('cursor', 'prgress');
                    $("#cart_register_form").submit();
                }
            
            });
        
        });
        </script>

    {{-- Cart Part End --}}
@endsection
