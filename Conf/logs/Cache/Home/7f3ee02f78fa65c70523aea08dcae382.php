<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>功能介绍－<?php echo C('site_title');?></title>
<meta name="keywords" content="公众号内容管理系统，文章发布，编辑利器"/>
<meta name="description" content="公众号内容管理系统，文章发布，编辑利器"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css"/>
<link rel="shortcut icon" type="image/ico" href="/favicon.ico">
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/ie6.css"/>
<![endif]-->
<script type="text/javascript">window.onerror=function(){return true;}</script>
<script type="text/javascript" src="<?php echo RES;?>/js/lang.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/config.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/page.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.lazyload.js"></script>
<script type="text/javascript">
GoMobile('');
var searchid = 5;
</script>
</head>
<body oncontextmenu="return false" onselectstart ="return false">
<div class="topbg">
<div class="top">
<div class="toplink">
<div class="welcome">欢迎使用三两枝内容管理系统!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?>你好&nbsp;&nbsp;<span class="f_red">游客</span>&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>	
	</div>
</div>
    <div class="logo">
        <div style="float:left"></div>
            <h1><a href="/" title="多用户微信营销服务平台"><img src="<?php echo RES;?>/images/logo-lanrain.png" /></a></h1>
            <div class="navr">
        <ul id="topMenu">           
			 <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/" >首页</a></li>
           <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>
                <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
				
                <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>
				
                <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">谁在使用</a></li>
                <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
                <!-- <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li> -->
            
            </ul>
        </div>
        </div>
    </div>
