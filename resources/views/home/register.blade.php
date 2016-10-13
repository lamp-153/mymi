<!DOCTYPE html>
<html>
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <title>小米帐号 - 注册</title>
    <link rel="stylesheet" type="text/css" href="{{ URL('css/register/index.css') }} " media="all"></head>
  
  <body class="zh_CN">
    <div class="wrapper">
      <div class="wrap">
        <div class="layout">
          <div class="n-frame device-frame reg_frame" id="main_container">
            <div class="external_logo_area">
              <a class="milogo" href="javascript:void(0)" onclick="this.href='{{ URL('/')}}'"></a>
            </div>
            <form name='myform' action="{{ URL('/home/doregister') }}" method="post" onsubmit='return doSubmit()'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">   
            <div class="title-item t_c">
              <h4 class="title_big30">注册小米帐号</h4>
            </div>
            <div>
              <div class="regbox">
                <div class="phone_step1">
                  <div class="listwrap" id="select-cycode" _region="CN" _def_method="PH">
                   <!--  <div class="listtit" id="reg-phone-select-cty">
                      <span class="tits dis_box c_b">
                        <tt id="select-cycode-result">中国(+86)</tt>
                        <i class="icon_cirarr"></i>
                      </span>
                    </div> -->
                    <div style="display: none;" class="country-container">
                      <div class="country-code">
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
                    </div>
                  </div>
                  @if(session('msg'))
                    <p class="" style="color:red;">{{ session('msg') }}</p>
                  @else
                    <p></p>
                  @endif
              
                  <div class="inputbg">
                    <label class="labelbox" for="">
                      <input name="user_name" data-type="PH" id="userName" placeholder="请输入账号" type="tel" onfocus='clearName()' onblur='checkUname()' ></label><span id="name"></span>
                  </div>
                  <div class="inputbg">
                    <label class="labelbox" for="">
                      <input name="user_pass" data-type="PH" placeholder="请输入密码" type="password" onblur='checkPass()'></label><span id="pass"></span>
                  </div>
                  <div class="inputbg">
                    <label class="labelbox" for="">
                      <input name="user_password" data-type="PH" placeholder="请确认密码" type="password" onblur="checkPassword()"></label><span id="password"></span>
                  </div>
                  <div class="err_tip">
                    <div class="dis_box">
                      <em class="icon_error"></em>
                      <span>qqq</span></div>
                  </div>
                  <div class="inputbg inputcode dis_box has-feedback">
                    <label class="labelbox col-xs-6" for="">
                      <input value="" class="code" name="user_code" autocomplete="off" placeholder="图片验证码" type="text" onblur="checkCode()">
                      <span class="glyphicon glyphicon-th form-control-feedback"></span>
                      </label>
                    <img src="{{ URL('home/captcha/time()') }}" alt="图片验证码" title="看不清换一张" class="icode_image code-image chkcode_img" onclick="this.src='{{ URL('home/captcha') }}/'+Math.random();"></div>
                  <div class="err_tip">
                    <div class="dis_box">
                      <em class="icon_error"></em>
                      <span></span>
                    </div>
                  </div>
                  <!-- 获得用户注册时候的时间戳 -->
                  <div id='did' style="display:none;" name="user_time"></div>
                  <input type="hidden" name="user_time" value='<?php echo time() ?>' id='time'>

                  <div class="err_tip send-left-times"></div>
                  <div class="fixed_bot mar_phone_dis1">
                    <input class="btn332 btn_reg_1 submit-step" data-to="phone-step2" value="立即注册" type="submit">
                    <img style="display: none;" src="{{ asset('/tick') }}">
                    <p class="msg">点击“立即注册”，即表示您同意并愿意遵守小米
                      <a href="http://www.miui.com/res/doc/eula/cn.html" target="_top" title="用户协议">用户协议</a>和
                      <a href="http://www.miui.com/res/doc/privacy/cn.html" target="_top" title="隐私政策">隐私政策</a></p>
                  </div>
                </div>
              </div>
              </form>
              <div class="other_register_area" style="display: none;">
                <div class="regbox">
                  <input class="btn332 btn_reg_2 change-view" data-to="EMAIL" value="用邮箱注册" type="button">
                  <div class="facebook_area">
                    <a class="btn332 btn_reg_2 box_center sns-login-facebook" href="https://account.xiaomi.com/pass/sns/login/auth?appid=222161937813280&amp;callback=https%3A%2F%2Faccount.xiaomi.com&amp;sid=passport">
                      <i class="iconfacebook"></i>使用Facebook登录</a>
                  </div>
                </div>
              </div>
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
              <img src="{{ URL('/img/ghs.png') }}"></span>京公网安备11010802020134号</a>-京ICP证110507号</span>
      </p>
    </div>
  </body>
    <script type="text/javascript">
        function clearName()
      {
        if(document.myform.user_name.value == '请输入用户名'){
          document.myform.user_name.value = '';
        }
      }
      //验证用户名
      function checkUname()
      {
        var uname = document.myform.user_name.value;
        if(uname.match(/^\w{8,12}$/) == null){
         document.getElementById('name').innerHTML='<font style="color:red">账号必须是8~12位有效字符</font>';
          return false;
        }
         document.getElementById('name').innerHTML='<font style="color:green">账号可用!</font>';
        return true;
      }

      // 验证密码
       function checkPass()
      {
        var pass = document.myform.user_pass.value;
        if(pass.match(/^\w{6,12}$/) == null){
          document.getElementById('pass').innerHTML='<font style="color:red">密码最少为6位</font>';
          return false;
        }
        document.getElementById('pass').innerHTML='<font style="color:green">密码可用</font>';
        return true;
      }

      //验证确认密码
      function checkPassword()
      {
        var pass = document.myform.user_pass.value;
        var password = document.myform.user_password.value;
        if(pass!== password){
          document.getElementById('password').innerHTML='<font style="color:red">两次输入的密码不一样</font>';
          return false;
        }
        document.getElementById('password').innerHTML='<font style="color:green">密码可用</font>';
        return true;
      }

      //验证验证码
      function checkPassword()
      {
        var pass = document.myform.user_pass.value;
        var password = document.myform.user_password.value;
        if(pass!== password){
          document.getElementById('password').innerHTML='<font style="color:red">两次输入的密码不一样</font>';
          return false;
        }
        document.getElementById('password').innerHTML='<font style="color:green">密码可用</font>';
        return true;
      }

      // /^\w+@\w+(\.\w+){1,2}$/
      // 总的表单提交
      function doSubmit()
      {
        //年龄和用户名都验证成功则可以提交
        return checkUname() && checkPass();
      }



      //获得用户注册的时候的时间戳
      //获取div对象
      var did = document.getElementById('did');
      
      //定时调用输出时间
      setInterval(function(){
        //获取当前时间作为对象，如果你放到外面，只能获取new那一刻的时间
        var date = new Date();

        var y = date.getFullYear();   //获取4位数的年份
        var m = date.getMonth()+1;    //获取月份（0-11）
        var d = date.getDate();     //获取天数

        var h = date.getHours();    //获取时
        var i = date.getMinutes();    //获取分
        var s = date.getSeconds();    //获取秒

        s = (s<10)?'0'+s:s;

        var info = y+'-'+m+'-'+d+' '+h+':'+i+':'+s;
        did.innerHTML = info;
      },1000);

    </script>
</html>