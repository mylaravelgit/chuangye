<!DOCTYPE html>
<html lang="zh-CN" data-dpr="1" style="font-size: 75px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>大好時光,免费公司起名|公司注册|工商核名|公司测名|公司名称推荐系统。专业的公司起名网站。</title>
    <meta name="keywords" content="公司起名、公司测名、公司起名大全、公司名称推荐、工商核名、工商查名、公司名称查询、工商查询。">
    <meta name="description" content="大好時光，基于全国工商大数据的公司名称推荐与核名的搜索引擎，已服务超过100万创业者公司起名。大好時光基于智能算法，让您的公司名字一次就通过工商注册！大好時光已获得千万风险投资，专注公司起名！">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <link rel="stylesheet" href="./css/heming_mobile.css">
    <link rel="stylesheet" href="./css/style_mobile.css">
    <link rel="stylesheet" href="./css/iconfont.css">
    <link rel="stylesheet" href="./css/index_mobile.css">
    <link rel="stylesheet" type="text/css" href="./css/cityPicker_mobile.css">
    <script type="text/javascript" defer="" async="" src="./js/uaest.js"></script>
    <script src="./js/jquery-1.8.3.min.js"></script>
    <script language="javascript" src="http://ddt.zoosnet.net/JS/LsJS.aspx?siteid=DDT63642922&amp;float=1&amp;lng=cn"></script>
    <script type="text/javascript" src="./js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./js/flexible.js"></script>
    <script type="text/javascript" src="./js/cityData.js"></script>
    <script type="text/javascript" src="./js/cityPicker_mobile.js"></script>
    <style>
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
    </style>
    <script type="text/javascript">
        $(function () {
            $(".check_code").click(function () {
                $(this).children("img").attr("src", "/checkCode?m=" + Math.floor(Math.random() * 100));
            });

            var availableTags = [{ label: '上海', id: 'c54' }, { label: 'bbbbbb', id: '5556' }];
            document.onkeydown = function (e) {
                var ev = document.all ? window.event : e;
                if (ev.keyCode == 13) {
                    //doquery();
                }
            }


            $("#trade_tj").autocomplete({
                source: function (request, response) {
                    $.ajax({
                        url: "getTrade.html",
                        dataType: "json",
                        contentType: 'application/json; charset=utf-8',
                        data: $.extend({
                            startsWith: encodeURI(request.term),
                            limit: 10
                        }, null),
                        success: function (data) {
                            response(data);
                        }
                    });
                },
                minLength: 1,
                select: function (event, ui) {
                }
            });


        });

        function btnLoad(a, b) {
            b ? $(a).attr('disabled', "disabled").data('html', $(a).html()).html('<img src="images/btnload.gif"/>') : $(a).removeAttr('disabled').html($(a).data("html"));
        };

        //common
        var static_region = "";
        var flag_region = false;
        var errorId = "";
        var adjustflag = false;
        var districtArry = ['中国', '中华', '全国', '国家', '国际'];
        var district_keywords = '企业名称冠以中国、中华、全国、国家、国际等字样的，需经国家工商总局核准。大好時光不提供核准服务。';
        var district_null = '不含行政区划的企业名称需经由国家工商总局核准。大好時光不提供核准服务。';
        $(function () {
            $("body").on('click', "#logout", function () {
                delCookie("qds_u");
                window.location.reload();
            });
        })
        //验证
        function doquery_TJ() {
            if ($("#region_tj").val() == "") {
                layer.msg("不含行政区划的企业名称需经由国家工商总局核准。大好時光不提供核准服务。");
                $("#region_tj").focus();
                return;
            } else {
                if (matchKeyWord($("#region").val(), districtArry, 0)) {
                    layer.msg("企业名称冠以中国、中华、全国、国家、国际等字样的，需经国家工商总局核准。大好時光不提供核准服务。");
                    $("#region_tj").focus();
                    return;
                }

            }
            if ($("#trade_tj").val() == "") {
                layer.msg("请输入行业类型");
                $("#trade_tj").focus();
                return;
            } else {
                if (!/^[\u4e00-\u9fa5]+$/.test($("#trade_tj").val())) {
                    layer.msg("行业类型必须为简体汉字");
                    $("#trade_tj").focus();
                    return;
                }
            }
            verify_tj();
        }
        function hideAll() {
            // 	$("#passDiv").hide();
            $("#repeatDiv").hide();
            $("#similarDiv").hide();
            $("#banDiv").hide();
            $("#hezhunDiv").hide();
            $("#famousDiv").hide();

        }
        /*去除字符串中空格*/
        function trim(str) {
            if (str == "undefined") {
                return "";
            }
            var astr = str.replace(/^(\s|\u00A0)+/, '');
            for (var i = astr.length - 1; i >= 0; i--) {
                if (/\S/.test(astr.charAt(i))) {
                    astr = astr.substring(0, i + 1);
                    break;
                }
            }

            return astr;
        }
        function verify_tj() {
            $(".check_code").trigger("click");
            submit();

        }
        var trade = '';

        function checkTJPamar() {
            var type = $(".clicka").data("type");
            $("#click_type").val(type);
            var city = $('#region_tj').val();
            var industry = $('#trade_tj').val();
            trade = industry;
            if (city == '' || city == undefined) {
                layer.msg("请填写要推荐公司名称的区域");
                return;
            }
            if (industry == '' || industry == undefined) {
                layer.msg("请填写要推荐公司名称的行业类型");
                return;
            }
            var city = $('#region_tj').val();
            var industry = $('#trade_tj').val();
            $('#cityName').val(city);
            $('#industryName').val(industry);
            $('#hidden_provinceCode').val($("#provinceCode").val());
            $('#hidden_cityCode').val($("#cityCode").val());
            if ("" == "") {
                //设置redirect_url_form
                $('#redirect_url_form').val('searchFormTJ');
                $("#toReg1").click();
                return;
            }
            verify_tj();
        }
        function submit() {
            $('#searchFormTJ').submit();
        }
    </script>
    <script type="text/javascript">
        var i = 0;
        function showAndHide(obj, types) {
            var Layer = window.document.getElementById(obj);
            switch (types) {
                case "show":
                    if (obj == 'List1') {
                        var region = $("#region_tj").val();
                        if (region == null || region == '' || region == undefined || region.length == 0) {
                            Layer.style.display = "block";
                            $(".black").show();
                        } else {
                            if (i == 0) {
                                Layer.style.display = "block";
                                i++;
                            } else {
                                Layer.style.display = "none";
                            }
                        }
                    }
                    if (obj == 'List2') {
                        var trade = $("#trade_tj").val();
                        if (trade == null || trade == '' || trade == undefined || trade.length == 0) {
                            Layer.style.display = "block";
                            $(".black").show();
                        } else {
                            if (i == 0) {
                                Layer.style.display = "block";
                                $(".black").show();
                                i++;
                            } else {
                                Layer.style.display = "none";
                                $(".black").hide();
                            }
                        }
                    }
                    break;
                case "hide":
                    Layer.style.display = "none";
                    break;
            }
        }
        function getValue(obj, str) {
            $(".black").hide();
            var input = window.document.getElementById(obj);
            input.value = str;
        }
        function getValueArea(obj, str, code) {
            var input = window.document.getElementById(obj);
            $('#hid_areaId').val(code);
            input.value = str;

        }
    </script>


    <link rel="stylesheet" href="./css/layer.css" id="layui_layer_skinlayercss">
    <style>
        @font-face {
            font-family: uc-nexus-iconfont;
            src: url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.woff) format('woff'), url(chrome-extension://pogijhnlcfmcppgimcaccdkmbedjkmhi/res/font_9qmmi8b8jsxxbt9.ttf) format('truetype')
        }
    </style>
