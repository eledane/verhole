<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="build/style.css" type="text/css">
    <title>Homecredit China</title>
    <link rel='shortcut icon' href='images/favicon.ico' type='image/icon'/ >
</head>
<body>

<!-- menu -->
    <div class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-items" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-brand"><a class="page-scroll" href="#form">
                    <img src="images/logo-hc-main.png"></a>
                </div>
            </div>
            <div class="navbar-collapse collapse" id="nav-items">
                <ul class="nav navbar-nav">
                    <li><a class="page-scroll" href="#main">首页</a></li>
                    <li><a class="page-scroll" href="#product">产品详情</a></li>
                    <li><a class="page-scroll" href="#faq">常见问题</a></li>
                    <li><a class="page-scroll" href="#form">如何加入</a></li>
                </ul>
            </div>
        </div>
    </div>

<!-- main visual -->
    <div class="container-fluid" id="main">
        <div class="container main-visual">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h1 class="text-center">
                        线上销量「越来越高」的秘密<br>
                        携手捷信线上分期
                    </h1>
                    <a class="main-cta page-scroll" href="#form">我要加入</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Who We Are -->
    <div class="container-fluid Whoweare-wrapper">
        <div class="container">
            <h1>我们是谁</h1>
            <ul class="nav nav-tabs Whoweare-tab-group" role="tablist">
                <li class="active" role="presentation">
                    <a href="#PPF" class="tab-item" role="tab" data-toggle="tab">
                        <h3>PPF集团</h3>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#HCG" class="tab-item" role="tab" data-toggle="tab">
                        <h3>捷信集团</h3>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#HCC" class="tab-item" role="tab" data-toggle="tab">
                        <h3>捷信中国</h3>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="PPF" role="tabpanel" class="tab-pane active">
                    <!-- About PPF-->
                    <p>PPF集团是中东欧规模最大的投资集团之一。是捷信集团的母公司, 持有捷信集团86.62% 的股份。PPF集团业务横跨欧洲、俄罗斯、亚洲及美国市场，投资领域覆盖银行、金融服务、电信、房地产、零售、保险、矿产业、农业及生物科技领域等诸多领域。
                    </p>
                    <p>想要了解更多敬请登陆：<a href="http://www.ppf.eu" target="blank">www.ppf.eu</a> </p>
                </div>
                <div id="HCG" role="tabpanel" class="tab-pane">
                    <!-- About HCG-->
                    <p>
                        捷信集团(Home Credit BV) 成立于1997年，是国际领先的消费金融服务提供商，业务遍及全球十一个极具增长潜力的市场。捷信集团主要向信用记录缺失或很少的人群提供负责任的贷款，以及简单、方便和快捷的消费金融服务。在每个运营的国家，捷信都致力成为当地市场的领先者。
                    </p>
                    <p>
                        凭借丰富的跨国运营经验和专业知识，捷信集团得以持续领先众多的同行企业。通过提供安全和优质的贷款体验，捷信集团积极地推动并扩展普惠金融覆盖传统银行服务覆盖不到的人群——我们的很多客户都是首次借款人。</p>
                    <p>
                        捷信集团积极推动生活水平的提升，同时满足借款人的金融需求。截至2015年9月，捷信拥有超过6万名员工，累计服务超过5,000万客户。捷信拥有强大的业务网络，包括超过17万个贷款服务网络点。</p>
                     <p>
                        更多信息，敬请登录：<a href="http://www.homecredit.net" target="blank"> www.homecredit.net</a> </p>
                </div>
                <div id="HCC" role="tabpanel" class="tab-pane">
                    <!-- About HCC-->
                    <ul>
                        <li>中国领先消费金融公司</li>
                        <li>银监会首批设立的四家试点消费金融公司之一</li>
                        <li>2004年底成立</li>
                        <li>业务覆盖超过260个城市</li>
                        <li>POS网点超过6万，覆盖率NO.1</li>
                        <li>精耕中国市场12年，服务客户1千5百万，同比增长106%</li>
                    </ul>
                    <p>
                        更多信息，敬请登录：<a href="http://www.homecreditcfc.cn" target="blank">www.homecreditcfc.cn</a> 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Online Credit e-loan -->
    <div class="container-fluid OnlineCredit" id="product">
        <div class="container">
            <h1>捷信线上分期=互联网+普惠金融</h1>
            <div class="row summary">
                <div class="col-xs-4 col-md-2">
                    <div data-toggle="tooltip" data-placement="top" title="无担保无抵押 先购物后付款" class="item">30天免息</div>
                </div>
                <div class="col-xs-4 col-md-2">
                    <div data-toggle="tooltip" data-placement="top" title="第一个月以后的月利率" class="item">1%月利率</div>
                </div>
                <div class="col-xs-4 col-md-2">
                    <div data-toggle="tooltip" data-placement="top" title="1-12月分期期数灵活选择" class="item">灵活分期</div>
                </div>
                <div class="col-xs-4 col-md-2">
                    <div data-toggle="tooltip" data-placement="top" title="提前还款无费用" class="item">0费用</div>
                </div>
                <div class="col-xs-4 col-md-2">
                    <div data-toggle="tooltip" data-placement="top" title="30天内可随时免费取消贷款业务" class="item">免费取消</div>
                </div>
                <div class="col-xs-4 col-md-2">
                    <div data-toggle="tooltip" data-placement="top" title="高达¥7,500额度，可购买多种商品，购买6S PLUS无需卖肾" class="item">额度高</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 detail">无担保无抵押 先购物后付款</div>
                <div class="col-md-2 detail">第一个月以后的月利率</div>
                <div class="col-md-2 detail">1-12月分期期数灵活选择</div>
                <div class="col-md-2 detail">提前还款无费用</div>
                <div class="col-md-2 detail">30天内可随时免费取消贷款业务</div>
                <div class="col-md-2 detail">高达¥7,500额度，可购买多种商品，购买6S PLUS无需卖肾</div>
            </div>
        </div>
    </div>
    <!-- coorporations
    <div class="container Corporation">
        <h1>已合作电商平台及电子支付平台</h1>
        <div class="content">
            
        </div>
    </div>
    -->
    <!-- online credit -->
    <div class="container-fluid OnlineProduct">
    <div class="container">
            <h1>捷信线上分期产品帮您迅速：</h1>
            <div class="row">
                <div class="col-md-3 advantage-list">
                    <h2>增加销量：</h2>
                    <ul>
                        <li class="advantage-item"><h4>增加客户范围</h4> </li>
                        <li class="advantage-item"><h4>提高客户购买力</h4> </li>
                        <li class="advantage-item"><h4>增加客户复购率</h4> </li>
                        <li class="advantage-item"><h4>提高客户粘性</h4></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <img src="images/advantage-1.jpg" alt="">
                </div>
                <div class="col-md-3 advantage-list">
                    <h2>降低成本：</h2>
                    <ul>
                        <li class="advantage-item"><h4>降低跳失率 </h4></li>
                        <li class="advantage-item"><h4>增加访问深度</h4></li>
                        <li class="advantage-item"><h4>增加访问时长</h4> </li>
                        <li class="advantage-item"><h4>降低渠道成本</h4></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <img src="images/advantage-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- PK -->
    <div class="container-fluid PK">
        <div class="container">
            <h1>捷信产品PK其他同质产品</h1>
            <div class="row">
                <div class="col-md-3 col-xs-6 diamond"> 
                    <div class="pk-item" data-toggle="tooltip" data-placement="top" title="XX宝收款费用：10000以内免费，超出后费率0.6%。捷信：免费"><span>支付0成本</span></div>
                </div>
                <div class="col-md-3 col-xs-6 diamond"> 
                    <div class="pk-item" data-toggle="tooltip" data-placement="top" title="以发货时间作为放款标志。发货后第二个工作日结款"><span>T+1结款</span></div>
                </div>
                <div class="col-md-3 col-xs-6 diamond"> 
                    <div class="pk-item" data-toggle="tooltip" data-placement="top" title="结合电商平台自身特色，量身定制产品展示页。定期优化界面。提高流量"><span>产品展现定制化</span></div>
                </div>
                <div class="col-md-3 col-xs-6 diamond"> 
                    <div class="pk-item" data-toggle="tooltip" data-placement="top" title="线下门店推广牌。线上（微博，微信，）多个超人气公众号。帮助电商平台引流。"><span>合作推广</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-6 pk-desc">XX宝收款费用：10000以内免费，超出后费率0.6% <br />捷信：免费</div>
                <div class="col-md-3 col-xs-6 pk-desc">以发货时间作为放款标志。发货后第二个工作日结款</div>
                <div class="col-md-3 col-xs-6 pk-desc">结合电商平台自身特色，量身定制产品展示页。定期优化界面。提高流量</div>
                <div class="col-md-3 col-xs-6 pk-desc">线下门店推广牌。线上（微博，微信，）多个超人气公众号。帮助电商平台引流。</div>
            </div>
        </div>
    </div>
    
    <!-- Advantages (Product Details) 
    <div class="container">
        <div id="advantage" class="Advantage">
            <div class="row Advantage-item">
                <div class="col-md-5 col-md-push-7 Advantage-image-wrapper">
                    <img src="images/advantage-1.jpg">
                </div>

                <div class="col-md-7 col-md-pull-5">
                    <h1 class="Advantage-header">
                        <span class="Circle">&nbsp;1&nbsp;</span> 让<strong>您</strong>收获更多
                    </h1>
                    <p class="Advantage-text">
                        更简单，14天即可完成平台对接
                    </p>
                    <p class="Advantage-text">
                        更全面，简单嵌入现有支付页面，实现更多样支付方式
                    </p>
                    <p class="Advantage-text">
                        更安心，风险控制、催收等环节由我们全程负责
                    </p>
                    <p class="Advantage-text">
                        更高效，您的日均线上订单将会成倍增长
                    </p>
                </div>
            </div>
            <div class="row  Advantage-item">
                <div class="col-md-5 Advantage-image-wrapper">
                    <img src="images/advantage-2.jpg">
                </div>
                <div class="col-md-7">
                    <h1 class="Advantage-header">
                        <span class="Circle">&nbsp;2&nbsp;</span> 让<strong>您的顾客</strong>收获更多
                    </h1>
                    <p class="Advantage-text">
                        更划算，1期分期，全免息；1期以上分期，月费率低至1%
                    </p>
                    <p class="Advantage-text">
                        更实用，50-7500元额度随心申请，满足各种日常需求
                    </p>
                    <p class="Advantage-text">
                        更贴心，支持30天内，0手续费取消分期
                    </p>
                    <p class="Advantage-text">
                        更灵活，分期期数灵活，1-12任意选择
                    </p>
                </div>
            </div>
        </div>
    </div>
