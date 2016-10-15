<!DOCTYPE html>
<html xml:lang="zh-CN">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=1226">
    <meta name="description" content="小米手机5开放购买页面支持4G网络，全网通，包括标准版、高配版、尊享版，有多种颜色可以选择">
    <meta name="keywords" content="小米5,小米手机,小米手机官网">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/phone/index.css') }}" media="all"></head>
  <body>
    <div class="site-header site-mini-header">
      <div class="container">
        <div class="header-logo">
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-f4006c1551f77f22', '//www.mi.com/index.html', 'pcpid']);" data-stat-id="f4006c1551f77f22" class="logo ir" href="{{ URL('/') }}" title="小米官网">小米官网</a></div>
        <div class="header-title" id="J_miniHeaderTitle"></div>
         @if(!empty(session('user')))
          <div class="topbar-info" id="J_userInfo">
            <a class="head_nav_a"><span>尊敬的 {{ session('user')->user_name }} 用户：<span></a>
            <span class="sep">|</span><span>&nbsp |</span><span>&nbsp</span>
             <a class="head_nav_a" href="">我的订单</a>
            </div>
          @else
           <div class="topbar-info" id="J_userInfo">
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-bf3aa4c80c0ac789', '//order.mi.com/site/login', 'pcpid']);" data-stat-id="bf3aa4c80c0ac789" class="link" href="http://order.mi.com/site/login?redirectUrl=http://item.mi.com/buyphone/mi5" data-needlogin="true">登录</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-749b1369201c13fb', 'https://account.xiaomi.com/pass/register', 'pcpid']);" data-stat-id="749b1369201c13fb" class="link" href="https://account.xiaomi.com/pass/register">注册</a>
            </div>
          @endif
      </div>
    </div>
    <!-- .site-mini-header END -->
  
    <div class="container breadcrumbs">
      <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-3c70fc7b75c45226', '//www.mi.com/index.html', 'pcpid']);" data-stat-id="3c70fc7b75c45226" href="http://www.mi.com/index.html">首页</a>
      <span class="sep">/</span>
      <span>购买小米手机</span></div>
    <div class="container hide">
      <div class="xm-phone-menu">
        <ul class="clearfix">
          <li>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-875e20e81de519cf', '//item.mi.com/buyphone/compare', 'pcpid']);" data-stat-id="875e20e81de519cf" href="http://item.mi.com/buyphone/compare">
              <img src="./img/compare-title-all.png" alt="">
              <span>对比手机</span></a>
          </li>
        </ul>
      </div>
    </div>
    @yield('content');
    <div class="site-footer">
      <div class="container">
        <div class="footer-service">
          <ul class="list-service clearfix">
            <li>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-46873828b7b782f4', '//www.mi.com/static/fast/', 'pcpid']);" data-stat-id="46873828b7b782f4" rel="nofollow" href="http://www.mi.com/static/fast/" target="_top">
                <i class="iconfont"></i>预约维修服务</a></li>
            <li>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-78babcae8a619e26', '//www.mi.com/service/exchange#back', 'pcpid']);" data-stat-id="78babcae8a619e26" rel="nofollow" href="http://www.mi.com/service/exchange#back" target="_top">
                <i class="iconfont"></i>7天无理由退货</a></li>
            <li>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-d1745f68f8d2dad7', '//www.mi.com/service/exchange#free', 'pcpid']);" data-stat-id="d1745f68f8d2dad7" rel="nofollow" href="http://www.mi.com/service/exchange#free" target="_top">
                <i class="iconfont"></i>15天免费换货</a></li>
            <li>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-f1b5c2451cf73123', '//www.mi.com/service/exchange#mail', 'pcpid']);" data-stat-id="f1b5c2451cf73123" rel="nofollow" href="http://www.mi.com/service/exchange#mail" target="_top">
                <i class="iconfont"></i>满150元包邮</a></li>
            <li>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-b57397dd7ad77a31', '//www.mi.com/static/maintainlocation/', 'pcpid']);" data-stat-id="b57397dd7ad77a31" rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_top">
                <i class="iconfont"></i>520余家售后网点</a></li>
          </ul>
        </div>
        <div class="footer-links clearfix">
          <dl class="col-links col-links-first">
            <dt>帮助中心</dt>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-e5dad0738a41014f', '//www.mi.com/service/account/register/', 'pcpid']);" data-stat-id="e5dad0738a41014f" rel="nofollow" href="http://www.mi.com/service/account/register/" target="_top">账户管理</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-8e128f473e680197', '//www.mi.com/service/buy/buytime/', 'pcpid']);" data-stat-id="8e128f473e680197" rel="nofollow" href="http://www.mi.com/service/buy/buytime/" target="_top">购物指南</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-fd9e3532f60a2f8d', '//www.mi.com/service/order/sendprogress/', 'pcpid']);" data-stat-id="fd9e3532f60a2f8d" rel="nofollow" href="http://www.mi.com/service/order/sendprogress/" target="_top">订单操作</a></dd>
          </dl>
          <dl class="col-links ">
            <dt>服务支持</dt>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-8e282b6f669ba990', '//www.mi.com/service/exchange', 'pcpid']);" data-stat-id="8e282b6f669ba990" rel="nofollow" href="http://www.mi.com/service/exchange" target="_top">售后政策</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-5f2408ab3c808aa2', 'http://fuwu.mi.com/', 'pcpid']);" data-stat-id="5f2408ab3c808aa2" rel="nofollow" href="http://fuwu.mi.com/" target="_top">自助服务</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-18c340c920a278a1', 'http://xiazai.mi.com/', 'pcpid']);" data-stat-id="18c340c920a278a1" rel="nofollow" href="http://xiazai.mi.com/" target="_top">相关下载</a></dd>
          </dl>
          <dl class="col-links ">
            <dt>线下门店</dt>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-b27b566974e4aa67', '//www.mi.com/c/xiaomizhijia/', 'pcpid']);" data-stat-id="b27b566974e4aa67" rel="nofollow" href="http://www.mi.com/c/xiaomizhijia/" target="_top">小米之家</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-6dab396f7a873f15', '//www.mi.com/static/maintainlocation/', 'pcpid']);" data-stat-id="6dab396f7a873f15" rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_top">服务网点</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-9af5efe014c3aea2', '//www.mi.com/static/familyLocation/', 'pcpid']);" data-stat-id="9af5efe014c3aea2" rel="nofollow" href="http://www.mi.com/static/familyLocation/" target="_top">零售网点</a></dd>
          </dl>
          <dl class="col-links ">
            <dt>关于小米</dt>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-f6d386c65b1f4132', '//www.mi.com/about', 'pcpid']);" data-stat-id="f6d386c65b1f4132" rel="nofollow" href="http://www.mi.com/about" target="_top">了解小米</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-4307a445f5592adb', 'http://hr.xiaomi.com/', 'pcpid']);" data-stat-id="4307a445f5592adb" rel="nofollow" href="http://hr.xiaomi.com/" target="_top">加入小米</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-6842e821365ee45d', '//www.mi.com/about/contact', 'pcpid']);" data-stat-id="6842e821365ee45d" rel="nofollow" href="http://www.mi.com/about/contact" target="_top">联系我们</a></dd>
          </dl>
          <dl class="col-links ">
            <dt>关注我们</dt>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-464883aa6e799290', 'http://e.weibo.com/xiaomishouji', 'pcpid']);" data-stat-id="464883aa6e799290" rel="nofollow" href="http://e.weibo.com/xiaomishouji" target="_top">新浪微博</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-78fdefa9dee561b5', 'http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat', 'pcpid']);" data-stat-id="78fdefa9dee561b5" rel="nofollow" href="http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat" target="_top">小米部落</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-47539f6570f0da90', '#J_modalWeixin', 'pcpid']);" data-stat-id="47539f6570f0da90" rel="nofollow" href="#J_modalWeixin" data-toggle="modal">官方微信</a></dd>
          </dl>
          <dl class="col-links ">
            <dt>特色服务</dt>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-fdc16dd51892a164', '//order.mi.com/queue/f2code', 'pcpid']);" data-stat-id="fdc16dd51892a164" rel="nofollow" href="http://order.mi.com/queue/f2code" target="_top">F 码通道</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-99876c8aaf8ef0a4', '//www.mi.com/mimobile/', 'pcpid']);" data-stat-id="99876c8aaf8ef0a4" rel="nofollow" href="http://www.mi.com/mimobile/" target="_top">小米移动</a></dd>
            <dd>
              <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-b08be6bd51351e1a', '//order.mi.com/misc/checkitem', 'pcpid']);" data-stat-id="b08be6bd51351e1a" rel="nofollow" href="http://order.mi.com/misc/checkitem" target="_top">防伪查询</a></dd>
          </dl>
          <div class="col-contact">
            <p class="phone">400-100-5678</p>
            <p>
              <span class="J_serviceTime-normal" style="
              ">周一至周日 8:00-18:00</span>
              <span class="J_serviceTime-holiday" style="display: none;">2月7日至13日服务时间 9:00-18:00</span>
              <br>（仅收市话费）</p>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-a7642f0a3475d686', '//www.mi.com/service/contact', 'pcpid']);" data-stat-id="a7642f0a3475d686" rel="nofollow" class="btn btn-line-primary btn-small" href="http://www.mi.com/service/contact" target="_top">
              <i class="iconfont"></i>24小时在线客服</a></div>
        </div>
      </div>
    </div>
    <div class="site-info">
      <div class="container">
        <div class="info-text">
          <p>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-b9017a4e9e9eefe3', '//www.mi.com/index.html', 'pcpid']);" data-stat-id="b9017a4e9e9eefe3" href="http://www.mi.com/index.html" target="_top">小米商城</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-ed2a0e25c8b0ca2f', 'http://www.miui.com/', 'pcpid']);" data-stat-id="ed2a0e25c8b0ca2f" href="http://www.miui.com/" target="_top">MIUI</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-826b32c1478a98d5', 'http://www.miliao.com/', 'pcpid']);" data-stat-id="826b32c1478a98d5" href="http://www.miliao.com/" target="_top">米聊</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-c9d2af1ad828a834', 'http://www.duokan.com/', 'pcpid']);" data-stat-id="c9d2af1ad828a834" href="http://www.duokan.com/" target="_top">多看书城</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-96f1a8cecc909af2', 'http://www.miwifi.com/', 'pcpid']);" data-stat-id="96f1a8cecc909af2" href="http://www.miwifi.com/" target="_top">小米路由器</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-347f6dd0d8d9fda3', 'http://call.mi.com/', 'pcpid']);" data-stat-id="347f6dd0d8d9fda3" href="http://call.mi.com/" target="_top">视频电话</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-4ad42379062eda19', 'http://blog.xiaomi.com/', 'pcpid']);" data-stat-id="4ad42379062eda19" href="http://blog.xiaomi.com/" target="_top">小米后院</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-dfe0fac59cfb15d9', 'http://xiaomi.tmall.com/', 'pcpid']);" data-stat-id="dfe0fac59cfb15d9" href="http://xiaomi.tmall.com/" target="_top">小米天猫店</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-c2613d0d3b77ddff', 'http://shop115048570.taobao.com', 'pcpid']);" data-stat-id="c2613d0d3b77ddff" href="http://shop115048570.taobao.com/" target="_top">小米淘宝直营店</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-2f48f953961c637d', 'http://union.mi.com/', 'pcpid']);" data-stat-id="2f48f953961c637d" href="http://union.mi.com/" target="_top">小米网盟</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-6479cd2d041bcf04', '//static.mi.com/feedback/', 'pcpid']);" data-stat-id="6479cd2d041bcf04" href="http://static.mi.com/feedback/" target="_top">问题反馈</a>
            <span class="sep">|</span>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-9db137a8e0d5b3dd', '#J_modal-globalSites', 'pcpid']);" data-stat-id="9db137a8e0d5b3dd" href="#J_modal-globalSites" target="_top">Select Region</a></p>
          <p>©
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-836cacd9ca5b75dd', '//www.mi.com/', 'pcpid']);" data-stat-id="836cacd9ca5b75dd" href="http://www.mi.com/" target="_top" title="mi.com">mi.com</a>京ICP证110507号 京ICP备10046444号
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-57efc92272d4336b', 'http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134', 'pcpid']);" data-stat-id="57efc92272d4336b" rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_top">京公网安备11010802020134号</a>
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-c5f81675b79eb130', '//./img/c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg', 'pcpid']);" data-stat-id="c5f81675b79eb130" rel="nofollow" href="./img/jingwangwen.jpg" target="_top">京网文[2014]0059-0009号</a>
            <br>违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p></div>
        <div class="info-links">
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-de920be99941f792', '//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn', 'pcpid']);" data-stat-id="de920be99941f792" href="http://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_top">
            <img src="seal" alt="TRUSTe Privacy Certification"></a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-d44905018f8d7096', '//search.szfw.org/cert/l/CX20120926001783002010', 'pcpid']);" data-stat-id="d44905018f8d7096" href="http://search.szfw.org/cert/l/CX20120926001783002010" target="_top">
            <img src="./img/v-logo-2.png" alt="诚信网站"></a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-3e1533699f264eac', 'https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082', 'pcpid']);" data-stat-id="3e1533699f264eac" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_top">
            <img src="./img/v-logo-1.png" alt="可信网站"></a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-b085e50c7ec83104', 'http://www.315online.com.cn/member/315140007.html', 'pcpid']);" data-stat-id="b085e50c7ec83104" href="http://www.315online.com.cn/member/315140007.html" target="_top">
            <img src="./img/v-logo-3.png" alt="网上交易保障中心"></a>
        </div>
      </div>
      <div class="slogan ir">探索黑科技，小米为发烧而生</div></div>
    <!-- .site-footer END -->
    <div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
      <div class="modal-hd">
        <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-cfd3189b8a874ba4', '', 'pcpid']);" data-stat-id="cfd3189b8a874ba4" class="close" data-dismiss="modal">
          <i class="iconfont"></i></a>
        <span class="title">小米手机官方微信二维码</span></div>
      <div class="modal-bd">
        <p style="margin: 0px 0px 10px;">打开微信，点击右上角的“+”，选择“扫一扫”功能，
          <br>对准下方二维码即可。</p>
        <img alt="" src="./img/qr.png" height="375" width="375"></div>
    </div>
    <!-- .modal-weixin END -->
    <div class="modal modal-hide modal-bigtap-queue" id="J_bigtapQueue">
      <div class="modal-body">
        <span class="close" data-dismiss="modal" aria-hidden="true">退出排队</span>
        <div class="con">
          <div class="title">正在排队，请稍候喔！</div>
          <div class="queue-tip-box">
            <p class="queue-tip">当前人数较多，请您耐心等待，排队期间请不要关闭页面。</p>
            <p class="queue-tip">时常来官网看看，最新产品和活动信息都会在这里发布。</p>
            <p class="queue-tip">下载小米商城 App 玩玩吧！产品开售信息抢先知道。</p>
            <p class="queue-tip">发现了让你眼前一亮的小米产品，别忘了分享给朋友！</p>
            <p class="queue-tip">产品开售前会有预售信息，关注官网首页就不会错过。</p></div>
        </div>
        <div class="queue-posters">
          <div class="poster poster-3"></div>
          <div class="poster poster-2"></div>
          <div class="poster poster-1"></div>
          <div class="poster poster-4"></div>
          <div class="poster poster-5"></div>
        </div>
      </div>
    </div>
    <!-- .xm-dm-queue END -->
    <div id="J_bigtapError" class="modal modal-hide modal-bigtap-error">
      <span class="close" data-dismiss="modal" aria-hidden="true">
        <i class="iconfont"></i></span>
      <div class="modal-body">
        <h3>抱歉，网络拥堵无法连接服务器</h3>
        <p class="error-tip">由于访问人数太多导致服务器压力山大，请您稍后再重试。</p>
        <p>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-c148a4197491d5bd', '', 'pcpid']);" data-stat-id="c148a4197491d5bd" class="btn btn-primary" id="J_bigtapRetry">重试</a></p>
      </div>
    </div>
    <div id="J_bigtapModeBox" class="modal fade modal-hide modal-bigtap-mode">
      <span class="close" data-dismiss="modal">
        <i class="iconfont"></i></span>
      <div class="modal-body">
        <h3 class="title">为防黄牛，请您输入下面的验证码</h3>
        <p class="desc">在防黄牛的路上，我们一直在努力，也知道做的还不够。
          <br>所以，这次劳烦您多输一次验证码，我们一起防黄牛。</p>
        <div class="mode-loading" id="J_bigtapModeLoading">
          <img src="./img/loading.gif" alt="" height="32" width="32">
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-ce9e5bb5b994ad55', 'javascript:void(0);', 'pcpid']);" data-stat-id="ce9e5bb5b994ad55" id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);">网络错误，点击重新获取验证码！</a></div>
        <div class="mode-action hide" id="J_bigtapModeAction">
          <div class="mode-con" id="J_bigtapModeContent"></div>
          <input value="" name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" type="text">
          <p class="tip" id="J_bigtapModeTip"></p>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-7f083d6abed714f8', '', 'pcpid']);" data-stat-id="7f083d6abed714f8" class="btn  btn-gray" id="J_bigtapModeSubmit">确认</a></div>
      </div>
    </div>
    <div id="J_bigtapSoldout" class="modal fade modal-hide modal-bigtap-soldout modal-bigtap-soldout-norec">
      <span class="close" data-dismiss="modal">
        <i class="iconfont"></i></span>
      <div class="modal-body ">
        <div class="content clearfix">
          <span class="mitu"></span>
          <p class="title">很抱歉，人真是太多了
            <br>您晚了一步...</p></div>
        <div class="bigtap-recomment-goods">
          <div class="hd">
            <span>这些产品也不错，而且有现货哦！</span></div>
          <ul class="clearfix" id="J_bigtapRecommentList"></ul>
        </div>
      </div>
    </div>
    <!-- .xm-dm-error END -->
    <div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640">
      <div class="modal-hd">
        <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-d63900908fde14b1', '', 'pcpid']);" data-stat-id="d63900908fde14b1" class="close" data-dismiss="modal">
          <i class="iconfont"></i></a>
        <span class="title">Select Region</span></div>
      <div class="modal-bd">
        <h3>Welcome to Mi.com</h3>
        <p class="modal-globalSites-tips">Please select your country or region</p>
        <p class="modal-globalSites-links clearfix">
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-51fe807618ae85f4', '//www.mi.com/index.html', 'pcpid']);" data-stat-id="51fe807618ae85f4" href="http://www.mi.com/index.html">Mainland China</a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-d8e4264197de1747', 'http://www.mi.com/hk/', 'pcpid']);" data-stat-id="d8e4264197de1747" href="http://www.mi.com/hk/">Hong Kong</a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-8b54359fb6116e28', 'http://www.mi.com/tw/', 'pcpid']);" data-stat-id="8b54359fb6116e28" href="http://www.mi.com/tw/">Taiwan</a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-e9c0506f7e4e7161', 'http://www.mi.com/sg/', 'pcpid']);" data-stat-id="e9c0506f7e4e7161" href="http://www.mi.com/sg/">Singapore</a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-d6299ad30ec761a8', 'http://www.mi.com/my/', 'pcpid']);" data-stat-id="d6299ad30ec761a8" href="http://www.mi.com/my/">Malaysia</a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-22b601cf7b3ada84', 'http://www.mi.com/ph/', 'pcpid']);" data-stat-id="22b601cf7b3ada84" href="http://www.mi.com/ph/">Philippines</a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-441d26d4571e10dc', 'http://www.mi.com/in/', 'pcpid']);" data-stat-id="441d26d4571e10dc" href="http://www.mi.com/in/">India</a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-88ccf9755c488ec5', 'http://www.mi.com/id/', 'pcpid']);" data-stat-id="88ccf9755c488ec5" href="http://www.mi.com/id/">Indonesia</a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-c41d871bf5ddcd95', 'http://br.mi.com/', 'pcpid']);" data-stat-id="c41d871bf5ddcd95" href="http://br.mi.com/">Brasil</a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-4426c5dac474df5f', 'http://www.mi.com/en/', 'pcpid']);" data-stat-id="4426c5dac474df5f" href="http://www.mi.com/en/">Global Home</a>
          <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-261bb8cf155fb56b', 'http://www.mi.com/mena/', 'pcpid']);" data-stat-id="261bb8cf155fb56b" href="http://www.mi.com/mena/">MENA</a></p>
      </div>
    </div>
    <!-- .modal-globalSites END --></body>

</html>