@extends('home.base.base')
@section('title','小米商城-小米手机、红米Note、小米笔记本')
@section('content')
     <div id="big_banner_wrap">
         <ul id="banner_menu_wrap">
            @foreach($pid as $list)
             <li class="active"img>
                 <a>{{ $list->category_name }}</a>
                 <a class="banner_menu_i">&gt;</a>
                 <div class="banner_menu_content" style="width: 300px;">
                    @foreach($goods as $good)
                     <ul class="banner_menu_content_ul">
                         @if($list->id == $good->pid)
                         <li class='a'>
                             <a><img src="{{ URL('uploads/goods') }}/s_{{$good->goods_img}}"></a>　<a>{{ $good->goods_name }}</a><span><a href='{{ URL("home/phone/{$good->id}") }}'>选购</a></span>
                         </li>
                         @endif 
                     </ul>
                     @endforeach
                 </div>           
             </li>
             @endforeach 
         </ul>

         <div id="big_banner_pic_wrap">
             <ul id="big_banner_pic">
                 <li><img src="img/T1hiDvBvVv1RXrhCrK.jpg"></li>
                 <li><img src="img/T1jrxjB_VT1RXrhCrK.jpg"></li>
                 <li><img src="img/T1oTJjBKKT1RXrhCrK.jpg"></li>
                 <li><img src="img/T1RICjB7DT1RXrhCrK.jpg"></li>
                 <li><img src="img/T1vWdTBKDv1RXrhCrK.jpg"></li>
             </ul>
         </div>
         <div id="big_banner_change_wrap">
             <div id="big_banner_change_prev"> &lt;</div>
             <div id="big_banner_change_next">&gt;</div>
         </div>
     </div>
     <div id="head_other_wrap">
         <div id="head_other">
             <ul>
                 <li>
                     <div id="div1">
                         <p>START</p>
                         <p>开房购买</p>
                     </div>
                 </li>
                 <li>
                     <div id="div2">
                         <p>GROUND</p>
                         <p>企业团购</p>
                     </div>
                 </li>
                 <li>
                     <div id="div3">
                         <p>RETROFIT</p>
                         <p>官方产品</p>
                     </div>
                 </li>
                 <li>
                     <div id="div4">
                         <p>CHANNEL</p>
                         <p>F码通道</p>
                     </div>
                 </li>
                 <li>
                     <div id="div5">
                         <p>RECHARGE</p>
                         <p>话费充值</p>
                     </div>
                 </li>
                 <li>
                     <div id="div6">
                         <p>SECURITY</p>
                         <p>防伪检查</p>
                     </div>
                 </li>
             </ul>
         </div>
         <div class="head_other_ad"><img src="img/T184E_BQWT1RXrhCrK.jpg"></div>
         <div class="head_other_ad"><img src="img/T1yvd_BQDT1RXrhCrK.jpg"></div>
         <div class="head_other_ad"><img src="img/T1mahQBmKT1RXrhCrK.jpg"></div>
    </div>
     <div id="head_hot_goods_wrap">
         <div id="head_hot_goods_title">
             <span class="title_span">小米明星单品</span>
             <div id="head_hot_goods_change">
                 <span id="head_hot_goods_prave"><</span>
                 <span id="head_hot_goods_next">></span>
             </div>
         </div>
         <div id="head_hot_goods_content">
             <ul>
                 <li>
                     <a><img src="img/T1riKjB7VT1RXrhCrK.jpg"></a>
                     <a>小米电视2/2S 全系列</a>
                     <a>40/48/49/55英寸 现货购买</a>
                 </li>
                 <li>
                     <a><img src="img/T19AbjBCDT1RXrhCrK.jpg"></a>
                     <a>小米平板</a>
                     <a>全球首款 NVIDIA Tegra K1 平板</a>
                 </li>
                 <li>
                     <a><img src="img/T1meZjBCAT1RXrhCrK.jpg"></a>
                     <a>小米盒子增强版 1G</a>
                     <a>首款4K超高清网络机顶盒</a>
                 </li>
                 <li>
                     <a><img src="img/T1tsEgB7DT1RXrhCrK.jpg"></a>
                     <a>全新小米路由器</a>
                     <a>顶配路由器，企业级性能</a>
                 </li>
                 <li>
                     <a><img src="img/T10TJjB5hT1RXrhCrK.jpg"></a>
                     <a>小米头戴式耳机</a>
                     <a>媲美主流千元级头戴耳机</a>
                 </li>
                 <li>
                     <a><img src="img/T1hLhjB_AT1RXrhCrK.jpg"></a>
                     <a>小米插线板</a>
                     <a>3重安全保护，插线板中的艺术品</a>
                 </li>
                 <li>
                     <a><img src="img/T1KDAjBCAT1RXrhCrK.jpg"></a>
                     <a>小米路由器mini</a>
                     <a>主流双频AC智能路由器</a>
                 </li>
                 <li>
                     <a><img src="img/T16eEjBKhT1RXrhCrK.jpg"></a>
                     <a>小米移动电源10000mAh</a>
                     <a>高密度进口电芯，仅名片大小</a>
                 </li>
                 <li>
                     <a><img src="img/T1JnWjBCCT1RXrhCrK.jpg"></a>
                     <a>小米蓝牙耳机</a>
                     <a>2015德国IF大奖，高清通话音质</a>
                 </li>
                 <li>
                     <a><img src="img/T1BsbjBvLT1RXrhCrK.jpg"></a>
                     <a>小米活塞耳机</a>
                     <a>2015红点奖，独家音质优化专利</a>
                 </li>
             </ul>
         </div>
     </div>
     <div id="main_show_box">
         <div id="floor_1">
              <div id="floor_head">
                  <span class="title_span">智能硬件</span>
              </div>
         </div>
         <div class="floor_goods_wrap">
             <ul>
                 <li class="floor_goods_wrap_li">
                     <a><img src="img/T1IhLjBC_T1RXrhCrK.jpg"></a>
                 </li>
                 <li class="floor_goods_wrap_li">
                     <a class="floor_goods_img"><img src="img/T1odEjB5bT1RXrhCrK.jpg"></a>
                     <a class="floor_goods_tit">小米智能家庭套装</a>
                     <a class="floor_goods_txt">3分钟快速安装，30多种智能玩法</a>
                     <a class="floor_goods_price">199元</a>
                 </li>
                 <li class="floor_goods_wrap_li">
                     <a class="floor_goods_img"><img src="img/T1JKxvBXhv1RXrhCrK.jpg"></a>
                     <a class="floor_goods_tit">小米随身WIFI 8GB U盘版</a>
                     <a class="floor_goods_txt">随身上网神器，内置8GB U盘</a>
                     <a class="floor_goods_price">49.9元</a>
                 </li>
                 <li class="floor_goods_wrap_li">
                     <a class="floor_goods_img"><img src="img/T18yZQBCET1RXrhCrK.jpg"></a>
                     <a class="floor_goods_tit">小蚁智能摄像机</a>
                     <a class="floor_goods_txt">能看能听能说，手机远程观看</a>
                     <a class="floor_goods_price">149元</a>
                 </li>
                 <li class="floor_goods_wrap_li">
                     <a class="floor_goods_img"><img src="img/T1YoZQByYT1RXrhCrK.jpg"></a>
                     <a class="floor_goods_tit">小米体重称</a>
                     <a class="floor_goods_txt">高精度压力传感器 ｜ 手机管理全家健康</a>
                     <a class="floor_goods_price">99元</a>
                 </li>
                 <li class="floor_goods_wrap_li">
                     <a class="floor_goods_img"><img src="img/T16nVjBCKT1RXrhCrK.jpg"></a>
                     <a class="floor_goods_tit">小蚁运动机</a>
                     <a class="floor_goods_txt">边玩边录边拍，手机随时分享</a>
                     <a class="floor_goods_price">399元</a>
                 </li>
                 <li class="floor_goods_wrap_li">
                     <a class="floor_goods_img"><img src="img/T18zWQB4WT1RXrhCrK.jpg"></a>
                     <a class="floor_goods_tit">小米路由器 mini</a>
                     <a class="floor_goods_txt">主流双频AC智能路由器，性价比之王</a>
                     <a class="floor_goods_price">129元</a>
                 </li>
                 <li class="floor_goods_wrap_li">
                     <a class="floor_goods_img"><img src="img/T1oixjB5bT1RXrhCrK.jpg"></a>
                     <a class="floor_goods_tit">小米智能插座</a>
                     <a class="floor_goods_txt">手机远程遥控开关，带USB接口</a>
                     <a class="floor_goods_price">59元</a>
                 </li>
                 <li class="floor_goods_wrap_li">
                     <a class="floor_goods_img"><img src="img/T1KzbQBvbT1RXrhCrK.jpg"></a>
                     <a class="floor_goods_tit">小米水质TDS检测笔</a>
                     <a class="floor_goods_txt">准确检测家中水质纯度</a>
                     <a class="floor_goods_price">39元</a>
                 </li>
                 <div style="clear:both;"></div>
             </ul>
         </div>
     </div>
@endsection 