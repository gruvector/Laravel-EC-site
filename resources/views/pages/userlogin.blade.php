@extends('layouts.app')

@section('content')
    <!-- Characteristics -->
    

    {{-- Header Start --}}

    <div class="nav">
        <div class="nav_img1">
            <div class="topnav">
                    <div class="nav_logo__div" id="sidenav_open">
                        <div class="nav_logo__circle">
                            <span class="nav_logo_circle__span"></span>
                        </div>
                        <div class="nav_logo_text__div">
                            <p class="nav_logo__text">ロゴ</p>
                        </div>
                    </div>

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

    {{-- Topics Start --}}
    <div class="login_part">
        <div class="login_desc">
            <div class="login_desc0">ログインする</div>
            <div class="login_desc1">
                会員登録がお済みでない方は、<br />
                <a href="#">こちら</a>から無料会員登録してください。
            </div>
        </div>
        <form action="{{route('llogin')}}" method="post" class="loginform">
            @csrf
            <label for="login_user">ユーザー名またはメールアドレス</label>
            <div class="email_icon">
                <input type="email" name="email" class="login_user__input" required>
                <img src="{{ "assets/img/email_icon.png" }}" alt="">
            </div>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif<br />
            <label for="login_pwd">パスワード</label>
            <div class="email_icon">
                <input type="password" name="password" class="login_user__input" required>
                <img src="{{ "assets/img/pwd_icon.png" }}" alt="">
            </div>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif<br />
            <div class="login_bottom">
                <div><input type="checkbox" name="login_remember" id="">ログイン情報を記憶する</div>
                <a class="login_forget" href="{{route('dashboard')}}">パスワード紛失の方へ</a>
            </div>
            <button type="submit" class="custom_topics_btn__button" style="width: 100%;">ログイン</button>
        </form>
    </div>
    {{-- Topics End --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#sidenav_open").click(function() {
                $("#mySidenav").css("width", "250px");
            })
            
            $("#sidenav_close").click(function() {
                $("#mySidenav").css("width", "0px");
            })

            $(document).on("load", function() {
                $("#mySidenav").css("width", "0px");
            })
                
        });
    </script>
@endsection
