<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/xiaomi.css') }}"/>
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animate-colors-min.js') }}"></script>
</head>
<body>
     <div class="head_box">
         <div id="head_wrap">
             <div id="head_nav">
                 <a class="head_nav_a" href="http://www.mi.com/">小米网</a>
                 <span>|</span>
                 <a class="head_nav_a" href="http://www.miui.com/">MIUI</a>
                 <span>|</span>
                 <a class="head_nav_a" href="http://www.miliao.com/">米聊</a>
                 <span>|</span>
                 <a class="head_nav_a" href="http://game.xiaomi.com/hy/index.html">游戏</a>
                 <span>|</span>
                 <a class="head_nav_a" href="http://www.duokan.com/">多看阅读</a>
                 <span>|</span>
                 <a class="head_nav_a" href="https://i.mi.com/">云服务</a>
                 <span>|</span>
                 <a class="head_nav_a" href="http://www.mi.com/c/appdownload/">小米移动版</a>
                 <span>|</span>
                 <a class="head_nav_a" href="http://static.mi.com/feedback/">问题反馈</a>
                 <span>|</span>
                 <a class="head_nav_a" id="Select_Region_but">Select Region</a>
             </div>
              @if(!empty(session('user')))
                 <div id="head_right">
                     <div id="head_landing">
                         <a class="head_nav_a"><span>尊敬的 {{ session('user')->user_name }} 用户：<span></a>
                         <span>|</span>
                         <a class="head_nav_a" href="info">个人中心</a>
                         <span>|</span>
                         <a class="head_nav_a" href="home/logout">退出</a>
                     </div>
                     <div id="head_car">
                         <a class="head_car_text" href="">购物车（0）</a>
                         <div id="car_content" style="height: 0px;width:0px ;background-color: #edffc6;z-index: 999">
                             <a class="car_text"></a>
                         </div>
                     </div>
                 </div>
              @else
                 <div id="head_right">
                     <div id="head_landing">
                         <a class="head_nav_a" href="home/login">登录</a>
                         <span>|</span>
                         <a class="head_nav_a" href="home/register">注册</a>
                     </div>
                     <div id="head_car">
                         <a class="head_car_text" href="">购物车（0）</a>
                         <div id="car_content" style="height: 0px;width:0px ;background-color: #edffc6;z-index: 999">
                             <a class="car_text"></a>
                         </div>
                     </div>
                 </div>
              @endif
         </div>
     </div>
     <div id="main_head_box">
         <div id="menu_wrap">
             <div id="menu_logo">
                 <img src="img/logo1.png" style="height:70px;">
             </div>
             <div id="menu_nav">
                 <ul>
                    <li style="color:#FFFFFF;">111111</li>
                    <img src="img/111.jpg" style="width:550px;height:70px;margin-top:15px;">
                 </ul>
             </div>
             <div id="find_wrap">
                 <div id="find_bar">
                     <input type="text" id="find_input">
                 </div>
                 <div id="find_but">搜索</div>
             </div>
         </div>
     </div>
     <div id="menu_content_bg" style="height: 0px;">
         <div id="menu_content_wrap">
             <ul style="top: 0px;">
                 <li id="xiaomiphone">
                     <div class="menu_content">
                         <img src="img/mi4!160x110.jpg">
                         <p class="menu_content_tit">小米手机4</p>
                         <p class="menu_content_price">1499元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/minote!160x110.jpg">
                         <p class="menu_content_tit">小米NOTE标准版</p>
                         <p class="menu_content_price">1999元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/minotepro!160x110.jpg">
                         <p class="menu_content_tit">小米NOTE顶配版</p>
                         <p class="menu_content_price">2999元起</p>
                     </div>
                 </li>
                 <li id="hongmiphone">
                     <div class="menu_content">
                         <img src="img/hongmi2a!160x110.jpg">
                         <p class="menu_content_tit">红米手机2A</p>
                         <p class="menu_content_price">499元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/hongmi2!160x110.jpg">
                         <p class="menu_content_tit">红米手机2</p>
                         <p class="menu_content_price">599元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/note!160x110.jpg">
                         <p class="menu_content_tit">红米NOTE</p>
                         <p class="menu_content_price">699元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/note2!160x110.jpg">
                         <p class="menu_content_tit">红米NOTE2</p>
                         <p class="menu_content_price">799元</p>
                     </div>
                 </li>
                 <li id="pingban">
                     <div class="menu_content">
                         <img src="img/mipad16!160x110.jpg">
                         <p class="menu_content_tit">小米平板16G</p>
                         <p class="menu_content_price">1299元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/mipad64!160x110.jpg">
                         <p class="menu_content_tit">小米平板64G</p>
                         <p class="menu_content_price">1499元起</p>
                     </div>
                 </li>
                 <li id="tv">
                     <div class="menu_content">
                         <img src="img/mitv40!160x110.jpg">
                         <p class="menu_content_tit">小米电视2&nbsp;40英寸</p>
                         <p class="menu_content_price">1999元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/mitv48!160x110.jpg">
                         <p class="menu_content_tit">小米电视2S&nbsp;48英寸</p>
                         <p class="menu_content_price">2999元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/mitv49!160x110.jpg">
                         <p class="menu_content_tit">小米电视2&nbsp;49英寸</p>
                         <p class="menu_content_price">3399元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/mitv55!160x110.jpg">
                         <p class="menu_content_tit">小米电视2&nbsp;55英寸</p>
                         <p class="menu_content_price">4499元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/hezimini!160x110.jpg">
                         <p class="menu_content_tit">小米盒子MINI版</p>
                         <p class="menu_content_price">199元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/hezis!160x110.jpg">
                         <p class="menu_content_tit">小米盒子增强版</p>
                         <p class="menu_content_price">299元</p>
                     </div>
                 </li>
                 <li id="luyou">
                     <div class="menu_content">
                         <img src="img/miwifi!160x110.jpg">
                         <p class="menu_content_tit">全新小米路由器</p>
                         <p class="menu_content_price">699元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/miwifimini!160x110.jpg">
                         <p class="menu_content_tit">小米路由器&nbsp;MINI</p>
                         <p class="menu_content_price">129元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/miwifilite!160x110.jpg">
                         <p class="menu_content_tit">小米路由器&nbsp;青春版</p>
                         <p class="menu_content_price">79元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/wifiExtension!160x110.jpg">
                         <p class="menu_content_tit">小米WIFI放大器</p>
                         <p class="menu_content_price">39元</p>
                     </div>
                 </li>
                 <li id="yingjian">
                     <div class="menu_content">
                         <img src="http://c1.mifile.cn/f/i/15/goods/nav/scale!160x110.jpg">
                         <p class="menu_content_tit">体重称</p>
                         <p class="menu_content_price">99元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/xiaoyi!160x110.jpg">
                         <p class="menu_content_tit">摄像头</p>
                         <p class="menu_content_price">129元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/yicamera!160x110.jpg">
                         <p class="menu_content_tit">运动相机</p>
                         <p class="menu_content_price">399元起</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/ihealth!160x110.jpg">
                         <p class="menu_content_tit">血压计</p>
                         <p class="menu_content_price">199元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/chazuo!160x110.jpg">
                         <p class="menu_content_tit">智能插座</p>
                         <p class="menu_content_price">59元</p>
                     </div>
                     <span class="menu_content_line"></span>
                     <div class="menu_content">
                         <img src="img/smart!160x110.jpg">
                         <p class="menu_content_tit">查看全部
                             <br>智能硬件</p>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
    @yield("content");
     <div id="foot_box">
         <div id="foot_wrap">
             <div class="foot_top">
                 <ul>
                     <li>1小时快修服务</li>
                     <li class="font_top_i">|</li>
                     <li>7天无理由退货</li>
                     <li class="font_top_i">|</li>
                     <li>15天免费换货</li>
                     <li class="font_top_i">|</li>
                     <li>满150元包邮</li>
                     <li class="font_top_i">|</li>
                     <li>520余家售后网点</li>
                 </ul>
             </div>
             <div class="foot_bottom">
                 <div class="foot_bottom_l">
                     <dl>
                         <dt>帮助中心</dt>
                         <dd>购物指南</dd>
                         <dd>支付方式</dd>
                         <dd>配送方式</dd>
                     </dl>
                     <dl>
                         <dt>服务支持</dt>
                         <dd>售后政策</dd>
                         <dd>自助服务</dd>
                         <dd>相关下载</dd>
                     </dl>
                     <dl>
                         <dt>小米之家</dt>
                         <dd>小米之家</dd>
                         <dd>服务网点</dd>
                         <dd>预约亲临到店服务</dd>
                     </dl>
                     <dl>
                         <dt>关注我们</dt>
                         <dd>新浪微博</dd>
                         <dd>小米部落</dd>
                         <dd>官方微信</dd>
                     </dl>
                     <dl>
                        <dt>友情链接</dt>
                        @foreach($link as $user)
                             <dd><a style="color:#CACACA" href="{{ $user->links_url }}">{{ $user->links_name }}</a></dd>
                         @endforeach 
                     </dl>
                 </div>
                 <div class="foot_bottom_r">
                     <a>400-100-5678</a>
                     <a>周一至周日 8:00-18:00</a>
                     <a>（仅收市话费）</a>
                     <span> 24小时在线客服</span>
                 </div>
             </div>
         </div>
         <div class="foot_note_box">
             <div class="foot_note_wrap">
                 <div class="foot_note_con">
                     <span class="foot_logo"><img src="img/mi-logo.png" width="38px" height="38px"></span>
						<span class="foot_note_txt">
							<a>小米网</a><h>|</h><a>MIUI</a><h>|</h><a>米聊</a><h>|</h><a>多看书城</a><h>|</h><a>小米路由器</a><h>|</h><a>小米后院</a><h>|</h><a>小米天猫店</a><h>|</h><a>小米淘宝直营店</a><h>|</h><a>小米网盟</a><h>|</h><a>问题反馈</a><h>|</h><a>Select Region</a>
						    <a> 5555555号</a>
						</span>
                 </div>

             </div>
         </div>
         <div class="foot_note_box">
            <h2 style="font-family:Microsoft YaHei;color:#CACACA;text-align:center">探索黑科技，小米为发烧而生！</h2>
         </div>
     </div>
        <script type="text/javascript" src="{{ asset('js/xiaomi.js') }}"></script>
</body>
</html>