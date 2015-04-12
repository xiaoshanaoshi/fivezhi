<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo C('keyword');?>"/>
    <meta name="description" content="<?php echo C('content');?>"/>
    <link rel="shortcut icon" href="favicon.ico">
    <title>功能介绍－<?php echo C('site_title');?></title></head>
    ﻿<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css" media="all" />
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/crmqq.php"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/contains.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/localStorage.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/taskMgr.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/views.js"></script>
 <link href="<?php echo RES;?>/css/base.css" type="text/css" rel="stylesheet">
 <script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery.cityselect.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/HeaderMenu.js"></script>
    <link href="<?php echo RES;?>/css/HaedMenu.css" type="text/css" rel="stylesheet">
    <link href="<?php echo RES;?>/css/notification.css" rel="stylesheet" type="text/css">
    <script src="<?php echo RES;?>/js/notification.js" type="text/javascript"></script>
    <script src="<?php echo RES;?>/js/jquery.cookie.js" type="text/javascript"></script>
    

	<script type="text/javascript" src="<?php echo RES;?>/js/jfade.js"></script>
     <script type="text/javascript" src="<?php echo RES;?>/js/images.js"></script> 
 

<script src="<?php echo RES;?>/js/html5.js"></script>







<script type="text/javascript" src="<?php echo RES;?>/js/jQuery.js"></script>







<script type="text/javascript" src="<?php echo RES;?>/js/carouFredSel.js"></script>







<body>



 <div class="w-top">
            <div class="w-head">
                
                <div class="w-wrap">
                    <a class="w-left" href="#"><img src="<?php echo ($f_logo); ?>" /></a>
                    <div class="w-head-line w-left">
                    </div>
                    <div class="w-left w-margin10">
                        <div class="w-city-select">
                           
                        </div>
                            <div class="w-head-login">
                                <a href="<?php echo U('Index/login');?>" class="">登录</a>&nbsp;｜&nbsp;<a href="<?php echo U('Index/reg');?>" class="">注册</a></div>
                    </div>
                    <ul class="w-menu Menu">
                          <li><a href="/" class="hover">首页</a></li>







                    <li><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>







                    <li><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>







                    <li><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>







  

  					





               	<?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>">登录后台</a></li>
				<li><a href="<?php echo U('Index/reg');?>" class="hover">申请试用</a></li>
					<?php else: ?>
                <li><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
				<li><a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a></li><?php endif; ?>	

                    </ul>
                </div>
            </div>
        </div>

<!--

    <div class="nav clearfix">







        <div class="nav-content">   







		







		<img src="<?php echo C('logo');?>"   >







            <div class="right line-li">







                <ul>







                    <li><a href="/" class="hover">首页</a></li>







                    <li><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>







                    <li><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>







                    <li><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>







                    <li><a href="<?php echo U('Home/Index/guide');?>">案例展示</a></li>

  					





               	<?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>">登录后台</a></li>
				<li><a href="<?php echo U('Index/reg');?>" class="hover">申请试用</a></li>
					<?php else: ?>
                <li><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
				<li><a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a></li><?php endif; ?>	

                </ul>







            </div>







      </div>







    </div>-->
