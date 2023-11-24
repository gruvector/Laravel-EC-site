<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneTech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="{{"frontend/styles/bootstrap4/bootstrap.min.css"}}">
    <link rel="stylesheet" type="text/css" href="{{"frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css"}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="{{"frontend/styles/main_styles.css"}}">

    <!-- Toastr css -->
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        window.onload = function() {
            history.pushState({}, '', '/hidden-url');
        };
    </script>
</head>

<body>
            @yield('content')

            <!-- Footer -->

                <footer class="footer">
                    <div class="footer1">
                        <div class="footer1_logo">LOGO</div>
                        <div class="footer1_text">NeoPen株式会社</div>
                        <div class="footer1_text">
                            愛知県名古屋市中区錦一丁目17番13号<br />
                            伏見名興ビル２階
                        </div>
                    </div>
                    <div class="footer2">
                        <div class="footer2_link">
                                <a href="#" class="footer2_link__link">トップ</a>
                                <a href="#" class="footer2_link__link">テキスト</a>
                                <a href="#" class="footer2_link__link">テキスト</a>
                                <a href="#" class="footer2_link__link">テキスト</a>
                                <a href="#" class="footer2_link__link">テキスト</a>
                        </div>
                        <div class="footer2_text">
                            <div class="footer2_text1">利用規約</div>
                            <div class="footer2_text2">プライバシーポリシー</div>
                            <div class="footer2_text3">Copyright 2022.All Rights Reserved</div>
                        </div>
                        
                    </div>
                    
                </footer>

            <!-- Copyright -->

            
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
    <script src="{{"frontend/styles/bootstrap4/popper.js"}}"></script>
    {{-- <script src="frontend/styles/bootstrap4/bootstrap.min.js"></script> --}}
    <script src="{{"frontend/styles/bootstrap4/bootstrap.bundle.min.js"}}"></script>
 
    <script src="{{"frontend/plugins/slick180/slick.js"}}"></script>
    <script src="{{"frontend/plugins/easing/easing.js"}}"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info"
            switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message ");
            break;
            case 'success':
            toastr.success(" {{ Session::get('message ");
            break;
            case 'warning':
            toastr.warning(" {{ Session::get('message ");
            break;
            case 'error':
            toastr.error(" {{ Session::get('message ");
            break;
            }
        @endif

    </script>

</body>

</html>
