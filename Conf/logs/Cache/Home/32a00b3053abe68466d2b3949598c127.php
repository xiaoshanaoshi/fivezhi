<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>合作代理|<?php echo C('site_name');?>|<?php echo C('site_title');?></title>
﻿<meta content="<?php echo C('keyword');?>" name="Keywords">
<meta content="<?php echo C('content');?>" name="Description">
<link rel="shortcut icon" href="/img/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/index.css" media="all">
<script src="<?php echo RES;?>/html5.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/jQuery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/carouFredSel.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/weimob-index.js"></script>
<body>
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<iframe style="display: none; "></iframe>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[begin]>
<script>
var $do_submit = false;

// 绑定回车键
$('#loginBox').keydown(function(e){
	if(13 == event.keyCode){
		login();
	}
});

function login()
{
	if (true == $do_submit)
	{
		return false;
	}

	var $pre_submit = '登录', $do_submit = '登录中...';
	var $username = $('#username').val(), $password = $('#password').val(), $keepalive = $('#rememberPwdIcon').val();
	$('#login_button').text($do_submit);
	$do_submit = true;

	// check
	if ('' == $username || '' == $password)
	{
		$('#err_tips').text('您输入的<?php echo C('site_name');?>号或密码错误，请重新输入！');
		$('#err_area').show();
		$('#login_button').text($pre_submit);
		$do_submit = false;
		return false;
	}

	var $login_data = {
		username:$username,
		password:$password,
		keepalive:$keepalive
	};
	$.post('/index.php?m=Users&amp;a=checklogin', $login_data, function(rs){
		if(rs.errno == 200)
		{
			location.href = rs.url_route;
		}
		else
		{
			$('#err_tips').text(rs.error);
			$('#err_area').show();
		}
		$('#login_button').text($pre_submit);
		$do_submit = false;
	}, 'json');
}
</script>
<![end]-->
<div class="nav clearfix">
	<div class="nav-content">
		<h1 class="left"><?php echo C('site_name');?>·微信营销，如此简单！</h1>
		<div class="right line-li">
			<ul>
				<li>
					<a href="/">首页</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/common');?>">经典案例</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/gongneng');?>">功能介绍</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/daili');?>" class="hover">合作代理</a>
				</li>
			<?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>" class="hover">登录</a></li>
				<li><a href="<?php echo U('Index/reg');?>">注册</a></li>
			<?php else: ?><li>
			<a href="<?php echo U('User/Index/index');?>" hidefocus="true"  ><span style="color:red">管理中心</span></a>
			<a href="javascript:void(0)" onClick="Javascript:window.open('<?php echo U('Admin/Admin/logout');?>','_self')" >退出</a></li><?php endif; ?>		
			</ul>
		</div>
	</div>
</div>
<!-- banner -->
<DIV class="Public-content clearfix" style="margin-top:38px;">
<DIV class=Public>
<H2 class=Public-h2>微商家致辞</H2>
<DIV class=Public-box>
<DIV class=Proxy>
<H3>尊敬的各位合作伙伴：</H3>
<P>　　首先非常感谢您对<?php echo C('site_name');?>平台的认可和支持，信任是合作的基础，这是我们一直强调的核心价值观。</P>
<P>　　<?php echo C('site_name');?>平台在大家的共同努力下，目前已经成长为在微信第三方平台中拥有较高知名度和用户数量的第三方平台。为了能使更多的用户享受<?php echo C('site_name');?>提供的高品质的微信营销产品和服务，目前我们正在全国范围内大力发展代理伙伴。我们的目标是：通过发展一批有实力的区域和行业代理商作为稳定的合作伙伴来承担销售业务，建立<?php echo C('site_name');?>的营销战略合作伙伴体系，共同投身于微信营销的事业。</P>
<P>　　<?php echo C('site_name');?>平台通过市场与技术支持、各种媒体宣传、促消活动及完善的售后服务，为<?php echo C('site_name');?>的代理商提供及时的、量身定做的高效特色服务及全面支持。</P>
<P>　　无论您在何方，不管您有多远，无论是个人还是团体，我们都欢迎您成为我们的一员，<?php echo C('site_name');?>平台希望每个人都能通过<?php echo C('site_name');?>实现价值，正像微信公众平台提出的一样：“再小的个体，也有自己的品牌。”我们将与您始终保持零距离的接触，提供零距离的服务。欢迎全国各地、各广告商、渠道代理商踊跃加盟，<?php echo C('site_name');?>对有意成为合作伙伴的朋友致以诚挚的谢意，感谢您对<?php echo C('site_name');?>平台的支持和信任。</P>
</DIV>
</DIV>
</DIV>
<DIV class=Public>
  <H2 class=Public-h2>招区域代理</H2>
  <DIV class=Public-box>
    <DIV class=Proxy>
      <H3>尊敬的各位创业伙伴：</H3>
      <P>　　基于微信用户逐渐扩大，各地市场不能及时拓展开来。一家的能力始终有限！</P>
      <P>现招34位省级代理：2680元/位！660位市级代理：960元/位！（最新代理价格）</P>
      <P>省级代理可以招市级代理（只需向微商家缴纳200元技术费即可，售价微商家不干预！）</P>
      <P>另： 出售微商家授权源码5套：6000元（2014年做微信代理，不如自己开微信平台）</P>
      <P>注：两种代理的网站都和微商家一样！功能也一样！开通VIP无需向微商家缴纳任何费用！0成本！</P>
      <P>加盟前，请联系客服，您的所在地是不是已经有代理加盟，如有加盟，抱歉，不予以合作！</P>
      <P>全国34个省，660个市，一个地方只招一个代理！请悉之！想创业的请尽快联系客服加盟！名额有限！      </P>
      <P>合作及代理联系方式：18520590889 张经理 咨询QQ：<SPAN><?php echo C('site_qq');?></SPAN></P>
    </DIV>
  </DIV>
