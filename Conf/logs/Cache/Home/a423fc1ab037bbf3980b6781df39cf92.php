<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>公众号内容管理系统，文章发布，编辑利器</title>
<meta name="keywords" content="公众号内容管理系统，文章发布，编辑利器"/>
<meta name="description" content="公众号内容管理系统，文章发布，编辑利器"/>
<link href="<?php echo RES;?>/css/global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/login.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/ico" href="/favicon.ico">
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/cj-lib.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/validate.js?ver=2013.1.23"></script>

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css"/>
<link rel="shortcut icon" type="image/ico" href="/favicon.ico">
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/ie6.css"/>
<![endif]-->


</head>
<body oncontextmenu="return false" onselectstart ="return false">
<div class="topbg">
<div class="top">
<div class="toplink">
<div class="welcome">欢迎访问三两枝科技</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?>你好&nbsp;&nbsp;<span class="f_red">游客</span>&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/reg');?>">注册</a>
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
               <!--- <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>   -->
            
            </ul>
        </div>
        </div>
    </div>
</div>
</head>
<div class="main-content">
  <div class="main1000"> <img class="phone" alt="phone" src="<?php echo RES;?>/images/phone.png" id="zll" style="top:120px;display: inline;">
    <p class="txt1"><img src="<?php echo RES;?>/images/login_huanyin.png" width="251" height="109" /></p>
    <form action="<?php echo U('Users/checklogin');?>" enctype="multipart/form-data"  onsubmit="return onpost()" id="registerform" name="register" autocomplete="off" method="post">
      <input name="step" value="2" type="hidden">
      <input name="invite" value="" type="hidden">
      <div class="login">
        <h2>用户登陆</h2>
        <p>
          <label>用户名</label>
          <input  name="username" id="idname"  type="text" />
        </p>
        <p>
          <label>密&nbsp;码</label>
          <input  name="password" id="password" type="password" />
        </p>
        <p class="pass-form-item">
          <input type="checkbox" checked="checked" class="pass-checkbox-input" name="memberPass" style="border:none;">
          <label class="" id="TANGRAM__PSP_1__memberPassLabel" for="TANGRAM__PSP_1__memberPass" style="  height: auto;line-height: 18px;width: auto; border:none; background:none;">记住我的登录状态</label>
        </p>
        <p class="pass-form-item">
          <input name="regsubmit" type="submit" value="" id="registerformsubmit"  class="login_input"/>
          <a href="#" style="position:relative; top:15px; left:10px;">找回密码？</a> </p>
        <p class="reg_pic"><a href="<?php echo U('Index/reg');?>"><img src="<?php echo RES;?>/images/reg.jpg" width="175" height="38" /></a></p>
      </div>
    <input type="hidden" name="__hash__" value="4f6ac39234a785930304e536e0453063_408c9ba9e6fddf91d120fa6100abe8f9" /></form>
 <!--   <div class="yinying"><img src="<?php echo RES;?>/images/login_yiyin.png" width="320" height="4" /></div>-->
    <div class="news">
      <div class="gr"></div>
      <ul>
        <li style=" width:545px;">
          <div class="w545">
            <div class="inner"> <a href="<?php echo U('User/Index/index');?>" class="d1"></a> </div>
            <div class="products-desc">
              <h3 class="title">文章发布系统“云发”</h3>
              <div class="desc"> 公众号内容管理系统"云发"，基于数据挖掘及云计算引擎，抓取分析海量公众号数据，按照挖掘模型分类、排序，
                且完美实现文章定时发布，实现公众号零成本管理。 </div>
            </div>
          </div>
        </li>
        <li>
          <div class="w545">
            <div class="inner"> <a href="<?php echo U('Home/Index/about');?>" class="d2"></a> </div>
            <div class="products-desc">
              <h3 class="title">关于我们</h3>
              <div class="desc">三两枝取自竹外桃花三两枝，立足移动互联网，提供内容解决方案。聚集一批高精尖的网络技术精英，致力于社会化网络行为智能匹配
                                研究与开发，并依此为基础开发移动互联网行业解决方案。
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="w545">
            <div class="inner"> <a href="<?php echo U('Home/Index/fc');?>" class="d3"></a> </div>
            <div class="products-desc">
              <div class="w545">
                <h3 class="title">我们能为您做什么？</h3>
                <div class="desc"> 公众号零成本内容管理，可基于主题，或热门公众号采集文章
                  自定义文章<br>数量，发布时间，有效提升编辑工作效率</div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="clear"></div>
    <div class="foot">CopyRight@2012  京ICP备09012441号-1</div>
    
    
    
    
    
    
    
    
    
    
    
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </div>
</div>
<script type="text/javascript">
function onpost() {
	var pw = max.$("password");
	var idname = max.$("idname");
	if(idname.value == "") {
		alert("请输入用户名");
		return false;
	}
	if (pw.value == "" ){
		alert("请输入密码");
		return false;
	}	
	return true;
}
</script> 
<script>
$(function() {
	
    var $phone = $('.phone');
    var top = $phone.css('top');
    $phone.css({top: '-160px', display: 'inline'}).animate({top: top}, 2000, 'easeOutBounce') 
    $('.txt1').slideDown(2000);
	
	$(".d1").hover(
	 function(){
	   	 $(".d3").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d2").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d1").parent().parent().parent().animate({ width:'545px'},300)
	  }
	)
	$(".d2").hover(
	 function(){
	   	 $(".d1").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d3").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d2").parent().parent().parent().animate({ width:'545px'},300)
	  }
	)
	$(".d3").hover(
	 function(){
	   	 $(".d1").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d2").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d3").parent().parent().parent().animate({ width:'545px'},300)
	  }
	)
	
});
</script>
</body>
</html>