
@extends('layouts.app')

@section('content')

{{-- Header Start --}}

<div class="nav">
    <div class="nav_img">
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
            <div></div>
            <div class="rightnav">
                <a class='loginNav' href="{{route('userlogin')}}">
                    <div class="loginNav_avartar">
                        <img src={{ 'assets/img/Path_26071.png' }} alt="loginAvartar" class="loginNav_img" />
                    </div>
                    <div class="loginNav_text">
                        ログイン
                    </div>
                </a>
                <a class='loginNav' href="{{route('sales')}}">
                    <div class="loginNav_avartar">
                        <img src={{ 'assets/img/Path_26071.png' }} alt="loginAvartar" class="loginNav_img" />
                    </div>
                    <div class="loginNav_text">
                        カート
                    </div>
                </a>
                <a class='basketNav' href="{{ route('order') }}">
                    <div class="basketNav_avartar">
                        <img src={{ 'assets/img/Path_26070.png' }} alt="basketNavAvartar" class="basketNav_img" />
                    </div>
                    <div class="basketNav_text">
                        ご注文はこちら
                    </div>
                </a>
            </div>
        </div>
        <div class="midtext">
            <div class="midtext__p">岐阜県関市の包丁屋</div>
            <div class="bottomtext2">研ぎの事例紹介</div>
        </div>
        <div class="bottom_img"></div>
        <div class="social">
            
        </div>
    </div>
</div>

{{-- Header End --}}

{{-- Tab Start --}}



    <!-- Nav tabs -->
<div class="point3_header">
    <div class="point3_header1">ORDER</div>
    <div class="point3_header2">ご注文</div>
</div>

