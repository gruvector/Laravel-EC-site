
@extends('layouts.app')

@section('content')

{{-- Header Start --}}

<div class="nav">
    <div class="nav_img">
        <div class="topnav">
            <a href="#">
                <div class="nav_logo__div" id="sidenav_open">
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
        <div id="mySidenav" class="header_sidenav">
            <a href="javascript:void(0)" class="closebtn" id="sidenav_close">&times;</a>
            <a href="{{ route('home') }}">HOME</a>
            <a href="{{ route('intro') }}">私たちについて</a>
            <a href="{{ route('condition') }}">サービス紹介</a>
            <a href="{{ route('EC-intro') }}">EC紹介</a>
            <a href="{{ route('voice1') }}">お客様の声1</a>
            <a href="{{ route('voice2') }}">お客様の声2</a>
            <a href="{{ route('QA') }}">Q&A</a>
            <a href="{{ route('sales') }}">ストアトップ</a>
            <hr >
            <a href="{{ route('userlogin') }}">ログイン</a>
            <a href="{{ route('order') }}">ご注文</a>
            <a href="#">買い物かご</a>
        </div>
    </div>
</div>

{{-- Header End --}}


{{-- About Us start --}}

<div class="aboutus2">
    <div class="aboutus2_aboutus">ABOUT &nbsp;&nbsp;US</div>
    <div class="aboutus_main">
        <div class="aboutus_text">
            「LOGO」は、お客様の快適な料理生活を想像し、きれいのそ
            の先まで追求する“研磨道”をモットーとしています。汚れの原
            因や成分、素材に適した処置を瞬時に判断できるプロの技術。
            目に見えない部分まで徹底的に磨き上げる高いクオリティとホ
            スピタリティ。研磨道の心技一体により、ご家庭では掃除が難
            しい場所をプロの手により驚くほどきれいに生まれ変わらせま
            す。だからこそ、痒い所に手が届くサービスが可能となるので
            す。
        </div>
        <div class="aboutus_img">
            <img src="assets/img/Group_11306.png" alt="AboutUs" />
        </div>
    </div>
    <div class="aboutus_raku">
        <img src="assets/img/raku.png" alt="Raku Sogi" class='aboutus__img' />
    </div>
</div>

{{-- About Us End --}}

{{-- Electronic commerce Start --}}

<div class="merchandise">
    <div class="point3_header">
        <div class="point3_header1">ACHIVEMENT</div>
        <div class="point3_header2">研磨実績</div>
        <div class="point3_body_text">LOGOでは、さまざまな包丁を磨きあげています。</div>
        <div class="bef_aft3__btngrp">
            <button class="before3_btn" id="before3_btn_v1">すべて</button>
            <button class="before3_btn" id="before3_btn_v2">クリーニング</button>
            <button class="before3_btn" id="before3_btn_v3">刃欠けなおし</button>
            <button class="before3_btn" id="before3_btn_v4">研ぎなおし</button>
            <button class="before3_btn" id="before3_btn_v5">厚み修正</button>
        </div>
    </div>
    <div class="merchan_main">
        @foreach ($achieve as $item)
        <div class="merchan_main1 {{ $item['type'] }}">
            <img src=" {{ $item['image'] }} " alt="">
            <div class="merchan_main1_name">{{$item['name']}}</div>
            <div class="merchan_main1_desc">
                <div class="merchan_main1_desc1">2023. 11. 20</div>
                <div class="merchan_main1_desc1">{{$item['achieve']}}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- Electronic Commerce End --}}

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

{{-- last Part Start --}}



{{-- last Part End --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() { 
        // $('#pagination-demo').twbsPagination({
        //     totalPages: 16,
        //     visiblePages: 6,
        //     next: 'Next',
        //     prev: 'Prev',
        //     onPageClick: function (event, page) {
        //         //fetch content and render here
        //         $('#page-content').text('Page ' + page) + ' content here';
        //     }
        // });
        $('#before3_btn_v1').click(function() {
            $('div.merchan_main1').show();
        })
        $('#before3_btn_v2').click(function() {
            $('div.merchan_main1').hide();
            $('div.クリーニング').show();
        })
        $('#before3_btn_v3').click(function() {
            $('div.merchan_main1').hide();
            $('div.刃欠けなおし').show();
        })
        $('#before3_btn_v4').click(function() {
            $('div.merchan_main1').hide();
            $('div.研ぎなおし').show();
        })
        $('#before3_btn_v5').click(function() {
            $('div.merchan_main1').hide();
            $('div.厚み修正').show();
        })

        $("#sidenav_open").click(function() {
            $("#mySidenav").css("width", "250px");
        })
        
        $("#sidenav_close").click(function() {
            $("#mySidenav").css("width", "0px");
        })
    })

</script>


@endsection