<div class="Public-content clearfix">
    <div class="Public">
        <h1 class="Public-h1">功能介绍</h1>
        <div class="Public-box clearfix">
            <ul id="nav_lis" class="case-nav left">
                <li class="hover" data-index="0" data-hash="#site">微官网</li>
                <li data-index="1" data-hash="#member">微会员</li>
                <li data-index="2" data-hash="#activities">微活动</li>
                <li data-index="3" data-hash="#push">微推送</li>
                <li data-index="4" data-hash="#services">微服务</li>
                <li data-index="5" data-hash="#message">微留言</li>
                <li data-index="6" data-hash="#photo">微相册</li>
                <li data-index="7" data-hash="#menu">自定义菜单</li>
                <li data-index="8" data-hash="#research">微调研</li>
                <li data-index="9" data-hash="#addup">微统计</li>
                <li data-index="10" data-hash="#estate">微房产</li>
                <li data-index="11" data-hash="#car">微汽车</li>
                <li data-index="12" data-hash="#wedd">微喜帖</li>
                <li data-index="13" data-hash="#medical">微医疗</li>
                <li data-index="14" data-hash="#hotels">微酒店</li>
                <li data-index="15" data-hash="#lbs">LBS图文回复</li>
                <li data-index="16" data-hash="#cate">微餐饮</li>
                <li data-index="17" data-hash="#vshop">微商城</li>
                <li data-index="18" data-hash="#reser">微预约</li>
            </ul>
            <div id="nav_uls">
                <div data-index="0" data-on="" class="weimob_guide right show">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微官网:快速帮用户打造超炫微信移动网站<a href="" target="_blank" class="guideright ">查看该项使用指南</a></h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob1.jpg"></p>
                        <p class="guidep">微能无线全国首创微信3G网站，用户只要通过简单的设置，就能快速生成属于您自己的微信3G网站，并且有各种精美模板，可供选择，还有自定义模版，可以设计出自己的风格，让您的粉丝有种惊艳的感觉。在微能无线官方微信号输入"首页"体验微信3G网站。</p>
                    </div>
                </div>
                <div data-index="1" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微信会员卡:微时代会员卡，方便携带，永不挂失<a href="" target="_blank" class="guideright ">查看该项使用指南</a></h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob2.jpg"></p>
                        <p class="guidep">微信会员卡通过在微信内植入会员卡，基于全国4亿微信用户，帮助企业建立集品牌推广、会员管理、营销活动、统计报表于一体的微信会员管理平台。清晰记录企业用户的消费行为并进行数据分析；还可根据用户特征进行精细分类，从而实现各种模式的精准营销。</p>
                    </div>
                </div>
                <div data-index="2" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微活动——优惠券+刮刮卡+大转盘+微投票+一战到底的会员再营销<a href="" target="_blank" class="guideright ">查看该项使用指南</a></h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob3.jpg"></p>
                        <p class="guidep">我们将利用微信的强交互性，让您通过对互动流程、环节和方式的设计，运用各种设计活动从而实现与用户的
互动交流,，微整合系统互动符合微信娱乐性强的产品本质，微能无线内置了专为商家定制的“商家营销服务模块”，包括优惠券推广模块、幸运大转盘推广模块、
刮刮卡抽奖模块、微投票、一战到底等功能模块，商家通过发起营销活动，对已有客户进行再营销，通过不断更新补充主题，用户可以反复参与，并可带动周边朋友
一起分享，从而形成极强的口碑营销效果。</p>
                    </div>
                </div>
                <div data-index="3" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微推送（LSP）：微信附近的人——精准营销</h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob4.jpg"></p>
                        <p class="guidep">Location Surround 
Push(基于附近的人的消息推送)微信中基于LBS(基于位置的服务)的功能插件“查看附近的人”便可以使更多陌生人看到这种强制性广告。 
用户点击“查看附近的人”后，可以根据自己的地理位置查找到周围的微信用户。在这些附近的微信用户中，除了显示用户姓名等基本信息外，还会显示用户签名档
的内容。所以用户可以利用这个免费的广告位为自己的产品打广告。
                            
营销人员在人流最旺盛的地方后台24小时运行微信，如果“查看附近的人”使用者足够多，这个广告效果也会不断随着微信用户数量的上升，可能这个简单的签名
栏也会变成会移动的“黄金广告位”。</p>
                    </div>
                </div>
                <div data-index="4" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微服务——微信企业应用与电子商务<a href="" target="_blank" class="guideright ">查看该项使用指南</a></h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob5.jpg"></p>
                        <p class="guidep">有小黄鸡陪聊加强版510万数据，过滤了广告和一些敏感词汇。 还有天气查询 
，手机查询，邮编查询，快递查询（支持160家快递公司），身份证查询，人品计算，翻译，字典，百科（全网数据），音乐80.1万 
，笑话5万条，小黄鸡陪聊510万条，诗词23万首，诗句 
225万，成语5万，谜语5万，解梦3万，糗事55万，公交线路4万，火车线路4500，机器人学习功能等等......</p>
                    </div>
                </div>
                <div data-index="5" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微留言:用户的互动交流利器</h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob6.jpg"></p>
                        <p class="guidep">“微留言”是一种能为商家带来巨大的社会化流量的功能，允许留言可以被分享于留言者的朋友圈、腾讯微博
和发送给好友，这意味着留言可以被无数的粉丝分享，用户对商家进行实时且客观的评价，真实的社交环境保证了留言的客观性和有效性。“微留言”的使用商家只
需做好产品和用户服务即可，随着口碑的传播，消费者将源源不断。</p>
                    </div>
                </div>
                <div data-index="6" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微相册:照片展现，让商品一览无余</h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob7.jpg"></p>
                        <p class="guidep">微相册作为微能无线平台的一项主打基本功能，为微能无线用户提供图片的存储和展示服务，是基于图片兴趣分享的社区型产品。在微相册里，您可以方便的创建相册，轻松地发布您需要展示的照片，还可以拓展为商家开展活动的一种展现方式。</p>
                    </div>
                </div>
                <div data-index="7" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">自定义菜单：各模块均可直接展现使用，随需求而定，随需要而链</h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob8.jpg"></p>
                        <p class="guidep">微能无线提供微信公众号自定义菜单管理功能，用户无需再通过输入关键词触发回复，直接点击菜单就可以看
