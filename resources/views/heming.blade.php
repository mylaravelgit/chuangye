<!DOCTYPE html>
<html data-dpr="1" style="font-size: 75px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <!-- <meta http-equiv="Cache-Control" content="no-siteapp" /><link rel="stylesheet" href="/heming/dyy_files/heming.css"> -->
    <title>在线免费核名</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/iconfont.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <link rel="stylesheet" href="./css/common.css">
    <!-- <link rel="stylesheet" href="/heming/hm_files/heming.css"> -->
    <!-- <link rel="stylesheet" href="/heming/hm_files/index.css"> -->
    <script src="./js/hm.js"></script><script src="./js/flexible.js"></script>
    <script src="./js/hm(1).js"></script>
    <script src="./js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="./js/baidu_stat.js"></script>
    <script type="text/javascript" src="./js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./js/jquery.cookie.js"></script>
    <script type="text/javascript" src="./js/cityData.js"></script>
    <script type="text/javascript" src="./js/cityPicker.js"></script>
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
        .f_login li{ clear: both; line-height: 38px; height: 40px; margin-bottom: 10px;position: relative;}
        .f_login li i{ float: left; margin-right: 6px; color: #999; font-size: 16px; padding-left: 8px; position:  absolute; left: 3px; top: 0px;}
        .f_login li input{  border: 1px solid #f0f0f0;line-height: 38px; width: 100%; padding-left: 30px; }

        .f_login li input:focus ,.ff_yzm li input:focus{border: 1px solid #ffc9a3;box-shadow: 0 0 5px #f0f0f0; }

        .ff_yzm li input{ width: 100%; border: 1px solid #f0f0f0; height: 40px; line-height: 38px; padding-left: 5px;}
        .ff_yzm li{ position: relative; margin-top: 10px; clear: both;}
        .ff_yzm li img.tp{ position: absolute; right: 0; bottom:0;}
        .ff_yzm li button{position: absolute; right: 0; top:0; background:#f78739; color: #fff; width: 110px; font-size: 12px; text-align: center; /* border-radius: 5px; */ border: 0; height:39px; line-height: 38px;cursor:pointer}
        .ff_yzm li button.hui{ background: #ddd;}
        .ff_yzm p{ font-size: 14px; color: #666; line-height: 38px; text-align: center;}
        .ff_yzm p a{ text-decoration: underline;}
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

        var district_keywords = '企业名称冠以中国、中华、全国、国家、国际等字样的，需经国家工商总局核准。大好时光不提供核准服务。';
        var district_null = '不含行政区划的企业名称需经由国家工商总局核准。大好时光不提供核准服务。';



        /**
         * 提交验证
         */
        function verify() {
            $(".check_code").trigger("click");
            //$(".picCode").val("");
            //$(".smsCode").val("");
            $.ajax({
                url: "checkCookie2.html",
                dataType: "json",
                type: "post",
                success: function (data) {
                    if (data.success == true) {
                        $("#searchForm").submit();
                    } else {
                        $("#gray").show();
                        $("#popup").show();//查找ID为popup的DIV show()显示#gray
                        $('.typeJs').val(0);
                        tc_center();
                    }
                }
            });
        }

        function sendVerifyCode2() {
            var phone = $("#phone3").val();
            var picCode = $("#picCode3").val();
            var reg = /^1[3-9][0-9]{9}$/;

            if (!reg.test(phone)) {
                layer.msg("手机号不正确!");
                return;
            }
            $.ajax({
                url: "verifyCode.html?phone=" + phone + "&picCode=" + picCode,
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
                }
            });
        }

        $(function () {
            $("body").on('click', "#logout", function () {
                delCookie("qds_u");
                window.location.reload();
            });
        })



        function getCookie(name) {
            var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
            if (arr = document.cookie.match(reg))
                return unescape(arr[2]);
            else
                return null;
        }

        function delCookie(name) {
            var exp = new Date();
            exp.setTime(exp.getTime() - 1);
            var cval = getCookie(name);
            if (cval != null)
                document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
        }

        /**
         * 获取cookie
         */
        function getCookieVal(cookieName) {
            var search = cookieName + "="
            var value = "";
            if (document.cookie.length > 0) {
                offset = document.cookie.indexOf(search);
                if (offset != -1) {
                    offset += search.length
                    end = document.cookie.indexOf(";", offset);
                    if (end == -1)
                        end = document.cookie.length;
                    value = unescape(document.cookie.substring(offset, end))
                }
            }
            return value;
        }
        /**
         * 发送验证码
         */
        function sendVerifyCode() {
            var phone = $("#phone").val();
            var picCode = $("#picCode").val();
            var reg = /^1[3-9][0-9]{9}$/;

            if (!reg.test(phone)) {
                layer.msg("手机号不正确!");
                return;
            }
            $.ajax({
                url: "verifyCode.html?phone=" + phone + "&picCode=" + picCode,
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
                }
            });
        }
        function doquery() {
            var type = $(".clicka").data("type");
            $("#click_type").val(type);
            if ($("#region").val() == "") {
                layer.msg("不含行政区划的企业名称需经由国家工商总局核准。大好时光不提供核准服务。");
                $("#region").focus();
                return;
            } else {
                if (matchKeyWord($("#region").val(), districtArry, 0)) {
                    layer.msg("企业名称冠以中国、中华、全国、国家、国际等字样的，需经国家工商总局核准。大好时光不提供核准服务。");
                    $("#region").focus();
                    return;
                }

            }

            if ($("#firm").val() == "") {
                layer.msg("请输入字号");
                $("#firm").focus();
                return;
            } else {

                if (/^[\u4e00-\u9fa5]+$/.test($("#firm").val())) {
                    if ($("#firm").val().length < 2) {
                        layer.msg("字号长度过短");
                        $("#firm").focus();
                        return;
                    }
                    if ($("#firm").val().length > 8) {
                        layer.msg("字号长度过长");
                        $("#firm").focus();
                        return;
                    }

                } else {
                    layer.msg("字号必须为简体汉字");
                    $("#firm").focus();
                    return;
                }


            }
            if ($("#trade").val() == "") {
                layer.msg("请输入行业类型");
                $("#trade").focus();
                return;
            } else {
                if (!/^[\u4e00-\u9fa5]+$/.test($("#trade").val())) {
                    layer.msg("行业类型必须为简体汉字");
                    $("#trade").focus();
                    return;
                }
            }
            $("#hid_city").val(trim($("#region_tj").val()));
            $("#hid_firm").val(trim($("#firm").val()));
            $("#hid_trade").val(trim($("#trade").val()));
            $("#hid_form").val(trim($("#form").find("option:selected").text()));
            $("#hid_cityCode").val($("#cityCode").val());
            $("#hid_provinceCode").val($("#provinceCode").val());
            if ("" == "") {
                var region = $("#region_tj").val();
                //设置redirect_url_form
                var areaid = '1537';//默认
                for (var key in D.data) {
                    if (region.indexOf(key) >= 0) {
                        areaid = D.get(key);
                    }
                }
                //地区
                $("#hiddenareaId").val(areaid);
                //设置redirect_url_form
                $('#redirect_url_form').val('searchForm');
                $("#toReg1").click();
                return;
            }
            submit();
        }
        function submit() {
            $('#searchForm').submit();
        }
        function hideAll() {
            // 	$("#passDiv").hide();
            $("#repeatDiv").hide();
            $("#similarDiv").hide();
            $("#banDiv").hide();
            $("#hezhunDiv").hide();
            $("#famousDiv").hide();

        }

        function querySubmit() {
            $(".warp_results").html("");
            $("#passDiv").html("");

            btnLoad($('.clicka'), true);
            setTimeout("btnLoad($('.clicka'), false )", 15000);
            var areaId = $("#areaId").val();
            var areaName = $("#region").val();
            var firm = $("#firm").val();
            var trade = $("#trade").val();
            var form = $("#form").find("option:selected").text();
            hideAll();
            $.ajax({
                url: "queryCompany.html",
                dataType: "json",
                contentType: 'application/json; charset=utf-8',
                data: {
                    areaId: encodeURI(areaId),
                    city: encodeURI(areaName),
                    splitfirm: encodeURI(firm),
                    splittrade: encodeURI(trade),
                    splitform: encodeURI(form)
                },
                success: function (data) {

                    console.log(data);
                    var sameNameFirstResult = data.sameNameFirstResult;
                    var quasiNameSecondResult = data.quasiNameSecondResult;
                    var prohibitWordsResult = data.prohibitWordsResult;
                    var approximateCompanyFourResult = data.approximateCompanyFourResult;
                    var approximateWordsFiveResult = data.approximateWordsFiveResult;
                    var passRate = data.passRate;
                    var content = data.content;
                    var threadIndex = data.threadIndex;
                    showPassRate(passRate, content);

                    var isStatus = false;
                    //重名
                    try {
                        if (sameNameFirstResult.status == "1") {
                            var title = sameNameFirstResult.title;
                            var content = sameNameFirstResult.content;
                            var passRate = sameNameFirstResult.passRate;
                            showPassRate(passRate, content);
                            showRepeat(title, content);
                            isStatus = true;
                        }
                    } catch (e) {

                    }
                    //准核名
                    try {
                        if (quasiNameSecondResult.status == "1") {
                            var title = quasiNameSecondResult.title;
                            var content = quasiNameSecondResult.content;
                            var passRate = quasiNameSecondResult.passRate;
                            var result = quasiNameSecondResult.result;
                            showPassRate(passRate, content);

                            showHezhun(content);
                            isStatus = true;
                        }
                    } catch (e) {

                    }
                    //100%敏感词
                    if (prohibitWordsResult.status == "1") {
                        var title = prohibitWordsResult.title;
                        var content = prohibitWordsResult.content;
                        showPassRate(0, content);
                        var list = prohibitWordsResult.hmbSolrWords;
                        for (var i = 0; i < list.length; i++) {
                            var hmbSolrWord = list[i];
                            var listTitle = hmbSolrWord.title;
                            var listContent = hmbSolrWord.content;
                            var listName = hmbSolrWord.name;
                            showBan(listTitle, listContent, listName, i + 1);
                        }
                        isStatus = true;
                    }
                    if (!isStatus) {
                        //形似公司
                        var count = 0;
                        if (threadIndex == 4) {
                            try {
                                ///&&quasiNameSecondResult.status!=“1” 暂时不等线程2
                                if (sameNameFirstResult.status != "1" && prohibitWordsResult.status != "1") {
                                    var content = approximateCompanyFourResult.suggest;
                                    var companyArr = approximateCompanyFourResult.list;
                                    count = showSimilarDiv(companyArr, 0, 0);
                                }
                            } catch (e) {

                            }
                            //相似驰名
                            try {

                                var content = approximateWordsFiveResult.suggest;
                                var title = approximateWordsFiveResult.title;
                                var famousArr = approximateWordsFiveResult.list;
                                showFamous(famousArr, count + 1, 5);

                            } catch (e) {

                            }
                        } else if (threadIndex == 5) {
                            //相似驰名
                            try {

                                var content = approximateWordsFiveResult.suggest;
                                var title = approximateWordsFiveResult.title;
                                var famousArr = approximateWordsFiveResult.list;
                                showFamous(famousArr, 0, 0);

                            } catch (e) {

                            }
                            try {
                                ///&&quasiNameSecondResult.status!=“1” 暂时不等线程2
                                if (sameNameFirstResult.status != "1" && prohibitWordsResult.status != "1") {
                                    var content = approximateCompanyFourResult.suggest;
                                    var companyArr = approximateCompanyFourResult.list;
                                    showSimilarDiv(companyArr, famousArr.length + 1, 4);
                                }
                            } catch (e) {

                            }

                        }

                    }

                    btnLoad($('.clicka'), false);
                }
            });
        }

        //显示国家 中华部分
        function showCountry() {
            $("#countryDiv").show();
        }


        function validateCheckRepeat(obj) {
            if ($(obj).attr("id") == "region") {
                if (validateDistrict($('#region'))) {

                    if (static_region != $("#region").val() || !flag_region) {

                    }
                    static_region = $("#region").val();

                } else {
                    return false;
                }
            }

        }


        //校验区划
        function validateDistrict(obj) {//检查区划
            errorId = "region";
            var inputinfo = obj.val();

            if (trim(inputinfo) == "") {
                layer.msg(district_null);
                flag_region = false;
                return false;
            }
            if (matchKeyWord(inputinfo, districtArry, 0)) {
                layer.msg(district_keywords);
                flag_region = false;
                return false;
            }
            return true;
        }


        //匹配关键字
        function matchKeyWord(val, arry, flag) {
            if (flag == 0) {
                for (var i = 0; i < arry.length; i++) {//全相同
                    if (val == arry[i]) {
                        return true;
                    }
                }
            }
            else {
                for (var i = 0; i < arry.length; i++) {//包含
                    if (val.indexOf(arry[i]) > -1) {
                        return true;
                    }
                }
            }
            return false;
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
            //$(".picCode").val("");
            //$(".smsCode").val("");
            $.ajax({
                url: "checkCookie3.html",
                dataType: "json",
                type: "post",
                success: function (data) {
                    if (data.success == true) {
                        submit();
                    } else {
                        $('.typeJs').val(1);
                        $("#gray").show();
                        $("#popup").show();//查找ID为popup的DIV show()显示#gray
                        tc_center();

                    }
                }
            });
        }

        function checkTJPamar() {
            var city = $('#region_tj').val();
            var industry = $('#trade').val();
            if (city == '' || city == undefined) {
                layer.msg("请填写要查询的区域");
                return;
            }
            if (industry == '' || industry == undefined) {
                layer.msg("请填写要查询的公司的行业类型");
                return;
            }
            verify_tj();
        }
    </script>

    <link rel="stylesheet" href="./css/layer.css" id="layui_layer_skinlayercss">
    <link rel="stylesheet" type="text/css" href="./css/cityPicker.css"></head>


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

            <input type="hidden" name="redirect_url_form" id="redirect_url_form" value="">
        </ul>
    </div>
    <div id="gray" style="display: none;"></div>

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
                                        <a href="javascript:;" style=" text-decoration: underline; color: #333;">《大好时光用户协议》</a>
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
    <div class="hmtext">
        <h2 class="adms">公司核名系统</h2>
        <p class="hmnb">公司名字预查名，提升工商注册通过率</p>
    </div>
    <!-- <div class="qds_slogan"><b style=" font-weight:normal">智能核名百分百提供工商注册通过率</b></div>
<div class="syrs1">云数据分析让你更省心，已服务<b id="oSpan"></b>家公司</div> -->
    <div class="form">
        <div class="ss_wrap row">
            <div class="ssfomr_box region">
                <input type="text" id="region_tj" name="region_tj" placeholder="城市如：上海" value="" readonly="readonly">
                <input type="hidden" id="provinceCode" value="">
                <input type="hidden" id="cityCode" value="">

            </div>
            <div class="ssfomr_box cpzh">
                <input placeholder="字号 如：阿里巴巴" id="firm" name="firm" value="">
            </div>
            <div class="ssfomr_box hytype">
                <input value="" class="network" placeholder="行业类型 如：网络科技" id="trade" name="trade" onkeyup="showAndHide('List2','show');" onfocus="showAndHide('List2','show');" onblur="showAndHide('List2','hide');" autocomplete="off">
            </div>
            <div class="ssfomr_box">
                <select name="form" id="form">
                    <option>有限公司</option>
                    <option>合伙企业</option>
                </select>

            </div>
        </div>
    </div>
    <div class="ssfomr_box btn_hm">
        <a href="{{ route('register') }}" type="button" class="btn clicka">公司核名</a>
{{--        <button class="btn clicka" onclick="doquery()" data-type="2">公司核名</button>--}}
    </div>
    <!--列表2-->
    <div class="Menu pop" id="List2">
        <header class="pop-nav">
            <a class="close-popup">关闭</a>
            <h1 class="title">选择行业</h1>
        </header>
        <div class="Menu2">
            <div class="ui-industry">
                <div class="memu2_tit01">科技类</div>
                <div class="classify">
                    <ul>
                        <li onmousedown="getValue('trade','网络科技');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">网络科技</a>
                        </li>
                        <li onmousedown="getValue('trade','电子商务');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">电子商务</a>
                        </li>
                        <li onmousedown="getValue('trade','信息技术');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">信息技术</a>
                        </li>
                        <li onmousedown="getValue('trade','游戏');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">游戏</a>
                        </li>
                        <li onmousedown="getValue('trade','电子');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">电子</a>
                        </li>
                        <li onmousedown="getValue('trade','软件');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">软件</a>
                        </li>
                        <li onmousedown="getValue('trade','新材料');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">新材料</a>
                        </li>
                        <li onmousedown="getValue('trade','生物科技');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">生物科技</a>
                        </li>
                        <li onmousedown="getValue('trade','教育科技');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">教育科技</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="ui-industry">
                <div class="memu2_tit01">许可类</div>
                <div class="classify">
                    <ul>
                        <li onmousedown="getValue('trade','投资管理');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">投资管理</a>
                        </li>
                        <li onmousedown="getValue('trade','金融');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">金融</a>
                        </li>
                        <li onmousedown="getValue('trade','资产');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">资产</a>
                        </li>
                        <li onmousedown="getValue('trade','融资租赁');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">融资租赁</a>
                        </li>
                        <li onmousedown="getValue('trade','医疗器械');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">医疗器械</a>
                        </li>
                        <li onmousedown="getValue('trade','人力资源');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">人力资源</a>
                        </li>
                        <li onmousedown="getValue('trade','食品');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">食品</a>
                        </li>
                        <li onmousedown="getValue('trade','劳务派遣');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">劳务派遣</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="ui-industry">
                <div class="memu2_tit01">服务类</div>
                <div class="classify">
                    <ul>
                        <li onmousedown="getValue('trade','广告');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">广告</a>
                        </li>
                        <li onmousedown="getValue('trade','文化传播');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">文化传播</a>
                        </li>
                        <li onmousedown="getValue('trade','建筑装潢');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">建筑装潢</a>
                        </li>
                        <li onmousedown="getValue('trade','设计');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">设计</a>
                        </li>
                        <li onmousedown="getValue('trade','美容美发');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">美容美发</a>
                        </li>
                        <li onmousedown="getValue('trade','房地产中介');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">房地产中介</a>
                        </li>
                        <li onmousedown="getValue('trade','物业管理');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">物业管理</a>
                        </li>
                        <li onmousedown="getValue('trade','商务咨询');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">商务咨询</a>
                        </li>
                        <li onmousedown="getValue('trade','企业管理');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">企业管理</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="ui-industry">
                <div class="memu2_tit01">其 他</div>
                <div class="classify">
                    <ul>
                        <li onmousedown="getValue('trade','贸易');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">贸易</a>
                        </li>
                        <li onmousedown="getValue('trade','实业');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">实业</a>
                        </li>
                        <li onmousedown="getValue('trade','制造');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">制造</a>
                        </li>
                        <li onmousedown="getValue('trade','服饰');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">服饰</a>
                        </li>
                        <li onmousedown="getValue('trade','化妆品');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">化妆品</a>
                        </li>
                        <li onmousedown="getValue('trade','工程');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">工程</a>
                        </li>
                        <li onmousedown="getValue('trade','农业');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">农业</a>
                        </li>
                        <li onmousedown="getValue('trade','餐饮管理');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">餐饮管理</a>
                        </li>
                        <li onmousedown="getValue('trade','物流');showAndHide('List2','hide');">
                            <a href="javascript:volid(0);">物流</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- onmouseover="display()" onmouseout="disappear()"<a href="#"  style=" color:#fff; font-weight:bold; font-size:14px; text-decoration:underline; line-height:45px; width:140px; height:45px; display:block; line-height:65px; margin:0 auto;">核名结果示例</a><br/> -->
<!--   <div class="tishi"><i class="iconfont"></i>如：深圳大好时光科技有限公司，城市为：深圳，行业为：科技，类型为：有限公司</div> -->





<div style=" width:358px; margin:0 auto">
    <div id="box" onmouseover="display()" onmouseout="disappear()">
        <img src="./images/sl.png" width="358">
    </div>
</div>



<div style=" clear:both"></div>
<div class="hm_bj">
</div>



<div style=" clear:both"></div>


<script src="./js/public.js" type="text/javascript"></script>


<script src="./js/layer.js"></script>


<style>
    .hui {
        padding: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>



<script>
    $(".network").click(function () {
        $(".pop").fadeIn(50)
        $(".pop").animate({ 'top': '0%', 'opacity': '1' });
    })
    $(".close-popup").click(function () {
        console.log("123")
        $(".pop").animate({ 'opacity': '0' });
        $(".pop").fadeOut(50);
    })
    // $(".classify li").click(function(){
    // 	$(".pop").animate({top: '100%'});
    // 	$(".pop").fadeOut(50);
    // 	var net=$(this).text();
    // 	$(".network").attr("value",net)
    // })
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
    function logout() {
        $.ajax({
            url: '/heming/logout.html',
            dataType: 'json',
            type: 'get',
            success: function (data) {
                if (data.success == true) {
                    window.location.href = '/';
                }
            }
        });
    }

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

<script type="text/javascript">
    var domain = "http://" + location.host + "/";
    $(function () {
        $("body").on('click', "#logout", function () {
            //logout();
        });


        //autoComplete();
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
                        //$("#areaId").val("");
                        if (data.length > 0) {
                            var code = data[0].value;
                            //$("#areaId").val(code);
                            response(data);
                        }
                    }
                });
            },
            select: function (event, ui) {
                //$("#areaId").val( ui.item.value );
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
                    window.location.href = '/';
                }
            }
        });
    }
</script>

<form action="/" id="searchForm" method="post">
    <input type="hidden" id="hid_city" name="city" value="">
    <input type="hidden" id="hid_areaId" name="areaId" value="">
    <input type="hidden" id="hid_firm" name="firm" value="">
    <input type="hidden" id="hid_trade" name="trade" value="">
    <input type="hidden" id="hid_form" name="form" value="">
    <input type="hidden" id="source" name="source" value="1">
    <input type="hidden" id="hid_cityCode" name="city_code" value="">
    <input type="hidden" id="hid_provinceCode" name="province_code" value="">

</form>
<input type="hidden" value="" id="click_type">
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
                    } else {
                        if (i == 0) {
                            Layer.style.display = "block";
                            i++;
                        } else {
                            Layer.style.display = "none";
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
        var input = window.document.getElementById(obj);
        input.value = str;
    }
    function getValueArea(obj, str, code) {
        var input = window.document.getElementById(obj);
        $('#hid_areaId').val(code);
        input.value = str;

    }
</script>

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

    //注册
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


</script>


</body></html>