
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
    <button class="btn btn-success create_btn" id="create_ec"><h4>+ 追加</h4></button>
    <table class="table text-center table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>商品名</th>
            <th>タイプ</th>
            <th>価格</th>
            <th>会員向け価格</th>
            <th>在庫</th>
            <th></th>
            <th></th>
            <th style="display: none">id1</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($product as $item1)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td class="show_name">{{ $item1['product_name'] }}</td>
                <td class="show_color">{{ $item1['product_color'] }}</td>
                <td class="show_selprice">{{ $item1['selling_price'] }}</td>
                <td class="show_disprice">{{ $item1['discount_price'] }}</td>
                <td class="show_quantity">{{ $item1['product_quantity'] }}</td>
                <td class="hide_details" style="display: none">{{ $item1['product_details'] }}</td>
                <td><button class="btn btn-success myBtn1">編集</button></td>
                <td><button class="btn-warning btn myBtn4">消去</button></td>
                <td style="display: none" class="hidden_id">{{ $item1['id'] }}</td>
                <td style="display: none" class="hidden_i">1</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="admin_Paris" class="admin_tabcontent">
    <h3>発送管理</h3>
    <button class="btn btn-success create_btn" id="create_ship"><h4>+ 追加</h4></button>
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
                <td class="show_name">{{ $item2['ship_name'] }}</td>
                <td class="show_phone">{{ $item2['ship_phone'] }}</td>
                <td class="show_email">{{ $item2['ship_email'] }}</td>
                <td class="show_province">{{ $item2['ship_province'] }}</td>
                <td class="show_city">{{ $item2['ship_city'] }}</td>
                <td class="show_address">{{ $item2['ship_address'] }}</td>
                <td><button class="btn btn-success myBtn2">編集</button></td>
                <td><button class="btn-warning btn myBtn4">消去</button></td>
                <td style="display: none" class="hidden_id">{{ $item2['id'] }}</td>
                <td style="display: none" class="hidden_i">2</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="admin_Tokyo" class="admin_tabcontent">
    <h3>研ぎ・顧客管理</h3>
    <button class="btn btn-success create_btn" id="create_order"><h4>+ 追加</h4></button>
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
                <td class="show_name">{{ $item3['order_name'] }}</td>
                <td class="show_phone">{{ $item3['order_phone'] }}</td>
                <td class="show_email">{{ $item3['order_email'] }}</td>
                <td class="show_zipcode">{{ $item3['order_zipcode'] }}</td>
                <td class="show_province">{{ $item3['order_province'] }}</td>
                <td class="show_city">{{ $item3['order_city'] }}</td>
                <td class="show_address">{{ $item3['order_address'] }}</td>
                <td class="show_type">{{ $item3['payment_type'] }}</td>
                <td><button class="btn btn-success myBtn3">編集</button></td>
                <td><button class="btn-warning btn myBtn4">消去</button></td>
                <td style="display: none" class="hidden_id">{{ $item3['id'] }}</td>
                <td style="display: none" class="hidden_i">3</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- The First DATA Modal -->
<div class="modal fade" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="{{ route('edit_ec') }}">
            @csrf
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">商品EC管理編集</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="name1">商品名:</label>
                    <input type="text" class="form-control" id="product_name1" name="product_name1">
                </div>                
                <div class="form-group">
                    <label for="type1">タイプ:</label>
                    <input type="text" class="form-control" id="type1" name="type1">
                </div>
                <div class="form-group">
                    <label for="price1">価格:</label>
                    <input type="text" class="form-control" id="price1" name="price1">
                </div>
                <div class="form-group">
                    <label for="user_price1">会員向け価格	:</label>
                    <input type="text" class="form-control" id="user_price1" name="user_price1">
                    <input type="hidden" name="id1" id="id1">
                    <input type="hidden" name="store_type1" id="store_type1">
                </div>
                <div class="form-group">
                    <label for="quantity1">在庫:</label>
                    <input type="text" class="form-control" id="quantity1" name="quantity1">
                </div>
                <div class="form-group">
                    <label for="details1">詳細:</label>
                    <textarea type="text" class="form-control" id="details1" name="details1"></textarea>
                </div>
                
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">OK</button>
            </div>
        </form> 
        </div>
    </div>
</div>
  

<!-- The Second DATA Modal -->
<div class="modal fade" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="{{route('edit_ship')}}">
            @csrf
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">発送管理編集</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="name1">お名前:</label>
                    <input type="text" class="form-control" id="name2" name="name2">
                </div>                
                <div class="form-group">
                    <label for="phone1">電話番号:</label>
                    <input type="text" class="form-control" id="phone2" name="phone2">
                </div>
                <div class="form-group">
                    <label for="email1">メールアドレス:</label>
                    <input type="text" class="form-control" id="email2" name="email2">
                </div>
                <div class="form-group">
                    <label for="province1">都道府県:</label>
                    <input type="text" class="form-control" id="province2" name="province2">
                </div>
                <div class="form-group">
                    <label for="city1">市区町村	:</label>
                    <input type="text" class="form-control" id="city2" name="city2">
                </div>
                <div class="form-group">
                    <label for="address1">以降の住所:</label>
                    <input type="text" class="form-control" id="address2" name="address2">
                    <input type="hidden" name="id2" id="id2">
                    <input type="hidden" name="store_type2" id="store_type2">
                </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">OK</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- The Third DATA Modal -->
