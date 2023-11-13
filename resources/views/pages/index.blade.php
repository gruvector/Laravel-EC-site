@extends('layouts.app')

@section('content')
    <!-- Characteristics -->
    {{-- @include('layouts.menubar') --}}
    {{-- @include('layouts.slider') --}}
    @php
        use App\Models\Admin\Category;
        use App\Models\Admin\Subcategory;
        use App\Models\Admin\Brand;
        use App\Models\Product;

        $featured = Product::where('status', 1)
            ->orderBy('id', 'desc')
            ->limit(16)
            ->get();
        $hot_deal = Product::where('status', 1)
            ->where('hot_deal', 1)
            ->orderBy('id', 'asc')
            ->limit(5)
            ->get();
    @endphp

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
            <div class="bottom_img">
            </div>
        </div>
    </div>

    {{-- Header End --}}

    {{-- Topics Start --}}

    <div class="custom_topics_bg">
        <div class="custom_topics">
            <div class="custom_topics1">
                <div class="custom_topics1__div1">
                    <p class="custom_topics1_head">TOPICS</p>
                    <p class="custom_topics1_subtitle">トピックス</p>
                </div>
            </div>
            <div class="custom_topics2">
                <div class="owl-one owl-carousel owl-theme">
                    <div class='custom_topics_com'>
                        <div class="custom_topics_com1">
                            <img src="assets/img/24253927_m.png" alt="custom_topics Component Image"
                                class="custom_topics_img" />
                            <div class="custom_topics_com1_text">
                                <div class="custom_topics_com1_text1">2023.07.27</div>
                                <div class="custom_topics_com1_text2">秋のキャンペーン</div>
                                <div class="custom_topics_com1_text3">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
                            </div>
                        </div>
                        <div class="custom_topics_com2">
                            <div class="custom_topics_com2__text">イベント</div>
                        </div>
                    </div>
                    <div class='custom_topics_com'>
                        <div class="custom_topics_com1">
                            <img src="assets/img/24253927_m.png" alt="Topics Component Image" class="custom_topics_img" />
                            <div class="custom_topics_com1_text">
                                <div class="custom_topics_com1_text1">2023.07.27</div>
                                <div class="custom_topics_com1_text2">秋のキャンペーン</div>
                                <div class="custom_topics_com1_text3">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
                            </div>
                        </div>
                        <div class="custom_topics_com2">
                            <div class="custom_topics_com2__text">イベント</div>
                        </div>
                    </div>
                    <div class='custom_topics_com'>
                        <div class="custom_topics_com1">
                            <img src="assets/img/24253927_m.png" alt="custom_topics Component Image"
                                class="custom_topics_img" />
                            <div class="custom_topics_com1_text">
                                <div class="custom_topics_com1_text1">2023.07.27</div>
                                <div class="custom_topics_com1_text2">秋のキャンペーン</div>
                                <div class="custom_topics_com1_text3">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
                            </div>
                        </div>
                        <div class="custom_topics_com2">
                            <div class="custom_topics_com2__text">イベント</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="custom_topics_btn__div">
            <button class="custom_topics_btn__button"><span>お知らせ一覧&nbsp;</span></button>
        </div>

    </div>

    {{-- Topics End --}}

    {{-- About Us start --}}

    <div class="aboutus">
        <div class="aboutus_aboutus">ABOUT &nbsp;&nbsp;US</div>
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
            <img src="assets/img/raku_1.png" alt="Raku Sogi" class='aboutus__img' />
        </div>
    </div>

    {{-- About Us End --}}

    {{-- Point 3 start --}}

    <div>
            <div class="point3_header">
                <div class="point3_header1">POINT</div>
                <div class="point3_header2">LOGOの <span>3</span> つの特徴</div>
                <div class="point3_body_text">普段お使いの包丁の切れ味がスパッと蘇る！！</div>
            </div>
        <div class="point3_body">
            <div class="point3_body_main">
                <div class="point3_com">
                    <div class="point3_com_badge">
                        <div class="point3_com_badge__text">POINT 01</div>
                    </div>
                    <div class="point3_com_main">
                        <div class="point3_com__img">

                        </div>
                        <div class="point3_com__head">簡単注文・安全設計</div>
                        <div class="point3_com__text">ご注文いただきましたら、弊社からお送りする箱に包丁を入れてお近くのポストに入れるだけ。スパッと切れる包丁にしてお戻しいたします。
                        </div>
                    </div>

                </div>
                <div class="point3_com">
                    <div class="point3_com_badge">
                        <div class="point3_com_badge__text">POINT 02</div>
                    </div>
                    <div class="point3_com_main">
                        <div class="point3_com__img">

                        </div>
                        <div class="point3_com__head">明瞭会計・定額パック</div>
                        <div class="point3_com__text">カケや歪みの調整なども全部コミコミ。指定サイズ以内なら、種類に限らずどんな包丁でも定額パックでご対応いたします！</div>
                    </div>

                </div>
                <div class="point3_com">
                    <div class="point3_com_badge">
                        <div class="point3_com_badge__text">POINT 03</div>
                    </div>
                    <div class="point3_com_main">
                        <div class="point3_com__img">

                        </div>
                        <div class="point3_com__head">老舗鍛冶屋の確かな技術</div>
                        <div class="point3_com__text">明治41年創業、累計修理本数50万本以上の実績がある包丁研ぎ専門職人があなたの大切な包丁を蘇らせます。</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Point 3 End --}}

    {{-- Comparison Start --}}

    <div>
        <div class="point3_header">
            <div class="point3_header1">COMPARISON</div>
            <div class="point3_header2">サービス比較</div>
            <div class="point3_body_text">「LOGO」は、安さ、簡単さ、速さを兼ね備えた、安心・安全のサービスです。</div>
        </div>
        <div class="comparison">
            <table class="comparison_table">
                <thead>
                  <tr>
                    <td class="comparison_title"></td>
                    <td class="comparison_table_header">LOGO名</td>
                    <td class="comparison_content">A社</td>
                    <td class="comparison_content">B社</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="comparison_table_title_content">価格</td>
                    <td class="comparison_table_logo">
                        <img src={{ 'assets/img/Group_11352.png' }} alt="" class="table_content_img">
                        <div class="table_content">送料や欠け直しも全て込み</div>
                    </td>
                    <td>
                        <img src={{ 'assets/img/Group_11342.png' }} alt="" class="table_content_img">
                        <div class="table_content">送料は別途費用</div>
                    </td>
                    <td>
                        <img src={{ 'assets/img/Group_11362.png' }} alt="" class="table_content_img">
                        <div class="table_content">送料と欠け直しは別途費用</div>
                    </td>                  </tr>
                  <tr>
                    <td class="comparison_table_title_content">注文のしやすさ</td>
                    <td class="comparison_table_logo">
                        <img src={{ 'assets/img/Group_11352.png' }} alt="" class="table_content_img">
                        <div class="table_content">ネットで簡単</div>
                    </td>   
                    <td>
                        <img src={{ 'assets/img/Group_11362.png' }} alt="" class="table_content_img">
                        <div class="table_content">電話かメール(見積確認)</div>
                    </td>
                    <td>
                        <img src={{ 'assets/img/Group_11362.png' }} alt="" class="table_content_img">
                        <div class="table_content">郵送</div>
                    </td>                  </tr>
                  <tr>
                    <td class="comparison_table_title_content">納品スピード</td>
                    <td class="comparison_table_logo">
                        <img src={{ 'assets/img/Group_11352.png' }} alt="" class="table_content_img">
                        <div class="table_content">2〜7日</div>
                    </td>
                    <td>
                        <img src={{ 'assets/img/Group_11342.png' }} alt="" class="table_content_img">
                        <div class="table_content">２週間</div>
                    </td>
                    <td>
                        <img src={{ 'assets/img/Group_11362.png' }} alt="" class="table_content_img">
                        <div class="table_content">４週間</div>
                    </td>
                  </tr>
                  <tr>
                    <td class="comparison_table_title_content">歴史</td>
                    <td class="comparison_table_logo">
                        <img src={{ 'assets/img/Group_11352.png' }} alt="" class="table_content_img">
                        <div class="table_content">明治41年</div>
                    </td>
                    <td>
                        <img src={{ 'assets/img/Group_11362.png' }} alt="" class="table_content_img">
                        <div class="table_content">平成</div>
                    </td>
                    <td>
                        <img src={{ 'assets/img/Group_11342.png' }} alt="" class="table_content_img">
                        <div class="table_content">昭和</div>
                    </td>
                  </tr>
                  <tr>
                    <td class="comparison_table_title_content">対応力</td>
                    <td class="comparison_table_logo">
                        <img src={{ 'assets/img/Group_11352.png' }} alt="" class="table_content_img">
                        <div class="table_content">他社の包丁も1本から受付</div>
                    </td>
                    <td>
                        <img src={{ 'assets/img/Group_11362.png' }} alt="" class="table_content_img">
                        <div class="table_content">自社包丁のみ受付</div>
                    </td>
                    <td>
                        <img src={{ 'assets/img/Group_11342.png' }} alt="" class="table_content_img">
                        <div class="table_content1">2本以上で受付</div>
                        <div class="table_content2">1本は受け付けなし</div>
                    </td>
                  </tr>
                </tbody>
            </table>
            <div class="comparison_btn__div">
                <button class="custom_topics_btn__button"><span>LOGOについて&nbsp;</span></button>
            </div>
        </div>
    </div>

    {{-- Comparison End --}}

    {{-- Before/After Start --}}

    <div>
        <div class="point3_header">
            <div class="point3_header1">BEFORE / AFTER</div>
            <div class="point3_header2">研ぎの事例紹介</div>
            <div class="point3_body_text">研ぎの最新事例をご紹介致します。</div>
        </div>
        <div class="before">
            <div class="owl-two owl-carousel owl-theme">
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
        <div class="comparison_btn__div">
            <a href="{{ route('QA') }}" class="custom_topics_btn__button"><span>もっと詳しく見る&nbsp;</span></a>
        </div>
    </div>

    {{-- Before/After End --}}

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
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                autoplay: true,
                smartSpeed: 500,
                nav: true,
                navText: [$('.am-next1'),$('.am-prev1')],
                dots: true,
                lazyLoad: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            })
            $('.owl-two').owlCarousel({
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
                        items: 4
                    }
                }
            })
        });
    </script>
@endsection
