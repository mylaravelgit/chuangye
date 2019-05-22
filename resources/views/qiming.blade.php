<!DOCTYPE html>
<html data-dpr="1" style="font-size: 75px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="./css/heming.css">
    <title>在线免费起名首页</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <link rel="stylesheet" href="./cs/heming_mobile.css">
    <link rel="stylesheet" href="./css/style_mobile.css">
    <link rel="stylesheet" href="./css/iconfont.css">
    <link rel="stylesheet" href="./css/index_mobile.css">
    <link rel="stylesheet" type="text/css" href="./css/cityPicker_mobile.css">
    <script src="./js/hm.js"></script><script src="./js/hm(1).js"></script>
    <script src="./js/jquery-1.8.3.min.js"></script>
    <script src="./js/flexible.js"></script>
    <script type="text/javascript" src="./js/baidu_stat.js"></script>
    <script type="text/javascript" src="./js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./js/cityData.js"></script>
    <script type="text/javascript" src="./js/cityPicker_mobile.js"></script>
    <link rel="stylesheet" href="./css/layer.css" id="layui_layer_skinlayercss">
</head>

<body style="font-size: 12px;">
<div class="toubu">
    <a href="/">
        <img src="./images/logo_w_hm.png" alt="">
    </a>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="width: 20%">
        <div class="container">
    <ul class="navbar-nav ml-auto">
        <!-- 登录注册链接开始 -->
        @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://iocaffcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" id="logout" href="#"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出登录</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
    @endguest
    <!-- 登录注册链接结束 -->
    </ul>
        </div>
