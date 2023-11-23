@extends('layouts.app')

@section('content')
    <!-- Characteristics -->
    

    {{-- Header Start --}}

    <div class="nav">
        <div class="nav_img1">
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

                <div class="rightnav">
                    <a class='loginNav' href="{{ route('userlogin') }}">
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

    {{-- Header End --}}


    {{-- Cart Part Start --}}
    <div class="point3_header">
        <div class="point3_header2">包丁オンラインストア</div>
        <div class="point3_body_text">キーワードや商品を入力してください。</div>
        <input type="search" name="product_search" id="product_search" placeholder="検索する">
    </div>
    <div class="topmenu">
        <div class="dropdown dropdown-custom">
            <button type="button" class="btn dropdown-toggle dropdown-button-custom" data-toggle="dropdown">
                鍛冶屋の包丁
            </button>
            <div class="dropdown-menu dropdown-menu-custom">
              <a class="dropdown-item" href="#">全て</a>
              <a class="dropdown-item" href="#">イカ割り包丁</a>
            </div>
        </div>
        <div class="dropdown dropdown-custom">
            <button type="button" class="btn dropdown-toggle dropdown-button-custom" data-toggle="dropdown">
                鍛冶屋の包丁
            </button>
            <div class="dropdown-menu dropdown-menu-custom">
              <a class="dropdown-item" href="#">全て</a>
              <a class="dropdown-item" href="#">イカ割り包丁</a>
            </div>
        </div>
        <div class="dropdown dropdown-custom">
            <button type="button" class="btn dropdown-toggle dropdown-button-custom" data-toggle="dropdown">
                鍛冶屋の包丁
            </button>
            <div class="dropdown-menu dropdown-menu-custom">
              <a class="dropdown-item" href="#">全て</a>
              <a class="dropdown-item" href="#">イカ割り包丁</a>
            </div>
        </div>
        <div class="dropdown dropdown-custom">
            <button type="button" class="btn dropdown-toggle dropdown-button-custom" data-toggle="dropdown">
                鍛冶屋の包丁
            </button>
            <div class="dropdown-menu dropdown-menu-custom">
              <a class="dropdown-item" href="#">全て</a>
              <a class="dropdown-item" href="#">イカ割り包丁</a>
            </div>
        </div>
        <div class="dropdown dropdown-custom">
            <button type="button" class="btn dropdown-toggle dropdown-button-custom" data-toggle="dropdown">
                鍛冶屋の包丁
            </button>
            <div class="dropdown-menu dropdown-menu-custom">
              <a class="dropdown-item" href="#">全て</a>
              <a class="dropdown-item" href="#">イカ割り包丁</a>
            </div>
        </div>
        <div class="dropdown dropdown-custom">
            <button type="button" class="btn dropdown-toggle dropdown-button-custom" data-toggle="dropdown">
                鍛冶屋の包丁
            </button>
            <div class="dropdown-menu dropdown-menu-custom">
              <a class="dropdown-item" href="#">全て</a>
              <a class="dropdown-item" href="#">イカ割り包丁</a>
            </div>
        </div>
        <div class="dropdown dropdown-custom">
            <button type="button" class="btn dropdown-toggle dropdown-button-custom" data-toggle="dropdown">
                鍛冶屋の包丁
            </button>
            <div class="dropdown-menu dropdown-menu-custom">
              <a class="dropdown-item" href="#">全て</a>
              <a class="dropdown-item" href="#">イカ割り包丁</a>
            </div>
        </div>
        <div class="dropdown dropdown-custom">
            <button type="button" class="btn dropdown-toggle dropdown-button-custom" data-toggle="dropdown">
                鍛冶屋の包丁
            </button>
            <div class="dropdown-menu dropdown-menu-custom">
              <a class="dropdown-item" href="#">全て</a>
              <a class="dropdown-item" href="#">イカ割り包丁</a>
            </div>
        </div>
        <div class="dropdown dropdown-custom">
            <button type="button" class="btn dropdown-toggle dropdown-button-custom" data-toggle="dropdown">
                鍛冶屋の包丁
            </button>
            <div class="dropdown-menu dropdown-menu-custom">
              <a class="dropdown-item" href="#">全て</a>
              <a class="dropdown-item" href="#">イカ割り包丁</a>
            </div>
        </div>
        <div class="dropdown dropdown-custom">
            <button type="button" class="btn dropdown-toggle dropdown-button-custom" data-toggle="dropdown">
                その他
            </button>
            <div class="dropdown-menu dropdown-menu-custom">
              <a class="dropdown-item" href="#">全て</a>
              <a class="dropdown-item" href="#">イカ割り包丁</a>
            </div>
        </div>
    </div>
    <div class="sales">
        {{-- <div class="sidemenubar">

        </div> --}}
        <div class="sales_part">
        @foreach ($sales as $item)
            
            <div class="merchan_main2 {{ $item['product_color'] }}">
                <a href="{{ route('cart_ec', ['id' => $item['id']]) }}">
                @if ($item['product_size'])
                    <img src="{{"assets/img/Group 11576.png"}}" alt="" class="sales_ribbon">
                @endif
                <img src=" {{ $item['image_one'] }} " alt="">
                <div class="merchan_main1_name">{{$item['product_name']}}</div>
                <div class="merchan_main1_price1">{{$item['selling_price']}}円 (税込)</div>
            </a></div>
        @endforeach
        </div>
    </div>
    {{-- Cart Part End --}}

    {{-- Electronic commerce Start --}}

<div class="ec ec_mb-10">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#sidenav_open").click(function() {
                $("#mySidenav").css("width", "250px");
            })
            
            $("#sidenav_close").click(function() {
                $("#mySidenav").css("width", "0px");
            })
                
        });
    </script>
@endsection