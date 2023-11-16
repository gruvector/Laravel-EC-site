
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
                <a class='loginNav' href="{{route('cart')}}">
                    <div class="loginNav_avartar">
                        <img src={{ 'assets/img/Path_26071.png' }} alt="loginAvartar" class="loginNav_img" />
                    </div>
                    <div class="loginNav_text">
                        カート
                    </div>
                </a>
                <a class='basketNav'>
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

{{-- Merit Start --}}

<div class="merit">
    <div class="point3_header">
        <div class="point3_header1">MERIT</div>
        <div class="point3_header2">LOGOでのメリット</div>
        <div class="point3_body_text">研ぎのメリットについてご紹介致します。</div>
    </div>
    <div class="merit_main">
        <div class="merit_main2">
            <div class="merit_main__head">シャープナーと包丁研ぎの違いとは？</div>
            <div class="merit_main__text">
                大切な包丁を長く大事に使うためにはメンテナンスは欠かせません。
                「包丁の切れ味を良くする」という目的は同じですが、シャープナー
                と手研ぎの包丁研ぎでは構造が全く異なるためその役割はまったくの
                別物で、切れ味も道具の寿命にも大きな違いが出ます。
            </div>
        </div>
        <div class="merit_main1">
            <img src="{{"assets/img/Group_11663.png"}}" alt="">
        </div>
        <div class="merit_main1">
            <img src="{{"assets/img/Group_11663.png"}}" alt="">
        </div>
        <div class="merit_main2">
            <div class="merit_main__head">シャープナーと包丁研ぎの違いとは？</div>
            <div class="merit_main__text">
                大切な包丁を長く大事に使うためにはメンテナンスは欠かせません。
                「包丁の切れ味を良くする」という目的は同じですが、シャープナー
                と手研ぎの包丁研ぎでは構造が全く異なるためその役割はまったくの
                別物で、切れ味も道具の寿命にも大きな違いが出ます。
            </div>
        </div>
        <div class="merit_main2">
            <div class="merit_main__head">シャープナーと包丁研ぎの違いとは？</div>
            <div class="merit_main__text">
                大切な包丁を長く大事に使うためにはメンテナンスは欠かせません。
                「包丁の切れ味を良くする」という目的は同じですが、シャープナー
                と手研ぎの包丁研ぎでは構造が全く異なるためその役割はまったくの
                別物で、切れ味も道具の寿命にも大きな違いが出ます。
            </div>
        </div>
        <div class="merit_main1">
            <img src="{{"assets/img/Group_11663.png"}}" alt="">
        </div>
    </div>
</div>

{{-- Merit End --}}

{{-- Electronic commerce Start --}}

<div class="ec">
    <div class="point3_header">
        <div class="point3_header1">ELECTRONIC COMMERCE</div>
        <div class="point3_header2">包丁ECサービスの特徴</div>
        <div class="point3_body_text">包丁ECではこんな事ができます。</div>
    </div>
    <div class="ec_main">
        <div class="ec_main_part">
            <img src="{{"assets/img/Group_11666.png"}}" alt="">
            <div class="ec_part__head">全国発送</div>
            <div class="ec_part__text">
                オンラインストアでご注文いただいた商品は<br />
                全国配送可能です。
            </div>
        </div>
        <div class="ec_main_part">
            <img src="{{"assets/img/Group_11667.png"}}" alt="">
            <div class="ec_part__head">アフターサポート</div>
            <div class="ec_part__text">
                首元の調整などの購入後の<br />
                アフターサポートも行います。
            </div>
        </div>
        <div class="ec_main_part">
            <img src="{{"assets/img/Group_11668.png"}}" alt="">
            <div class="ec_part__head">さまざまなお支払い</div>
            <div class="ec_part__text">
                クレジットカードやコンビニ支払いなど、<br />
                さまざまなお支払いに対応しております。
            </div>
        </div>
    </div>
</div>
{{-- Electronic Commerce End --}}

{{-- Merchandise Start --}}

<div class="merchandise">
    <div class="point3_header">
        <div class="point3_header1">MERCHANDISE</div>
        <div class="point3_header2">商品紹介一覧</div>
        <div class="point3_body_text">LOGOでは、さまざまな商品をご提供しています。</div>
        <div class="bef_aft3__btngrp">
            <div class="before3_btn">すべて</div>
            <div class="before3_btn">新着</div>
            <div class="before3_btn">出刃</div>
            <div class="before3_btn">牛刀</div>
            <div class="before3_btn">ペティ</div>
        </div>
    </div>
    <div class="merchan_main">
        <div class="merchan_main1">

        </div>
        <div class="merchan_main2">

        </div>
        <div class="merchan_main3">
            
        </div>
        <div class="merchan_main4">
            
        </div>
        <div class="merchan_main5">
            
        </div>
        <div class="merchan_main6">
            
        </div>
        <div class="merchan_main7">
            
        </div>
        <div class="merchan_main8">
            
        </div>
        <div class="merchan_main9">
            
        </div>
        <div class="merchan_main10">
            
        </div>
        <div class="merchan_main11">
            
        </div>
        <div class="merchan_main12">
            
        </div>
        <div class="merchan_main13">
            
        </div>
        <div class="merchan_main14">
            
        </div>
        <div class="merchan_main15">
            
        </div>
        <div class="merchan_main16">
            
        </div>
        <div class="merchan_main17">
            
        </div>
        <div class="merchan_main18">
            
        </div>
        <div class="merchan_main19">
            
        </div>
        <div class="merchan_main20">
            
        </div>
        <div class="merchan_pagiation">
            <ul id="pagination-demo" class="pagination-sm"></ul>
        </div>
    </div>
</div>

{{-- Merchandise End --}}

{{-- last Part Start --}}

<div class="contact22">
    <div class="contact1__div">
        <div class="contact1_header">WEBでのお問い合わせこちらから</div>
        <div class="contact1_content">お申込手続きが最短  <span class="contact1_content__span">1</span>  分で終わる</div>
        <div class="comparison_btn__div2">
            <button class="custom_topics_btn__button"><span>ご注文はこちらから&nbsp;</span></button>
        </div>
    </div>
    <div class="contact1_img21">
        <img src="{{ "assets/img/551312.png" }}" alt="">
    </div>
    <div class="contact1_img22">
        <img src="{{"assets/img/23606633.png"}}" alt="">
    </div>
</div>

{{-- last Part End --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() { 
        $('#pagination-demo').twbsPagination({
            totalPages: 16,
            visiblePages: 6,
            next: 'Next',
            prev: 'Prev',
            onPageClick: function (event, page) {
                //fetch content and render here
                $('#page-content').text('Page ' + page) + ' content here';
            }
        });
    })

</script>


@endsection