</head>

<body style="font-size: 12px;">
<div class="black"></div>
<div class="toubu">
    <a href="/">
        <img src="./images/logo_w_hm.png" alt="">
    </a>
    <ul class="navi-nav pull-right">
        <li>
            <a href="javascript:;" style="display: none;" id="toLogin1" data-type="1">登录</a>
        </li>
        <li class="head-line" style="display: none;">|</li>
        <li>
            <a href="javascript:;" style="display: none;" id="toReg1" data-type="1">注册</a>
        </li>
        <input type="hidden" name="redirect_url_form" id="redirect_url_form" value="">
    </ul>
</div>

<div class="index_wrapper ny_qm" style="height:100%; padding-bottom:0px; background: url(images/jyfw_bj.jpg);background-size: cover;padding-top:1.5rem;">
    <input type="hidden" name="areaCode" id="areaCode" value="310000">

    <div class="qds_slogan">经营范围智能生成器
        <p>经营范围不知道怎么填？智能生成！</p>
    </div>

    <div class="form">
        <div class="ss_wrap row">
            <div class="ssfomr_box region_p1">
                <div>
                    <input type="text" id="region_tj" name="region_tj" placeholder="请选择城市" class="ui-autocomplete-input" autocomplete="off" readonly="readonly">
                    <input type="hidden" id="provinceCode" value="">
                    <input type="hidden" id="cityCode" value="">
                </div>
            </div>

            <div class="ssfomr_box hytype_p1">
                <div>
                    <input type="text" id="trade_tj" name="trade_tj" placeholder="行业类型 如：网络科技" onkeyup="showAndHide(&#39;List2&#39;,&#39;show&#39;);" onfocus="showAndHide(&#39;List2&#39;,&#39;show&#39;);" onblur="showAndHide(&#39;List2&#39;,&#39;hide&#39;);" class="ui-autocomplete-input" autocomplete="off">
                </div>
            </div>

            <div class="ssfomr_box">
{{--                <button class="btn clicka" onclick="checkTJPamar()" data-type="2">一键生成</button>--}}
                <a href="{{ route('register') }}" type="button" class="btn clicka">一键生成</a>
            </div>
        </div>
        <script>
            $('#region_tj').click(function () {
                $(".black").show();
            })
        </script>
        <!--列表1-->

        <!--列表2-->

        <div class="Menu" id="List2" style="display: none;">
            <div class="Menu2">
                <ul>




                    <div class="memu2_tit01">科技类</div>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;网络科技&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">网络科技</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;电子商务&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">电子商务</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;信息技术&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">信息技术</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;游戏&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">游戏</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;电子&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">电子</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;软件&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">软件</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;新材料&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">新材料</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;生物科技&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">生物科技</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;教育科技&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">教育科技</a>
                    </li>

                </ul>

                <ul>
                    <div class="memu2_tit01">许可类</div>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;投资管理&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">投资管理</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;金融&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">金融</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;资产&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">资产</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;融资租赁&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">融资租赁</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;医疗器械&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">医疗器械</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;人力资源&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">人力资源</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;食品&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">食品</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;劳务派遣&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">劳务派遣</a>
                    </li>


                </ul>

                <ul>
                    <div class="memu2_tit01">服务类</div>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;广告&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">广告</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;文化传播&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">文化传播</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;建筑装潢&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">建筑装潢</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;设计&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">设计</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;美容美发&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">美容美发</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;房地产中介&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">房地产中介</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;物业管理&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">物业管理</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;商务咨询&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">商务咨询</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;企业管理&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">企业管理</a>
                    </li>
                </ul>
                <ul>
                    <div class="memu2_tit01">其 他</div>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;贸易&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">贸易</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;实业&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">实业</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;制造&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">制造</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;服饰&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">服饰</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;化妆品&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">化妆品</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;工程&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">工程</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;农业&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">农业</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;餐饮管理&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">餐饮管理</a>
                    </li>
                    <li onmousedown="getValue(&#39;trade_tj&#39;,&#39;物流&#39;);showAndHide(&#39;List2&#39;,&#39;hide&#39;);">
                        <a href="javascript:void(0);">物流</a>
                    </li>

                </ul>
            </div>
        </div>

    </div>


    <div class="syrs1" style=" margin-top:0.6rem;">已服务
        <b id="oSpan">24585304</b>家公司</div>
    <script>//在一定的时间内 移动一定的距离
        //当前的位置=移动的距离/所用的时间*已用的时间
        //移动的距离=结束位置-起始位置
        -function move() {
            var oSpan = document.getElementById("oSpan");
            var d = 2458 + '5304';//结束的位置
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

</div>


<div class="jyfw_tj cen" style=" border: 0;">
    <div class="tit">公司的经营范围有什么讲究？</div>
    <dl>
        <dt>
            <img src="./images/jyfw1.png">
        </dt>
        <dd>
            <h2>
                <span>行业差异性</span>
            </h2>
            <p>不同的行业类型，对应不同的经营范围。原则上不能随意写</p>
        </dd>
    </dl>
    <dl>
        <dt>
            <img src="./images/jyfw2.png">
        </dt>
        <dd>
            <h2>
                <span>地区差异性</span>
            </h2>
            <p>同一个行业，不同地区也有地方差异性，写法不一样</p>
        </dd>
    </dl>
    <dl>
        <dt>
            <img src="./images/jyfw3.png">
        </dt>
        <dd>
            <h2>
                <span>许可经营项</span>
            </h2>
            <p>不同时期，许可经营项是不一样的。写法有差异</p>
        </dd>
    </dl>
</div>



<div style=" clear:both"></div>
<div style=" background:url(images/sf1.gif) repeat; height:auto; overflow:auto;width:100%;">
    <div class="jyfw_ys cen">
        <div class="tit">经营范围生成器为什么好用？</div>
        <ul>
            <li>
                <h2>
                    <img src="./images/qdb_bz.jpg">来源真实公司</h2>系统生成的经营范围，都来自真实在营的公司</li>
            <li>
                <h2>
                    <img src="./images/qdb_bz1.jpg">考虑地区差异</h2>根据用户选择的地区，推荐可用的经营范围</li>
            <li>
                <h2>
                    <img src="./images/qdb_bz2.jpg">适用5000+个行业</h2>300多个大类，5000多个小类行业，均可推荐</li>
        </ul>

    </div>
</div>

<div style=" clear:both"></div>



<form action="/" id="searchFormTJ" method="post">
    <input type="hidden" id="cityName" name="city" value="">
    <input type="hidden" id="hid_areaId" name="areaId" value="">
    <input type="hidden" id="hid_page" name="pageNo" value="0">
    <input type="hidden" id="industryName" name="industry" value="">
    <input type="hidden" id="hidden_provinceCode" name="province_code" value="">
    <input type="hidden" id="hidden_cityCode" name="city_code" value="">
</form>



<script src="./js/layer.js"></script>


<style>
    .hui {
        padding: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>

<div id="gray" style="display: none;"></div>

<!-- 底部 -->
<link rel="stylesheet" href="./css/footer_mobile.css">
<footer class="bg-dark" id="footer" style="position: relative;">
    <div class="dk">
        <div class="container">
            <div class="row m-t-lg m-b-lg">
                <footer class="footer ">
                    <hr style="border-top: 1px solid #5f6d8f;">
                    <div class="row footer-bottom text-center">
                        <div class="text-muted m-t-sm">
                            ©2016-2018 粤ICP备16004580号-4 版权所有 深圳聚星创想财税科技有限公司
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</footer>
<div class="popup" id="popup_dialog" style="cursor: default; display: none;">

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
                                    <a href="javascript:;" style=" text-decoration: underline; color: #333;">《大好時光用户协议》</a>
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

<script type="text/javascript">
    var domain = "http://" + location.host + "/";
    console.log(domain);
    $("#toLogin1").click(function(){
        var type=$(this).data("type");
        $("#click_type").val(type);
        $("#surname").val("");
        $("#phone").val("");
        $("#gray").show();
        //$("#popup").hide();//查找ID为popup的DIV show()显示#gray
        $('.city').parent().remove();
        $('#ECS_treee2').removeClass('hover');
        $('#ECS_treee1').addClass('hover');
        $('#ECS_treee2_BODY').css({'display':'none'});
        $('#ECS_treee1_BODY').removeAttr('style')
        $("#popup_dialog").show();//查找ID为popup的DIV show()显示#gray
    });

    $("#toReg1").click(function(){
        var type=$(this).data("type");
        $("#click_type").val(type);
        $("#l_phone").val("");
        $("#gray").show();
        //$("#popup1").hide();//查找ID为popup的DIV show()显示#gray
        $('#ECS_treee1').removeClass('hover');
        $('#ECS_treee2').addClass('hover');
        $('#ECS_treee1_BODY').css({'display':'none'});
        $('#ECS_treee2_BODY').removeAttr('style')
        $("#popup_dialog").show();//查找ID为popup的DIV show()显示#gray
    });

    function fastReplySubmit(){
        var surname=$("#fastname").val();
        var phone=$("#fastphone").val();
        var reg=/^1[3-9][0-9]{9}$/;
        if(!reg.test(phone)){
            layer.msg("手机号格式不正确!");
            return;
        }
        $.ajax({
            url:"/heming/cusVerify.html?customerName="+encodeURI(surname)+"&customerMobile="+phone+"&sourceId=46",
            dataType:"json",
            type:"post",
            success:function(data){
                if(data.success==true){
                    layer.msg("提交完成，我们将尽快与你取得联系。");
                    window.location.reload();
                }else if(data.success = 4 ){
                    $("#popup").hide();
                    $("#gray").show();
                    $("#popup3").show();
                    $("#phone3").val(data.phone);
                }else{
                    layer.msg(data.msg);
                }
            }
        });
    }
    function confirmSubmit(){
        var surname=$("#surname").val();
        var phone=$("#phone").val();
        var type= $('.typeJs').val();
        var qd=$("#qd").val();
        var zd=$("#zd").val();
        var fs=$("#fs").val();
        var lx=$("#lx").val();
        var gjc=$("#gjc").val();
        var city = "";
        if ( type == 1){
            city = $('#region_tj').val();
            var industry = $('#trade_tj').val();
            var remark = city+"-"+industry;

        }else{
            city = $("#region").val();
        }
        city =$("#hiddenareaId").val();
        remark='工商核名系统新注册用户'
        var reg=/^1[3-9][0-9]{9}$/;

        if(!reg.test(phone)){
            layer.msg("手机号格式不正确!");
            return;
        }
        var xy = $("input[class='xy']").is(':checked');
        if(!xy){
            layer.msg('你需要勾选同意用户协议')
            return;
        }
        $.ajax({
            url:"/heming/cusVerify.html?customerName="+encodeURI(surname)+"&customerMobile="+phone+"&sourceId=46&qd="+qd+"&zd="+zd+"&fs="+fs+"&lx="+lx+"&gjc="+gjc+"&zycDiscount=0.2"+"&areaId="+encodeURI(city)+"&xy"+xy,
            dataType:"json",
            type:"post",
            success:function(data){
                if(data.success==true){
                    if($('#redirect_url_form').val()){
                        document.getElementById($('#redirect_url_form').val()).submit()
                    }else{
                        window.location.reload();
                    }
                }else if(data.success==false){
                    layer.msg(data.errorMsg);
                }else{
                    layer.msg(data.errorMsg);
                }
            }
        });
    }

    function login(){
        var phone=$("#l_phone").val();
        var reg=/^1[3-9][0-9]{9}$/;
        if(phone==null || phone=='' || phone==undefined || !reg.test(phone)){
            layer.msg("请输入符合规范的手机号!");
            return;
        }
        var index = layer.msg('正在处理...', {
            time:0,
            icon: 16
            ,shade: 0.5
        });
        $.ajax({
            url:"/heming/login.html?customerMobile="+phone,
            dataType:"json",
            type:"post",
            success:function(data){

                if(data.success==true){
                    console.info(data.success);
                    if($('#redirect_url_form').val()){
                        document.getElementById($('#redirect_url_form').val()).submit()
                    }else{
                        window.location.reload();
                    }
                }else{
                    layer.msg("尚未找到此账号，请先注册！");
                }

            }
        });
    }

    function logout(){
        $.ajax({
            url:'/heming/logout.html',
            dataType:'json',
            type:'get',
            success:function(data){
                if(data.success==true){
                    window.location.href='/';
                }
            }
        });
    }

    //窗口效果
    //点击登录class为tc 显示
    $(".tc").click(function(){
        $("#gray").show();
        $("#popup").show();//查找ID为popup的DIV show()显示#gray
        tc_center();
    });
    //点击关闭按钮
    $(".close>i").click(function(){
        $("#gray").hide();
        $("#popup").hide();//查找ID为popup的DIV hide()隐藏
        $("#popup3").hide();
    })

    //点击关闭按钮
    $(".close1>i").click(function(){
        $("#gray").hide();
        $("#popup1").hide();//查找ID为popup的DIV hide()隐藏
    })

    //窗口水平居中
    $(window).resize(function(){
        tc_center();
    });

    function tc_center(){
        var _top=($(window).height()-$(".popup").height())/2;
        var _left=($(window).width()-$(".popup").width())/2;

        $(".popup").css({top:_top,left:_left});
    }
    $(function () {
        $("body").on('click', "#logout", function () {
            logout();
        });


        autoComplete();
    });
    function autoComplete() {
        $(".city").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: domain + "getCity.html",
                    dataType: "json",
                    contentType: 'application/json; charset=utf-8',
                    data: $.extend({
                        startsWith: encodeURI(request.term),
                        limit: 10
                    }, null),
                    success: function (data) {
                        //$("#areaCode").val("");
                        if (data.length > 0) {
                            var code = data[0].value;
                            //$("#areaCode").val(code);
                            response(data);
                        }
                    }
                });
            },
            select: function (event, ui) {
                //$("#areaCode").val( ui.item.value );
                $(this).val(ui.item.label);
                return false;
            }
        });
    }

    $(".check_code_login").click(function () {
        $(this).attr("src", "/checkCode?m=" + Math.floor(Math.random() * 100));
    });

    $(".check_code_reg").click(function () {
        $(this).attr("src", "/checkCode?m=" + Math.floor(Math.random() * 100));
    });

    $('.mod_login').click(function () {
        $('.login_yzm').hide();
        $('.login').show();
    })

    $('.mod_reg').click(function () {
        $('.reg_yzm').hide();
        $('.reg').show();
    });


    $('#ECS_treee2').click(function () {
        var clicked = $('.zc_login').hasClass('clicked');
        if (clicked) {
            $('#ECS_treee1').removeClass('hover');
            $('#ECS_treee2').addClass('hover');
            $('#ECS_treee1_BODY').css({ 'display': 'none' });
            $('#ECS_treee2_BODY').removeAttr('style')
            $('<li><i class="iconfont">&#xe645;</i><input type="text" placeholder="城市" class="city"></li>').prependTo('.reg>ul');
            autoComplete();
            $("#popup_dialog").show();//查找ID为popup的DIV show()显示#gray
        }
    });
    $('#ECS_treee1').click(function () {
        $('.city').parent().remove();
        $('#ECS_treee2').removeClass('hover');
        $('#ECS_treee1').addClass('hover');
        $('#ECS_treee2_BODY').css({ 'display': 'none' });
        $('#ECS_treee1_BODY').removeAttr('style')
        $("#popup_dialog").show();//查找ID为popup的DIV show()显示#gray
    });
    /**
     * 发送验证码
     */
    function sendVerifyCodeLogin() {
        var phone = $("#phone_login").val();
        var picCode = $("#picCode_login").val();
        var reg = /^1[3-9][0-9]{9}$/;

        if (!reg.test(phone)) {
            layer.msg("手机号不正确!");
            return;
        }
        var index = layer.msg('请稍候...', {
            time: 0,
            icon: 16
            , shade: 0.5
        });
        $.ajax({
            url: domain + "verifyCode.html?phone=" + phone + "&picCode=" + picCode,
            dataType: "json",
            type: "post",
            success: function (data) {
                if (data.success == true) {
                    var rt = 120;
                    timer = setInterval(function () {
                        $(".msgTow").text(--rt + "S重新获取");
                        $(".msgTow").show();
                        $('.msg').hide();
                        if (rt <= 0) {
                            $(".msg").text("重新发送");
                            $(".msg").show();
                            $(".msgTow").hide();
                            clearInterval(timer);
                        }
                    }, 1000);
                } else {
                    layer.msg(data.msg);
                }
                layer.closeAll();
            }
        });
    }

    /**
     * 发送验证码
     */
    function sendVerifyCodeReg() {
        var phone = $("#phone_reg").val();
        var picCode = $("#picCode_reg").val();
        var reg = /^1[3-9][0-9]{9}$/;

        if (!reg.test(phone)) {
            layer.msg("手机号不正确!");
            return;
        }
        var index = layer.msg('请稍候...', {
            time: 0,
            icon: 16
            , shade: 0.5
        });
        $.ajax({
            url: domain + "verifyCode.html?phone=" + phone + "&picCode=" + picCode,
            dataType: "json",
            type: "post",
            success: function (data) {
                if (data.success == true) {
                    var rt = 120;
                    timer = setInterval(function () {
                        $(".msgTow_reg").text(--rt + "S重新获取");
                        $(".msgTow_reg").show();
                        $('.msg_reg').hide();
                        if (rt <= 0) {
                            $(".msg_reg").text("重新发送");
                            $(".msg_reg").show();
                            $(".msgTow_reg").hide();
                            clearInterval(timer);
                        }
                    }, 1000);
                } else {
                    layer.msg()
                    layer.msg(data.msg);
                }
                layer.closeAll();
            }
        });
    }

    /**
     * 验证验证码
     */
    function pcVerifySmsLogin() {
        var phone = $("#phone_login").val();
        var picCode = $("#picCode_login").val();
        var smsCode = $("#smsCode_login").val();
        var reg = /^1[3-9][0-9]{9}$/;

        if (!reg.test(phone)) {
            layer.msg("手机号不正确!");
            return;
        }
        var index = layer.msg('请稍候...', {
            time: 0,
            icon: 16
            , shade: 0.5
        });
        $.ajax({
            url: domain + "pcVerifySms.html?phone=" + phone + "&picCode=" + picCode + "&smsCode=" + smsCode,
            dataType: "json",
            type: "post",
            success: function (data) {
                if (data.success == true) {
                    window.location.reload();
                } else {
                    layer.msg(decodeURI(data.msg));
                }
                layer.closeAll();
            }
        });
    }

    /**
     * 验证验证码
     */
    function pcVerifySmsReg() {
        var phone = $("#phone_reg").val();
        var picCode = $("#picCode_reg").val();
        var smsCode = $("#smsCode_reg").val();
        var reg = /^1[3-9][0-9]{9}$/;

        if (!reg.test(phone)) {
            layer.msg("手机号不正确!");
            return;
        }
        var index = layer.msg('请稍候...', {
            time: 0,
            icon: 16
            , shade: 0.5
        });
        $.ajax({
            url: domain + "pcVerifySms.html?phone=" + phone + "&picCode=" + picCode + "&smsCode=" + smsCode,
            dataType: "json",
            type: "post",
            success: function (data) {
                if (data.success == true) {
                    window.location.reload();
                } else {
                    layer.msg(decodeURI(data.msg));
                }
                layer.closeAll();
            }
        });
    }

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


    function delCookie(name) {
        var exp = new Date();
        exp.setTime(exp.getTime() - 1);
        var cval = getCookie(name);
        if (cval != null)
            document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
    }




    function resolveSmsLogin() {
        var phone = $("#phone_login").val();
        var index = layer.msg('请稍候...', {
            time: 0,
            icon: 16
            , shade: 0.5
        });
        $.ajax({
            url: domain + 'resolveSms.html',
            data: {
                'phone': phone
            },
            dataType: 'json',
            type: 'post',
            success: function (data) {
                if (data.success == true) {
                    window.location.reload();
                } else {
                    layer.msg(data.msg);
                }
                layer.closeAll();
            }
        });
    }

    function resolveSmsReg() {
        var phone = $("#phone_reg").val();
        var index = layer.msg('请稍候...', {
            time: 0,
            icon: 16
            , shade: 0.5
        });
        $.ajax({
            url: domain + 'resolveSms.html',
            data: {
                'phone': phone
            },
            dataType: 'json',
            type: 'post',
            success: function (data) {
                if (data.success == true) {
                    window.location.reload();
                } else {
                    layer.msg(data.msg);
                }
                layer.closeAll();
            }
        });
    }