<div class="order_tab">
    <ul class="nav nav-tabs">
        <li class="order_nav-item nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">
                <p class="order-tab-link__text1">1本</p>
                <p class="order-tab-link__text2">2780円</p>
            </a>
        </li>
        <li class="order_nav-item nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">
                <p class="order-tab-link__text1">2本</p>
                <p class="order-tab-link__text2">3980円</p>
            </a>
        </li>
        <li class="order_nav-item nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">
                <p class="order-tab-link__text1">3本</p>
                <p class="order-tab-link__text2">5180円</p>
            </a>
        </li>
        <li class="order_nav-item nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3">
                <p class="order-tab-link__text1">4本</p>
                <p class="order-tab-link__text2">6380円</p>
            </a>
        </li>
        <li class="order_nav-item nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu4">
                <p class="order-tab-link__text1">5本</p>
                <p class="order-tab-link__text2">7580円</p>
            </a>
        </li>
    </ul>
  
    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="order_tab-pane tab-pane active"><br>
            <div class="order_tab_part1">
                <div class="order_tab_part1_1">
                    送料無料
                </div>
                <div class="order_tab_part1_2">
                    <p class="order_tab_part1_2_text1">まずはお試しの一本から</p>
                    <p class="order_tab_part1_2_text2">2,780</p>
                </div>
                <div class="order_tab_part1_3">
                    <button class="custom_topics_btn__button1"><span>申し込みへ&nbsp;</span></button>
                </div>
            </div>
            <div class="order_tab_part2">
                <div class="order_tab_part2_1">【会員価格】2,650円</div>
                <div class="order_tab_part2_2">■オプションセット料金</div>
                <div class="order_tab_part2_3">
                    <div class="order_tab_part2_3_1">レンタル包丁セット</div>
                    <div class="order_tab_part2_3_1">レンタル包丁+柄の修理（1本）セット</div>
                    <div class="order_tab_part2_3_1">柄の修理（1本）セット</div>
                </div>
            </div>
        </div>
        <div id="menu1" class="order_tab-pane tab-pane fade"><br>
            <div class="order_tab_part1">
                <div class="order_tab_part1_1">
                    送料無料
                </div>
                <div class="order_tab_part1_2">
                    <p class="order_tab_part1_2_text1">まずはお試しの一本から</p>
                    <p class="order_tab_part1_2_text2">3,980</p>
                </div>
                <div class="order_tab_part1_3">
                    <button class="custom_topics_btn__button1"><span>申し込みへ&nbsp;</span></button>
                </div>
            </div>
            <div class="order_tab_part2">
                <div class="order_tab_part2_1">【会員価格】3,750円</div>
                <div class="order_tab_part2_2">■オプションセット料金</div>
                <div class="order_tab_part2_3">
                    <div class="order_tab_part2_3_1">レンタル包丁セット</div>
                    <div class="order_tab_part2_3_1">レンタル包丁+柄の修理（1本）セット</div>
                    <div class="order_tab_part2_3_1">柄の修理（1本）セット</div>
                </div>
            </div>
        </div>
        <div id="menu2" class="order_tab-pane tab-pane fade"><br>
            <div class="order_tab_part1">
                <div class="order_tab_part1_1">
                    送料無料
                </div>
                <div class="order_tab_part1_2">
                    <p class="order_tab_part1_2_text1">まずはお試しの一本から</p>
                    <p class="order_tab_part1_2_text2">5,180</p>
                </div>
                <div class="order_tab_part1_3">
                    <button class="custom_topics_btn__button1"><span>申し込みへ&nbsp;</span></button>
                </div>
            </div>
            <div class="order_tab_part2">
                <div class="order_tab_part2_1">【会員価格】4,750円</div>
                <div class="order_tab_part2_2">■オプションセット料金</div>
                <div class="order_tab_part2_3">
                    <div class="order_tab_part2_3_1">レンタル包丁セット</div>
                    <div class="order_tab_part2_3_1">レンタル包丁+柄の修理（1本）セット</div>
                    <div class="order_tab_part2_3_1">柄の修理（1本）セット</div>
                </div>
            </div>
        </div>
        <div id="menu3" class="order_tab-pane tab-pane fade"><br>
            <div class="order_tab_part1">
                <div class="order_tab_part1_1">
                    送料無料
                </div>
                <div class="order_tab_part1_2">
                    <p class="order_tab_part1_2_text1">まずはお試しの一本から</p>
                    <p class="order_tab_part1_2_text2">6,380</p>
                </div>
                <div class="order_tab_part1_3">
                    <button class="custom_topics_btn__button1"><span>申し込みへ&nbsp;</span></button>
                </div>
            </div>
            <div class="order_tab_part2">
                <div class="order_tab_part2_1">【会員価格】5,950円</div>
                <div class="order_tab_part2_2">■オプションセット料金</div>
                <div class="order_tab_part2_3">
                    <div class="order_tab_part2_3_1">レンタル包丁セット</div>
                    <div class="order_tab_part2_3_1">レンタル包丁+柄の修理（1本）セット</div>
                    <div class="order_tab_part2_3_1">柄の修理（1本）セット</div>
                </div>
            </div>
        </div>
        <div id="menu4" class="order_tab-pane tab-pane fade"><br>
            <div class="order_tab_part1">
                <div class="order_tab_part1_1">
                    送料無料
                </div>
                <div class="order_tab_part1_2">
                    <p class="order_tab_part1_2_text1">まずはお試しの一本から</p>
                    <p class="order_tab_part1_2_text2">7,580</p>
                </div>
                <div class="order_tab_part1_3">
                    <button class="custom_topics_btn__button1"><span>申し込みへ&nbsp;</span></button>
                </div>
            </div>
            <div class="order_tab_part2">
                <div class="order_tab_part2_1">【会員価格】7,050円</div>
                <div class="order_tab_part2_2">■オプションセット料金</div>
                <div class="order_tab_part2_3">
                    <div class="order_tab_part2_3_1">レンタル包丁セット</div>
                    <div class="order_tab_part2_3_1">レンタル包丁+柄の修理（1本）セット</div>
                    <div class="order_tab_part2_3_1">柄の修理（1本）セット</div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Tab End --}}

{{-- order Start --}}

