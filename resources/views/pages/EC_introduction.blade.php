
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
                オンラインストアでご注文いただいた商品は
                全国配送可能です。
            </div>
        </div>
        <div class="ec_main_part">
            <img src="{{"assets/img/Group_11667.png"}}" alt="">
            <div class="ec_part__head">アフターサポート</div>
            <div class="ec_part__text">
                首元の調整などの購入後の
                アフターサポートも行います。
            </div>
        </div>
        <div class="ec_main_part">
            <img src="{{"assets/img/Group_11668.png"}}" alt="">
            <div class="ec_part__head">さまざまなお支払い</div>
            <div class="ec_part__text">
                クレジットカードやコンビニ支払いなど、
                さまざまなお支払いに対応しております。
            </div>
        </div>
    </div>
</div>
{{-- Electronic Commerce End --}}

{{-- Merchandise Start --}}

<div class="merchandise" id="merchandise">
    <div class="point3_header">
        <div class="point3_header1">MERCHANDISE</div>
        <div class="point3_header2">商品紹介一覧</div>
        <div class="point3_body_text">LOGOでは、さまざまな商品をご提供しています。</div>
        <div class="bef_aft3__btngrp">
            <input type="hidden" name="before3_btn_input" id="before3_btn_input__id">
            <button class="before3_btn" id="before3_btn_e1">すべて</button>
            <button class="before3_btn" id="before3_btn_e2">新着</button>
            <button class="before3_btn" id="before3_btn_e3">出刃</button>
            <button class="before3_btn" id="before3_btn_e4">牛刀</button>
            <button class="before3_btn" id="before3_btn_e5">ペティ</button>
        </div>
    </div> 
    <div class="merchan_main">
        @foreach ($product as $item)
        
        <div class="merchan_main1 {{ $item['product_color'] }}">
            <a href="{{ route('cart_ec', ['id' => $item['id']]) }}">
            <img src=" {{ $item['image_two'] }} " alt="">
            <div class="merchan_main1_name">{{$item['product_name']}}</div>
            <div class="merchan_main1_price">￥{{$item['selling_price']}} (税込)</div>
        </a></div>
        @endforeach
    </div>
    <div class="merchan_pagiation">
        <ul id="pagination-demo" class="pagination-sm"></ul>
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
        $('#before3_btn_e1').click(function() {
            $('div.merchan_main1').show();
        })
        $('#before3_btn_e2').click(function() {
            $('div.merchan_main1').hide();
            $('div.新着').show();
        })
        $('#before3_btn_e3').click(function() {
            $('div.merchan_main1').hide();
            $('div.出刃').show();
        })
        $('#before3_btn_e4').click(function() {
            $('div.merchan_main1').hide();
            $('div.牛刀').show();
        })
        $('#before3_btn_e5').click(function() {
            $('div.merchan_main1').hide();
            $('div.ペティ').show();
        })
        
    })

</script>


@endsection
