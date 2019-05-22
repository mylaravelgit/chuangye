<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="baidu-site-verification" content="Ji8JCL7oRs">
    <title>大好时光logo设计</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./css/cybb.css" rel="stylesheet">
</head>
<body ondragstart="return false" id="top">
<!--IE10以下请升级浏览器-->
<!--[if lt IE 10]><script>window.location.href='https://support.dmeng.net/upgrade-your-browser.html?referrer='+encodeURIComponent(location.href);</script><![endif]-->
<div class="container-fluid  navbar-fixed-top" style="display:;">
    <div class="container">
        <nav class="navbar navbar-collapse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" style="    margin-top: -31px;">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <img src="./images/close.png" alt="" style="display:none;">
                    </button>
                    <a class="navbar-brand " href="./shejilogo" onclick="_czc.push([&quot;_trackEvent&quot;, &quot;公用页面（头部）&quot;, &quot;导航栏【logo】&quot;, &quot;&quot;, &quot;&quot;, &quot;&quot;]);">
                        <img alt="Brand" src="./images/logo.png" class="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" style="display:none;">
                        <li class="last">
                            <a href="javascript:void(0);" onclick="_czc.push([&quot;_trackEvent&quot;, &quot;公用页面（头部）&quot;, &quot;导航栏【登录注册】&quot;, &quot;&quot;, &quot;&quot;, &quot;&quot;]);"><button class="mydesign btn">登录 / 注册</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<div style="margin-top:80px;clear:both;overflow: auto;"></div>

<!--内容介绍1-->
<div class="container content">
    <h2 class="text-center">创作好logo 只需10秒钟</h2>
    <p class="text-center">告别价格贵，告别出品慢，告别沟通难</p>
    <a href="{{ route('register') }}" class="try" onclick="_czc.push([&quot;_trackEvent&quot;, &quot;首页&quot;, &quot;首页第1个制作按钮&quot;, &quot;&quot;, &quot;&quot;, &quot;&quot;]);">立即开始</a>

    <div class="row count-data">
        <div class="col-sm-8 col-md-9">
            <img src="./images/banner1.jpg" alt="" class="img-responsive">
        </div>
        <div class="col-sm-4 col-md-3">
            <ul class="row">
                <li class="col-xs-5 col-sm-10 col-xs-push-1 col-sm-push-0">
                    <h3 id="total_logo1">266,233,129</h3>
                    <h3 id="total_logo2" style="display:none;">266,233,129</h3>
                    <p>大好时光人工智能设计logo数量</p>
                    <span>(实时更新)</span>
                </li>
                <li class="col-xs-5 col-sm-10 col-xs-push-1 col-sm-push-0">
                    <h3 id="enterpriseNum">1,930,284</h3>
                    <p>大好时光人工智能服务企业数量</p>
                    <span>(每日更新)</span>
                </li>
                <li class="col-xs-5 col-sm-10 col-xs-push-3 col-sm-push-0">
                    <h3>98.86%</h3>
                    <p>客户满意好评率</p>
                    <span class="index_time">截止 2019.5.19</span>
                </li>
            </ul>
        </div>
    </div>

</div>


<script src="./js/jquery.js"></script>
<script src="./js/sea.js"></script>
<script src="./js/seajs-text.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.tag-editor.min.js"></script>
<script src="./js/shjian.js"></script>
<script src="./js/commTools.js"></script>
<script src="./js/jquery.waypoints.min.js"></script>
<script src="./js/jquery.countup.min.js"></script>
<script src="./js/common.js"></script>
<script>

    $(function(){
        //随机更新已设计LOGO数量
        var options = {
            "useEasing" : true,
            "useGrouping" : true,
            "separator" : ',',
            "decimal" : '.'
        };

        var startAt = new Date("2018-12-08");
        var initVal = parseInt(startAt.getTime()/40000);

        var startTime = new Date("2018-12-07 20:00:00").getTime();


        var nowDate = new Date();


        var speed = Math.abs(nowDate - startAt) / 8640000000;
        if (!speed) { speed = 0.0001; }
        function count_new_val() {
            var now = new Date();
            var newVal = initVal + parseInt((Math.abs(now - startAt)/100) * speed, 10);
            return newVal;
        }



        var countup1 = new CountUp("total_logo1", 0, count_new_val(), 0, 1.8, options);
        var countup2 = new CountUp("total_logo2", 0, count_new_val(), 0, 1.8, options);
        countup1.start();
        countup2.start();
        setInterval(function() {
            if (Math.random() > 0.3) {
                countup1.update(count_new_val());
                countup2.update(count_new_val());
            }
        }, 2500);
        $("#enterpriseNum").text((initVal/20+"").replace(/\B(?=(?:\d{3})+\b)/g, ','))
        //随机更新
    });
</script>



</body></html>