<div class="cart_box" id="order_box" style="display: none">
    <form method="post" id="order_register_form" action="{{ route('payment_order') }}">
        @csrf
        <ul class="nav nav-tabs">
            <li class="nav-item cart_box_li_first cart_active_tab1" id="order_list_login_details">
                <div class="cart_active_tab2" id="order_list_login_details1">STEP 1</div>詳細入力
            </li>
            <li class="nav-item cart_box_li cart_inactive_tab1" id="order_list_personal_details">
                <div class="cart_inactive_tab2" id="order_list_personal_details1">STEP 2</div>詳細確認
            </li>
            <li class="nav-item cart_box_li cart_inactive_tab1" id="order_list_contact_details">
                <div class="cart_inactive_tab2" id="order_list_contact_details1">STEP 3</div>完了
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
                <span class="cart_price_custom_text2" id="order_price1">2780</span>
                <div class="cart_price_custom_text3">円</div> 
                <div class="cart_price_custom_text4">送料無料</div>
            </div>
            <div class="cart_price_user">
                <div class="cart_price_custom_ribbon">
                    <img src="{{'assets/img/Group 11575.png'}}" alt="">
                </div>
                <div class="cart_price_user_text1" id="order_price2">2780</div>
                <div class="cart_price_user_text2">円</div>
                <div class="cart_price_user_arrow">
                    <img src="{{'assets/img/Group 11662.png'}}" alt="">
                </div>
                <div class="cart_price_user_text1" id="order_price_user">2650</div>
                <div class="cart_price_user_text2">円</div>
            </div>
        </div>
        <div class="tab-content cart-input__body">
            <div class="tab-pane active" id="order_login_details">
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
                    <input type="text" name="cart_name" id="order_name" class="qainput__input1" placeholder="NeoPen 太郎"/>
                </div>
                <div class="qainput_nppe">
                    <div class="qainput__label">フリガナ <span class="input_need">※</span></div>
                    <input type="password" name="cart_pwd" id="order_pwd" class="qainput__input1" placeholder="ネオペン タロウ" />
                </div>
                <div class="qainput_nppe">
                    <div class="qainput__label">電話番号 <span class="input_need">※</span></div>
                    <input type="tel" name="cart_tel" id="order_tel" class="qainput__input1" placeholder="080-000-0000" required/>
                </div> 
                <div class="qainput_nppe">
                    <div class="qainput__label">メールアドレス <span class="input_need">※</span></div>
                    <input type="email" name="cart_email" id="order_email" class="qainput__input1" placeholder="info@neopen.co.jp" required/>
                </div>
                <div class="qainput_nppe">
                    <div class="qainput__label">郵便番号</div>
                    <input type="tel" class="qainput__input2_1" placeholder="460-0000" name="cart_zip" id="order_zip"/>
                    <div class="qainput_zip_part">
                        <select class="qainput__select1" name="cart_province" id="order_province">
                            <option value="" disabled selected>都道府県</option>
                            <option>都道府県</option>
                            <option>都道府県</option>
                            <option>都道府県</option>
                            <option>都道府県</option>
                        </select>
                        <input type="text" class="qainput__input2_3" placeholder="市区町村" name="cart_city" id="order_city">
                        <input type="text" class="qainput__input2_4" placeholder="以降の住所(番地・建物名など)" name="cart_address" id="order_address">
                    </div>
                </div>
                <div class="qainput_radio">
                    <div class="qainput__label">ご希望の決済方法</div>
                    <div class="qainput_radiogrp">
                        <input type="radio" class="qainput__radio_first cart_radio_pay" value="コンビニ決済" name="cart_payment">コンビニ決済
                        <input type="radio" class="qainput__radio cart_radio_pay" value="カード決済" name="cart_payment" checked>カード決済
                        <input type="radio" class="qainput__radio cart_radio_pay" value="その他" name="cart_payment">その他
                    </div>
                </div>
                <div class="qainput_prnprotect">個人情報保護方針記載する</div>
                <div class="qainput_checkbox">
                    <input type="checkbox" name="cart_checkbox" id="order_checkbox"> &nbsp;<label for="cart_checkbox">上記内容に同意する</label>
                </div>
                <div>
                    <button type="button" name="btn_login_details" id="order_btn_login_details" class="custom_topics_btn__button" disabled>内容を確認する</button>
                </div>

            </div>

            <div class="tab-pane" id="order_personal_details" >
                <div class="cart_show">
                    <div class="cart_show__label">オプション</div>
                    <div class="cart_show__content" id="order_personal_details__option"></div>
                </div>
                <div class="cart_show">
                    <div class="cart_show__label">お申込方法</div>
                    <div class="cart_show__content" id="order_personal_details__apply"></div>
                </div>
                <div class="cart_show">
                    <div class="cart_show__label">お名前</div>
                    <div class="cart_show__content" id="order_personal_details__name"></div>
                </div>
                <div class="cart_show">
                    <div class="cart_show__label">フリガナ</div>
                    <div class="cart_show__content" id="order_personal_details__pwd"></div>
                </div>
                <div class="cart_show">
                    <div class="cart_show__label">電話番号</div>
                    <div class="cart_show__content" id="order_personal_details__tel"></div>
                </div>
                <div class="cart_show">
                    <div class="cart_show__label">メールアドレス</div>
                    <div class="cart_show__content" id="order_personal_details__email"></div>
                </div>
                <div class="cart_show">
                    <div class="cart_show__label">郵便番号</div>
                    <div class="cart_show1">
                        <div class="cart_show__content" id="order_personal_details__zip"></div>
                        <div class="cart_show__content" id="order_personal_details__province"></div>
                        <div class="cart_show__content" id="order_personal_details__city"></div>
                        <div class="cart_show__content" id="order_personal_details__address"></div>
                    </div>
                </div>
                <div class="cart_show">
                    <div class="cart_show__label">ご希望の決済方法</div>
                    <div class="cart_show1">
                        <div class="cart_show__content" id="order_personal_details__pay"></div>
                        <div class="cart_show__content" id="order_personal_details__url"></div>
                    </div> 
                </div>
                <div class="cart_show1">
                    <button type="button" name="btn_login_details" id="order_btn_personal_details1" class="custom_topics_btn__button">前のページ</button>
                    <div id="order_btn_personal_details2" class="" >
                        <script src="https://checkout.stripe.com/checkout.js"  class="stripe-button to_pay_btn " 
                            data-key="pk_test_51OERDlJax9oIpgFhPPTdP3Oer4zPuRulSuw6DuACfVoPaucn6oZax4cXjZTzOxk0iLti4AUqzUpdomjGQSZMw88j00tRq2t1a2"
                            
                            data-amount="" data-name="総合検定研究所" data-description="aaaa"
                            data-image="" data-locale="auto" data-label="決済画面へ" data-currency="jpy">
                        
                        </script>
                        <input type="hidden" name="order_price" id="order_price__input" />

                        {{-- <script src="https://checkout.stripe.com/checkout.js" class="stripe-button to_pay_btn" data-key="pk_test_51OERDlJax9oIpgFhPPTdP3Oer4zPuRulSuw6DuACfVoPaucn6oZax4cXjZTzOxk0iLti4AUqzUpdomjGQSZMw88j00tRq2t1a2" data-name="決済" data-description="1111" data-image="111" data-locale="auto" data-label="決済画面へ" data-currency="jpy" data-shipping-address="true" data-billing-address="true" data-email="1111" data-allow-remember-me="false" data-allow-redirect="false" data-panel-label="名前">
                        </script> --}}
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="order_contact_details">
                <div class="cart_final">
                    ご購入いただきありがとうございます。<br />
                    ご登録いただいた内容はご登録メールアドレスにお送り致します。<br />
                    商品発送準備が出来次第再度ご連絡申し上げます。
                    
                </div>
                
            </div>
        </div>
    </form>
