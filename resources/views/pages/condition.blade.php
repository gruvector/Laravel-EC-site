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

{{-- Before/After3 Start --}}

<div class="bef_aft3">
    <div class="point3_header">
        <div class="point3_header1">BEFORE / AFTER</div>
        <div class="point3_header2">研ぎの事例紹介</div>
        <div class="point3_body_text">研ぎの仕方をカテゴリーごとにご紹介致します。</div>
        <div class="bef_aft3__btngrp">
            <div class="before3_btn">すべて</div>
            <div class="before3_btn">カケの直し</div>
            <div class="before3_btn">サビ取り</div>
            <div class="before3_btn">柄の交換</div>
        </div>
    </div>
    <div class="before3">
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
        <div class="before3_img">
            <img src="{{ "assets/img/23606633_2.png"}}" alt="">
        </div>
    </div>
</div>

{{-- Before/After3 End --}}

{{-- Worry Start --}}

<div class="worry">
    <div class="point3_header">
        <div class="point3_header1">WORRIES</div>
        <div class="point3_header2">お持ちの包丁、</div>
        <div class="point3_header2">こんなお悩みありませんか？</div>
    </div>
    <div class="worry_part">
        <div class="worry_part__mainimg">
            <div class="worry_part__partimg">
                <img src="{{"assets/img/24336078.png"}}" alt="">
            </div>
        </div>
        <div class="worry_part__partimg1"><img src="{{"assets/img/img1.png"}}" alt=""></div>
        <div class="worry_part__partimg2"><img src="{{"assets/img/img2.png"}}" alt=""></div>
        <div class="worry_part__partimg3"><img src="{{"assets/img/img3.png"}}" alt=""></div>
        <div class="worry_part__partimg4"><img src="{{"assets/img/img4.png"}}" alt=""></div>
        <div class="worry_part__partimg5"><img src="{{"assets/img/img5.png"}}" alt=""></div>
        <div class="worry_part__partimg6"><img src="{{"assets/img/img6.png"}}" alt=""></div>
    </div>
    <div class="worry_midimg">
        <div class="worry_midimg1"><img src="{{"assets/img/Group_11438.png"}}" alt=""></div>
        <div class="worry_midimg2"><img src="{{"assets/img/23606633_3.png"}}" alt=""></div>
    </div>
    <div class="worry_imgarray">
        <div class="worry_imgarray_com">
            <div class="worry_imgarray_com__p">刃欠けなおし</div>
            <img src="{{"assets/img/Group_11441.png"}}" alt="">
        </div>
        <div class="worry_imgarray_com">
            <div class="worry_imgarray_com__p">研ぎなおし</div>
            <img src="{{"assets/img/Group_11441.png"}}" alt="">
        </div>
        <div class="worry_imgarray_com">
            <div class="worry_imgarray_com__p">刃の厚み修正</div>
            <img src="{{"assets/img/Group_11441.png"}}" alt="">
        </div>
        <div class="worry_imgarray_com">
            <div class="worry_imgarray_com__p">刃の厚み修正</div>
            <img src="{{"assets/img/Group_11441.png"}}" alt="">
        </div>
        <div class="worry_imgarray_com">
            <div class="worry_imgarray_com__p">クリーニング</div>
            <img src="{{"assets/img/Group_11441.png"}}" alt="">
        </div>
    </div>
</div>
{{-- worry End --}}

{{-- Point 3 Start --}}

<div>
    <div class="point3_header">
        <div class="point3_header1">POINT</div>
        <div class="point3_header2">サービスの <span>3</span> つの特徴</div>
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
            <div class="owl-four owl-carousel owl-theme">
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
        $('.owl-four').owlCarousel({
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
