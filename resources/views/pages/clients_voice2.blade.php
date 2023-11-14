
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
            <div class="bottomtext2">研磨実績</div>
        </div>
        <div class="bottom_img"></div>
        <div class="social">
            
        </div>
    </div>
</div>

{{-- Header End --}}


{{-- Voice start --}}

<div class="voice2">
    <div class="voice2_head">
        ここに施工実績タイトルが入ります。ここに施工実績タイトルが入ります。
        ここに施工実績タイトルが入ります
    </div>
    <div class="voice2_date">
        <div class="voice2_date__btn">
            日付
        </div>
        <div class="voice2_date__btntext">
            2023.10.20
        </div>
        <div class="voice2_date__btn">
            カテゴリー
        </div>
        <div class="voice2_date__btntext">
            クリーニング
        </div>
    </div>
    <div class="voice2_part">
        <div class="voice2_photo">
            <img src="{{"assets/img/4191365_m.png"}}" alt="">
        </div>
        <div class="voice2_text1">
            購入した包丁がガタマスカス鋼でしたので、自分で研ぐと模様が消えて
            しまうかも…と思い、研ぎ直しをお願いしました。帰ってきた包丁はまるで新品で、
            作る料理もまた元のように美味しくなった気がします。
        </div>
        <div class="voice2_text2">
            <div class="voice2_text2__text">
                ここに施工実績タイトルが入ります。ここに施工実績タイト<br />
                ルが入ります。ここに施工実績タイトルが入ります
            </div>
        </div>
        <div class="voice2_text1">
            購入した包丁がガタマスカス鋼でしたので、自分で研ぐと模様が消えて
            しまうかも…と思い、研ぎ直しをお願いしました。帰ってきた包丁はまるで新品で、
            作る料理もまた元のように美味しくなった気がします。
        </div>
    </div>
</div>

{{-- Voice End --}}

{{-- working_photo Start --}}

<div class="workphoto">
    <div class="workphoto_head">
        施工写真
    </div>
    <div class="workphoto_photo">
        <div class="workphoto_photo1"><img src="{{"assets/img/Group_11510.png"}}" alt=""></div>
        <div class="workphoto_photo2"><img src="{{"assets/img/Group_11512.png"}}" alt=""></div>
        <div class="workphoto_photo1"><img src="{{"assets/img/Group_11513.png"}}" alt=""></div>
        <div class="workphoto_photo2"><img src="{{"assets/img/Group_11511.png"}}" alt=""></div>
    </div>
</div>

{{-- working_photo End --}}

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