</script>

<input type="hidden" value="" id="click_type">
<div id="gray" style="display: none;"></div>

<script type="text/javascript">

    $(document).ready(function () {

        $(".top_nav").mousedown(function (e) {
            $(this).css("cursor", "move");//改变鼠标指针的形状
            var offset = $(this).offset();//DIV在页面的位置
            var x = e.pageX - offset.left;//获得鼠标指针离DIV元素左边界的距离
            var y = e.pageY - offset.top;//获得鼠标指针离DIV元素上边界的距离
            $(document).bind("mousemove", function (ev) { //绑定鼠标的移动事件，因为光标在DIV元素外面也要有效果，所以要用doucment的事件，而不用DIV元素的事件

                $(".popup").stop();//加上这个之后

                var _x = ev.pageX - x;//获得X轴方向移动的值
                var _y = ev.pageY - y;//获得Y轴方向移动的值

                $(".popup").animate({ left: _x + "px", top: _y + "px" }, 10);
            });

        });

        $(document).mouseup(function () {
            $(".popup").css("cursor", "default");
            $(this).unbind("mousemove");
        });
    })
</script>
<script>
    var cityPicker = new IIInsomniaCityPicker({
        data: cityData,
        target: '#region_tj',
        valType: 'k-v',
        hideCityInput: '#cityCode',
        hideProvinceInput: '#provinceCode',
        callback: function (city_id) {
        }
    });
    cityPicker.init();
</script>


<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span></body></html>