相关的内容，微能无线可与企业原有Wap进行打通，复用企业APP原有功能，同时可定制个性化功能、使用HTML5新技术进行无限拓展，帮助企业打造最便
捷、易推广的微信内置APP，此功能如果结合微信3G网站可以使您的公众号用户体验更好，带给粉丝不一样的感受。</p>
                    </div>
                </div>
                <div data-index="8" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微调研：实时统计，为市场调研添加一份有力数据</h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob9.jpg"></p>
                        <p class="guidep">微调研是一种以问卷调查的方式，基于微能无线平台而展现出的一种新的在线调研应用方式，微调研已经完成调研项目数十个，涉及游戏、快速消费品、汽车、房产、美食、数码产品、家用电器等多个行业，具备有对微信用户进行生活形态研究的能力，受到行业客户的一致认可。</p>
                    </div>
                </div>
                <div data-index="9" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微统计——实时数据统计，监控运营效果</h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob10.jpg"></p>
                        <p class="guidep">微能无线后台可以实时统计微信公众号的粉丝关注情况和用户语音请求数，根据统计对相关推广营销活动效果及某些敏感因素对您的影响作出判断，并对相关市场行为作出相应调整，从一定程度上实现了对市场的监控与及时应对。</p>
                    </div>
                </div>
                <div data-index="10" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微房产:360度全景看房<a href="" target="_blank" class="guideright ">查看该项使用指南</a></h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob11.jpg"></p>
                        <p class="guidep">微房产是利用微能无线平台打造的一款全新超炫酷的房产官方网站，其功能非常强大，包含了楼盘介绍、子楼盘管理、户型介绍及户型图、楼盘相册、房友印象以及专家点评等功能，更有360度全景看房超强大功能震撼登场！花几分钟时间即可打造微房产官网。</p>
                    </div>
                </div>
                <div data-index="11" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微汽车：预约试驾、预约保养、360度看车、车主关怀应有尽有！<a href="" target="_blank" class="guideright ">查看该项使用指南</a></h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob12.jpg"></p>
                        <p class="guidep">微汽车采用微能无线平台进行汽车的销售管理、预约保养、预约试驾、保险计算、车贷计算、车型比较、违章