-->
<!-- Steps -->
    <div class="container-fluid" id="steps">
        <div class="container">
            <h1>线上合作流程</h1>
            <div class="row text-center">
                <div class="col-md-3 step">
                    <img src="images/step-1.png">
                    <p class="text-center">达成合作意向 签约合同</p>
                </div>
                <div class="col-md-3 step">
                    <img src="images/step-4.png">
                    <p class="text-center">开发（2周）</p>
                </div>
                <div class="col-md-3 step">
                    <img src="images/step-2.png">
                    <p class="text-center">联调 -- 测试（1-2周）</p>
                </div>
                <div class="col-md-3 step">
                    <img src="images/step-3.png">
                    <p class="text-center">上线</p>
                </div>
                <div class="step-line1"></div>
                <div class="step-line2"></div>
                <div class="step-line3"></div>
            </div>
            <div class="row">
                <div class="step-long-arrow"></div>
            </div>
        </div>
    </div>

<!-- Partners? -->
<!--
    <div class="Partners">
        <div class="container">
            <div class="row" id="">
                <div class="col-xs-12">
                    <h2 class="Header Header--marginBottom">合作案例</h2>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <div class="Partners-wrapper">
                        <a href="http://www.meilishuo.com/" target="_blank" class="Partners-item">
                            <img src="images/partner-1.png" alt="">
                        </a>
                        <a href="http://www.yhd.com/?type=3" target="_blank" class="Partners-item">
                            <img src="images/partner-2.png" alt="">
                        </a>
                        <div class="clearfix"></div>
                        <a href="http://www.huawei.com/cn" target="_blank" class="Partners-item">
                            <img src="images/partner-3.png" alt="">
                        </a>
                        <a href="http://g.58.com/city" target="_blank" class="Partners-item">
                            <img src="images/partner-4.png" alt="">
                        </a>
                        <a href="http://homecreditcfc.cn/" target="_blank" class="Partners-item Partners-item--center">
                            <img src="images/partner-5.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
