
@extends('layouts.app')

@section('content')

{{-- Header Start --}}

<div class="nav">
    <div class="nav_img">
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
            <div class="bottomtext2">研磨実績</div>
        </div>
        <div class="bottom_img"></div>
        <div class="social">
            
        </div>
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
</div>

{{-- Header End --}}

{{-- Admin part Start --}}

<div class="admin_tab">
    <button class="admin_tablinks" id="tadmin_London">商品EC</button>
    <button class="admin_tablinks" id="tadmin_Paris">発送管理</button>
    <button class="admin_tablinks" id="tadmin_Tokyo">研ぎ・顧客管理</button>
</div>
  
<div id="admin_London" class="admin_tabcontent">
    <h3>商品EC</h3>
    <table class="table text-center table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>商品名</th>
            <th>タイプ</th>
            <th>価格</th>
            <th>会員向け価格</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($product as $item1)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $item1['product_name'] }}</td>
                <td>{{ $item1['product_color'] }}</td>
                <td>{{ $item1['selling_price'] }}</td>
                <td>{{ $item1['discount_price'] }}</td>
                <td><button class="btn btn-success myBtn1">編集</button></td>
                <td><button class="btn-warning btn">消去</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="admin_Paris" class="admin_tabcontent">
    <h3>発送管理</h3>
    <table class="table text-center table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>お名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th>都道府県</th>
            <th>市区町村</th>
            <th>以降の住所</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($shipping as $item2)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $item2['ship_name'] }}</td>
                <td>{{ $item2['ship_phone'] }}</td>
                <td>{{ $item2['ship_email'] }}</td>
                <td>{{ $item2['ship_province'] }}</td>
                <td>{{ $item2['ship_city'] }}</td>
                <td>{{ $item2['ship_address'] }}</td>
                <td><button class="btn btn-success myBtn2">編集</button></td>
                <td><button class="btn-warning btn">消去</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="admin_Tokyo" class="admin_tabcontent">
    <h3>研ぎ・顧客管理</h3>
    <table class="table text-center table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>お名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th>郵便番号</th>
            <th>都道府県</th>
            <th>市区町村</th>
            <th>以降の住所</th>
            <th>決済方法</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($order as $item3)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $item3['order_name'] }}</td>
                <td>{{ $item3['order_phone'] }}</td>
                <td>{{ $item3['order_email'] }}</td>
                <td>{{ $item3['order_zipcode'] }}</td>
                <td>{{ $item3['order_province'] }}</td>
                <td>{{ $item3['order_city'] }}</td>
                <td>{{ $item3['order_address'] }}</td>
                <td>{{ $item3['payment_type'] }}</td>
                <td><button class="btn btn-success myBtn3">編集</button></td>
                <td><button class="btn-warning btn">消去</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- The First DATA Modal -->
<div class="modal fade" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">商品EC管理編集</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                Modal body..
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
            </div>
            
        </div>
    </div>
</div>
  

<!-- The Second DATA Modal -->
<div class="modal fade" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">発送管理編集</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                Modal body..
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
            </div>
            
        </div>
    </div>
</div>

<!-- The Third DATA Modal -->
<div class="modal fade" id="myModal3">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">研ぎ・顧客管理編集</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="name1">お名前:</label>
                    <input type="text" class="form-control" id="name1">
                </div>                
                <div class="form-group">
                    <label for="phone1">電話番号:</label>
                    <input type="text" class="form-control" id="phone1">
                </div>
                <div class="form-group">
                    <label for="email1">メールアドレス:</label>
                    <input type="text" class="form-control" id="email1">
                </div>
                <div class="form-group">
                    <label for="zipcode1">郵便番号:</label>
                    <input type="text" class="form-control" id="zipcode1">
                </div>
                <div class="form-group">
                    <label for="province1">都道府県:</label>
                    <input type="text" class="form-control" id="province1">
                </div>
                <div class="form-group">
                    <label for="city1">市区町村	:</label>
                    <input type="text" class="form-control" id="city1">
                </div>
                <div class="form-group">
                    <label for="address1">以降の住所:</label>
                    <input type="text" class="form-control" id="address1">
                </div>
                <div class="form-group">
                    <label for="paymethod1">決済方法:</label>
                    <input type="text" class="form-control" id="paymethod1">
                </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
            </div>
            
        </div>
    </div>
</div>
{{-- Admin part End --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>    
    

    $(document).ready(function () {
        $("#tadmin_London").addClass(" active");
        $("#admin_London").show();
        $("#tadmin_London").click(function () {
            $(".admin_tabcontent").hide();
            $(".admin_tablinks").removeClass(" active");
            $(this).addClass(" active");
            $("#admin_London").show();
        })
        $("#tadmin_Paris").click(function () {
            $(".admin_tabcontent").hide();
            $(".admin_tablinks").removeClass(" active");
            $(this).addClass(" active");
            $("#admin_Paris").show();
        })
        $("#tadmin_Tokyo").click(function () {
            $(".admin_tabcontent").hide();
            $(".admin_tablinks").removeClass(" active");
            $(this).addClass(" active");
            $("#admin_Tokyo").show();
        })
        $("#sidenav_open").click(function() {
            $("#mySidenav").css("width", "250px");
        })
        
        $("#sidenav_close").click(function() {
            $("#mySidenav").css("width", "0px");
        })
        
        $(".myBtn1").click(function(){
            $("#myModal1").modal();
        });

        $(".myBtn2").click(function(){
            $("#myModal2").modal();
        });


        $(".myBtn3").click(function(){
            $("#myModal3").modal();
        });
    })

</script>

@endsection