查询、360度全景看车、车主关怀等功能，整个过程非常便捷，省时省力省心，并通过与微能无线平台有交互能力的手机客户端，快速便捷的实现了商家的销售管
理与预约过程，同时也实现了客户无需进入4s店就能进行预约保养和试驾的功能。</p>
                    </div>
                </div>
                <div data-index="12" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微喜帖：颠覆传统方式，让庆典更时尚环保</h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob13.jpg"></p>
                        <p class="guidep">微喜帖是针对结婚庆典而推出的一款行业产品，主要是为计划结婚的用户们，通过使用微喜帖应用来向亲朋好友传播自己即将结婚的动态，可以展现用户想要表达的话、结婚日期、地址、导航、接待电话，同时亲朋好友可以在微喜帖平台上提交赴宴通知、送上祝福，并且转发喜帖。</p>
                    </div>
                </div>
                <div data-index="13" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微医疗：互联网时代的医疗小助手</h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob14.jpg"></p>
                        <p class="guidep">用户可通过微能无线平台实现在线挂号、内容设置、预约查询、预约统计的一整套服务体系，能够有效解决患者挂号难、排队累、就医不方便等一系列难题</p>
                    </div>
                </div>
                <div data-index="14" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微酒店：一键点击，轻松订房<a href="" target="_blank" class="guideright ">查看该项使用指南</a></h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob15.jpg"></p>
                        <p class="guidep">1、消息管理：包含自动消息回复和功能性消息编辑功能，优化对用户的消息服务，提升用户体验。</p>
                        <p class="guidep">2、门店管理：即对门店详情页面显示内容进行管理，且用户可直接一键导航或一键拨号。</p>
                        <p class="guidep">3、用户管理：用户信息管理模块，给每个用户打上各种标签，为精准营销提供服务。</p>
                        <p class="guidep">4、数据统计：各式各样的数据为后期运营提供重要帮助。</p>
                        <p class="guidep">5、提供服务：用户直接可在公众账号进行预约房间、预约餐厅等操作。</p>
                    </div>
                </div>
                <div data-index="15" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">LBS回复:LBS范围内精准的商家地理位置回复</h2>
                            <p class="guideimg"><img src="<?php echo RES;?>/images/weimob16.jpg"></p>
                        <p class="guidep">LBS图文回复是由商家设置店铺位置，用户提交当前所在位置后，可以找到最近的商家店铺，并进行一键导航、一键拨号，如果店铺当前有进行的活动（如：优惠券、刮刮卡），也可把活动显示出来。</p>
                    </div>
                </div>
                <div data-index="16" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微餐饮——实时数据统计，监控运营效果<a href="" target="_blank" class="guideright ">查看该项使用指南</a></h2>
                    
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob17.jpg"></p>
                        <p class="guidep">微能无线后台可以实时统计微信公众号的粉丝关注情况和用户语音请求数，根据统计对相关推广营销活动效果及某些敏感因素对您的影响作出判断，并对相关市场行为作出相应调整，从一定程度上实现了对市场的监控与及时应对。</p>
                    </div>
                </div>
                <div data-index="17" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微商城：打造微信移动电商<a href="" target="_blank" class="guideright ">查看该项使用指南</a></h2>
                        
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob18.jpg"></p>
                        <p class="guidep">“微商城”（又名Vshop）是由上海晖硕信息科技有限公司推出的，一款基于移动互联网的商城应用服务产品，以时下最热门的互动应用微信为媒介，配合微信5.0微信支付功能，实现商家与客户的在线互动，即时推送最新商品信息给微信用户，实现微信在线的购物功能。
                            其主要功能包括：支持商品管理、支持会员管理、支持购物车、支持商品分类管理、支持订单管理、支持店铺设置、支持支付方式管理、支持配送方式管理。</p>
                    </div>
                </div>
                
                <div data-index="18" class="weimob_guide right">
                    <div class="wm_case_list">
                        <h2 class="guideh2">微预约：在线预约，微能无线帮您一键搞定<a href="" target="_blank" class="guideright ">查看该项使用指南</a></h2>
                        <p class="guideimg"><img src="<?php echo RES;?>/images/weimob19.jpg"></p>
                        <p class="guidep">微预约是商家利用微能无线平台实现在线预约的一种服务，可以运用于汽车、房产、酒店、医疗、餐饮等一系列行业，给用户的出行办事、购物、消费带来了极大的便利！且操作简单，响应速度非常快，受到业界的一致好评！</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--QQ咨询-->

<div class="footer">
	<div class="footer-content clearfix">
		<div class="foot-menu">
			<p>
				<a href="<?php echo C('site_url');?>"><?php echo C('site_name');?>首页</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Index/reg');?>" target="_blank">申请入驻</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/about');?>" target="_blank">渠道代理</a>&nbsp;|&nbsp;
				<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">接口定制</a>&nbsp;|&nbsp;
				<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">微信托管</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/about');?>" target="_blank">关于<?php echo C('site_name');?></a>&nbsp;|&nbsp;
				
			</p>
			<p>客服QQ：<?php echo C('site_qq');?>&nbsp;&nbsp;&nbsp;邮箱：<?php echo C('site_email');?></p>
		</div>
		<div class="copyright">
			Copyright (c) 2013-2014 <?php echo C('site_url');?>. All Rights Reserved <?php echo C('site_name');?>版权所有 <?php echo C('ipc');?>
		</div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
        $(document).ready(function(){
        var hash=window.location.hash || "#site";
        if(hash){
            var lis=$("#nav_lis>li"),
                divs=$("#nav_uls>div");
            lis.each(function(index, v) {
                if(hash == v.getAttribute("data-hash")){
                    v.className="hover";
                    //.var divs = $("#nav_uls>div");
                    for(var i=0,ci; ci = divs[i]; i++){
                        if(index == ci.getAttribute("data-index")){
                            $(ci).addClass("show");
                        }else{
                            $(ci).removeClass("show");
                        }
                    }
            
                }
            });
        }


    $("#nav_lis").on("mouseover", function(e){
            $(this).find("li").removeClass("hover");
            e.target.className = "hover";
            var index = e.target.getAttribute("data-index");
            //
            var divs = $("#nav_uls>div");
            for(var i=0,ci; ci = divs[i]; i++){
                if(index == ci.getAttribute("data-index")){
                    $(ci).addClass("show");
                }else{
                    $(ci).removeClass("show");
                }
            }

        });


    });
</script>
<div style="display:none">
<?php echo C('counts');?>
</div>
</body></html>