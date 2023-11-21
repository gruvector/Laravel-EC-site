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
                    <a class='loginNav' href="{{route('cart')}}">
                        <div class="loginNav_avartar">
                            <img src={{ 'assets/img/Path_26071.png' }} alt="loginAvartar" class="loginNav_img" />
                        </div>
                        <div class="loginNav_text">
                            カート
                        </div>
                    </a>
                    <a class="basketNav"  href="{{ route('order') }}">
                        <div class="basketNav_avartar">
                            <img src={{ 'assets/img/Path_26070.png' }} alt="basketNavAvartar" class="basketNav_img" />
                        </div>
                        <div class="basketNav_text">
                            ご注文はこちら
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="bottom_img1"></div>
    </div>

    {{-- Header End --}}


    {{-- Cart Part Start --}}

    <div class="cart_box">
        <div class="point3_header">
            <div class="point3_header1">CART</div>
            <div class="point3_header2">買い物かご</div>
        </div>
        <form method="post" id="cart_register_form" action="{{ route('payment_cart') }}">
            @csrf
            <ul class="nav nav-tabs">
                <li class="nav-item cart_box_li_first cart_active_tab1" id="cart_list_login_details">
                    <div class="cart_active_tab2" id="cart_list_login_details1">STEP 1</div>詳細入力
                </li>
                <li class="nav-item cart_box_li cart_inactive_tab1" id="cart_list_personal_details">
                    <div class="cart_inactive_tab2" id="cart_list_personal_details1">STEP 2</div>詳細確認
                </li>
                <li class="nav-item cart_box_li cart_inactive_tab1" id="cart_list_contact_details">
                    <div class="cart_inactive_tab2" id="cart_list_contact_details1">STEP 3</div>完了
                </li>
            </ul>
            <div class="cart_price_image">
                <div class="cart_final">
                    下記フォームに必要事項ををご記入の上、<br />
                    「入力内容を確認して送信」ボタンを押してください。<br />
                    「※」は必須項目です。
                </div>
                <div class="cart_price_custom">
                    <div class="cart_price_custom_ribbon">
                        <img src="{{'assets/img/Group_11462 (2).png'}}" alt="">
                    </div>
                    <div class="cart_price_custom_text1">まずはお試しの一本から</div>
                    <div class="cart_price_custom_text5">---------</div>
                    <span class="cart_price_custom_text2" id="cart_price">{{$test['selling_price']}}</span>
                    <div class="cart_price_custom_text3">円</div> 
                    <div class="cart_price_custom_text4">送料無料</div>
                </div>
                <div class="cart_price_user">
                    <div class="cart_price_custom_ribbon">
                        <img src="{{'assets/img/Group 11575.png'}}" alt="">
                    </div>
                    <div class="cart_price_user_text1">{{$test['selling_price']}}</div>
                    <div class="cart_price_user_text2">円</div>
                    <div class="cart_price_user_arrow">
                        <img src="{{'assets/img/Group 11662.png'}}" alt="">
                    </div>
                    <div class="cart_price_user_text1" id="cart_price_user">{{$test['discount_price']}}</div>
                    <div class="cart_price_user_text2">円</div>
                </div>
            </div>
            <div class="tab-content cart-input__body">
                <div class="tab-pane active" id="cart_login_details">
                    <div class="qainput_radio">
                        <div class="qainput__label">オプション</div>
                        <div class="qainput_radiogrp">
                            <input type="radio" class="qainput__radio_first" name="cart_option" value="追加しない" checked>追加しない
                            <input type="radio" class="qainput__radio" name="cart_option" value="追加する">追加する
                        </div>
                    </div>
                    <div class="qainput_radio">
                        <div class="qainput__label">お申込方法</div>
                        <div class="qainput_radiogrp">
                            <input type="radio" class="qainput__radio_first" name="cart_apply" value="ゲストで申し込み" checked>ゲストで申し込み
                            <input type="radio" class="qainput__radio" name="cart_apply" value="会員登録して申し込む">会員登録して申し込む
                        </div>
                    </div>
                    <div class="qainput_nppe">
                        <div class="qainput__label">お名前 <span class="input_need">※</span></div>
                        <input type="text" name="cart_name" id="cart_name" class="qainput__input1" placeholder="NeoPen 太郎"/>
                    </div>
                    <div class="qainput_nppe">
                        <div class="qainput__label">フリガナ <span class="input_need">※</span></div>
                        <input type="password" name="cart_pwd" id="cart_pwd" class="qainput__input1" placeholder="ネオペン タロウ" />
                    </div>
                    <div class="qainput_nppe">
                        <div class="qainput__label">電話番号 <span class="input_need">※</span></div>
                        <input type="tel" name="cart_tel" id="cart_tel" class="qainput__input1" placeholder="080-000-0000" required/>
                    </div> 
                    <div class="qainput_nppe">
                        <div class="qainput__label">メールアドレス <span class="input_need">※</span></div>
                        <input type="email" name="cart_email" id="cart_email" class="qainput__input1" placeholder="info@neopen.co.jp" required/>
                    </div>
                    <div class="qainput_nppe">
                        <div class="qainput__label">郵便番号</div>
                        <input type="tel" class="qainput__input2_1" placeholder="460-0000" name="cart_zip" id="cart_zip"/>
                        <div class="qainput_zip_part">
                            <select class="qainput__select1" name="cart_province" id="cart_province">
                                <option value="" disabled selected>都道府県</option>
                                <option>都道府県</option>
                                <option>都道府県</option>
                                <option>都道府県</option>
                                <option>都道府県</option>
                            </select>
                            <input type="text" class="qainput__input2_3" placeholder="市区町村" name="cart_city" id="cart_city">
                            <input type="text" class="qainput__input2_4" placeholder="以降の住所(番地・建物名など)" name="cart_address" id="cart_address">
                        </div>
                    </div>
                    <div class="qainput_radio">
                        <div class="qainput__label">ご希望の決済方法</div>
                        <div class="qainput_radiogrp">
                            <input type="radio" class="qainput__radio_first cart_radio_pay" value="コンビニ決済" name="cart_payment" checked>コンビニ決済
                            <input type="radio" class="qainput__radio cart_radio_pay" value="カード決済" name="cart_payment">カード決済
                            <input type="radio" class="qainput__radio cart_radio_pay" value="その他" name="cart_payment">その他
                        </div>
                    </div>
                    <div class="qainput_prnprotect">個人情報保護方針記載する</div>
                    <div class="qainput_checkbox">
                        <input type="checkbox" name="cart_checkbox" id="cart_checkbox"> &nbsp;<label for="cart_checkbox">上記内容に同意する</label>
                    </div>
                    <div>
                        <button type="button" name="btn_login_details" id="cart_btn_login_details" class="custom_topics_btn__button" disabled>内容を確認する</button>
                    </div>

                </div>

                <div class="tab-pane" id="cart_personal_details" >
                    <div class="cart_show">
                        <div class="cart_show__label">オプション</div>
                        <div class="cart_show__content" id="cart_personal_details__option"></div>
                    </div>
                    <div class="cart_show">
                        <div class="cart_show__label">お申込方法</div>
                        <div class="cart_show__content" id="cart_personal_details__apply"></div>
                    </div>
                    <div class="cart_show">
                        <div class="cart_show__label">お名前</div>
                        <div class="cart_show__content" id="cart_personal_details__name"></div>
                    </div>
                    <div class="cart_show">
                        <div class="cart_show__label">フリガナ</div>
                        <div class="cart_show__content" id="cart_personal_details__pwd"></div>
                    </div>
                    <div class="cart_show">
                        <div class="cart_show__label">電話番号</div>
                        <div class="cart_show__content" id="cart_personal_details__tel"></div>
                    </div>
                    <div class="cart_show">
                        <div class="cart_show__label">メールアドレス</div>
                        <div class="cart_show__content" id="cart_personal_details__email"></div>
                    </div>
                    <div class="cart_show">
                        <div class="cart_show__label">郵便番号</div>
                        <div class="cart_show1">
                            <div class="cart_show__content" id="cart_personal_details__zip"></div>
                            <div class="cart_show__content" id="cart_personal_details__province"></div>
                            <div class="cart_show__content" id="cart_personal_details__city"></div>
                            <div class="cart_show__content" id="cart_personal_details__address"></div>
                        </div>
                    </div>
                    <div class="cart_show">
                        <div class="cart_show__label">ご希望の決済方法</div>
                        <div class="cart_show1">
                            <div class="cart_show__content" id="cart_personal_details__pay"></div>
                            <div class="cart_show__content" id="cart_personal_details__url"></div>
                        </div> 
                    </div>
                    <div class="cart_show1">
                        <button type="button" name="btn_login_details" id="cart_btn_personal_details1" class="custom_topics_btn__button">前のページ</button>
                        <div id="cart_btn_personal_details2" class="" >
                            <script src="https://checkout.stripe.com/checkout.js"  class="stripe-button to_pay_btn" 
                            data-key="pk_test_51OERDlJax9oIpgFhPPTdP3Oer4zPuRulSuw6DuACfVoPaucn6oZax4cXjZTzOxk0iLti4AUqzUpdomjGQSZMw88j00tRq2t1a2"
                            data-amount="" data-name="総合検定研究所" data-description=""
                            data-image="" data-locale="auto" data-label="決済画面へ" data-currency="jpy">
                        
                        </script>

                            {{-- <script src="https://checkout.stripe.com/checkout.js" class="stripe-button to_pay_btn" data-key="pk_test_51OERDlJax9oIpgFhPPTdP3Oer4zPuRulSuw6DuACfVoPaucn6oZax4cXjZTzOxk0iLti4AUqzUpdomjGQSZMw88j00tRq2t1a2" data-name="決済" data-description="1111" data-image="111" data-locale="auto" data-label="決済画面へ" data-currency="jpy" data-shipping-address="true" data-billing-address="true" data-email="1111" data-allow-remember-me="false" data-allow-redirect="false" data-panel-label="名前">
                            </script> --}}
                        <input type="hidden" name="cart_price" id="cart_price__input" />
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="cart_contact_details">
                    <div class="cart_final">
                        ご購入いただきありがとうございます。<br />
                        ご登録いただいた内容はご登録メールアドレスにお送り致します。<br />
                        商品発送準備が出来次第再度ご連絡申し上げます。
                        
                    </div>
                    
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $("#cart_checkbox").click(function() {
                if($("#cart_checkbox:checked").val() == "on") {
                    $("#cart_btn_login_details").removeAttr('disabled');
                } else {
                    $("#cart_btn_login_details").attr('disabled', 'disabled');
                }
                var price_str = $("#cart_price").text();
                var price = Number(price_str);
                $("#cart_price__input").val(price.toString());
            })
        
            $('#cart_btn_login_details').click(function(){
            
                var error_name = $('#cart_name').val();
                var error_pwd = $('#cart_pwd').val();
                var error_email = $('#cart_email').val();
                var error_tel = $('#cart_tel').val();
                var error_option = $('input[name="cart_option"]:checked').val();
                $('#cart_personal_details__option').text(error_option);
                $('#cart_personal_details__apply').text($('input[name="cart_apply"]:checked').val());
                $('#cart_personal_details__name').text(error_name);
                $('#cart_personal_details__pwd').text(error_pwd);
                $('#cart_personal_details__email').text(error_email);
                $('#cart_personal_details__tel').text(error_tel);
                $('#cart_personal_details__zip').text($('#cart_zip').val());
                $('#cart_personal_details__province').text($('#cart_province').find(":selected").text());
                $('#cart_personal_details__city').text($('#cart_city').val());
                $('#cart_personal_details__address').text($('#cart_address').val());
                $('#cart_personal_details__pay').text($('input[name="cart_payment"]:checked').val());
                $('#cart_personal_details__url').text($('#cart_personal_details__zip').val());
                $

                if (error_name != '' && error_pwd != '' && error_email != '' && error_tel != '') {
                    $('#cart_login_details').removeClass('active');
                    $('#cart_list_personal_details').removeClass('cart_inactive_tab1');
                    $('#cart_list_personal_details').addClass('cart_active_tab1');
                    $('#cart_list_personal_details1').removeClass('cart_inactive_tab2');
                    $('#cart_list_personal_details1').addClass('cart_active_tab2');
                    $('#cart_personal_details').addClass('active in');
                } else {
                    alert("入力が空か間違っています。 確認して。");
                }
            });
            
            $('#cart_btn_personal_details1').click(function() {

                $('#cart_list_personal_details').removeClass('active cart_active_tab1');
                $('#cart_personal_details').removeClass('active in');
                $('#cart_list_personal_details').addClass('cart_inactive_tab1');
                $('#cart_list_personal_details1').removeClass('cart_active_tab2');
                $('#cart_list_personal_details1').addClass('cart_inactive_tab2');
                $('#cart_login_details').addClass('active in');
            });
            
            $('#cart_btn_personal_details2').click(function() {
                $('div.cart_price_image').hide();
                $('#cart_list_contact_details').removeClass('cart_inactive_tab1');
                $('#cart_list_contact_details').addClass('cart_active_tab1 active');
                $('#cart_list_contact_details1').removeClass('cart_inactive_tab2');
                $('#cart_list_contact_details1').addClass('cart_active_tab2 active');
                $('#cart_personal_details').removeClass('active in');
                $('#cart_contact_details').addClass('active in');
            });      
        });
        </script>
        
    {{-- Cart Part End --}}
@endsection
