@extends('layouts.app')

@section('content')
    <!-- Characteristics -->
    

    {{-- Header Start --}}

    <div class="nav">
        <div class="nav_img1">
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
                            <a href="{{ route('EC-intro') }}" class="mainnav_inside__link">テキスト</a>
                            <a href="{{ route('voice1') }}" class="mainnav_inside__link">テキスト</a>
                            <a href="{{ route('voice2') }}" class="mainnav_inside__link">テキスト</a>
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
        </div>
        <div class="bottom_img1"></div>
    </div>

    {{-- Header End --}}

    {{-- Topics Start --}}
    <div class="login_part">
        <div class="login_desc">
            <div class="login_desc0">ログインする</div>
            <div class="login_desc1">
                会員登録がお済みでない方は、<br />
                <a href="#">こちら</a>から無料会員登録してください。
            </div>
        </div>
        <form action="" method="post" class="loginform">
            @csrf
            <label for="login_user">ユーザー名またはメールアドレス</label>
            <div class="email_icon">
                <input type="email" name="login_user" class="login_user__input" required>
                <img src="{{ "assets/img/email_icon.png" }}" alt="">
            </div>
            <label for="login_pwd">パスワード</label>
            <div class="email_icon">
                <input type="password" name="login_pwd" class="login_user__input" required>
                <img src="{{ "assets/img/pwd_icon.png" }}" alt="">
            </div>
            <div class="login_bottom">
                <div><input type="checkbox" name="login_remember" id="">ログイン情報を記憶する</div>
                <a class="login_forget">パスワード紛失の方へ</a>
            </div>
            <button type="submit" class="custom_topics_btn__button" style="width: 100%;">ログイン</button>
        </form>
    </div>
    {{-- Topics End --}}
@endsection