<div class="modal fade" id="myModal3">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="{{route('edit_user')}}">
            @csrf
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">研ぎ・顧客管理編集</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="name1">お名前:</label>
                    <input type="text" class="form-control" id="name3" name="name3">
                </div>                
                <div class="form-group">
                    <label for="phone1">電話番号:</label>
                    <input type="text" class="form-control" id="phone3" name="phone3">
                </div>
                <div class="form-group">
                    <label for="email1">メールアドレス:</label>
                    <input type="text" class="form-control" id="email3" name="email3">
                </div>
                <div class="form-group">
                    <label for="zipcode1">郵便番号:</label>
                    <input type="text" class="form-control" id="zipcode3" name="zipcode3">
                </div>
                <div class="form-group">
                    <label for="province1">都道府県:</label>
                    <input type="text" class="form-control" id="province3" name="province3">
                </div>
                <div class="form-group">
                    <label for="city1">市区町村	:</label>
                    <input type="text" class="form-control" id="city3" name="city3">
                </div>
                <div class="form-group">
                    <label for="address1">以降の住所:</label>
                    <input type="text" class="form-control" id="address3" name="address3">
                </div>
                <div class="form-group">
                    <label for="paymethod1">決済方法:</label>
                    <input type="text" class="form-control" id="paymethod3" name="paymethod3">
                    <input type="hidden" name="id3" id="id3">
                    <input type="hidden" name="store_type3" id="store_type3">
                </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">OK</button>
            </div>
        </form>    
        </div>
    </div>
</div>

<div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <form action="{{route('delete_data')}}">
        @csrf
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">データを削除してもよろしいですか?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>      
        <!-- Modal footer -->
        <div class="modal-footer">
            <input type="hidden" name="id4" id="id4">
            <input type="hidden" name="i4" id="i4">
            <button type="submit" class="btn btn-danger">消去</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
        </div>
    </form>    
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
            var parent = $(this).parent().siblings("td.hidden_id").text();
            $("#id1").val(parent);
            $("#product_name1").val($(this).parent().siblings("td.show_name").text());
            $("#quantity1").val($(this).parent().siblings("td.show_quantity").text());
            $("#type1").val($(this).parent().siblings("td.show_color").text());
            $("#price1").val($(this).parent().siblings("td.show_selprice").text());
            $("#user_price1").val($(this).parent().siblings("td.show_disprice").text());
            $("#details1").html($(this).parent().siblings("td.hide_details").html());
            $("#store_type1").val("update");

        });
        $("#create_ec").click(function () {
            $("#myModal1").modal()
            $("#store_type1").val("create");
        })
        $(".myBtn2").click(function(){
            $("#myModal2").modal();
            var parent = $(this).parent().siblings("td.hidden_id").text();
            $("#id2").val(parent);
            $("#name2").val($(this).parent().siblings("td.show_name").text());
            $("#phone2").val($(this).parent().siblings("td.show_phone").text());
            $("#email2").val($(this).parent().siblings("td.show_email").text());
            $("#province2").val($(this).parent().siblings("td.show_province").text());
            $("#city2").val($(this).parent().siblings("td.show_city").text());
            $("#address2").val($(this).parent().siblings("td.show_address").text());
            $("#store_type2").val("update");
        });
        $("#create_ship").click(function () {
            $("#myModal2").modal();
            $("#store_type2").val("create");
        })
        $(".myBtn3").click(function(){
            $("#myModal3").modal();
            var parent = $(this).parent().siblings("td.hidden_id").text();
            $("#id3").val(parent);
            $("#name3").val($(this).parent().siblings("td.show_name").text());
            $("#phone3").val($(this).parent().siblings("td.show_phone").text());
            $("#email3").val($(this).parent().siblings("td.show_email").text());
            $("#province3").val($(this).parent().siblings("td.show_province").text());
            $("#city3").val($(this).parent().siblings("td.show_city").text());
            $("#address3").val($(this).parent().siblings("td.show_address").text());
            $("#zipcode3").val($(this).parent().siblings("td.show_zipcode").text());
            $("#paymethod3").val($(this).parent().siblings("td.show_type").text());
            $("#store_type3").val("update");
        });
        $("#create_order").click(function () {
            $("#myModal3").modal();
            $("#store_type3").val("create");
        })
        $(".myBtn4").click(function(){
            $("#myModal4").modal();
            var parent = $(this).parent().siblings("td.hidden_id").text();
            $("#id4").val(parent);
            $("#i4").val($(this).parent().siblings("td.hidden_i").text())
        });
    })

</script>

@endsection