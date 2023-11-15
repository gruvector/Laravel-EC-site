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

            <div class="rightnav">
                <a class='loginNav'>
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
        <div class="midtext">
            <div class="midtext__p">岐阜県関市の包丁屋</div>
            <div class="bottomtext2">研磨実績</div>
        </div>
        <div class="bottom_img"></div>
        <div class="social">
            
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

{{-- Point 3 Start --}}

<div>
    <div class="point3_header">
        <div class="point3_header1">POINT</div>
        <div class="point3_header2">包丁やの <span>3</span> つの特徴</div>
        <div class="point3_body_text">あらゆる刃物に精通した私たちが、皆様の大切な刃物を蘇らせます。</div>
    </div>
    <div class="point3_body2">
        <div class="point3_body_main">
            <div class="point3_com2">
                <div class="point3_com_badge">
                    <div class="point3_com_badge__text">POINT 01</div>
                </div>
                <div class="point3_com_main">
                    <div class="point3_com__img2">
                        <img src="{{'assets/img/366003_m.png'}}" alt="">
                    </div>
                    <div class="point3_com__head">暮らしの道具をつくる<br />「野鍛治」という仕事</div>
                    <div class="point3_com__text">
                        包丁や農具、漁具、山林刃物といった暮らし
                        の道具を幅広く手がける「野鍛治」。これま
                        で100年以上にわたり、能登の農と漁、人々
                        の生活を支えるため、使う人に合わせた道具
                        をひとつずつ造り、修理をしてきました。
                    </div>
                </div>
            </div>
            <div class="point3_com2">
                <div class="point3_com_badge">
                    <div class="point3_com_badge__text">POINT 02</div>
                </div>
                <div class="point3_com_main">
                    <div class="point3_com__img2">
                        <img src="{{'assets/img/1382239_m.png'}}" alt="">
                    </div>
                    <div class="point3_com__head">地域の「困った」を<br />「良かった」に変える</div>
                    <div class="point3_com__text">
                        金物の修理を幅広く引き受けるのも野鍛冶の
                        仕事。しっかりとメンテナンスを施しながら
                        ひとつの道具を使い続ける「修理」の文化は、
                        限りある資源を有効活用するための方法とし
                        て再評価されています。
                    </div>
                </div>
            </div>
            <div class="point3_com2">
                <div class="point3_com_badge">
                    <div class="point3_com_badge__text">POINT 03</div>
                </div>
                <div class="point3_com_main">
                    <div class="point3_com__img2">
                        <img src="{{'assets/img/22910192_m.png'}}" alt="">
                    </div>
                    <div class="point3_com__head">伝統的な野鍛治の流儀を<br />守り伝える</div>
                    <div class="point3_com__text">
                        昔ながらの本鍛造による質実剛健な仕上がり
                        と、手造りならではの使いやすさ。この伝統
                        的な野鍛治の流儀を守り伝えることが、私た
                        ちに与えられた使命。そんなことを考えなが
                        ら、長く使える道具づくりを目指しています。
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Point 3 End --}}

{{-- Order Part Start --}}

<div class="contact2">
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

{{-- Order Part End --}}

{{-- Before/After Part Start --}}

<div class="before_after_2">
    <div class="point3_header">
        <div class="point3_header1">BEFORE / AFTER</div>
        <div class="point3_header2">研ぎの実績</div>
        <div class="point3_body_text">研ぎの最新実績をご紹介致します。</div>
    </div>
    <div class="before2">
        <div class="before21">
            <img src="{{"assets/img/before2.png"}}" alt="">
            <div class="before21_text">Before</div>
        </div>
        <div class="before22">
            <img src="{{"assets/img/after2.png"}}" alt="">
            <div class="before22_text">After</div>
        </div>
        <div class="before2_arrow">
            <img src="{{"assets/img/Group_11363.png"}}" alt="">
        </div>
    </div>
    <div class="after2">
        <div class="desc">
            <div class="desc_text">
                <div class="desc_text__head">シャープナーと包丁研ぎの違いとは？</div>
                <div class="desc_text__text">
                    大切な包丁を長く大事に使うためにはメンテナンスは欠かせません。
                    「包丁の切れ味を良くする」という目的は同じですが、シャープナー
                    と手研ぎの包丁研ぎでは構造が全く異なるためその役割はまったくの
                    別物で、切れ味も道具の寿命にも大きな違いが出ます。
                </div>
            </div>
            <div class="desc_img">
                <img src="{{"assets/img/366003_m_2.png"}}" alt="">
            </div>
        </div>
        <div class="before">
            <div class="owl-three owl-carousel owl-theme">
                <div class=" before_com">
                    <img src="{{ 'assets/img/Group_11365.png' }}" alt="">
                    <p class="before_com__p1">包丁研ぎ・サビ取り</p>
                    <p class="before_com__p2">＃カケ直し&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;＃カケ直し</p>
                </div>
                <div class=" before_com">
                    <img src="{{ 'assets/img/Group_11365.png' }}" alt="">
                    <p class="before_com__p1">包丁研ぎ・サビ取り</p>
                    <p class="before_com__p2">＃カケ直し&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;＃カケ直し</p>
                </div>
                <div class=" before_com">
                    <img src="{{ 'assets/img/Group_11365.png' }}" alt="">
                    <p class="before_com__p1">包丁研ぎ・サビ取り</p>
                    <p class="before_com__p2">＃カケ直し&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;＃カケ直し</p>
                </div>
                <div class=" before_com">
                    <img src="{{ 'assets/img/Group_11365.png' }}" alt="">
                    <p class="before_com__p1">包丁研ぎ・サビ取り</p>
                    <p class="before_com__p2">＃カケ直し&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;＃カケ直し</p>
                </div>
                <div class=" before_com">
                    <img src="{{ 'assets/img/Group_11365.png' }}" alt="">
                    <p class="before_com__p1">包丁研ぎ・サビ取り</p>
                    <p class="before_com__p2">＃カケ直し&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;＃カケ直し</p>
                </div>
            </div>
            <div class="before_slider_nav">
                <button class="am-next2"><img src="{{ 'assets/img/Group_11373.png' }}" alt=""></button>
                <button class="am-prev2"><img src="{{ 'assets/img/Group_11364.png' }}" alt=""></button>
            </div>
        </div>
    </div>
</div>

{{-- Before/After Part End --}}

{{-- Order Part Start --}}

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

{{-- Order Part End --}}







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-three').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            navText: [$('.am-next2'),$('.am-prev2')],
            dots: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                },
                1400:{
                    items:4
                }
            }
        })
    });
</script>

@endsection