</div>

{{-- cart End --}}

{{-- QA Start --}}

<div class="qaoutput">
    <div class="point3_header">
        <div class="point3_header1">Q ＆ A</div>
        <div class="point3_header2">よくあるご質問</div>
    </div>
    <div class="qaoutput_type">
        <div class="qaoutput_type__dot"></div> 包丁について
    </div>
    <div id="accordion">
        <div class="card no-border" >
            <div class="card-header qaoutput_item">
                <a class="card-link qaoutput_link" data-toggle="collapse" href="#collapseOne">
                    ステンレス製など、どのような包丁でも修理可能ですか？
                </a>
                <div class="qaoutput_img1">
                    <img src="{{"assets/img/Group_11462.png"}}" alt="">
                </div>
            </div>
            <div id="collapseOne" class="collapse show qaoutput_body" data-parent="#accordion">
                <div class="card-body">
                    特殊な包丁（セラミック製や、パン切など）以外は、三徳包丁、牛刀、出刃包丁、柳刃包丁、ペテ
                    ィナイフ、中華包丁など、ほぼすべての包丁が修理可能です。                    
                </div>
                <div class="qaoutput_img2">
                    <img src="{{"assets/img/Group_11524.png"}}" alt="">
                </div>
            </div>
        </div>
        <div class="card no-border">
            <div class="card-header qaoutput_item">
                <a class="collapsed card-link qaoutput_link" data-toggle="collapse" href="#collapseTwo">
                    ステンレス製など、どのような包丁でも修理可能ですか？
                </a>
                <div class="qaoutput_img1">
                    <img src="{{"assets/img/Group_11462.png"}}" alt="">
                </div>
            </div>
            <div id="collapseTwo" class="collapse qaoutput_body" data-parent="#accordion">
                <div class="card-body">
                    特殊な包丁（セラミック製や、パン切など）以外は、三徳包丁、牛刀、出刃包丁、柳刃包丁、ペテ
                    ィナイフ、中華包丁など、ほぼすべての包丁が修理可能です。                    
                </div>
                <div class="qaoutput_img2">
                    <img src="{{"assets/img/Group_11524.png"}}" alt="">
                </div>
            </div>
        </div>
        <div class="card no-border">
            <div class="card-header qaoutput_item">
                <a class="collapsed card-link qaoutput_link" data-toggle="collapse" href="#collapseThree">
                    ステンレス製など、どのような包丁でも修理可能ですか？
                </a>
                <div class="qaoutput_img1">
                    <img src="{{"assets/img/Group_11462.png"}}" alt="">
                </div>
            </div>
            <div id="collapseThree" class="collapse qaoutput_body" data-parent="#accordion">
                <div class="card-body">
                    特殊な包丁（セラミック製や、パン切など）以外は、三徳包丁、牛刀、出刃包丁、柳刃包丁、ペテ
                    ィナイフ、中華包丁など、ほぼすべての包丁が修理可能です。                    
                </div>
                <div class="qaoutput_img2">
                    <img src="{{"assets/img/Group_11524.png"}}" alt="">
                </div>
            </div>
        </div>
        <div class="card no-border">
            <div class="card-header qaoutput_item">
                <a class="collapsed card-link qaoutput_link" data-toggle="collapse" href="#collapseFour">
                    ステンレス製など、どのような包丁でも修理可能ですか？
                </a>
                <div class="qaoutput_img1">
                    <img src="{{"assets/img/Group_11462.png"}}" alt="">
                </div>
            </div>
            <div id="collapseFour" class="collapse qaoutput_body" data-parent="#accordion">
                <div class="card-body">
                    特殊な包丁（セラミック製や、パン切など）以外は、三徳包丁、牛刀、出刃包丁、柳刃包丁、ペテ
                    ィナイフ、中華包丁など、ほぼすべての包丁が修理可能です。                    
                </div>
                <div class="qaoutput_img2">
                    <img src="{{"assets/img/Group_11524.png"}}" alt="">
                </div>
            </div>
        </div>
        <div class="card no-border">
            <div class="card-header qaoutput_item">
                <a class="collapsed card-link qaoutput_link" data-toggle="collapse" href="#collapseFive">
                    ステンレス製など、どのような包丁でも修理可能ですか？
                </a>
                <div class="qaoutput_img1">
                    <img src="{{"assets/img/Group_11462.png"}}" alt="">
                </div>
            </div>
            <div id="collapseFive" class="collapse qaoutput_body" data-parent="#accordion">
                <div class="card-body">
                    特殊な包丁（セラミック製や、パン切など）以外は、三徳包丁、牛刀、出刃包丁、柳刃包丁、ペテ
                    ィナイフ、中華包丁など、ほぼすべての包丁が修理可能です。                    
                </div>
                <div class="qaoutput_img2">
                    <img src="{{"assets/img/Group_11524.png"}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- QA End --}}