</nav>
{{--    <ul class="navi-nav pull-right">--}}
{{--        <li>--}}
{{--            <a href="javascript:;" style="display: none;" id="toLogin1" data-type="1">登录</a>--}}
{{--        </li>--}}
{{--        <li class="head-line" style="display: none;">|</li>--}}
{{--        <li>--}}
{{--            <a href="javascript:;" style="display: none;" id="toReg1" data-type="1">注册</a>--}}
{{--        </li>--}}
{{--        <input type="hidden" name="redirect_url_form" id="redirect_url_form" value="">--}}
{{--    </ul>--}}
</div>
<script type="text/javascript">
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
        $('#ECS_treee2_BODY').removeAttr('style');
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
                    window.location.href = '/';
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

    //点击关闭按钮
    $(".close1>i").click(function () {
        $("#gray").hide();
        $("#popup1").hide();//查找ID为popup的DIV hide()隐藏
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
    //窗口效果
    //点击登录class为tc 显示
    $(".tc").click(function () {
        $("#gray").show();
        $("#popup_dialog").show();//查找ID为popup的DIV show()显示#gray
        tc_center();
    });
    //点击关闭按钮
    $("a.guanbi").click(function () {
        $("#gray").hide();
        $("#popup_dialog").hide();//查找ID为popup的DIV hide()隐藏
        $('.city').parent().remove();
    })

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
<!-- <div id="wx_ewm">
    <h2 style=" font-size:16px; margin-bottom:12px; color:#333">微信查询更方便</h2>
    <img src="/heming/images/weixinewm.png" width="134">
    <br>公众号：
    <span style=" font-size:16px; color:#3aadff">大好时光</span>
</div> -->
<!-- <style type="text/css">
.IIInsomnia-hot-wrap{
display: none;
}
</style>
<link href="/heming/css/nav_temp.css" rel="stylesheet" type="text/css"/>
<link type="image/x-icon" href="/heming/images/favicon.ico" rel="shortcut icon" />
<header class="header navi-header box-shadow">
<div class="container ">
    <div class="navi-brand">
        <a href="/heming/">
        <img src="/heming/images/logo_w_hm.png" class="m-r-sm" alt="大好时光"></a>
    </div>
    <ul class="navi-nav">
        <li class=""><a href="/heming/?url=">首页</a></li>
        <li  class="active" ><a href="/heming/qm.html?url=">公司起名</a></li>
        <li ><a  href="/heming/hm.html?url=">公司核名</a></li>
        <li ><a  href="/heming/businessScope.html?url=">经营范围生成</a></li>
        <li ><a href="http://www.sedashi.cn/page/stylepc/logo_design/questionnaire.jsp?pc=cybaba" target="_blank">人工智能logo设计</a></li>
        <!-- <li ><a href="/" target="_blank" id="active">在线注册公司</a></li> -->

<ul class="navi-nav pull-right">


    <li><a href="javascript:;" style="display: none;" id="toLogin1" data-type="1">登录</a> </li>
    <li class="head-line" style="display: none;">|</li>
    <li><a href="javascript:;" style="display: none;" id="toReg1" data-type="1">注册</a></li>

    <input type="hidden" name="redirect_url_form" id="redirect_url_form" value="">
</ul>

<ul id="areaLists" style="display: block;">
    <li name="全国" id="1537"></li>
    <li name="广州" id="1549"></li>
    <li name="佛山" id="1561"></li>
    <li name="东莞" id="1567"></li>
    <li name="重庆" id="1601"></li>
    <li name="成都" id="1612"></li>
    <li name="杭州" id="1626"></li>
    <li name="惠州" id="1636"></li>
    <li name="郑州" id="1638"></li>
    <li name="天津" id="1652"></li>
    <li name="青岛" id="1670"></li>
    <li name="银川" id="1683"></li>
    <li name="上海" id="1691"></li>
    <li name="北京" id="1710"></li>
    <li name="紫禁城分公司" id="1711"></li>
    <li name="无地区" id="1713"></li>
    <li name="合肥" id="1715"></li>
    <li name="昆明" id="1717"></li>
    <li name="榆林" id="1720"></li>
    <li name="霍尔果斯" id="1723"></li>
    <li name="泉州" id="1725"></li>
    <li name="南京" id="1727"></li>
    <li name="东营" id="1728"></li>
    <li name="长沙" id="1730"></li>
    <li name="大连" id="1732"></li>
    <li name="兰州" id="1734"></li>
    <li name="苏州" id="1736"></li>
    <li name="厦门" id="1737"></li>
    <li name="龙岩" id="1738"></li>
    <li name="三明" id="1739"></li>
    <li name="福州" id="1740"></li>
    <li name="香港" id="1743"></li>
    <li name="拉萨" id="1745"></li>
    <li name="珠海" id="1746"></li>
    <li name="石嘴山" id="1747"></li>
    <li name="海口" id="1749"></li>
    <li name="济南" id="1750"></li>
    <li name="扬州" id="1751"></li>
    <li name="雄安" id="1753"></li>
    <li name="河源" id="1754"></li>
    <li name="阜阳" id="1755"></li>
    <li name="马鞍山" id="1756"></li>
    <li name="吴忠" id="1757"></li>
    <li name="固原" id="1758"></li>
    <li name="网站建设" id="1759"></li>
    <li name="测试" id="1760"></li>
    <li name="商标业务" id="1761"></li>
    <li name="宁波" id="1762"></li>
    <li name="西宁" id="1764"></li>
    <li name="温州" id="1765"></li>
    <li name="台州" id="1766"></li>
    <li name="南昌" id="1768"></li>
    <li name="昆山" id="1769"></li>
    <li name="深圳" id="1770"></li>
    <li name="永和-注销业务" id="1771"></li>
    <li name="saas系统/加盟" id="1772"></li>
    <li name="深圳疑难业务" id="1773"></li>
    <li name="武汉" id="1775"></li>
    <li name="测试" id="1777"></li>
    <li name="南宁" id="1779"></li>
    <li name="沈阳" id="1780"></li>
    <li name="中山" id="1781"></li>
    <li name="湖州" id="1782"></li>
    <li name="嘉兴" id="1783"></li>
    <li name="绍兴" id="1784"></li>
    <li name="洛阳" id="1785"></li>
    <li name="南阳" id="1786"></li>
    <li name="菏泽" id="1787"></li>
    <li name="日照" id="1788"></li>
    <li name="潍坊" id="1789"></li>
    <li name="中卫" id="1790"></li>
    <li name="芜湖" id="1791"></li>
    <li name="蚌埠市" id="1792"></li>
    <li name="宣城" id="1793"></li>
    <li name="滁州" id="1794"></li>
    <li name="宿州" id="1795"></li>
    <li name="大理" id="1796"></li>
    <li name="丽江" id="1797"></li>
    <li name="曲靖" id="1798"></li>
    <li name="昭通" id="1799"></li>
    <li name="西安" id="1800"></li>
    <li name="宝鸡" id="1801"></li>
    <li name="漳州" id="1802"></li>
    <li name="莆田" id="1803"></li>
    <li name="张掖" id="1804"></li>
    <li name="常州" id="1805"></li>
    <li name="岳阳" id="1806"></li>
    <li name="桂林" id="1807"></li>
    <li name="石家庄" id="1808"></li>
    <li name="烟台" id="1809"></li>
    <li name="临汾" id="1811"></li>
    <li name="太原" id="1812"></li>
    <li name="三亚" id="1813"></li>
    <li name="长治" id="1814"></li>
    <li name="哈尔滨" id="1816"></li>
    <li name="承德" id="1817"></li>
    <li name="保定" id="1818"></li>
    <li name="自贡" id="1819"></li>
    <li name="九江" id="1820"></li>
    <li name="绵阳" id="1821"></li>
    <li name="揭阳" id="1822"></li>
    <li name="株洲" id="1823"></li>
    <li name="陕西" id="1825"></li>
    <li name="贵州" id="1826"></li>
    <li name="贺州" id="1827"></li>
    <li name="汕头" id="1828"></li>
    <li name="广西" id="1829"></li>
    <li name="湖南" id="1830"></li>
    <li name="廊坊" id="1831"></li>
    <li name="江西" id="1832"></li>
    <li name="青海" id="1833"></li>
    <li name="十堰" id="1834"></li>
    <li name="河北" id="1835"></li>
    <li name="六盘水" id="1836"></li>
    <li name="赤峰" id="1837"></li>
    <li name="安庆" id="1838"></li>
    <li name="湖北" id="1839"></li>
    <li name="襄阳" id="1840"></li>
    <li name="河南" id="1841"></li>
    <li name="贵州" id="1842"></li>
    <li name="吉林" id="1843"></li>
    <li name="黄冈" id="1844"></li>
    <li name="无锡" id="1845"></li>
    <li name="运城" id="1846"></li>
    <li name="黑龙江" id="1847"></li>
    <li name="濮阳" id="1848"></li>
    <li name="秦皇岛" id="1849"></li>
    <li name="延安" id="1850"></li>
    <li name="枣庄" id="1851"></li>
    <li name="邢台" id="1852"></li>
    <li name="徐州" id="1853"></li>
    <li name="唐山" id="1854"></li>
    <li name="永州" id="1855"></li>
    <li name="临沂" id="1856"></li>
    <li name="丹东" id="1857"></li>
    <li name="焦作" id="1858"></li>
    <li name="长春" id="1859"></li>
    <li name="沧州" id="1860"></li>
    <li name="石河子" id="1861"></li>
    <li name="浙江" id="1862"></li>
    <li name="新乡" id="1863"></li>
    <li name="德阳" id="1864"></li>
    <li name="宣城" id="1865"></li>
    <li name="威海" id="1866"></li>
    <li name="黑河" id="1867"></li>
    <li name="贵阳" id="1868"></li>
    <li name="上饶" id="1869"></li>
    <li name="铜仁" id="1870"></li>
    <li name="淄博" id="1871"></li>
    <li name="南通" id="1872"></li>
    <li name="吉安" id="1873"></li>
    <li name="鄂尔多斯" id="1874"></li>
    <li name="内蒙古" id="1875"></li>
    <li name="安徽" id="1876"></li>
    <li name="陇南" id="1877"></li>
    <li name="盐城" id="1878"></li>
    <li name="电脑租赁" id="1879"></li>
    <li name="西双版纳" id="1880"></li>
    <li name="乌鲁木齐" id="1881"></li>
    <li name="义乌" id="1882"></li>
    <li name="甘肃" id="1883"></li>
    <li name="江苏" id="1884"></li>
    <li name="新疆" id="1885"></li>
    <li name="楚雄" id="1886"></li>
    <li name="山西" id="1887"></li>
    <li name="山东" id="1888"></li>
    <li name="梧州" id="1889"></li>
    <li name="巢湖" id="1890"></li>
    <li name="宁夏" id="1892"></li>
    <li name="天门" id="1893"></li>
    <li name="区块链公司" id="1894"></li>
    <li name="福建" id="1895"></li>
    <li name="咸阳" id="1896"></li>
    <li name="邯郸" id="1897"></li>
    <li name="孝感" id="1898"></li>
    <li name="丽水" id="1899"></li>
    <li name="丹阳" id="1900"></li>
    <li name="创业老铁" id="1902"></li>
    <li name="遵义" id="1903"></li>
    <li name="肇庆市" id="1904"></li>
    <li name="文山" id="1905"></li>
    <li name="云南" id="1906"></li>
    <li name="泰安" id="1907"></li>
    <li name="朝阳市" id="1908"></li>
    <li name="阜新市" id="1909"></li>
    <li name="宿迁" id="1910"></li>
    <li name="镇江" id="1911"></li>
    <li name="防城港" id="1912"></li>
    <li name="大庆" id="1913"></li>
    <li name="金融类" id="1914"></li>
    <li name="合作类" id="1915"></li>
    <li name="郴州" id="1916"></li>
    <li name="梅州" id="1917"></li>
    <li name="韩国" id="1920"></li>
    <li name="邵阳市" id="1921"></li>
    <li name="普洱市" id="1922"></li>
    <li name="沧州市" id="1923"></li>
    <li name="东阳" id="1924"></li>
    <li name="聊城" id="1925"></li>
    <li name="湛江" id="1926"></li>
    <li name="帕劳" id="1928"></li>
    <li name="汕头" id="1929"></li>
    <li name="三河市" id="1930"></li>
    <li name="安庆" id="1933"></li>
    <li name="石师市" id="1934"></li>
    <li name="开封" id="1935"></li>
    <li name="开封市" id="1936"></li>
    <li name="贷款业务" id="1937"></li>
    <li name="巢湖" id="1938"></li>
    <li name="泸州" id="1939"></li>
    <li name="德州" id="1940"></li>
    <li name="仁怀" id="1941"></li>
    <li name="宁德" id="1942"></li>
    <li name="连云港" id="1943"></li>
    <li name="潮州" id="1944"></li>
    <li name="七台河" id="1945"></li>
    <li name="六安" id="1946"></li>
    <li name="茂名" id="1947"></li>
    <li name="海外" id="1948"></li>
    <li name="淮南" id="1949"></li>
    <li name="蚌埠" id="1950"></li>
    <li name="南安市" id="1951"></li>
    <li name="安顺" id="1952"></li>
    <li name="韶关" id="1953"></li>
    <li name="绥化市" id="1954"></li>
    <li name="内江市" id="1955"></li>
    <li name="鹤壁市" id="1956"></li>
    <li name="荆州" id="1957"></li>
    <li name="怀化" id="1958"></li>
    <li name="赣州" id="1959"></li>
    <li name="宜昌" id="1960"></li>
    <li name="大同" id="1961"></li>
    <li name="淮安" id="1962"></li>
    <li name="滨州" id="1963"></li>
    <li name="晋城" id="1964"></li>
    <li name="汕尾" id="1965"></li>
    <li name="黔南" id="1966"></li>
    <li name="毕节" id="1967"></li>
    <li name="食品流通" id="1968"></li>
    <li name="庐江" id="1969"></li>
    <li name="儋州" id="1970"></li>
    <li name="澄迈县" id="1971"></li>
    <li name="税收政策" id="1972"></li>
    <li name="云政通" id="1973"></li>
    <li name="税务筹划" id="1974"></li>
    <li name="呼和浩特" id="1976"></li>
    <li name="南充" id="1977"></li>
    <li name="广元" id="1978"></li>
    <li name="达州" id="1979"></li>
    <li name="巴中" id="1980"></li>
    <li name="张家港" id="1981"></li>
    <li name="西藏" id="1982"></li>
    <li name="金华" id="1986"></li>
    <li name="衢州" id="1987"></li>
    <li name="镇江" id="1988"></li>
    <li name="恩施" id="1989"></li>
    <li name="个体户" id="1990"></li>
    <li name="建筑资质" id="1991"></li>
    <li name="抚州" id="1992"></li>
    <li name="成都资质" id="1993"></li>
    <li name="湘潭" id="1994"></li>
    <li name="香港公司开户" id="1995"></li>
    <li name="香港银行开户" id="1997"></li>
    <li name="加盟/买线索" id="1998"></li>
    <li name="商务合作" id="1999"></li>
    <li name="验资垫资" id="2000"></li>
    <li name="进出口退税" id="2001"></li>
    <li name="广州增城区" id="2002"></li>
    <li name="新余" id="2003"></li>
    <li name="常德" id="2004"></li>
    <li name="济宁" id="2005"></li>
</ul>




<script type="text/javascript">
    var sourceTarget=returnCitySN["cip"]+','+returnCitySN["cname"];
    var domain = "http://"+location.host+"/";
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
        remark='GongShang_Register_newUser_'
        if(window.Storage && window.localStorage && window.localStorage instanceof Storage){
            var storage=window.localStorage;
            if(storage.source){
                remark+=storage.source;
            }
        }
        if(sourceTarget){
            remark="来源地址："+sourceTarget
        }

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
            url:"/heming/cusVerify.html?customerName="+encodeURI(surname)+"&customerMobile="+phone+"&sourceId=46&qd="+qd+"&zd="+zd+"&fs="+fs+"&lx="+lx+"&gjc="+gjc+"&zycDiscount=0.2"+"&areaId="+encodeURI(city)+"&xy="+xy+"&remark="+encodeURI(remark),
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
    //窗口效果
    //点击登录class为tc 显示
    $(".tc").click(function(){
        $("#gray").show();
        $("#popup_dialog").show();//查找ID为popup的DIV show()显示#gray
        tc_center();
    });
    //点击关闭按钮
    $("a.guanbi").click(function(){
        $("#gray").hide();
        $("#popup_dialog").hide();//查找ID为popup的DIV hide()隐藏
        $('.city').parent().remove();
    })

</script>

<script type="text/javascript">
    var D = new Dictionary();
    var len=0;
    $("#areaLists li").each(function(){
        var y = $(this);
        len=len+1;
        D.put(y.attr("name"),y.attr("id"));
    });
    //键值对保存地区用于匹配
    function Dictionary(){
        this.data = new Array();
        this.put = function(key,value){
            this.data[key] = value;
        };

        this.get = function(key){
            return this.data[key];
        };

        this.remove = function(key){
            this.data[key] = null;
        };

        this.isEmpty = function(){
            return this.data.length == 0;
        };

        this.size = function(){
            return this.data.length;
        };
    }
</script>
	<div class="black" style="display: none;"></div>
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
                            $(".black").show();
                            Layer.style.display = "block";
                            i++;
                        } else {
                            $(".black").hide();
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
        $(".black").hide();
        var input = window.document.getElementById(obj);
        input.value = str;
    }
</script>
<div class="index_wrapper ny_qm" style="height:100%; padding-bottom:0px;">
    <input type="hidden" name="areaCode" id="areaCode" value="000000">

    <div class="qds_slogan">开公司想不出好名字？ 大好时光为您推荐</div>
    <div class="syrs1">已为
        <b id="oSpan">352821775</b>家公司推荐名字</div>

    <script>//在一定的时间内 移动一定的距离
        //当前的位置=移动的距离/所用的时间*已用的时间
        //移动的距离=结束位置-起始位置
        -function move() {
            var oSpan = document.getElementById("oSpan");
            var d = 3528 + '21775';//结束的位置
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
    <div class="form">
        <div class="ss_wrap">
            <div class="ssfomr_box region_p1 region">
                <!-- 修改后不用原本地区onkeyup="showAndHide('List1','show');" onfocus="showAndHide('List1','show');" onblur="showAndHide('List1','hide');"  -->
                <input placeholder="请选择城市 如：上海" type="text" id="region_tj" name="region_tj" class="ui-autocomplete-input" autocomplete="off" readonly="readonly">
                <input type="hidden" id="provinceCode" value="">
                <input type="hidden" id="cityCode" value="">
            </div>
            <script>
                $('#region_tj').click(function () {
                    $(".black").show();
                })
            </script>
            <div class="ssfomr_box hytype_p1">
                <input placeholder="请输入行业 如：软件" onkeyup="showAndHide('List2','show');" onfocus="showAndHide('List2','show');" onblur="showAndHide('List2','hide');" id="trade_tj" name="trade_tj" class="ui-autocomplete-input" autocomplete="off">
            </div>

            <div class="ssfomr_box">
                <a href="{{ route('register') }}" type="button" class="btn clicka" style="text-align: center">推荐名字</a>
{{--                <button class="btn clicka"   href="{{ route('register') }}">推荐名字</button>--}}
            </div>
                {{--            onclick="checkTJPamar()"--}}
        </div>

        <div class="Menu" id="List2">
            <div class="Menu2">
                <ul>
                    <div class="memu2_tit01">科技类</div>
                    <li onmousedown="getValue('trade_tj','网络科技');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">网络科技</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','电子商务');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">电子商务</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','信息技术');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">信息技术</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','游戏');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">游戏</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','电子');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">电子</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','软件');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">软件</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','新材料');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">新材料</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','生物科技');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">生物科技</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','教育科技');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">教育科技</a>
                    </li>

                </ul>

                <ul>
                    <div class="memu2_tit01">许可类</div>
                    <li onmousedown="getValue('trade_tj','投资管理');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">投资管理</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','金融');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">金融</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','资产');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">资产</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','融资租赁');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">融资租赁</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','医疗器械');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">医疗器械</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','人力资源');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">人力资源</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','食品');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">食品</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','劳务派遣');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">劳务派遣</a>
                    </li>

                </ul>

                <ul>
                    <div class="memu2_tit01">服务类</div>
                    <li onmousedown="getValue('trade_tj','广告');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">广告</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','文化传播');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">文化传播</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','建筑装潢');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">建筑装潢</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','设计');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">设计</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','美容美发');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">美容美发</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','房地产中介');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">房地产中介</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','物业管理');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">物业管理</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','商务咨询');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">商务咨询</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','企业管理');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">企业管理</a>
                    </li>
                </ul>
                <ul>
                    <div class="memu2_tit01">其 他</div>
                    <li onmousedown="getValue('trade_tj','贸易');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">贸易</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','实业');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">实业</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','制造');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">制造</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','服饰');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">服饰</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','化妆品');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">化妆品</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','工程');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">工程</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','农业');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">农业</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','餐饮管理');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">餐饮管理</a>
                    </li>
                    <li onmousedown="getValue('trade_tj','物流');showAndHide('List2','hide');">
                        <a href="javascript:volid(0);">物流</a>
                    </li>


                </ul>
            </div>
        </div>

    </div>
    <div class="tishi">
        <i class="iconfont"></i>如：上海百度科技有限公司，城市是“上海”，行业是“科技”</div>
