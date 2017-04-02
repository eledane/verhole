<?php

$lang = array_search(Configure::read('Config.language'), Configure::read('Config.availableLanguages')); 

if($lang == 'en') {
?>
<div class="en onepercent">
    <div class="section-banner1">
        <img src="/img/onepercent/en/banner1_m.jpg">
    </div>
    <div class="section-banner2">
        <div class="inner"></div>
        <img src="/img/onepercent/en/banner2_m.png">
        <div class="lantern lantern-left"></div>
        <div class="lantern lantern-right"></div>
    </div>

    <div class="section-fqg">
        <div class="container">
            <h2 class="headline">You could buy the following products by installment</h2>
            <div class="products">
                <div class="prod pc"><span>PC</span></div>
                <div class="prod mobile"><span>MOBILE PHONE</span></div>
                <div class="prod motor"><span>MOTORBIKE</span></div>
                <div class="prod electronic"><span>FASHION ELECTRONICS</span></div>
                <div class="prod appliance"><span>HOME APPLIANCE</span></div>
            </div>
            <div class="contactus">
                <span class="text">Call Us<strong>400 027 1265</strong></span>
            </div>
        </div>
    </div>

    <div class="section-statistics">
        <div class="container">
            <h2 class="headline"><span>1% over payment every month, get it now!</span></h2>
            <div class="statistics-box">
                <ul class="table">
                    <li class="item-1">
                        <div class="h"><span class="icon"></span><strong class="name">Maximum Loan(RMB)</strong></div>
                        <div class="d"><span>10,000</span></div>
                    </li>
                    <li class="item-2">
                        <div class="h"><span class="icon"></span><strong class="name">Lowest DP<sup>*</sup></strong></div>
                        <div class="d"><span>Start from 10% of Price</span></div>
                    </li>
                    <li class="item-3">
                        <div class="h"><span class="icon"></span><strong class="name">Monthly Rates<sup>*</sup></strong></div>
                        <div class="d"><span>Less than 1% of goods price</span></div>
                    </li>
                    <li class="item-4">
                        <div class="h"><span class="icon"></span><strong class="name">Tenure</strong></div>
                        <div class="d"><span>10/12/15/18/24</span></div>
                    </li>
                </ul>
                <ul class="remarks">
                    <li>*Lowest down payment amount will be determined by loan amount</li>
                    <li>*Flexible package and insurance are excluded</li>
                </ul>

                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-1">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-2">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-3">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-4">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-5">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-6">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-7">
            </div> 
            
            <div class="ft">
                <img src="/img/onepercent/en/statistics_text.png">
            </div>
        </div>
    </div>

    <div class="section-process">
        <div class="container">
            <h2 class="headline"><img src="/img/onepercent/en/process_headline.png"></h2>
            <h3 class="subtitle">You only need to fulfill 2-3 easy conditions</h3>

            <div class="files cf">
                <div class="file required">
                    <img src="/img/onepercent/process_card_main.png">
                    <span>ID Card(required)</span>
                </div>
                <span class="plus"><span class="h"></span><span class="v"></span></span>
                <div class="options">
                    <div class="file security">
                        <img src="/img/onepercent/process_card_security.png">
                        <span>Social Insurance Card</span>
                    </div>
                    <div class="file bank">
                        <img src="/img/onepercent/process_card_bank.png">
                        <span>Debit Card &<br>Transaction Receipt</span>
                    </div>
                    <div class="file driving">
                        <img src="/img/onepercent/process_card_driving.png">
                        <span>Driver's License</span>
                    </div>
                    <div class="file family">
                        <img src="/img/onepercent/process_card_family.png">
                        <span>Residence Booklet</span>
                    </div>
                    <div class="file insurance">
                        <img src="/img/onepercent/process_card_insurance.png">
                        <span>Health Insurance Card</span>
                    </div>
                    <div class="file work">
                        <img src="/img/onepercent/process_card_work.png">
                        <span>Employment Authorization Document</span>
                    </div>
                </div>
            </div> 
            
            <div class="attention">
                <h3><img src="/img/onepercent/en/process_attention.png"></h3>
                <ol>
                    <li>1. 1% mentioned here means 1% of the total goods price</li>
                    <li>2. The details of installment products shall be subject to the consumer finance loan contract signed by you.</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php
} else {
?>

<div class="zh onepercent">
    <div class="section-banner1">
        <img src="/img/onepercent/banner1_m.jpg">
    </div>
    <div class="section-banner2">
        <div class="inner"></div>
        <img src="/img/onepercent/banner2_m.png">
        <div class="lantern lantern-left"></div>
        <div class="lantern lantern-right"></div>
    </div>

    <div class="section-fqg">
        <div class="container">
            <h2 class="headline"></h2>
            <div class="products">
                <div class="prod pc"><span>电脑</span></div>
                <div class="prod mobile"><span>手机</span></div>
                <div class="prod motor"><span>摩托车</span></div>
                <div class="prod electronic"><span>电子产品</span></div>
                <div class="prod appliance"><span>家电</span></div>
            </div>
            <div class="contactus">
                <span class="text">快来联系我们吧！<strong>400 027 1265</strong></span>
            </div>
        </div>
    </div>

    <div class="section-statistics">
        <div class="container">
            <h2 class="headline"><span></span></h2>
            <div class="statistics-box">
                <ul class="table">
                    <li class="item-1">
                        <div class="h"><span class="icon"></span><strong class="name">最高贷款金额(元)</strong></div>
                        <div class="d"><span>10,000</span></div>
                    </li>
                    <li class="item-2">
                        <div class="h"><span class="icon"></span><strong class="name">最低首付<sup>*</sup></strong></div>
                        <div class="d"><span>低至商品总价的10%</span></div>
                    </li>
                    <li class="item-3">
                        <div class="h"><span class="icon"></span><strong class="name">每月费率<sup>*</sup></strong></div>
                        <div class="d"><span>不超过商品总价的1％</span></div>
                    </li>
                    <li class="item-4">
                        <div class="h"><span class="icon"></span><strong class="name">期数</strong></div>
                        <div class="d"><span>10、12、15、18、24期可选</span></div>
                    </li>
                </ul>
                <ul class="remarks">
                    <li>*最低首付金额需根据贷款金额确定</li>
                    <li>*选择灵活还款服务包和保险除外</li>
                </ul>

                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-1">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-2">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-3">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-4">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-5">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-6">
                <img src="/img/onepercent/statistics_cloud.png" class="cloud cloud-7">
            </div> 
            
            <div class="ft">
                <img src="/img/onepercent/statistics_text.png">
            </div>
        </div>
    </div>

    <div class="section-process">
        <div class="container">
            <h2 class="headline"><img src="/img/onepercent/process_headline.png"></h2>
            <h3 class="subtitle">放轻松，你只需要提供以下2-3项简单证明文件！</h3>

            <div class="files cf">
                <div class="file required">
                    <img src="/img/onepercent/process_card_main.png">
                    <span>身份证（必须）</span>
                </div>
                <span class="plus"><span class="h"></span><span class="v"></span></span>
                <div class="options">
                    <div class="file security">
                        <img src="/img/onepercent/process_card_security.png">
                        <span>社保卡</span>
                    </div>
                    <div class="file bank">
                        <img src="/img/onepercent/process_card_bank.png">
                        <span>银行卡 + 交易回单</span>
                    </div>
                    <div class="file driving">
                        <img src="/img/onepercent/process_card_driving.png">
                        <span>驾驶证</span>
                    </div>
                    <div class="file family">
                        <img src="/img/onepercent/process_card_family.png">
                        <span>户口簿</span>
                    </div>
                    <div class="file insurance">
                        <img src="/img/onepercent/process_card_insurance.png">
                        <span>医保卡</span>
                    </div>
                    <div class="file work">
                        <img src="/img/onepercent/process_card_work.png">
                        <span>工卡</span>
                    </div>
                </div>
            </div> 
            
            <div class="attention">
                <h3><img src="/img/onepercent/process_attention.png"></h3>
                <ol>
                    <li>1. 此处提到的1%为商品总价的1%。</li>
                    <li>2. 具体条款以借款人与捷信公司签订的消费信贷合同约定为准。</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<?php
}
?>
