
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
                <p class="order-tab-link__text2">2,780円</p>
            </a>
        </li>
        <li class="order_nav-item nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">
                <p class="order-tab-link__text1">2本</p>
                <p class="order-tab-link__text2">3,980円</p>
            </a>
        </li>
        <li class="order_nav-item nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">
                <p class="order-tab-link__text1">3本</p>
                <p class="order-tab-link__text2">5,180円</p>
            </a>
        </li>
        <li class="order_nav-item nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3">
                <p class="order-tab-link__text1">4本</p>
                <p class="order-tab-link__text2">6,380円</p>
            </a>
        </li>
        <li class="order_nav-item nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu4">
                <p class="order-tab-link__text1">5本</p>
                <p class="order-tab-link__text2">7,580円</p>
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

{{-- Electronic commerce Start --}}



{{-- Electronic Commerce End --}}

{{-- Merchandise Start --}}



{{-- Merchandise End --}}

{{-- last Part Start --}}



{{-- last Part End --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>


@endsection