</div>
<div style=" background:url(../images/sf1.gif) repeat; height:auto; overflow:auto;  width:100%;">
    <div class="zhuyi cen">
        <div class="tit">公司起名，需要注意哪些事项？</div>
        <ul>
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont yc1"></i>
                    <h3>不能重名</h3>
                    <p></p>
                    <span>相同或相似行业存在重名公司，不能注册。如：“多有米网络科技”与“多有米信息科技”算重名。</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont yc2"></i>
                    <h3>不能触犯驰名商标</h3>
                    <p></p>
                    <span>如：“万达”是驰名商标，不能注册为公司名字；</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont yc3"></i>
                    <h3>不能与知名公司名字混淆</h3>
                    <p></p>
                    <span>如“新微软”“微软之家”等不能注册为公司名字。</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont yc4"></i>
                    <h3>尽量不用地区名称及简称</h3>
                    <p></p>
                    <span>如：上海，兰州，沪等不能注册为公司名字。</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont yc5"></i>
                    <h3>不能使用繁体、数字、英文</h3>
                    <p></p>
                    <span>公司名称只能使用简体中文。</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont yc6"></i>
                    <h3>不能使用行业通用词汇</h3>
                    <p></p>
                    <span>如：“上海电脑科技有限公司”不能注册为公司名字。</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont yc7"></i>
                    <h3>不能使用名人字号</h3>
                    <p></p>
                    <span>如：“马云”，“王健林”等不能注册为公司名字。</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i class="iconfont yc8"></i>
                    <h3>不能带有宗教色彩</h3>
                    <p></p>
                    <span>如：“伊斯兰”等不能注册为公司名字。</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div style=" clear:both"></div>