</DIV>
﻿<div class="erwei" title="微信扫一扫">
	<span class="hudongzhushou">官方微信</span>
	<div class="erwei_big" style="display:none;">
		<p>扫一扫，关注微香河官方微信</p>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var erwei_time = null;
		$(".erwei").hover(function(){
			$(".erwei_big").show();
		}).mouseleave(function(){
				erwei_time = setTimeout(function(){
					$(".erwei_big").hide();
				},1000);
			});
		$(".erwei_big").mouseenter(function(){
			if(erwei_time){
				clearTimeout(erwei_time);
			}
		}).mouseleave(function(){
				erwei_time = setTimeout(function(){
					$(".erwei_big").hide();
				},1000);
			});
	});
</script>
<div class="footer">
	<div class="footer-content clearfix">
		<div class="foot-menu" style="padding-top:5px;">
			<p>手机：188888888 &nbsp;&nbsp; QQ：<?php echo C('site_qq');?> &nbsp;&nbsp; 邮箱：<?php echo C('site_email');?></p>
		  <p>地址：中国·香河&nbsp; 免费热线：18888888889</p>
		  <p><?php echo C('copyright');?>  &nbsp;&nbsp; <?php echo C('ipc');?></p>
	  </div>
  </div>
</div>
<!--公告信息-->
<script src="/images/css/qqserver.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/images/css/qqserver.css"/>
<div id="onlinebox" class="onlinebox onlinebox_1 onlinebox_1_2" style="position: fixed; top: 80px; right:35px; ">
	<div class="onlinebox-showbox" id="onlinebox-showbox" onMouseMove="qq(0)"><span>在<br>线<br>客<br>服<br></span></div>
	<div class="onlinebox-conbox" id="onlinebox-conbox" style="position: absolute; left: -94px; width: 118px; display:none;">
		<div class="onlinebox-top" id="onlinebox-top" title="点击可隐藏" onClick="qq(1)"><span>在线客服</span></div>
		<div class="onlinebox-center">
			<div class="onlinebox-center-box">
				<dl>
					<dt>使用帮助</dt>
						<dd><a href="tencent://message/?uin=<?php echo C('site_qq');?>&amp;Site=&amp;Menu=yes" title="QQ咨询服务">
						<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:41"></a>
						</dd>
					</dl>
				<div class="clear"></div>
				<dl>
					<dt>技术询问</dt>
					<dd>
						<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes">
							<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:41" alt="在线咨询服务"/>
						</a>
					</dd>
				</dl>
				<div class="clear"></div>
				<dl><dt>合作加盟</dt>
				<dd>
					<a href="tencent://message/?uin=<?php echo C('site_qq');?>&amp;Site=&amp;Menu=yes" title="QQ合作加盟">
						<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:41">
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
						<span style="font-weight: bold; ">服务热线<br>1888888888
							<span style="font-weight: normal; "><br></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="onlinebox-bottom-bg"></div>
	</div>
</div>
<div style="display:none">
<?php echo C('counts');?>
</div>
<!--公告信息
<script type="text/javascript" src="./themes/Home/default/common/js/index.js"></script>
<script type="text/javascript">
/*250*200，创建于2014-1-1*/
var cpro_id = "u952545";
</script>
-->

</body>
</html>