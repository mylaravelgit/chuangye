<!DOCTYPE html>
<html data-dpr="1" style="font-size: 43.7px;">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>在线免费核名</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/iconfont.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <link rel="stylesheet" href="./css/common.css">
    <script src="./js/flexible.js"></script>

    <script src="./js/jquery-1.8.3.min.js"></script>

    <script type="text/javascript" language="javascript">
        function display() { document.getElementById("box").style.display = "block"; }
        function disappear() { document.getElementById("box").style.display = "none"; }
    </script>
    <script type="text/javascript">
        var D = new Dictionary();
        var len = 0;
        $("#areaLists li").each(function () {
            var y = $(this);
            len = len + 1;
            D.put(y.attr("name"), y.attr("id"));
        });
        //键值对保存地区用于匹配
        function Dictionary() {
            this.data = new Array();
            this.put = function (key, value) {
                this.data[key] = value;
            };

            this.get = function (key) {
                return this.data[key];
            };

            this.remove = function (key) {
                this.data[key] = null;
            };

            this.isEmpty = function () {
                return this.data.length == 0;
            };

            this.size = function () {
                return this.data.length;
            };
        }
    </script>
    <style type="text/css">
        #box {
            display: none;
            width: 358px;
            margin: 0 auto;
            position: absolute;
            top: 500px;
        }

        .m_m ul li.zc {
            height: 100%;
            height: 70px;
            background: rgba(0, 0, 0, 0.4) !important;
            background: #000000;
            font-size: 14px;
            padding: 25px 10px 0 10px;
        }

        .m_m ul li.zc a {
            margin: 0 5px;
        }

        .m_m ul li.zc div a {
            font-size: 12px;
            margin-right: 5px;
            float: right;
            color: #b0c0ca
        }

        #List1 {
            left: 190px;
            top: 82px;
        }

        .index_wrapper {
            background: url(../images/body_bj.jpg) no-repeat top;
            background-size: 100%;
            width: 10rem;
            min-height: 18rem;
        }
        /*--弹窗样式--*/

        #gray{width:100%;height:100%;background:rgba(0,0,0,0.3);position:fixed;top:0px;display:none;z-index:100;}

        .popup{
            height:auto;
            background-color:#fff;
            position:fixed;
            z-index:100;
            left:0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            top:0;
            bottom: 0;
            margin-top: auto;
            margin-bottom: auto;
            display:none;
        }
        .login_tc{ width:9.5rem; background:#fff; margin:0 auto;  padding:0.1rem 0.2rem; height:8rem; overflow: auto; position: relative;}
        .quxiao{ position: absolute; top: 3px; right: 10px;}
        .quxiao i{ color: #999; font-size: 18px;}
        .login_tc p.validateTips{ width:100%; line-height:40px; font-size:12px; color:#666; background:#f9f9f9; text-align:center; margin-bottom:20px;}

        .login_tc li span{ width:70px; float:left; font-size:14px;color:#666; text-align:right; display:block; line-height:36px;}

        .login_tc li button.yzm{ background:#2c97df; color:#fff; line-height:34px; text-align:center; border:none; font-size:12px; width:100px;}
        .login_tc .mail_btn input{ width:100%; line-height:35px; text-align:center; background:#f78739; color:#fff;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius:5px; border:none; margin-right:10px; float:left;}
        .login_tc .mail_btn a.quxiao{ background:#ebebeb; color:#666; display:block;width:130px; line-height:35px; text-align:center; float:left; font-size:16px;-moz-border-radius: 5px;-webkit-border-radius: 5px;border-radius:5px; }
        .login_tc .mail_btn{ text-align:center; padding:10px 0 0 0px;}
        .login_tc .mail_btn input{ font-size:16px;}


        .focus-menu li{
            float: left;
            text-align: center;
            width: 50%;
            margin-bottom: 0.5rem;
            font-size: 0.5rem;
            color: #333;
            line-height: 1.5rem;
            font-weight: 300;
            border-bottom: 1px solid #f0f0f0;
            cursor: pointer;
        }
        .focus-menu li.hover{ border-bottom: 1px solid #f78739; color: #f78739;}
        .f_login div{ clear: both; line-height: 38px; height: 40px; margin-bottom: 10px;position: relative;}
        .f_login div i{ float: left; margin-right: 6px; color: #999; font-size: 16px; padding-left: 8px; position:  absolute; left: 3px; top: 0px;}
        .f_login div input{  border: 1px solid #f0f0f0;line-height: 38px; width: 100%; padding-left: 30px; }

        .f_login div input:focus ,.ff_yzm li input:focus{border: 1px solid #ffc9a3;box-shadow: 0 0 5px #f0f0f0; }

        .ff_yzm li input{ width: 100%; border: 1px solid #f0f0f0; height: 40px; line-height: 38px; padding-left: 5px;}
        .ff_yzm li{ position: relative; margin-top: 10px; clear: both;}
        .ff_yzm li img.tp{ position: absolute; right: 0; bottom:0;}
        .ff_yzm li button{position: absolute; right: 0; top:0; background:#f78739; color: #fff; width: 110px; font-size: 12px; text-align: center; /* border-radius: 5px; */ border: 0; height:39px; line-height: 38px;cursor:pointer}
        .ff_yzm li button.hui{ background: #ddd;}
        .ff_yzm p{ font-size: 14px; color: #666; line-height: 38px; text-align: center;}
        .ff_yzm p a{ text-decoration: underline;}
    </style>



<body style="font-size: 12px;">

<style>
    .index_wrapper .logo {
        box-sizing: border-box;
        padding: .5rem .3rem 0 .3rem;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 100%;

    }

    .index_wrapper .logo img {
        width: 4.5rem;
    }
    .pull-right li a{
        color: #fff;
    }
    .index_wrapper .hmtext {
        text-align: center;
        margin-top: 1rem;
        color: #fff;
    }

    .index_wrapper .hmtext h2 {
        font-size: .7rem;
        font-weight: 700;
    }

    .index_wrapper .hmtext p {
        line-height: .5rem;
        letter-spacing: .02rem;
        font-size: .333rem;
    }

    .form {
        padding: .5rem;
        min-height: 5rem;
    }

    .form .ss_wrap {
        background: #fff;
        border-radius: 6px;
        padding: 0 .35rem;
    }

    .form .ss_wrap .ssfomr_box {
        border-bottom: 1px solid #e8e8e8;
        line-height: 1.5rem;
    }

    .ssfomr_box input {
        width: 100%;
        line-height: 1.5rem;
    }

    .ssfomr_box input[value] {
        color: #555;
        font-size: .4rem;
    }

    .ssfomr_box input::-webkit-input-placeholder {
        color: #555;
        font-size: .4rem
    }

    .ssfomr_box input:-moz-placeholder {
        color: #555;
        font-size: .4rem
    }

    .ssfomr_box input::-moz-placeholder {
        color: #555;
        font-size: .4rem
    }

    .ssfomr_box input:-ms-input-placeholder {
        color: #555;
        font-size: .4rem
    }

    .ssfomr_box #form {
        font-size: .4rem;
        line-height: 1.5rem;
        width: 100%;
    }

    .btn_hm {
        padding: 0 .5rem;
    }

    .ssfomr_box .clicka {
        display: inline-block;
        width: 100%;
        background: #fcaf40;
        border-radius: 6px;
        line-height: 1rem;
        color: #fff;
        text-align: center;
        font-size: .4rem;
        letter-spacing: .04rem;
    }

    #IIInsomnia_city_picker {
        left: .5rem!important;
        top: 6rem!important;
    }

    .IIInsomnia-city-picker {
        width: 9rem;
    }

    input::-webkit-input-placeholder {
        color: #555;
        font-size: .4rem
    }

    input:-moz-placeholder {
        color: #555;
        font-size: .4rem
    }

    input::-moz-placeholder {
        color: #555;
        font-size: .4rem
    }

    input:-ms-input-placeholder {
        color: #555;
        font-size: .4rem
    }

    input[value] {
        color: #9a6060;
        font-size: 0.4rem;
    }

    #List2 {
        position: absolute;
        left: 0;
        top: 100%;
        width: 100%;
        height: 100%;
        z-index: 10400;
        background: #f7f7f8;
        display: none;
    }

    .pop-nav {
        padding: 0 .3rem;
        line-height: 1rem;
        font-size: .45rem;
        color: #3d4145;
        text-align: center;
        white-space: nowrap;
        background: #f7f7f8;
    }

    .close-popup {
        right: .27rem;
        position: absolute;
        color: #0894ec;
    }

    .ui-industry {
        border-top: #fff 3px solid;
    }

    .memu2_tit01 {
        font-size: .45rem;
        color: #666;
        width: 3rem;
        margin: 0 auto;
        margin-top: .1rem;
        line-height: 1rem;
        text-align: center;
        float: left;
    }

    #List2 .classify {
        width: 7rem;
        margin: 0 auto;
        float: left;
        padding: .35rem 0;
    }

    #List2 .classify li {
        width: 31%;
        text-align: center;
        color: #333;
        line-height: 1rem;
        margin: .5rem .4rem;
        margin: .03rem;
        font-size: .35rem;
        float: left;
        border: 1px solid #e3e3e3;
        border-radius: 5px;
        background: #fff;
    }
</style>

<div class="index_wrapper ny_hm">
    <div class="logo">
        <a href="/">
            <img src="./images/logo_w_hm.png">
        </a>
        <ul class="navi-nav pull-right">
            <li>
                <a href="javascript:;" style="display: none;" id="toLogin1" data-type="1">登录</a>
            </li>
            <li class="head-line" style="display: none;">|</li>
            <li>
                <a href="javascript:;" style="display: none;" id="toReg1" data-type="1">注册</a>
            </li>

            <input type="hidden" name="redirect_url_form" id="redirect_url_form" value="searchForm">
        </ul>
    </div>
    <div id="gray" style="display: block;"></div>

    <div class="popup" id="popup_dialog" style="cursor: default; display: block;">

        <div class="login_tc">
            <a href="/" class="quxiao guanbi">
                <i class="iconfont"></i>
            </a>
            <!--最新动态选项卡 start-->
            <div class="focus-setTab">
                <div class="focus-menu">
                    <ul>
{{--                        <li class="" id="ECS_treee1">登录</li>--}}
                        <li id="ECS_treee2" class="hover">注册</li>
                    </ul>
                    <div class="kpple-cB"></div>
                </div>
                <div class="focus-content">
                    <div id="ECS_treee1_BODY" style="display: none;">


                        <div class="f_login login">
                            <ul>
                                <li>
                                    <i class="iconfont"></i>
                                    <input type="text" placeholder="手机" class="l_phone" id="l_phone" maxlength="11">
                                </li>

                            </ul>
                            <div class="mail_btn">
                                <input type="submit" value="登录" onclick="login();" style="cursor: pointer;">
                            </div>
                        </div>

                        <div class="ff_yzm login_yzm" style="display: none;">
                            <ul>
                                <li>
                                    <input type="hidden" value="" id="phone_login">
                                    <input type="text" placeholder="输入图片验证码" class="picCode_login" id="picCode_login" maxlength="5">
                                    <img src="" width="100" height="40" class="tp check_code_login">
                                </li>
                                <li style=" margin-bottom: 20px;">
                                    <input type="text" class="smsCode_login" id="smsCode_login" placeholder="输入短信验证码">
                                    <button type="button" class="sms msg" onclick="sendVerifyCodeLogin();">获取短信验证码</button>
                                    <button type="button" style="display: none;" class="msgTow hui" disabled="disabled">120S后重新获取</button>
                                </li>
                                <li>
                                    <div class="mail_btn">
                                        <input type="submit" value="确认" style="cursor: pointer;" onclick="pcVerifySmsLogin();">
                                    </div>
                                </li>
                                <p style=" margin-top: 20px;">
                                    <a href="javascript:;" class="mod_login">手机号错误？返回修改</a>
                                </p>
                                <p>
                                    <a href="javascript:;" style=" color: #ff7618;" onclick="resolveSmsLogin();">没有收到短信？点此解决</a>
                                </p>
                            </ul>
                        </div>
                    </div>

                    <div class="kpple-dN" id="ECS_treee2_BODY">

                        <div class="container">
                            <div class="row justify-content-center">
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <div class="f_login  reg">
                                                    <div class="col-md-6">
                                                        <i class="iconfont"></i>
                                                        <input id="name" type="text" placeholder="您的姓名" class="surname" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    </div>
                                                </div>

                                                <div class="f_login">
                                                    <div class="col-md-6">
                                                        <i class="iconfont"></i>
                                                        <input id="mobile" type="mobile" placeholder="手机号(用于接收短信验证码)" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                                        @error('mobile')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row" style="display: none">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="123456">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row"  style="display: none">
                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="123456">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="mail_btn">
                                                        <input type="submit" value="进行手机验证，完成注册" onclick="confirmSubmit();" style="cursor: pointer;">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <!--最新动态选项卡 end-->

        </div>
    </div>

</div>










<style>
    .hui {
        padding: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>




</body></html>