<form action="/" id="searchFormTJ" method="post">
    <input type="hidden" id="cityName" name="city" value="">
    <input type="hidden" id="industryName" name="trade" value="">
    <input type="hidden" id="hidden_provinceCode" name="province_code" value="">
    <input type="hidden" id="hidden_cityCode" name="city_code" value="">
    <input type="hidden" id="hid_page" name="pageNo" value="0">
</form>
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
								<span>
									©2016-2018 粤ICP备16004580号-4 版权所有 深圳聚星创想财税科技有限公司
							</span></div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</footer>
<script src="./js/public.js" type="text/javascript"></script>

<script src="./js/layer.js"></script>


<style>
    .hui {
        padding: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
</style>

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

<script type="text/javascript">
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
</script>
<!-- 底部结束 -->

<script type="text/javascript">
    var domain = "http://" + location.host + "/";
    $(function () {
        $("body").on('click', "#logout", function () {
            //logout();
        });
        //autoComplete();
    });
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
        $('#hidden_provinceCode').val($("#provinceCode").val());
        $('#hidden_cityCode').val($("#cityCode").val());
        $('#cityName').val(city);
        $('#industryName').val(industry);
        if ("" == "") {
            var region = $("#region_tj").val();
            var areaid = '1537';//默认
            for (var key in D.data) {
                if (region.indexOf(key) >= 0) {
                    areaid = D.get(key);
                }
            }
            //地区
            $("#hiddenareaId").val(areaid);
            $('#redirect_url_form').val('searchFormTJ');
            $("#toReg1").click();
            return;
        }
        submit();
    }
    function submit() {
        $('#searchFormTJ').submit();
    }
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







    //窗口效果
    //点击登录class为tc 显示
    $(".tc").click(function () {
        $("#gray").show();
        $("#popup_dialog").show();//查找ID为popup的DIV show()显示#gray
        tc_center();
    });
    //点击关闭按钮
    $("a.guanbi").click(function () {
        $("#gray").hide();
        $("#popup_dialog").hide();//查找ID为popup的DIV hide()隐藏
        $('.city').parent().remove();
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
</script>
<input type="hidden" value="" id="click_type">

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

    //点击关闭按钮
    $(".close1>i").click(function () {
        $("#gray").hide();
        $("#popup1").hide();//查找ID为popup的DIV hide()隐藏
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




</body></html>