{{-- last Part Start --}}



{{-- last Part End --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
<script>
$(document).ready(function(){
    var price, price_str=2780, price_user;
    $(".custom_topics_btn__button1").click(function () {
        $("#order_box").show();
    })
    $("#order_checkbox").click(function() {
        if($("#order_checkbox:checked").val() == "on") {
            $("#order_btn_login_details").removeAttr('disabled');
        } else {
            $("#order_btn_login_details").attr('disabled', 'disabled');
        }
    })
    $(".nav-tabs a").click(function(){

        $(this).tab('show');
        price_str = $(this).children("p.order-tab-link__text2").text().toString().slice(0,4);
        price = Number(price_str);
        price_user = price * 0.9;
        $("#order_price1").text(price.toString());
        $("#order_price2").text(price.toString());
        $("#order_price_user").text(price_user.toString());       
        $("#order_price__input").val(price.toString());
    });
    $('#order_btn_login_details').click(function(){
            
            var error_name = $('#order_name').val();
            var error_pwd = $('#order_pwd').val();
            var error_email = $('#order_email').val();
            var error_tel = $('#order_tel').val();
            var error_option = $('input[name="cart_option"]:checked').val();
            $('#order_personal_details__option').text(error_option);
            $('#order_personal_details__apply').text($('input[name="cart_apply"]:checked').val());
            $('#order_personal_details__name').text(error_name);
            $('#order_personal_details__pwd').text(error_pwd);
            $('#order_personal_details__email').text(error_email);
            $('#order_personal_details__tel').text(error_tel);
            $('#order_personal_details__zip').text($('#order_zip').val());
            $('#order_personal_details__province').text($('#order_province').find(":selected").text());
            $('#order_personal_details__city').text($('#order_city').val());
            $('#order_personal_details__address').text($('#order_address').val());
            $('#order_personal_details__pay').text($('input[name="cart_payment"]:checked').val());
            $('#order_personal_details__url').text($('#order_personal_details__zip').val());

            if (error_name != '' && error_pwd != '' && error_email != '' && error_tel != '' ) {
                $('#order_login_details').removeClass('active');
                $('#order_list_personal_details').removeClass('cart_inactive_tab1');
                $('#order_list_personal_details').addClass('cart_active_tab1');
                $('#order_list_personal_details1').removeClass('cart_inactive_tab2');
                $('#order_list_personal_details1').addClass('cart_active_tab2');
                $('#order_personal_details').addClass('active in');
            } else {
                alert("入力が空か間違っています。 確認して。");
            }
        });
        
        $('#order_btn_personal_details1').click(function() {

            $('#order_list_personal_details').removeClass('active cart_active_tab1');
            $('#order_personal_details').removeClass('active in');
            $('#order_list_personal_details').addClass('cart_inactive_tab1');
            $('#order_list_personal_details1').removeClass('cart_active_tab2');
            $('#order_list_personal_details1').addClass('cart_inactive_tab2');
            $('#order_login_details').addClass('active in');

        });
        
        $('#order_btn_personal_details2').click(function() {
            $('div.cart_price_image').hide();
            $('#order_list_contact_details').removeClass('cart_inactive_tab1');
            $('#order_list_contact_details').addClass('cart_active_tab1 active');
            $('#order_list_contact_details1').removeClass('cart_inactive_tab2');
            $('#order_list_contact_details1').addClass('cart_active_tab2 active');
            $('#order_personal_details').removeClass('active in');
            $('#order_contact_details').addClass('active in');
            
        }); 
});
</script>


@endsection
