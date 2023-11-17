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
                            <a href="{{ route('EC-intro') }}" class="mainnav_inside__link">テキスト</a>
                            <a href="{{ route('voice1') }}" class="mainnav_inside__link">テキスト</a>
                            <a href="{{ route('voice2') }}" class="mainnav_inside__link">テキスト</a>
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
                    <a class='loginNav' href="{{route('cart')}}">
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
                <div class="bottomtext2">お問い合わせ</div>
            </div>
            
            <div class="social">

            </div>
        </div>
        <div class="bottom_img1"></div>
    </div>

    {{-- Header End --}}

    {{-- Input start --}}

    <form action="" method="post" class="qainput">
        @csrf
        <div class="qainput_nppe">
            <div class="qainput__label">お名前 <span class="input_need">※</span></div>
            <input type="text" class="qainput__input1" placeholder="NeoPen 太郎" />
        </div>
        <div class="qainput_nppe">
            <div class="qainput__label">フリガナ <span class="input_need">※</span></div>
            <input class="qainput__input1" type="password" placeholder="ネオペン タロウ" />
        </div>
        <div class="qainput_nppe">
            <div class="qainput__label">電話番号 <span class="input_need">※</span></div>
            <input class="qainput__input1" type="tel" placeholder="080-000-0000" />
        </div>
        <div class="qainput_nppe">
            <div class="qainput__label">メールアドレス <span class="input_need">※</span></div>
            <input class="qainput__input1" type="email" placeholder="info@neopen.co.jp" />
        </div>
        <div class="qainput_nppe">
            <div class="qainput__label">郵便番号</div>
            <input type="tel" class="qainput__input2_1" placeholder="460-0000" />
            <div class="qainput_zip_part">
                <select class="qainput__select1">
                    <option value="" disabled selected>都道府県</option>
                    <option>都道府県</option>
                    <option>都道府県</option>
                    <option>都道府県</option>
                    <option>都道府県</option>
                </select>
                <input type="text" class="qainput__input2_3" placeholder="市区町村">
                <input type="text" class="qainput__input2_4" placeholder="以降の住所(番地・建物名など)">
            </div>
        </div>
        <div class="qainput_radio">
            <div class="qainput__label">ご希望の連絡方法</div>
            <div class="qainput_radiogrp">
                <input type="radio" class="qainput__radio_first" name="method">希望しない
                <input type="radio" class="qainput__radio" name="method">メールで連絡
                <input type="radio" class="qainput__radio" name="method">電話で連絡
            </div>
        </div>
        <div class="qainput_nppe">
            <div class="qainput__label">お問い合わせの目的</div>
            <select class="qainput__select2">
                <option></option>
                <option></option>
                <option></option>
                <option></option>
            </select>
        </div>
        <div class="qainput_nppe">
            <div class="qainput__label">お問い合わせ内容</div>
            <textarea class="qainput__textfield" rows="10"></textarea>
        </div>
        <div class="qainput_prnprotect">個人情報保護方針記載する</div>
        <div class="qainput_checkbox">
            <input type="checkbox" name="" id=""> &nbsp;上記内容に同意する
        </div>
        <button type="submit" class="custom_topics_btn__button">送信する</button>
    </form>

    {{-- Input End --}}

    {{-- Q & A Start --}}

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

    {{--  Q & A End --}}

    {{-- Contact Start --}}

    <div>
        <div class="point3_header">
            <div class="point3_header1">CONTACT</div>
            <div class="point3_header2">まずはお気軽に<br />お問い合わせください</div>
            <div class="point3_body_text">まずは、研磨を希望される場所や内容などのご要望をお聞かせください。</div>
        </div>
        <div class="contact_parent">
            <div class="contact">
                <div class="contact_part">
                    <img src="{{ "assets/img/Group_11386.png" }}" alt="first part" class="contact_part1_img1">
                    <div class="contact_part1_text">
                        <div class="part1_text__header">メールでお問い合わせ</div>
                        <div class="part1_text__content">Eメール</div>
                    </div>
                    <img src="{{ "assets/img/Group_11363.png" }}" alt="" class="contact_part1_img2">
                </div>
                <div class="contact_img">
                    <img src="{{ "assets/img/Path_26100.png" }}" alt="" class="contact_img__img">
                </div>
                <div class="contact_part">
                    <img src="{{ "assets/img/Group_11391.png" }}" alt="first part" class="contact_part1_img1">
                    <div class="contact_part1_text">
                        <div class="part1_text__header">LINEでのお問い合わせ</div>
                        <div class="part1_text__content">LINEアプリ</div>
                    </div>
                    <img src="{{ "assets/img/Group_11363.png" }}" alt="" class="contact_part1_img2">
                </div>
                <div class="contact_img">
                    <img src="{{ "assets/img/Path_26100.png" }}" alt="" class="contact_img__img">
                </div>
                <div class="contact_part">
                    <img src="{{ "assets/img/Group_11393.png" }}" alt="first part" class="contact_part1_img1">
                    <div class="contact_part1_text">
                        <div class="part1_text__header">お電話でのお問い合わせ</div>
                        <div class="part1_text__phone">052-990-2931</div>
                        <div class="part1_text__content">定休日：毎週水曜日、祝日</div>
                    </div>
                    <img src="{{ "assets/img/Group_11363.png" }}" alt="" class="contact_part1_img2">
                </div>
            </div>
            <div class="contact1">
                <div class="contact1__div">
                    <div class="contact1_header">WEBでのお問い合わせこちらから</div>
                    <div class="contact1_content">お申込手続きが最短<span class="contact1_content__span">1</span>分で終わる</div>
                    <div class="comparison_btn__div2">
                        <button class="custom_topics_btn__button"><span>ご注文はこちらから&nbsp;</span></button>
                    </div>
                </div>
                <div class="contact1_img">
                    <img src="{{ "assets/img/551312.png" }}" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Contact End --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

        })
    </script>
@endsection