</div>
<style>
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;vertical-align:baseline;font:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}
body{margin:0 auto;background:#f7f7f7;color:black;font-size:14px;font-family:"Microsoft Yahei",Verdana,Arial,Helvetica,sans-serif;-webkit-text-size-adjust:none}
.clearfix:after{clear:both;display:block;visibility:hidden;height:0;content:" ";font-size:0}
.clearfix{*zoom:1}
.left{float:left}
.right{float:right}
.clearfix{*zoom:1}
.clearfix:before,.clearfix:after{display:table;content:""}
.clearfix:after{clear:both}
.Public-content{ background-image:url("http://www.saivi.com.cn/tpl/Home/lanrain/banner.jpg"); background-repeat:repeat-y; display:block;  background-size:100% 100%;-ms-background-size:100% 100%; width:100%;}
.Public{ width:980px; margin:0 auto; padding:0;}
.Public-h1{ font-size:26px;  text-shadow:1px 0 3px #666; color:#FFF; display:block; padding:30px 0; text-indent:2em;}
.Public-h2{ background:url("http://www.saivi.com.cn/tpl/Home/lanrain/weimob-proxy.png") no-repeat; color:#FFF; width:237px; margin:0 auto; display:block; height:63px;text-shadow:1px 0 3px #666; font-size:30px; text-align:center; line-height:63px;}
.Public-box{ background:rgba(255, 255, 255, 0.3) none repeat scroll 0 0 !important;
filter:Alpha(opacity=30); background:#fff;height:auto; padding-bottom:20px; border-radius:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;box-shadow:0 1px 2px #666;  -webkit-box-shadow:0 1px 2px #666;-moz-box-shadow:0 1px 2px #666;padding:5px; }
.case-nav{ width:130px;}
.case-nav li{ height:26px;color:#57704D; line-height:26px; text-align:center; cursor:pointer;position:relative; list-style:none}
.case-nav li:hover{ background:rgba(255,255,255,0.8)!important; background:#fefefe; color:#000; border-radius:5px 0 0 5px; font-size:16px;}
.case-nav li.hover{background:rgba(255,255,255,0.8)!important; background:#fefefe; color:#000; border-radius:5px 0 0 5px;font-size:16px;}
.wm_case_mod_bd{ _background:#fff; filter:Alpha(opacity=80); width:840px;  border-radius:0 5px 5px 5px; padding-top:30px;background:rgba(255, 255, 255, 0.8) none repeat scroll 0 0 !important; height:auto;}
.wm_case_list{position: relative;padding: 0px 20px 0px;_background:#fefefe;}
.wm_case_item {display: inline-block;*display: inline;*zoom: 1;width: 96px;margin-right:5px; text-align: center;cursor: pointer;}
.wm_case_list h3{ font-size:16px; line-height:35px; font-weight:bold;}
.wm_case_list p{ text-indent:2em; margin:15px 0; }
.wm_case_list img{ text-align:center;vertical-align:middle;width:288px;margin:10px 0; height:480px; margin-right:15px;box-shadow:0 3px 5px #ccc}
.wm_case_mod_bd, .weimob_guide{display:none;}
.wm_case_mod_bd.show, .weimob_guide.show{display:block;}
.weimob_guide{background:rgba(255,255,255,0.8)!important; background:#ffffff; width:840px; min-height:620px; border-radius:0 5px 5px 5px; padding-top:30px;}
.weimob_guide_list{padding: 0px 78px 0px;}
</style>
<script src="<?php echo RES;?>/js/jquery-meng.js" type="text/javascript"></script>

<div class="Public-content clearfix">
	<div class="Public">
		<h1 class="Public-h1"><?php echo C('site_name');?>功能简介</h1>
		<div class="Public-box clearfix">
			<ul id="nav_lis" class="case-nav left">
				<li data-index="0" data-hash="#site" class="hover">文章发布</li>
                <!---
				<li data-index="1" data-hash="#member" class="">快递查询</li>
				<li data-index="2" data-hash="#activities" class="">手机归属地查询</li>
				<li data-index="3" data-hash="#push" class="">身份证查询</li>
				<li data-index="4" data-hash="#services" class="">公交查询</li>
				<li data-index="5" data-hash="#message" class="">火车查询</li>
				<li data-index="6" data-hash="#photo" class="">健康指数查询</li>
				<li data-index="7" data-hash="#menu" class="">实时翻译(语音)</li>
				<li data-index="8" data-hash="#estate" class="">百度百科</li>
				<li data-index="9" data-hash="#car" class="">百度问答</li>
				<li data-index="10" data-hash="#hotels" class="">人品计算</li>
				<li data-index="11" data-hash="#lbs" class="">笑话</li>
                <li data-index="12" data-hash="#" class="">糗事</li>
				<li data-index="13" data-hash="#" class="">谜语</li>
                <li data-index="14" data-hash="#reser" class="">解梦</li>
                -->
			</ul> 
                    <div id="nav_uls">
				<div data-index="0" data-on="" class="weimob_guide right">
					<div class="wm_case_list">
                    <h3>1.文章自动发布</h3>
                                <p>注册本站账号</p>
                                <p>管理后台设置相关信息</p>
<p>正确填写公众号登录名、登陆密码；文章主题，发布时间，发布文章数量</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn001.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn001-2.jpg">
                            </div></div>
<div data-index="1" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>2.快递查询</h3>
                                <p>输入快递名称+运单号，可以快速查询快递的详细动态，收件从此不用愁。</p>
                                <p>例如：天天快递130004442691</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn002.jpg">
                            </div></div>
<div data-index="2" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>3.手机归属地查询</h3>
                                <p>输入手机号码即可获得该手机相关信息，有手机归属地，手机类型，手机区号，邮编等。</p>
                                <p>例如：13625008699</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn003.jpg">
                            </div></div>
<div data-index="3" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>4.身份证查询</h3>
                                <p>输入身份证号即可获得相关信息。</p>
                                <p>例如：342502198501250013</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn004.jpg">
                            </div></div>
<div data-index="4" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>5.公交查询</h3>
                                <p>输入城市+公交+车次，有3.6万线路</p>
                                <p>例如线路查询：厦门公交92路</p>
                                <p>站点到站点查询：厦门公交厦大医院到软件园二期</p>
                                <p>站点查询：厦门公交厦大医院站</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn005.jpg">
                            </div></div>
<div data-index="5" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>6.火车查询</h3>
                                <p>输入：火车 车次 或 火车 站点 站点，有4460列火车数据。</p>
                                <p>例如车次查询：火车k332 </p>
                                <p>站点到站点查询：火车 厦门 东乡</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn006.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn006-2.jpg">
                            </div></div>
<div data-index="6" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>7.健康指数查询</h3>
                                <p>身高单位为cm 体重单位为公斤</p>
                                <p>输入：身高173 体重56  或输入：高173 重56</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn007.jpg">
                            </div></div>
<div data-index="7" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>8.实时翻译(语音)</h3>
                                <p>支持几十种语言的实时翻译，中、英、日、韩、法、俄、等等全文翻译。</p>
<p>输入翻译，可以查询支持的语种有哪些。</p>
<p>英文我爱你：表示把中文翻译成英文，日语早上好：表示把中文翻译成日文</p>
<p>法语我爱你：表示把中文翻译成法语，俄语我爱你：表示把中文翻译成俄语</p>
<p>备注：如果后台开启翻译朗读功能，可以将翻译结果直接朗读出来，</p>
<p>学习世界语言的必备武器！更有意思！</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn008.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn008-2.jpg">
                            </div></div>
<div data-index="8" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>9.百度百科</h3>
                                <p>输入百科（bk）+要查询的词，即可得到相关信息。</p>
                                <p>例如：百科刘德华 或 bk刘德华</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn009.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn009-2.jpg">
                            </div></div>
<div data-index="9" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>10.百度问答</h3>
                                <p>输入超过5个汉字自动回复相关问答内容。</p>
                                <p>例如：要怎么哄女人开心</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn010.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn010-2.jpg">
                            </div></div>
<div data-index="10" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>11.人品计算</h3>
                                <p>输入人品+姓名，计算当天人品。</p>
                                <p>例如：李白人品</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn011.jpg">
                            </div></div>
<div data-index="11" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>12.笑话</h3>
                                <p>输入任何数字：0-9或者笑话或者笑脸的表情</p>
                                <p>可以随机查看笑话，有2.6万数据。</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn012.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn012-2.jpg">
                            </div></div>
<div data-index="12" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>13.糗事</h3>
                                <p>输入糗事或者任意字母，可以随机查看糗事，有51.5万数据。</p>
                                <p>例如：糗事 或者 q</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn013.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn013-2.jpg">
                            </div></div>
<div data-index="13" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>14.谜语</h3>
                                <p>输入谜语，即可玩猜谜语游戏，有5万数据。</p>
                                <p>查答案可输入答案谜语编号，例如：谜语 232</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn014.jpg">
                            </div></div>
<div data-index="14" class="weimob_guide right">
					<div class="wm_case_list">
                                <h3>15.解梦</h3>
                                <p>输入梦见发财或者梦到发财，立刻获得解梦信息。</p>
                                <p>例如：梦见我发财了</p>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn015.jpg">
                            </div></div>
                            <!--
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>16.成语接龙</h3>
                                <p>输入正确的成语即可</p>
                                <p>例如：肝肠寸断</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn016.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>17.成语字典</h3>
                                <p>输入例如：成语 半死不活，得到该成语的解释。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn017.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>18.陪聊</h3>
                                <p>开启陪聊功能可以自动跟用户智能聊天</p>
                                <p>目前仅1000条陪聊库，在不断完善中...</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn018.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>19.机器人学习功能</h3>
                                <p>用手机直接发送：问 关键词 答 内容，这样教机器人回答问题，机器人就学会了。</p>
                                <p>例如：问 你是谁 答 我是欧阳啊！</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn019.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>20.自定义图文回复</h3>
                                <p>在lanrain微信后台设置关键词，编辑对应的回复内容，以图文形式显示。</p>
<p>还有关联的图文展示，推荐阅读。</p>
                                <p>效果更好，用户体验更佳。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn020.jpg" style="vertical-align: top">
<img alt="" src="<?php echo RES;?>/images/demo/gn020-2.jpg">
                            </div>
                    		<div style="display: none;">
                                <span class="marginb">
                                <h3>21.藏头藏尾诗</h3>
                                <p>输入：藏头诗 我爱你香港 或者 cts 我爱你香港 或者</p>
<p>藏尾诗 我爱你香港 或者 cws 我爱你香港</p>
<p>会根据输入的内容自动生成藏头诗或者藏尾诗，非常有意思。</p>
<p>例如：cts 我爱你香港 或者 cws 我爱你香港</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn021.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>22.诗歌接龙</h3>
                                <p>输入诗词的任意一句，会自动回复下一句。</p>
<p>例如：床前明月光</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn022.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>23.诗歌赏析</h3>
                                <p>输入：古诗+诗名或者古诗+诗名+作者，可以欣赏这首完整的诗歌。</p>
<p>例如：古诗 黄鹤楼</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn023.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>24.网络音乐搜索</h3>
                                <p>输入：音乐+歌手+歌名 或者 音乐+歌名 可以欣赏这首歌曲。</p>
<p>例如：音乐 谢霆锋谢谢你的爱</p>
<p>还可以输入：播放音乐|来首歌|来首音乐|放歌|音乐|mp3|点首歌|点歌|我要听歌</p>
<p>来随机播放音乐</p>
<p>还可以输入：陈奕迅的歌或者播放浮夸</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn024.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn024-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>25.网络电影搜索</h3>
                                <p>输入：电影+名称 可以欣赏这部电影了，当然有的电影是搜不到的，电影库会慢慢增加。</p>
<p>例如：电影 功夫熊猫</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn025.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>26.文字转语音</h3>
                                <p>输入：朗读+文字，就可以把文字转成语音播放。</p>
<p>例如：朗读你好，lanrain欢迎你！</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn026.jpg">
                            </div>
                     		<div style="display: none;">
                                <span class="marginb">
                                <h3>27.股票查询</h3>
                                <p>输入：股票+股票代号或名称或拼音缩写，股票二字可以用gp缩写</p>
<p>例如：股票601088 或者 股票西藏天路 或者 股票dqtl 或者 gp601088</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn027.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>28.彩票查询</h3>
                                <p>输入彩票+名称</p>
<p>可以查询彩票有：双色球、大乐透、七星彩、排列3、排列5、体彩22选5、胜负彩14场、任选9场、4场进球、6场半全场、老11选5、11选5、新11选5、双色球</p>
<p>例如：彩票双色球</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn028.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn028-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>29.英语4-6级查询(12年12月)</h3>
                                <p>查询例子：cet杨奕352011122103023</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn029.jpg">
                            </div>

<div style="display: none;">
                                <span class="marginb">
                                <h3>30.黄金白银期货</h3>
                                <p>查询例子：输入9999或9995</p>
<p>支持以下关键词 9995|9999|纸黄金|纸白银|美黄金|美白银|中行本币金|中行外币金|建行黄金|建行白银|建行铂金|纸铂金|纸钯金|美铂金|美钯金|白银td|黄金td|天通银|天通铂金|天通钯金|黄金9995|黄金9999|铂金9995|黄金100g|现货黄金|现货白银|现货铂金|现货钯金|美元指数|国际原油|NYMEX天然气|美元指数|美元人民币|欧元美元|澳元美元|英镑美元|新西兰元美元|美元加元|美元瑞郎|美元港元|美元日元|美元马币|美元新加坡元|美元台币|上证指数|Ａ股指数|Ｂ股指数|综合指数|上证380|上证180|上证50|新综指|沪深300|深证成指|成份Ａ指|成份Ｂ指|深证100R|中小板指|创业板指|新指数|道琼斯30种工业股票平均价格指数|纳斯达克综合指数|标准普尔500指数|道琼斯威尔希尔5000指数|香港恒生指数|台湾台北指数|韩国KOSPI指数|PHILA金银指数|富时100指数|德国DAX指数|法国CAC40指数|俄罗斯MICEX10指数|荷兰AEX指数</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn030.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>31.文字转语音</h3>
                                <p>开启此功能，聊天内容出现敏感词时会自动转成语音，</p><p>你也可以输入朗读+文字，例如：朗读你好呀</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn031.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>32.淘宝客模块</h3>
                                <p>开启此功能，输入：淘宝内衣或者淘宝鞋子，可以查询淘宝的商品。</p>
<p>lanrain还有专门的淘宝客功能，适合做手机淘宝客的人使用，粉丝购买后可以得到佣金，手机支付以后是个趋势，抓住先机，以后佣金倍增。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn032.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn032-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>33.周边商铺</h3>
                                <p>开启此功能，直接发送地理位置信息，然后输入“附近便利店”</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn033.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn033-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>34.刮刮卡刮奖活动</h3>
                                <p>开启此功能，直接发布刮刮卡刮奖活动，设置活动内容、奖项及中将比例，带给粉丝完全不同的感受。</p>
<p>输入“刮刮卡”体验此互动活动</p>
<p style=" color:#F00">备注：目前安卓4.1的系统跟微信4.5有些兼容性问题，导致刮刮卡不能刮，还是可以抽奖，就是少了刮的体验，其他都正常，如果介意的话，请等待微信升级解决此问题后再使用，或者换其他活动。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn034.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn034-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>35.幸运大转盘活动</h3>
                                <p>开启此功能，直接发布幸运大转盘活动，设置活动内容、奖项及中将比例，带给粉丝完全不同的感受。</p>
<p>输入"大转盘"体验此互动活动</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn035.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn035-2.jpg">
                            </div>
<div style="">
                                <span class="marginb">
                                <h3>36.优惠券活动</h3>
                                <p>开启此功能，直接发布优惠券活动，设置活动内容、奖项等，带给粉丝完全不同的感受。</p>
<p>输入"优惠券"体验此互动活动</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn036.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn036-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>37.周边生活地图版</h3>
                                <p>开启此功能，首先要发送地理位置信息，然后输入附近+关键词即可, </p>
<p>例如 附近酒吧,附近学校,附近工商银行,附近医院,附近小吃,附近美食,附近酒吧,附近咖啡厅,附近公交站,附近加油站.......</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn037.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn037-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>38.步行导航</h3>
                                <p>开启此功能，首先要发送地理位置信息，然后输入： </p>
<p>步行厦大医院到厦大西村 或 厦大医院到厦大西村怎么走</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn038.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn038-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>39.驾车导航</h3>
                                <p>开启此功能，首先要发送地理位置信息，然后输入： </p>
<p>驾车厦大医院到厦大西村 或 厦大医院到厦大西村怎么开</p>
<p>备注：进入地图还可以进行起点拖动使用</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn039.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn039-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>40.路况查询</h3>
                                <p>开启此功能，首先要发送地理位置信息，然后输入 路况 2个字即可。</p>
<p>红色表示拥堵，黄色表示有点堵，绿色表示道路很畅通。请点击放大看详情。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn040.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn040-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>41.发地理位置直接显示周边</h3>
                                <p>开启此开关,将不会提示地理位置已经记录，而是直接显示周边数据，不影响关键词。</p>
<p>查询可以通过：附近+关键词，获取附近更精细的分类查询！</p>
<p>例如：附近便利店 附近医院 附近美食 附近小吃 等等</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn041.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn041-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>42.公交换成地图版</h3>
                                <p>开启此开关,可以查询公交某个站点到某个站点如何坐车，只能查你当前位置所在城市的公交等</p>
<p>例如：公交龙山桥到SM 或者 厦大西村到中山路怎么坐车</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn042.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn042-2.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn042-3.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>43.查药价</h3>
                                <p>包含7.5万种药品的零售价和进价,查询方法: 药价+药品名称 或者 国药准字号</p>
<p>例如：药价 Z11021209 或者 药价 桑菊感冒颗粒</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn043.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn043-2.jpg">
                            </div>
<div style="display:none;">
                                <span class="marginb">
                                <h3>44.投票活动</h3>
                                <p>开启此开关,可以发起文本投票和图片投票两种形式，可单选和多选。</p>
<p>范例：给lanrain微信号输入“投票”或者“图片投票”体验一下投票活动。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn044.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>45.自定义LBS数据</h3>
                                <p>开启此开关,发送位置就回复你自定义的LBS数据</p>
<p>根据你设置的标签，你还可以输入“附近+标签（关键词）”看查询结果</p>
<p>还可以输入"附近300米+标签（关键词）"看查询结果</p>
<p>查看详细图释:</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn045.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn045-2.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn045-3.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn045-4.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn045-5.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn045-6.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn045-7.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn045-8.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn045-9.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn045-10.jpg">
                            </div>
<div style="display: block;">
                                <span class="marginb">
                                <h3>46.淘宝天猫店铺推广</h3>
                                <p>开启此开关,只需要你填写天猫或淘宝店铺的手机站点地址，简单配置店铺商品常用关键词，就可以直接通过微信检索店铺内的商品，关键词是包含匹配，只要用户输入的信息有包含关键词，就会回复店铺商品信息，起到很好的推广作用，请看下面的范例。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn046.jpg">
                            </div>!-->
                    </div>
                    </div>
                	<p class="clr"></p>
            	</div>
                
                
        	</div>
<!--底部-->	</div>
<!--底部-->	</div>
</div>
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
<script type="text/javascript">try{Dd('webpage_7').className='left_menu_on';}catch(e){}</script>
</div>
<div class="IndexFoot" style="height:120px;">
<div class="foot">
<div class="foot_page">
<a href="<?php echo C('site_url');?>">三两枝内容管理系统</a><br/>
公众号文章发布利器<br/>
</div>

<div id="copyright">
	Power by <?php echo C('site_name');?> (c) 2013 版权所有<br/>
	售前咨询QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=592454436&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:592454436:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
	技术支持QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=592454436&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:592454436:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
</div>
    </div>
</div>
<script src="/images/css/qqserver.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/images/css/qqserver.css"/>
<div id="onlinebox" class="onlinebox onlinebox_1 onlinebox_1_2" style="position: fixed; top: 180px; right:35px; ">
	<div class="onlinebox-showbox" id="onlinebox-showbox" onMouseMove="qq(0)"><span>在<br>线<br>客<br>服<br></span></div>
	<div class="onlinebox-conbox" id="onlinebox-conbox" style="position: absolute; left: -94px; width: 118px; display:none;">
		<div class="onlinebox-top" id="onlinebox-top" title="点击可隐藏" onClick="qq(1)"><span>在线客服</span></div>
		<div class="onlinebox-center">
			<div class="onlinebox-center-box">
				<dl>
					<dt>使用帮助</dt>
						<dd><a href="tencent://message/?uin=592454436&Site=&Menu=yes" title="QQ咨询服务">
						<img border="0" src="http://wpa.qq.com/pa?p=2:592454436:42"></a>
						</dd>
					</dl>
				<div class="clear"></div>
				<dl>
					<dt>技术询问</dt>
					<dd>
						<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=592454436&site=qq&menu=yes">
							<img border="0" src="http://wpa.qq.com/pa?p=2:592454436:42" alt="咨询服务" title="咨询服务"/>
						</a>
					</dd>
				</dl>
				<div class="clear"></div>
				<dl><dt>合作加盟</dt>
				<dd>
					<a href="tencent://message/?uin=592454436&Site=&Menu=yes" title="QQ合作加盟">
						<img border="0" src="http://wpa.qq.com/pa?p=2:592454436:47">
					</a>
				</dd>
				</dl>
				<div class="clear"></div>
			</div>
		</div>
		<div class="onlinebox-bottom">
			<div class="onlinebox-bottom-box">
				<div class="online-tbox">
					<div style="text-align: center; "><strong>在线时间</strong><br>	08:30-17:30<br>
						<span style="color:#999;">—————————</span><br>
						
					</div>
				</div>
			</div>
		</div>
		<div class="onlinebox-bottom-bg"></div>
	</div>
</div>
<div style="display:none">

</div>
</body>
</html>