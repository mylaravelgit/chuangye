<!DOCTYPE html>
<html lang="en" data-dpr="1" style="font-size: 75px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>大好时光 专注公司起名</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/m_index_style.css">
    <link rel="stylesheet" href="./css/iconfont.css">
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/flexible.js"></script>
    <link rel="stylesheet" href="./css/layer.css" id="layui_layer_skinlayercss">
    <script src="./js/layer.js"></script>
    <script language="javascript" src="http://ddt.zoosnet.net/JS/LsJS.aspx?siteid=DDT63642922&amp;float=1&amp;lng=cn"></script>
    <style>
        .zxzx img{
            width: 2.5rem;
            margin-top: 0.15rem;
        }
    </style></head>

<body style="font-size: 12px;">
<header>
    <img src="./images/logo_index.png">
    <!-- <ul class="navi-nav pull-right">
                <li>
                    <a href="javascript:;" id="toLogin1" data-type="1">登录</a>
                </li>
                <li class="head-line">|</li>
                <li>
                    <a href="javascript:;" id="toReg1" data-type="1">注册</a>
                </li>
            <input type="hidden" name="redirect_url_form" id="redirect_url_form" value="">
    </ul> -->
<div onclick="openZoosUrl('chatwin');">
    <a class="zxzx" href="/" target="_self" >
        <img src="./images/index_zxzx.png">
    </a></div>
</header>
<div id="gray" style="display: none;"></div>
<!--登录窗口-->
<div class="popup" id="popup_dialog" style="display: none;">
    <div class="login_tc">
        <a href="/" class="quxiao guanbi">
            <i class="iconfont"></i>
        </a>
        <!--最新动态选项卡 start-->
        <div class="focus-setTab">
            <div class="focus-menu">
                <ul>
                    <li class="hover" id="ECS_treee1">登录</li>
                    <li id="ECS_treee2">注册</li>
                </ul>
                <div class="kpple-cB"></div>
            </div>
            <div class="focus-content">
                <div id="ECS_treee1_BODY">
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
                <div class="kpple-dN" id="ECS_treee2_BODY" style="display:none;">
                    <div class="f_login reg">
                        <ul>
                            <input type="hidden" value="1537" id="hiddenareaId">
                            <li>
                                <i class="iconfont"></i>
                                <input type="text" placeholder="您的姓名" class="surname" id="surname">
                            </li>
                            <li>
                                <i class="iconfont"></i>
                                <input type="text" placeholder="手机号(用于接收短信验证码)" class="phone" id="phone" maxlength="11">
                            </li>
                        </ul>
                        <div class="mail_btn">
                            <input type="submit" value="进行手机验证，完成注册" onclick="confirmSubmit();" style="cursor: pointer;">
                        </div>
                        <p style=" line-height: 48px; text-align: center;">
                            <font style="">
                                <label>
                                    <input type="checkbox" class="xy" id="xy" checked="checked" style="width:13px;height:13px; margin-right:3px; margin-top:18px; vertical-align: top;">我已阅读并同意
                                    <a href="javascript:;" style=" text-decoration: underline; color: #333;">《创业爸爸用户协议》</a>
                                </label>
                            </font>
                        </p>
                    </div>
                    <div class="ff_yzm reg_yzm" style="display: none;">
                        <ul>
                            <li>
                                <input type="hidden" value="" id="phone_reg">
                                <input type="text" placeholder="输入图片验证码" class="picCode_reg" id="picCode_reg" maxlength="5">
                                <img src="" width="100" height="40" class="tp check_code_reg">
                            </li>
                            <li style=" margin-bottom: 20px;">
                                <input type="text" class="smsCode_reg" id="smsCode_reg" placeholder="输入短信验证码">
                                <button type="button" class="sms msg_reg" onclick="sendVerifyCodeReg();">获取短信验证码</button>
                                <button type="button" style="display: none;" class="msgTow_reg hui" disabled="disabled">120S后重新获取</button>
                            </li>
                            <li>
                                <div class="mail_btn">
                                    <input type="submit" value="确认" style="cursor: pointer;" onclick="pcVerifySmsReg();">
                                </div>
                            </li>
                            <p style=" margin-top: 20px;">
                                <a href="javascript:;" class="mod_reg">手机号错误？返回修改</a>
                            </p>
                            <p>
                                <a href="javascript:;" style=" color: #ff7618;" onclick="resolveSmsReg();">没有收到短信？点此解决</a>
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--最新动态选项卡 end-->
    </div>