<!-- FAQ -->
    <div id="faq" class="Faq">
        <div class="container">
            <div class="row">
                <h2 class="Header Header--marginBottomLarge">常见问题</h2>
                <div class="col-md-12">
                    <p class="Faq-question">
                        <span class="Circle">&nbsp;1&nbsp;</span>&nbsp;什么是“捷信”？
                    </p>
                    <p class="Faq-answer">
                        答:捷信是一个可以帮助您解决资金困扰的平台.
                    </p>

                    <p class="Faq-question">
                        <span class="Circle">&nbsp;2&nbsp;</span>&nbsp;什么是线上分期？
                    </p>
                    <p class="Faq-answer">
                        答: 线上分期的意思就是可以在线申请办理分期业务.
                    </p>

                    <p class="Faq-question">
                        <span class="Circle">&nbsp;3&nbsp;</span>&nbsp;怎样与捷信取得联系？
                    </p>
                    <p class="Faq-answer">
                        答: 我们的邮箱是 claire.liutj@homecreditcfc.cn
                    </p>
                </div>
            </div>
        </div>
        <!--
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <button type="button" class="Link" data-toggle="modal" data-target="#FAQ-modal">
                        更多问题请点击这里
                    </button>
                </div>
            </div>
        </div>
    </div>
    -->
