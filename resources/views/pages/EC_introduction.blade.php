
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
                        <a href="#" class="mainnav_inside__link">テキスト</a>
                        <a href="#" class="mainnav_inside__link">テキスト</a>
                    </div>
                </div>
            </div>

            <div class="rightnav">
                <div class='loginNav'>
                    <div class="loginNav_avartar">
                        <img src={{ 'assets/img/Path_26071.png' }} alt="loginAvartar" class="loginNav_img" />
                    </div>
                    <div class="loginNav_text">
                        ログイン
                    </div>
                </div>
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
        <div class="merit_main1">
            <img src="{{"assets/img/Group_11663.png"}}" alt="">
        </div>
        <div class="merit_main1">
            <div class="merit_main__head">Group_11663.png</div>
            <div class="merit_main__text"></div>
        </div>
    </div>
</div>

{{-- Merit End --}}

{{-- Worry Start --}}



{{-- worry End --}}

{{-- Point 3 Start --}}



{{-- Point 3 End --}}

{{-- Order Part Start --}}



{{-- Order Part End --}}

{{-- Before/After Part Start --}}



{{-- Before/After Part End --}}

{{-- Order Part Start --}}



{{-- Order Part End --}}

{{-- Contact Start --}}



{{-- Contact End --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


@endsection
