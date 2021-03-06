<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <title>小米帐号 - 个人信息</title>
    <link rel="icon" href="{{ asset('img/mi.jpg') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/info/index.css') }}" media="all">
    <style>
    #info{
      border:1px solid #cacaca;
    }
    </style>
  </head>
  <body style="overflow-y: scroll;" class="zh_CN">
    <div class="popup_mask" style="display: none;" id="loadingMask">
      <div class="bkc"></div>
      <div class="mod_wrap loadingmask"></div>
    </div>
    <div class="wrapper blockimportant">
      <div class="wrap">
        <div class="layout bugfix_ie6 dis_none">
          <div class="n-logo-area clearfix">
            <a href="{{ URL('/') }}" class="fl-l">
              <img src="{{ asset('/img/n-logo.png') }}"></a>
            <a id="logoutLink" class="fl-r logout" href="{{ URL('home/logout') }}">退出</a></div>
          <!--头像 名字-->
          <div class="n-account-area-box">
            <div class="n-account-area clearfix">
              <div class="na-info"> 
                <p class="na-name">{{ $list->user_realname }}</p>
                <p class="na-num">{{ $list->user_name}}</p>
              </div>
              <div class="na-img-area fl-l">
                <!--na-img-bg-area不能插入任何子元素-->
                <div class="na-img-bg-area">
                  <img src="{{ asset('uploads/user') }}/{{ $list->user_avatar }}">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="layout">
          <div class="n-main-nav clearfix">
            <ul>
               <li>
                <a href="/" title="首页">首页</a>
                <em class="n-nav-corner"></em>
              </li>
              <li>
                <a href="https://account.xiaomi.com/pass/auth/security/home" title="帐号安全">帐号安全</a>
                <em class="n-nav-corner"></em>
              </li>
              <li class="current">
                <a href="/info" title="个人信息">个人信息</a>
                <em class="n-nav-corner"></em>
              </li>
              <!--<li>
              <a href="">登录设备</a>
              <em class="n-nav-corner"></em></li>-->
              <li>
                <a href="https://account.xiaomi.com/pass/auth/sns/home" title="绑定授权">绑定授权</a>
                <em class="n-nav-corner"></em>
              </li>
              <li>
                <a href="https://account.xiaomi.com/pass/auth/services/home" title="小米服务">小米服务</a>
                <em class="n-nav-corner"></em>
              </li>
            </ul>
          </div>
          <div class="n-frame">
            <div class="uinfo c_b">
              <div class="">
                <div class="main_l">
                  <div class="naInfoImgBox t_c">
                    <div class="na-img-area marauto">
                      <!--na-img-bg-area不能插入任何子元素-->
                      <div class="na-img-bg-area">
                        <img src="{{ asset('/uploads/user') }}/{{ $list->user_avatar }}"></div>    
                      <em class="na-edit"></em>
                    </div>
                    <div class="naImgLink">
                      <a class="color4a9" href="/data" title="修改头像">修改头像</a></div>
                  </div>
                </div>
                <div class="main_r">
                  <div class="framedatabox">
                    <div class="fdata">
                      <a class="color4a9 fr" href="/info" title="编辑" id="editInfo">
                        <i class="iconpencil"></i>返回</a>
                      <h3>修改用户头像</h3></div>
                    <div class="fdata lblnickname">
                      <form method='post' action="{{ URL('home/doUpdate')}}/{{ session('user')->id }}" enctype="multipart/form-data" id="content">
          							<input type="hidden" name="_token" value="{{ csrf_token() }}">
          							<input type='file' name="user_avatar"><br><br><br>
          							<input id="info" type="submit" value="修改">
          							<a href="{{ URL('home/info') }}" id="basic">取消</a>
          							 @if(session('msg'))
          					            <p class="" style="color:red;">{{ session('msg') }}</p>
          					          @else
          					            <p></p>
          					          @endif
          						</form> 
                    </div>
                    <!-- <div class="fdata lblgender">
                      <p>
                        <span>性别：</span>
                        <span class="value">{{ $list->user_sex == 1 ? "男" : "女"}}</span></p>
                    </div>
                    <div class="btn_editinfo">
                      <a id="editInfoWap" class="btnadpt bg_normal" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037">编辑基础资料</a></div> -->
                  </div>
                 <!--  <div class="framedatabox">
                    <div class="fdata">
                      <h3>高级设置</h3></div>
                    <div class="fdata click-row">
                      <a class="color4a9 fr" target="_top" href="https://www.mipay.com/bankcard?_locale=zh_CN" title="管理">管理</a>
                      <p>
                        <span>银行卡</span>
                        <span class="arrow_r"></span>
                      </p>
                    </div>
                    <div class="fdata click-row">
                      <a class="color4a9 fr" target="_top" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="管理" id="switchRegion">修改</a>
                      <p>
                        <span>帐号地区：</span>
                        <span class="box_center">
                          <em id="region" _code="CN">中国</em>
                          <i class="arrow_r"></i>
                        </span>
                      </p>
                    </div>
                  </div> -->
                </div>
              </div>
              <div class="logout_wap">
                <a class="btnadpt bg_white" href="home/logoin">退出</a></div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="n-footer">
      <div class="nf-link-area clearfix">
        <ul class="lang-select-list">
          <li>
            <a class="lang-select-li current" href="javascript:void(0)" data-lang="zh_CN">简体</a>|</li>
          <li>
            <a class="lang-select-li" href="javascript:void(0)" data-lang="zh_TW">繁体</a>|</li>
          <li>
            <a class="lang-select-li" href="javascript:void(0)" data-lang="en">English</a></li>|
          <li>
            <a class="a_critical" href="http://static.account.xiaomi.com/html/faq/faqList.html" target="_top">
              <em></em>常见问题</a></li>
        </ul>
      </div>
      <p class="nf-intro">
        <span>小米公司版权所有-京ICP备10046444-
          <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" class="beianlink beian-record-link" target="_top">
            <span>
              <img src="{{ ('/img/ghs.png') }}"></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
    </div>
    <!-- 编辑个人信息资料 s -->
    <div class="popup_mask">
      <div class="bkc"></div>
      <div class="mod_wrap">
        <div class="mod_acc_tip layereditinfo">
          <div class="mod_tip_hd">
            <h4>编辑基础资料</h4>
            <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="">
              <span>关闭</span></a>
          </div>
          <div class="mod_tip_bd">
            <form action="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" method="">
              <div class="wapbox editbasicinfo">
                <dl class="infobox c_b">
                  <dt>姓名：</dt>
                  <dd>
                    <label class="labelbox">
                      <input value="" class="nickname" name="nickname" maxlength="20" placeholder="姓名" type="text"></label>
                  </dd>
                  <dt>生日：</dt>
                  <dd>
                    <ul class="birth-box c_b">
                      <li class="biry">
                        <div>
                          <span class="titsbirth c_b">
                            <em class="birthcon">年</em>
                            <i class="icon_cirarr"></i>
                          </span>
                        </div>
                        <div class="tits_list select-year">
                          <div class="select_panel select-year-panel">
                            <p value="2016">2016</p>
                            <p value="2015">2015</p>
                            <p value="2014">2014</p>
                            <p value="2013">2013</p>
                            <p value="2012">2012</p>
                            <p value="2011">2011</p>
                            <p value="2010">2010</p>
                            <p value="2009">2009</p>
                            <p value="2008">2008</p>
                            <p value="2007">2007</p>
                            <p value="2006">2006</p>
                            <p value="2005">2005</p>
                            <p value="2004">2004</p>
                            <p value="2003">2003</p>
                            <p value="2002">2002</p>
                            <p value="2001">2001</p>
                            <p value="2000">2000</p>
                            <p value="1999">1999</p>
                            <p value="1998">1998</p>
                            <p value="1997">1997</p>
                            <p value="1996">1996</p>
                            <p value="1995">1995</p>
                            <p value="1994">1994</p>
                            <p value="1993">1993</p>
                            <p value="1992">1992</p>
                            <p value="1991">1991</p>
                            <p value="1990">1990</p>
                            <p value="1989">1989</p>
                            <p value="1988">1988</p>
                            <p value="1987">1987</p>
                            <p value="1986">1986</p>
                            <p value="1985">1985</p>
                            <p value="1984">1984</p>
                            <p value="1983">1983</p>
                            <p value="1982">1982</p>
                            <p value="1981">1981</p>
                            <p value="1980">1980</p>
                            <p value="1979">1979</p>
                            <p value="1978">1978</p>
                            <p value="1977">1977</p>
                            <p value="1976">1976</p>
                            <p value="1975">1975</p>
                            <p value="1974">1974</p>
                            <p value="1973">1973</p>
                            <p value="1972">1972</p>
                            <p value="1971">1971</p>
                            <p value="1970">1970</p>
                            <p value="1969">1969</p>
                            <p value="1968">1968</p>
                            <p value="1967">1967</p>
                            <p value="1966">1966</p>
                            <p value="1965">1965</p>
                            <p value="1964">1964</p>
                            <p value="1963">1963</p>
                            <p value="1962">1962</p>
                            <p value="1961">1961</p>
                            <p value="1960">1960</p>
                            <p value="1959">1959</p>
                            <p value="1958">1958</p>
                            <p value="1957">1957</p>
                            <p value="1956">1956</p>
                            <p value="1955">1955</p>
                            <p value="1954">1954</p>
                            <p value="1953">1953</p>
                            <p value="1952">1952</p>
                            <p value="1951">1951</p>
                            <p value="1950">1950</p>
                            <p value="1949">1949</p>
                            <p value="1948">1948</p>
                            <p value="1947">1947</p>
                            <p value="1946">1946</p>
                            <p value="1945">1945</p>
                            <p value="1944">1944</p>
                            <p value="1943">1943</p>
                            <p value="1942">1942</p>
                            <p value="1941">1941</p>
                            <p value="1940">1940</p>
                            <p value="1939">1939</p>
                            <p value="1938">1938</p>
                            <p value="1937">1937</p>
                            <p value="1936">1936</p>
                            <p value="1935">1935</p>
                            <p value="1934">1934</p>
                            <p value="1933">1933</p>
                            <p value="1932">1932</p>
                            <p value="1931">1931</p>
                            <p value="1930">1930</p>
                            <p value="1929">1929</p>
                            <p value="1928">1928</p>
                            <p value="1927">1927</p>
                            <p value="1926">1926</p>
                            <p value="1925">1925</p>
                            <p value="1924">1924</p>
                            <p value="1923">1923</p>
                            <p value="1922">1922</p>
                            <p value="1921">1921</p>
                            <p value="1920">1920</p>
                            <p value="1919">1919</p>
                            <p value="1918">1918</p>
                            <p value="1917">1917</p>
                            <p value="1916">1916</p>
                            <p value="1915">1915</p>
                            <p value="1914">1914</p>
                            <p value="1913">1913</p>
                            <p value="1912">1912</p>
                            <p value="1911">1911</p>
                            <p value="1910">1910</p>
                            <p value="1909">1909</p>
                            <p value="1908">1908</p>
                            <p value="1907">1907</p>
                            <p value="1906">1906</p>
                            <p value="1905">1905</p>
                            <p value="1904">1904</p>
                            <p value="1903">1903</p>
                            <p value="1902">1902</p>
                            <p value="1901">1901</p>
                            <p value="1900">1900</p></div>
                          <div class="cancel_panel">
                            <div class="cancel_box">
                              <a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a></div>
                          </div>
                        </div>
                      </li>
                      <li class="month_day birm">
                        <div>
                          <span class="titsbirth c_b">
                            <em class="birthcon">月</em>
                            <i class="icon_cirarr"></i>
                          </span>
                        </div>
                        <div class="tits_list select-month">
                          <div class="select_panel">
                            <p value="01">01</p>
                            <p value="02">02</p>
                            <p value="03">03</p>
                            <p value="04">04</p>
                            <p value="05">05</p>
                            <p value="06">06</p>
                            <p value="07">07</p>
                            <p value="08">08</p>
                            <p value="09">09</p>
                            <p value="10">10</p>
                            <p value="11">11</p>
                            <p value="12">12</p></div>
                          <div class="cancel_panel">
                            <div class="cancel_box">
                              <a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a></div>
                          </div>
                        </div>
                      </li>
                      <li class="month_day bird">
                        <div>
                          <span class="titsbirth c_b">
                            <em class="birthcon">日</em>
                            <i class="icon_cirarr"></i>
                          </span>
                        </div>
                        <div class="tits_list bird select-date">
                          <div class="select_panel">
                            <p value="01">01</p>
                            <p value="02">02</p>
                            <p value="03">03</p>
                            <p value="04">04</p>
                            <p value="05">05</p>
                            <p value="06">06</p>
                            <p value="07">07</p>
                            <p value="08">08</p>
                            <p value="09">09</p>
                            <p value="10">10</p>
                            <p value="11">11</p>
                            <p value="12">12</p>
                            <p value="13">13</p>
                            <p value="14">14</p>
                            <p value="15">15</p>
                            <p value="16">16</p>
                            <p value="17">17</p>
                            <p value="18">18</p>
                            <p value="19">19</p>
                            <p value="20">20</p>
                            <p value="21">21</p>
                            <p value="22">22</p>
                            <p value="23">23</p>
                            <p value="24">24</p>
                            <p value="25">25</p>
                            <p value="26">26</p>
                            <p value="27">27</p>
                            <p value="28">28</p>
                            <p value="29">29</p>
                            <p value="30">30</p>
                            <p value="31">31</p></div>
                          <div class="cancel_panel">
                            <div class="cancel_box">
                              <a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </dd>
                  <dt>性别：</dt>
                  <dd class="checkbox infosex">
                    <span value="m">
                      <i class="icon_select iconinfosex"></i>
                      <em>男</em></span>
                    <span value="f">
                      <i class="icon_select iconinfosex"></i>
                      <em>女</em></span>
                  </dd>
                </dl>
                <div _text="名字不能为空" class="err_tip empty_name err_tip_independ" style="display: none;">名字不能为空</div>
                <div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ" style="display: none;">系统错误，请稍候再试</div>
                <div _text="参数为空" class="err_tip empty_param err_tip_independ" style="display: none;">参数为空</div>
                <div _text="参数错误" class="err_tip bad_param err_tip_independ" style="display: none;">参数错误</div>
                <div _text="名字长度不合法，应为2-20个字符" class="err_tip bad_nickname err_tip_independ" style="display: none;">名字长度不合法，应为2-20个字符</div>
                <div _text="生日格式不合法" class="err_tip bad_birthday err_tip_independ error-birth" style="display: none;">生日格式不合法</div>
                <div _text="性别参数不合法" class="err_tip bad_gender err_tip_independ" style="display: none;">性别参数不合法</div>
                <div _text="请完整选择生日信息" class="err_tip empty_birthday err_tip_independ error-birth" style="display: none;">请完整选择生日信息</div>
                <div _text="请提供您的真实信息" class="err_tip invalid_birthday err_tip_independ error-birth" style="display: none;">请提供您的真实信息</div></div>
              <div class="tip_btns">
                <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="保存">保存</a>
                <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> -->
                <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="取消">取消</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- 编辑个人信息资料 e -->
    <!-- 设置头像 s -->
    <div class="popup_mask">
      <div class="bkc"></div>
      <div class="mod_wrap">
        <div class="mod_acc_tip layeruploadface">
          <div class="mod_tip_hd">
            <h4>修改头像</h4>
            <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="">
              <span>关闭</span></a>
          </div>
          <div class="mod_tip_bd preupload">
            <iframe src="index_1.html" style="display: none;" name="uploadPhoto" id="uploadPhoto" height="0" width="0"></iframe>
            <!-- <form action="/user/profile/requestUpload" method="POST">   
            <input type="hidden" name="userId" value="400785037">
            <input type="hidden" name="quality" value="1.0">
            <input type="hidden" name="isRedirect" value="true">
            <input type="hidden" name="passport_ph" value="">
            <input type="hidden" name="passToken" value=""></form> 
            -->
            <form action="https://account.xiaomi.com/pass/auth/profile/requestUpload" method="POST" enctype="multipart/form-data" target="uploadPhoto" id="photoUploader">
              <div class="wapbox accset">
                <dl>
                  <dt>
                    <strong class="wap_title_big">请上传图片：</strong></dt>
                  <dd>
                    <div class="uplode_img">
                      <!-- <a class="btn_tip btn_commom" href="" title="上传头像">上传头像</a>
                      -->
                      <input onclick="return false;" class="btn_tip btn_commom" value="上传头像" type="button">
                      <input class="uplodefile" name="userfile" autocomplete="off" disableautocomplete="" type="file"></div>
                    <p>jpg 或 png，大小不超过2M</p>
                  </dd>
                </dl>
                <div _text="图片格式不符合要求！" class="err_tip wng_fmt err_tip_independ" style="display: none;">图片格式不符合要求！</div>
                <div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ" style="display: none;">系统错误，请稍候再试</div>
                <div _text="文件太大，上传失败" class="err_tip file_too_large err_tip_independ" style="display: none;">文件太大，上传失败</div></div>
              <div class="tip_btns">
                <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> -->
                <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="取消">取消</a></div>
            </form>
          </div>
          <div class="mod_tip_bd uploading" style="display: none;">
            <div class="wapbox">
              <div class="mar30 t_c">
                <!-- loading图片 -->
                <img src="loading.gif" alt="" height="88" width="88">
                <div class="naccprocess">
                  <p class="ft20" style="display: none;">
                    <span></span>%</p>
                  <p>上传中</p>
                </div>
              </div>
              <div _text="图片格式不符合要求！" class="err_tip wng_fmt err_tip_independ" style="display: none; margin-left: 100px;">图片格式不符合要求！</div>
              <div _text="文件太大，上传失败" class="err_tip file_too_large err_tip_independ" style="display: none; margin-left: 100px;">文件太大，上传失败</div>
              <div _text="系统错误，请稍候再试" class="err_tip sys_err uploaderror err_tip_independ" style="display: none;">系统错误，请稍候再试</div>
              <div _text="缺少参数" class="err_tip missing_param err_tip_independ" style="display: none; margin-left: 100px;">缺少参数</div>
              <div _text="找不到指定文件" class="err_tip missing_file err_tip_independ" style="display: none; margin-left: 100px;">找不到指定文件</div>
              <div _text="不支持的MIME TYPE" class="err_tip unsupported_mime_type err_tip_independ" style="display: none; margin-left: 100px;">不支持的MIME TYPE</div></div>
            <div class="tip_btns">
              <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> -->
              <a id="abortUpload" class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="取消">取消</a></div>
          </div>
          <div class="mod_tip_bd uploaded">
            <div class="wapbox">
              <div class="clipimg t_c">
                <!-- 图片放置位置 -->
                <div class="uploadimgs">
                  <img alt="">
                  <!-- <div class="clip"></div>
                  -->
                </div>
                <div style="" class="movebox">
                  <i class="icon_square icon_square_rightbot"></i>
                </div>
              </div>
              <div class="cliperror">
                <div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ" style="display: none;">系统错误，请稍候再试</div>
                <div _text="参数错误" class="err_tip bad_param err_tip_independ" style="display: none;">参数错误</div>
                <div _text="上传失败" class="err_tip upload_failed err_tip_independ" style="display: none;">上传失败</div></div>
            </div>
            <div class="tip_btns">
              <input class="btn_tip btn_commom" value="确定" type="submit">
              <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="重新上传" id="reuploadPhoto">重新上传</a></div>
          </div>
        </div>
      </div>
    </div>
    <div id="l11n-node" style="display: none;" _l11n-jsp_2014_select="请选择" _l11n-jsp_birthday_date="日" _l11n-jsp_birthday_month="月" _l11n-jsp_birthday_year="年" _l11n-jsp_sac_reset="取消"></div>
    <!-- 设置头像 e -->
    <!-- 切换帐号地区 s -->
    <div class="popup_mask">
      <div class="bkc"></div>
      <div class="mod_wrap">
        <div class="mod_acc_tip" id="popSwitchRegion">
          <div class="mod_tip_hd">
            <h4>切换帐号地区</h4>
            <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="">
              <span>关闭</span></a>
          </div>
          <div class="mod_tip_bd">
            <div class="wapbox n_txtbox">
              <p>请注意：</p>
              <ul>
                <li class="disc">不同地区的米币不通用，切换后可能导致您的米币余额无法使用。</li>
                <li class="disc">一些会员服务，只在部分地区提供，切换后可能无法继续使用。</li>
                <li class="disc">一些版权内容，只在部分地区提供，切换后可能无法观看。</li></ul>
            </div>
            <div class="tip_btns">
              <input id="continueSwitch" class="btn_tip btn_commom" value="继续切换" type="submit">
              <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="取消">取消</a></div>
          </div>
          <div class="mod_tip_bd" style="display: none;">
            <div class="wapbox wap_pt30 regbox">
              <div class="listwrap change_region_box">
                <div class="listtit">
                  <span class="tits dis_box c_b">
                    <tt _code="">请选择</tt>
                    <i class="icon_cirarr"></i>
                  </span>
                </div>
                <div class="country-container-panel">
                  <div class="country-container">
                    <div class="country-code select_panel">
                      <div class="container countrycode-container-usual">
                        <div class="header">常用</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+86" data-brief="CN">中国</span>
                            <span class="record-code">+86</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+886" data-brief="TW">中国台湾</span>
                            <span class="record-code">+886</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+852" data-brief="HK">中国香港</span>
                            <span class="record-code">+852</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+55" data-brief="BR">Brazil</span>
                            <span class="record-code">+55</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+91" data-brief="IN">India</span>
                            <span class="record-code">+91</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+62" data-brief="ID">Indonesia</span>
                            <span class="record-code">+62</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+60" data-brief="MY">Malaysia</span>
                            <span class="record-code">+60</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-A">
                        <div class="header">A</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+376" data-brief="AD">Andorra</span>
                            <span class="record-code">+376</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+93" data-brief="AF">Afghanistan</span>
                            <span class="record-code">+93</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="AG">Antigua and Barbuda</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="AI">Anguilla</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+355" data-brief="AL">Albania</span>
                            <span class="record-code">+355</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+374" data-brief="AM">Armenia</span>
                            <span class="record-code">+374</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+244" data-brief="AO">Angola</span>
                            <span class="record-code">+244</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+54" data-brief="AR">Argentina</span>
                            <span class="record-code">+54</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="AS">American Samoa</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+43" data-brief="AT">Austria</span>
                            <span class="record-code">+43</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+61" data-brief="AU">Australia</span>
                            <span class="record-code">+61</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+297" data-brief="AW">Aruba</span>
                            <span class="record-code">+297</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+994" data-brief="AZ">Azerbaijan</span>
                            <span class="record-code">+994</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+213" data-brief="DZ">Algeria</span>
                            <span class="record-code">+213</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-B">
                        <div class="header">B</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+387" data-brief="BA">Bosnia and Herzegovina</span>
                            <span class="record-code">+387</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="BB">Barbados</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+880" data-brief="BD">Bangladesh</span>
                            <span class="record-code">+880</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+32" data-brief="BE">Belgium</span>
                            <span class="record-code">+32</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+226" data-brief="BF">Burkina Faso</span>
                            <span class="record-code">+226</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+359" data-brief="BG">Bulgaria</span>
                            <span class="record-code">+359</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+973" data-brief="BH">Bahrain</span>
                            <span class="record-code">+973</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+257" data-brief="BI">Burundi</span>
                            <span class="record-code">+257</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+229" data-brief="BJ">Benin</span>
                            <span class="record-code">+229</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="BM">Bermuda</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+673" data-brief="BN">Brunei</span>
                            <span class="record-code">+673</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+591" data-brief="BO">Bolivia</span>
                            <span class="record-code">+591</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+599" data-brief="BQ">Bonaire, Sint Eustatius and Saba</span>
                            <span class="record-code">+599</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+55" data-brief="BR">Brazil</span>
                            <span class="record-code">+55</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="BS">Bahamas</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+975" data-brief="BT">Bhutan</span>
                            <span class="record-code">+975</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+267" data-brief="BW">Botswana</span>
                            <span class="record-code">+267</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+375" data-brief="BY">Belarus</span>
                            <span class="record-code">+375</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+501" data-brief="BZ">Belize</span>
                            <span class="record-code">+501</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+246" data-brief="IO">British Indian Ocean Territory</span>
                            <span class="record-code">+246</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="VG">British Virgin Islands</span>
                            <span class="record-code">+1</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-C">
                        <div class="header">C</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="CA">Canada</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+61" data-brief="CC">Cocos Islands</span>
                            <span class="record-code">+61</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+236" data-brief="CF">Central African Republic</span>
                            <span class="record-code">+236</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+242" data-brief="CG">Congo</span>
                            <span class="record-code">+242</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+225" data-brief="CI">Côte d'Ivoire</span>
                            <span class="record-code">+225</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+682" data-brief="CK">Cook Islands</span>
                            <span class="record-code">+682</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+56" data-brief="CL">Chile</span>
                            <span class="record-code">+56</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+237" data-brief="CM">Cameroon</span>
                            <span class="record-code">+237</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+86" data-brief="CN">China</span>
                            <span class="record-code">+86</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+57" data-brief="CO">Colombia</span>
                            <span class="record-code">+57</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+506" data-brief="CR">Costa Rica</span>
                            <span class="record-code">+506</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+53" data-brief="CU">Cuba</span>
                            <span class="record-code">+53</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+238" data-brief="CV">Cape Verde</span>
                            <span class="record-code">+238</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+599" data-brief="CW">Curaçao</span>
                            <span class="record-code">+599</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+61" data-brief="CX">Christmas Island</span>
                            <span class="record-code">+61</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+357" data-brief="CY">Cyprus</span>
                            <span class="record-code">+357</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+420" data-brief="CZ">Czech Republic</span>
                            <span class="record-code">+420</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+385" data-brief="HR">Croatia</span>
                            <span class="record-code">+385</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+855" data-brief="KH">Cambodia</span>
                            <span class="record-code">+855</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+269" data-brief="KM">Comoros</span>
                            <span class="record-code">+269</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="KY">Cayman Islands</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+235" data-brief="TD">Chad</span>
                            <span class="record-code">+235</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-D">
                        <div class="header">D</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+253" data-brief="DJ">Djibouti</span>
                            <span class="record-code">+253</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+45" data-brief="DK">Denmark</span>
                            <span class="record-code">+45</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="DM">Dominica</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="DO">Dominican Republic</span>
                            <span class="record-code">+1</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-E">
                        <div class="header">E</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+593" data-brief="EC">Ecuador</span>
                            <span class="record-code">+593</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+372" data-brief="EE">Estonia</span>
                            <span class="record-code">+372</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+20" data-brief="EG">Egypt</span>
                            <span class="record-code">+20</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+291" data-brief="ER">Eritrea</span>
                            <span class="record-code">+291</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+251" data-brief="ET">Ethiopia</span>
                            <span class="record-code">+251</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+240" data-brief="GQ">Equatorial Guinea</span>
                            <span class="record-code">+240</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+503" data-brief="SV">El Salvador</span>
                            <span class="record-code">+503</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-F">
                        <div class="header">F</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+358" data-brief="FI">Finland</span>
                            <span class="record-code">+358</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+679" data-brief="FJ">Fiji</span>
                            <span class="record-code">+679</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+5+" data-brief="FK">Falkland Islands</span>
                            <span class="record-code">+5+</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+298" data-brief="FO">Faroe Islands</span>
                            <span class="record-code">+298</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+33" data-brief="FR">France</span>
                            <span class="record-code">+33</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+594" data-brief="GF">French Guiana</span>
                            <span class="record-code">+594</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+689" data-brief="PF">French Polynesia</span>
                            <span class="record-code">+689</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-G">
                        <div class="header">G</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+49" data-brief="DE">Germany</span>
                            <span class="record-code">+49</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+241" data-brief="GA">Gabon</span>
                            <span class="record-code">+241</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="GD">Grenada</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+995" data-brief="GE">Georgia</span>
                            <span class="record-code">+995</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+44" data-brief="GG">Guernsey</span>
                            <span class="record-code">+44</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+233" data-brief="GH">Ghana</span>
                            <span class="record-code">+233</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+350" data-brief="GI">Gibraltar</span>
                            <span class="record-code">+350</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+299" data-brief="GL">Greenland</span>
                            <span class="record-code">+299</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+220" data-brief="GM">Gambia</span>
                            <span class="record-code">+220</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+224" data-brief="GN">Guinea</span>
                            <span class="record-code">+224</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+590" data-brief="GP">Guadeloupe</span>
                            <span class="record-code">+590</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+30" data-brief="GR">Greece</span>
                            <span class="record-code">+30</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+502" data-brief="GT">Guatemala</span>
                            <span class="record-code">+502</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="GU">Guam</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+245" data-brief="GW">Guinea-Bissau</span>
                            <span class="record-code">+245</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+592" data-brief="GY">Guyana</span>
                            <span class="record-code">+592</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-H">
                        <div class="header">H</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+852" data-brief="HK">Hong Kong</span>
                            <span class="record-code">+852</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+504" data-brief="HN">Honduras</span>
                            <span class="record-code">+504</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+509" data-brief="HT">Haiti</span>
                            <span class="record-code">+509</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+36" data-brief="HU">Hungary</span>
                            <span class="record-code">+36</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-I">
                        <div class="header">I</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+62" data-brief="ID">Indonesia</span>
                            <span class="record-code">+62</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+353" data-brief="IE">Ireland</span>
                            <span class="record-code">+353</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+972" data-brief="IL">Israel</span>
                            <span class="record-code">+972</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+44" data-brief="IM">Isle Of Man</span>
                            <span class="record-code">+44</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+91" data-brief="IN">India</span>
                            <span class="record-code">+91</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+964" data-brief="IQ">Iraq</span>
                            <span class="record-code">+964</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+98" data-brief="IR">Iran</span>
                            <span class="record-code">+98</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+354" data-brief="IS">Iceland</span>
                            <span class="record-code">+354</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+39" data-brief="IT">Italy</span>
                            <span class="record-code">+39</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-J">
                        <div class="header">J</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+44" data-brief="JE">Jersey</span>
                            <span class="record-code">+44</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="JM">Jamaica</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+962" data-brief="JO">Jordan</span>
                            <span class="record-code">+962</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+81" data-brief="JP">Japan</span>
                            <span class="record-code">+81</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-K">
                        <div class="header">K</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+254" data-brief="KE">Kenya</span>
                            <span class="record-code">+254</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+996" data-brief="KG">Kyrgyzstan</span>
                            <span class="record-code">+996</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+686" data-brief="KI">Kiribati</span>
                            <span class="record-code">+686</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+965" data-brief="KW">Kuwait</span>
                            <span class="record-code">+965</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+7" data-brief="KZ">Kazakhstan</span>
                            <span class="record-code">+7</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-L">
                        <div class="header">L</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+856" data-brief="LA">Laos</span>
                            <span class="record-code">+856</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+961" data-brief="LB">Lebanon</span>
                            <span class="record-code">+961</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+423" data-brief="LI">Liechtenstein</span>
                            <span class="record-code">+423</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+231" data-brief="LR">Liberia</span>
                            <span class="record-code">+231</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+266" data-brief="LS">Lesotho</span>
                            <span class="record-code">+266</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+370" data-brief="LT">Lithuania</span>
                            <span class="record-code">+370</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+352" data-brief="LU">Luxembourg</span>
                            <span class="record-code">+352</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+371" data-brief="LV">Latvia</span>
                            <span class="record-code">+371</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+218" data-brief="LY">Libya</span>
                            <span class="record-code">+218</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-M">
                        <div class="header">M</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+691" data-brief="FM">Micronesia</span>
                            <span class="record-code">+691</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+212" data-brief="MA">Morocco</span>
                            <span class="record-code">+212</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+377" data-brief="MC">Monaco</span>
                            <span class="record-code">+377</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+373" data-brief="MD">Moldova</span>
                            <span class="record-code">+373</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+382" data-brief="ME">Montenegro</span>
                            <span class="record-code">+382</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+261" data-brief="MG">Madagascar</span>
                            <span class="record-code">+261</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+692" data-brief="MH">Marshall Islands</span>
                            <span class="record-code">+692</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+389" data-brief="MK">Macedonia</span>
                            <span class="record-code">+389</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+223" data-brief="ML">Mali</span>
                            <span class="record-code">+223</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+95" data-brief="MM">Myanmar</span>
                            <span class="record-code">+95</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+976" data-brief="MN">Mongolia</span>
                            <span class="record-code">+976</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+853" data-brief="MO">Macao</span>
                            <span class="record-code">+853</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+596" data-brief="MQ">Martinique</span>
                            <span class="record-code">+596</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+222" data-brief="MR">Mauritania</span>
                            <span class="record-code">+222</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="MS">Montserrat</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+356" data-brief="MT">Malta</span>
                            <span class="record-code">+356</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+230" data-brief="MU">Mauritius</span>
                            <span class="record-code">+230</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+960" data-brief="MV">Maldives</span>
                            <span class="record-code">+960</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+265" data-brief="MW">Malawi</span>
                            <span class="record-code">+265</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+52" data-brief="MX">Mexico</span>
                            <span class="record-code">+52</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+60" data-brief="MY">Malaysia</span>
                            <span class="record-code">+60</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+258" data-brief="MZ">Mozambique</span>
                            <span class="record-code">+258</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+262" data-brief="YT">Mayotte</span>
                            <span class="record-code">+262</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-N">
                        <div class="header">N</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+850" data-brief="KP">North Korea</span>
                            <span class="record-code">+850</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="MP">Northern Mariana Islands</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+264" data-brief="NA">Namibia</span>
                            <span class="record-code">+264</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+687" data-brief="NC">New Caledonia</span>
                            <span class="record-code">+687</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+227" data-brief="NE">Niger</span>
                            <span class="record-code">+227</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+672" data-brief="NF">Norfolk Island</span>
                            <span class="record-code">+672</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+234" data-brief="NG">Nigeria</span>
                            <span class="record-code">+234</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+505" data-brief="NI">Nicaragua</span>
                            <span class="record-code">+505</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+31" data-brief="NL">Netherlands</span>
                            <span class="record-code">+31</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+47" data-brief="NO">Norway</span>
                            <span class="record-code">+47</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+977" data-brief="NP">Nepal</span>
                            <span class="record-code">+977</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+674" data-brief="NR">Nauru</span>
                            <span class="record-code">+674</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+683" data-brief="NU">Niue</span>
                            <span class="record-code">+683</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+64" data-brief="NZ">New Zealand</span>
                            <span class="record-code">+64</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-O">
                        <div class="header">O</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+968" data-brief="OM">Oman</span>
                            <span class="record-code">+968</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-P">
                        <div class="header">P</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+507" data-brief="PA">Panama</span>
                            <span class="record-code">+507</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+51" data-brief="PE">Peru</span>
                            <span class="record-code">+51</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+675" data-brief="PG">Papua New Guinea</span>
                            <span class="record-code">+675</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+63" data-brief="PH">Philippines</span>
                            <span class="record-code">+63</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+92" data-brief="PK">Pakistan</span>
                            <span class="record-code">+92</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+48" data-brief="PL">Poland</span>
                            <span class="record-code">+48</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="PR">Puerto Rico</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+970" data-brief="PS">Palestine</span>
                            <span class="record-code">+970</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+351" data-brief="PT">Portugal</span>
                            <span class="record-code">+351</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+680" data-brief="PW">Palau</span>
                            <span class="record-code">+680</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+595" data-brief="PY">Paraguay</span>
                            <span class="record-code">+595</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-Q">
                        <div class="header">Q</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+974" data-brief="QA">Qatar</span>
                            <span class="record-code">+974</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-R">
                        <div class="header">R</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+262" data-brief="RE">Reunion</span>
                            <span class="record-code">+262</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+40" data-brief="RO">Romania</span>
                            <span class="record-code">+40</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+7" data-brief="RU">Russia</span>
                            <span class="record-code">+7</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+250" data-brief="RW">Rwanda</span>
                            <span class="record-code">+250</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-S">
                        <div class="header">S</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+590" data-brief="BL">Saint Barthélemy</span>
                            <span class="record-code">+590</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+41" data-brief="CH">Switzerland</span>
                            <span class="record-code">+41</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+34" data-brief="ES">Spain</span>
                            <span class="record-code">+34</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="KN">Saint Kitts And Nevis</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+82" data-brief="KR">South Korea</span>
                            <span class="record-code">+82</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="LC">Saint Lucia</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+94" data-brief="LK">Sri Lanka</span>
                            <span class="record-code">+94</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+590" data-brief="MF">Saint Martin</span>
                            <span class="record-code">+590</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+508" data-brief="PM">Saint Pierre And Miquelon</span>
                            <span class="record-code">+508</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+381" data-brief="RS">Serbia</span>
                            <span class="record-code">+381</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+966" data-brief="SA">Saudi Arabia</span>
                            <span class="record-code">+966</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+677" data-brief="SB">Solomon Islands</span>
                            <span class="record-code">+677</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+248" data-brief="SC">Seychelles</span>
                            <span class="record-code">+248</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+249" data-brief="SD">Sudan</span>
                            <span class="record-code">+249</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+46" data-brief="SE">Sweden</span>
                            <span class="record-code">+46</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+65" data-brief="SG">Singapore</span>
                            <span class="record-code">+65</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+290" data-brief="SH">Saint Helena</span>
                            <span class="record-code">+290</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+386" data-brief="SI">Slovenia</span>
                            <span class="record-code">+386</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+47" data-brief="SJ">Svalbard And Jan Mayen</span>
                            <span class="record-code">+47</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+421" data-brief="SK">Slovakia</span>
                            <span class="record-code">+421</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+232" data-brief="SL">Sierra Leone</span>
                            <span class="record-code">+232</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+378" data-brief="SM">San Marino</span>
                            <span class="record-code">+378</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+221" data-brief="SN">Senegal</span>
                            <span class="record-code">+221</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+252" data-brief="SO">Somalia</span>
                            <span class="record-code">+252</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+597" data-brief="SR">Suriname</span>
                            <span class="record-code">+597</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+239" data-brief="ST">Sao Tome And Principe</span>
                            <span class="record-code">+239</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="SX">Sint Maarten (Dutch part)</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+963" data-brief="SY">Syria</span>
                            <span class="record-code">+963</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+268" data-brief="SZ">Swaziland</span>
                            <span class="record-code">+268</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="VC">Saint Vincent And The Grenadines</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+685" data-brief="WS">Samoa</span>
                            <span class="record-code">+685</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+27" data-brief="ZA">South Africa</span>
                            <span class="record-code">+27</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-T">
                        <div class="header">T</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+243" data-brief="CD">The Democratic Republic Of Congo</span>
                            <span class="record-code">+243</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="TC">Turks And Caicos Islands</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+228" data-brief="TG">Togo</span>
                            <span class="record-code">+228</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+66" data-brief="TH">Thailand</span>
                            <span class="record-code">+66</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+992" data-brief="TJ">Tajikistan</span>
                            <span class="record-code">+992</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+690" data-brief="TK">Tokelau</span>
                            <span class="record-code">+690</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+670" data-brief="TL">Timor-Leste</span>
                            <span class="record-code">+670</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+993" data-brief="TM">Turkmenistan</span>
                            <span class="record-code">+993</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+216" data-brief="TN">Tunisia</span>
                            <span class="record-code">+216</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+676" data-brief="TO">Tonga</span>
                            <span class="record-code">+676</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+90" data-brief="TR">Turkey</span>
                            <span class="record-code">+90</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="TT">Trinidad and Tobago</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+688" data-brief="TV">Tuvalu</span>
                            <span class="record-code">+688</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+886" data-brief="TW">Taiwan</span>
                            <span class="record-code">+886</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+255" data-brief="TZ">Tanzania</span>
                            <span class="record-code">+255</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-U">
                        <div class="header">U</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+971" data-brief="AE">United Arab Emirates</span>
                            <span class="record-code">+971</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+44" data-brief="GB">United Kingdom</span>
                            <span class="record-code">+44</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+380" data-brief="UA">Ukraine</span>
                            <span class="record-code">+380</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+256" data-brief="UG">Uganda</span>
                            <span class="record-code">+256</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="US">United States</span>
                            <span class="record-code">+1</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+598" data-brief="UY">Uruguay</span>
                            <span class="record-code">+598</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+998" data-brief="UZ">Uzbekistan</span>
                            <span class="record-code">+998</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+1" data-brief="VI">U.S. Virgin Islands</span>
                            <span class="record-code">+1</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-V">
                        <div class="header">V</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+379" data-brief="VA">Vatican</span>
                            <span class="record-code">+379</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+58" data-brief="VE">Venezuela</span>
                            <span class="record-code">+58</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+84" data-brief="VN">Vietnam</span>
                            <span class="record-code">+84</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+678" data-brief="VU">Vanuatu</span>
                            <span class="record-code">+678</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-W">
                        <div class="header">W</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+212" data-brief="EH">Western Sahara</span>
                            <span class="record-code">+212</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+681" data-brief="WF">Wallis And Futuna</span>
                            <span class="record-code">+681</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-Y">
                        <div class="header">Y</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+967" data-brief="YE">Yemen</span>
                            <span class="record-code">+967</span></li>
                        </ul>
                      </div>
                      <div class="container countrycode-container-Z">
                        <div class="header">Z</div>
                        <ul class="list">
                          <li class="record clearfix">
                            <span class="record-country" data-code="+260" data-brief="ZM">Zambia</span>
                            <span class="record-code">+260</span></li>
                          <li class="record clearfix">
                            <span class="record-country" data-code="+263" data-brief="ZW">Zimbabwe</span>
                            <span class="record-code">+263</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="cancel_panel">
                      <div class="cancel_box">
                        <a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="region_errors">
                <div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ" style="display: none;">系统错误，请稍候再试</div>
                <div _text="参数错误" class="err_tip bad_param err_tip_independ" style="display: none;">参数错误</div>
                <div _text="帐号地区不能为空" class="err_tip empty_region err_tip_independ" style="display: none;">帐号地区不能为空</div></div>
            </div>
            <div class="tip_btns">
              <input class="btn_tip btn_commom" id="doRegionSwitch" value="确定" type="submit">
              <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?userId=400785037" title="取消">取消</a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- 切换帐号地区 e -->
    <div id="img_cache" style="visibility: hidden;"></div>
  </body>

</html>