<!-- Form -->
    <div class="container-fluid" id="form">
        <div class="container">
            <div class="row">
                <?php if (isset($_GET["formsent"])): ?>
                    <div class="text-center"><h2><span class="formsent">提交成功。感谢您的关注，我们将尽快与您联系，探讨合作事宜。</span></h2></div>
                <?php else: ?>
                <div class="col-md-12">
                    <h2 class="text-center">
                        联系方式<br />
                        <span>带星号的为必填项</span>
                    </h2>
                </div>
                <form id="contact" action="mail/send.php" method="post">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="partner-name">您的公司全称<sup> *</sup></label>
                            <input type="text" name="partner-name" id="partner-name" class="form-control form-control-in" required>
                            
                        </div>
                        <div class="form-group">
                            <label class="province" for="province">您公司总部所在省<sup> *</sup></label><br>
                            <select name="province" id="province" class="form-control" required>
                                <option>您公司总部所在省份</option>
                                <option value="北京市">北京市</option>
                                <option value="天津市">天津市</option>
                                <option value="河北省">河北省</option>
                                <option value="山西省">山西省</option>
                                <option value="內蒙古自治区">內蒙古自治区</option>
                                <option value="辽宁省">辽宁省</option>
                                <option value="吉林省">吉林省</option>
                                <option value="黑龙江省">黑龙江省</option>
                                <option value="上海市">上海市</option>
                                <option value="江苏省">江苏省</option>
                                <option value="浙江省">浙江省</option>
                                <option value="安徽省">安徽省</option>
                                <option value="福建省">福建省</option>
                                <option value="江西省">江西省</option>
                                <option value="山东省">山东省</option>
                                <option value="河南省">河南省</option>
                                <option value="湖北省">湖北省</option>
                                <option value="湖南省">湖南省</option>
                                <option value="广东省">广东省</option>
                                <option value="广西壮族自治区">广西壮族自治区</option>
                                <option value="海南省">海南省</option>
                                <option value="重庆市">重庆市</option>
                                <option value="四川省">四川省</option>
                                <option value="贵州省">贵州省</option>
                                <option value="云南省">云南省</option>
                                <option value="西藏自治区">西藏自治区</option>
                                <option value="陕西省">陕西省</option>
                                <option value="甘肃省">甘肃省</option>
                                <option value="青海省">青海省</option>
                                <option value="宁夏回族自治区">宁夏回族自治区</option>
                                <option value="新疆维吾尔自治区">新疆维吾尔自治区</option>
                                <option value="香港特别行政区">香港特别行政区</option>
                                <option value="澳门特别行政区">澳门特别行政区</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="contact-person-name">联系人姓名<sup> *</sup></label>
                            <input type="text" name="contact-person-name" id="contact-person-name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">联系人电子邮箱<sup> *</sup></label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">联系人职位<sup> *</sup></label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-person-phone">联系人手机号<sup> *</sup></label>
                            <input type="tel" name="contact-person-phone" id="contact-person-phone" maxlength="18" placeholder="如+ 86 18627458372" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="additional-message">附加信息</label>
                            <textarea name="additional-message" id="additional-message" class="form-control" rows="2"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="captcha">验证码</label>
                            <input type="text" name="captcha" id="captcha_validate" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <img class="captcha" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA" />
                            <a class="btn-captcha" href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false" class="btn btn-link btn-sm">换一张</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="business-type">您公司主营业务<sup> *</sup></label>
                            <input type="text" name="business-type" id="business-type" class="form-control" required placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="business-platform">您公司业务依托的平台<sup> *</sup></label>
                            <select name="business-platform" id="business-platform" required class="form-control">
                                <option value="网站">网站</option>
                                <option value="APP">APP</option>
                                <option value="网站和APP">网站和APP</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="URL">您电商平台的网址/APP名称<sup> *</sup></label>
                            <input type="text" name="URL" id="URL" class="form-control" required placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="port">您的Web端口<sup> *</sup></label>
                            <select name="port" id="port" required class="form-control">
                                <option value="PC">PC</option>
                                <option value="手机">手机</option>
                                <option value="PC和手机">PC和手机</option>
                                <option value="无">无</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="supported-os">您的APP支持的手机系统<sup> *</sup></label>
                            <input type="text" name="supported-os" id="supported-os" class="form-control" required placeholder="如无APP， 即填无">
                        </div>
                        <div class="form-group">
                            <label for="site-pv">您的电商平台流量<sup> *</sup></label>
                            <input type="text" name="site-pv" id="site-pv" class="form-control" required placeholder="请输入网站日均浏览量或/及APP下载量">
                        </div>
                        <div class="form-group">
                            <label for="daily-sales">您电商平台日均销量(人民币)<sup> *</sup></label>
                            <input type="number" name="daily-sales" id="daily-sales" min="0" placeholder="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="daily-visitors">您电商平台日均独立访客量<sup> *</sup></label>
                            <input type="number" name="daily-visitors" id="daily-visitors" min="0" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="average-price">您电商平台的平均客单价(人民币)<sup> *</sup></label>
                            <input type="number" name="average-price" id="average-price" class="form-control" placeholder="" required>
                        </div>
                        
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <input class="btn" type="submit" name="" value="点击发送">
                        </div>
                    </div>
                </form>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="container-fluid" id="footer">
                    <div class="container text-center">
                        <p>
                            &copy; <?php echo date("Y"); ?>捷信版权所有, ICP: 津ICP备12001060号<br> v2.2
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal for FAQ -->
    <div class="modal fade" id="FAQ-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Title</h4>
                </div>
                <div class="modal-body">
                <p>body&hellip;</p>
                </div>
            </div>
        </div>
    </div>
    

    <script type="text/javascript" src="build/script.js"></script>
    <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ 
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), 
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) 
        })(window,document,'script','build/analytics.js','ga'); 
 
        if(ga){
            setTimeout(function(){
                ga('create', 'UA-65950413-14', 'auto'); 
                ga('send', 'pageview'); 
            }, 1000);
        }
    </script>
</body>
</html>