</div>
<!-- 登录窗口结束 -->
<div class="flex_box">
    <div class="list list1">
        <div>
            <p>
                <span id="oSpan">16885677</span>人使用</p>
        </div>
        <a href="./qiming"></a>
    </div>
    <div class="list list2">
        <div>
            <p>
                <span id="oSpan1">35289881</span>人使用</p>
        </div>
        <a href="./heming"></a>
    </div>
    <div class="list list3">
        <div>
            <p>
                <span id="oSpan2">11280642</span>人使用</p>
        </div>
        <a href="./shengcheng"></a>
    </div>
    <div class="list list4">
        <div>
            <p>
                <span id="oSpan3">77478644</span>人使用</p>
        </div>
        <a href="./shejilogo"></a>
    </div>
</div>
<script>
    var domain = "http://" + location.host + "/";
    $("#toLogin1").click(function () {
        var type = $(this).data("type");
        $("#click_type").val(type);
        $("#surname").val("");
        $("#phone").val("");
        $("#gray").show();
        //$("#popup").hide();//查找ID为popup的DIV show()显示#gray
        $('.city').parent().remove();
        $('#ECS_treee2').removeClass('hover');
        $('#ECS_treee1').addClass('hover');
        $('#ECS_treee2_BODY').css({ 'display': 'none' });
        $('#ECS_treee1_BODY').removeAttr('style')
        $("#popup_dialog").show();//查找ID为popup的DIV show()显示#gray
    });

    $("#toReg1").click(function () {
        var type = $(this).data("type");
        $("#click_type").val(type);
        $("#l_phone").val("");
        $("#gray").show();
        //$("#popup1").hide();//查找ID为popup的DIV show()显示#gray
        $('#ECS_treee1').removeClass('hover');
        $('#ECS_treee2').addClass('hover');
        $('#ECS_treee1_BODY').css({ 'display': 'none' });
        $('#ECS_treee2_BODY').removeAttr('style')
        $("#popup_dialog").show();//查找ID为popup的DIV show()显示#gray
    });

    function fastReplySubmit() {
        var surname = $("#fastname").val();
        var phone = $("#fastphone").val();
        var reg = /^1[3-9][0-9]{9}$/;
        if (!reg.test(phone)) {
            layer.msg("手机号格式不正确!");
            return;
        }
        $.ajax({
            url: "/heming/cusVerify.html?customerName=" + encodeURI(surname) + "&customerMobile=" + phone + "&sourceId=46",
            dataType: "json",
            type: "post",
            success: function (data) {
                if (data.success == true) {
                    layer.msg("提交完成，我们将尽快与你取得联系。");
                    window.location.reload();
                } else if (data.success = 4) {
                    $("#popup").hide();
                    $("#gray").show();
                    $("#popup3").show();
                    $("#phone3").val(data.phone);
                } else {
                    layer.msg(data.msg);
                }
            }
        });
    }
    function confirmSubmit() {
        var surname = $("#surname").val();
        var phone = $("#phone").val();
        var type = $('.typeJs').val();
        var qd = $("#qd").val();
        var zd = $("#zd").val();
        var fs = $("#fs").val();
        var lx = $("#lx").val();
        var gjc = $("#gjc").val();
        var city = "";
        if (type == 1) {
            city = $('#region_tj').val();
            var industry = $('#trade_tj').val();
            var remark = city + "-" + industry;

        } else {
            city = $("#region").val();
        }
        city = $("#hiddenareaId").val();
        remark = '工商核名系统新注册用户'
        var reg = /^1[3-9][0-9]{9}$/;

        if (!reg.test(phone)) {
            layer.msg("手机号格式不正确!");
            return;
        }
        var xy = $("input[class='xy']").is(':checked');
        if (!xy) {
            layer.msg('你需要勾选同意用户协议')
            return;
        }
        $.ajax({
            url: "/heming/cusVerify.html?customerName=" + encodeURI(surname) + "&customerMobile=" + phone + "&sourceId=46&qd=" + qd + "&zd=" + zd + "&fs=" + fs + "&lx=" + lx + "&gjc=" + gjc + "&zycDiscount=0.2" + "&areaId=" + encodeURI(city) + "&xy" + xy,
            dataType: "json",
            type: "post",
            success: function (data) {
                if (data.success == true) {
                    if ($('#redirect_url_form').val()) {
                        document.getElementById($('#redirect_url_form').val()).submit()
                    } else {
                        window.location.reload();
                    }
                } else if (data.success == false) {
                    layer.msg(data.errorMsg);
                } else {
                    layer.msg(data.errorMsg);
                }
            }
        });
    }

    function login() {
        var phone = $("#l_phone").val();
        var reg = /^1[3-9][0-9]{9}$/;
        if (phone == null || phone == '' || phone == undefined || !reg.test(phone)) {
            layer.msg("请输入符合规范的手机号!");
            return;
        }
        var index = layer.msg('正在处理...', {
            time: 0,
            icon: 16
            , shade: 0.5
        });
        $.ajax({
            url: "/heming/login.html?customerMobile=" + phone,
            dataType: "json",
            type: "post",
            success: function (data) {

                if (data.success == true) {
                    console.info(data.success);
                    if ($('#redirect_url_form').val()) {
                        document.getElementById($('#redirect_url_form').val()).submit()
                    } else {
                        window.location.reload();
                    }
                } else {
                    layer.msg("尚未找到此账号，请先注册！");
                }

            }
        });
    }

    function logout() {
        $.ajax({
            url: '/heming/logout.html',
            dataType: 'json',
            type: 'get',
            success: function (data) {
                if (data.success == true) {
                    window.location.href = '/heming/mobile/index.html';
                }
            }
        });
    }

    //窗口效果
    //点击登录class为tc 显示
    $(".tc").click(function () {
        $("#gray").show();
        $("#popup").show();//查找ID为popup的DIV show()显示#gray
        tc_center();
    });
    //点击关闭按钮
    $(".close>i").click(function () {
        $("#gray").hide();
        $("#popup").hide();//查找ID为popup的DIV hide()隐藏
        $("#popup3").hide();
    })

    //窗口水平居中
    $(window).resize(function () {
        tc_center();
    });

    function tc_center() {
        var _top = ($(window).height() - $(".popup").height()) / 2;
        var _left = ($(window).width() - $(".popup").width()) / 2;

        $(".popup").css({ top: _top, left: _left });
    }


    //点击关闭按钮
    $("a.guanbi").click(function () {
        $("#gray").hide();
        $("#popup_dialog").hide();//查找ID为popup的DIV hide()隐藏
        $('.city').parent().remove();
    })
    //<![CDATA[
    var cycleList = ['ECS_treee1', 'ECS_treee2'];
    var tabFront = 'hover';
    var tabBack = '';
    function cycleShow(obj) {
        var curObj;
        var curBody;
        for (i = 0; i < cycleList.length; i++) {
            curObj = document.getElementById(cycleList[i]);
            curBody = document.getElementById(cycleList[i] + '_BODY');
            if (obj.id == curObj.id) {
                curObj.className = tabFront;
                curBody.style.display = "";
            }
            else {
                curObj.className = tabBack;
                curBody.style.display = "none";
            }
        }
    }
    // 添加事件
    for (i = 0; i < cycleList.length; i++) {
        document.getElementById(cycleList[i]).onclick = function () {
            cycleShow(this);
        };
    }
    //]]>









    //在一定的时间内 移动一定的距离
    //当前的位置=移动的距离/所用的时间*已用的时间
    //移动的距离=结束位置-起始位置
    - function move() {
        var oSpan = document.getElementById("oSpan");
        var d = 1688 + '5677';//结束的位置
        var s = parseInt(oSpan.innerHTML);//起始位置
        var time = 1000;  //所用时间 1000毫秒（ 在1秒内 数值增加到d）;
        var outTime = 0;  //所消耗的时间
        var interTime = 30;
        var timer = setInterval(function () {
            outTime += interTime;
            if (outTime < time) {
                oSpan.innerHTML = parseInt(d / time * outTime);
            } else {
                oSpan.innerHTML = d;
            }
        }, interTime);
    }()
    - function move() {
        var oSpan = document.getElementById("oSpan1");
        var d = 3528 + '9881';//结束的位置
        var s = parseInt(oSpan.innerHTML);//起始位置
        var time = 1000;  //所用时间 1000毫秒（ 在1秒内 数值增加到d）;
        var outTime = 0;  //所消耗的时间
        var interTime = 30;
        var timer = setInterval(function () {
            outTime += interTime;
            if (outTime < time) {
                oSpan.innerHTML = parseInt(d / time * outTime);
            } else {
                oSpan.innerHTML = d;
            }
        }, interTime);
    }()
    - function move() {
        var oSpan = document.getElementById("oSpan2");
        var d = 1128 + '0642';//结束的位置
        var s = parseInt(oSpan.innerHTML);//起始位置
        var time = 1000;  //所用时间 1000毫秒（ 在1秒内 数值增加到d）;
        var outTime = 0;  //所消耗的时间
        var interTime = 30;
        var timer = setInterval(function () {
            outTime += interTime;
            if (outTime < time) {
                oSpan.innerHTML = parseInt(d / time * outTime);
            } else {
                oSpan.innerHTML = d;
            }
        }, interTime);
    }()
    - function move() {
        var oSpan = document.getElementById("oSpan3");
        var d = 7747 + '8644';//结束的位置
        var s = parseInt(oSpan.innerHTML);//起始位置
        var time = 1000;  //所用时间 1000毫秒（ 在1秒内 数值增加到d）;
        var outTime = 0;  //所消耗的时间
        var interTime = 30;
        var timer = setInterval(function () {
            outTime += interTime;
            if (outTime < time) {
                oSpan.innerHTML = parseInt(d / time * outTime);
            } else {
                oSpan.innerHTML = d;
            }
        }, interTime);
    }()
</script>



</body></html>