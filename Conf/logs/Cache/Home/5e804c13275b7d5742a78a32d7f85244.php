<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆与注册－<?php echo C('site_title');?>_微信接口_微信公众管理平台</title>
<meta name="keywords" content="微信25小时管家,微信接口,微信机器人,微信助手,微信营销,微信第三方接口,微信公众账号"/>
<meta name="description" content="微信25小时管家提供最好用、最方便的微信接口，微信会员卡、微信喜帖、优惠券、大转盘、团购、一战到底、微网站、微相册、在线预订，一应俱全。让你运营微信得心应手!"/>
<link href="<?php echo RES;?>/css/global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/cj-lib.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/validate.js?ver=2013.1.23"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/md5.js"></script>
</style>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css"/>
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
				
                <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">微信导航</a></li>
                <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>
            
            </ul>
        </div>
        </div>
    </div>
</div>
</head>


<div class="main-content">
 <div class="main1000">
   <div class="bg50"></div>
   <form action="<?php echo U('Users/checkreg');?>" enctype="multipart/form-data"  onsubmit="return onpost()" id="registerform" name="register" autocomplete="off" method="post">
			<input name="step" value="2" type="hidden"/>
			<input name="invite" value="" type="hidden"/>
   <div class="reg_index">
    <p>
        <label>用户名</label>
        <input  id="username"  name="username" type="text" />
        <span id="err_username"><font color="#FF0000">*</font>长度为6~16位字符，可以为"数字/字母/中划线/下划线"组成</span>
      </p>
       <p>
        <label>设置密码</label>
        <input  id="password" name="password"  type="password" />
        <span id="err_password"><font color="#FF0000">*</font>长度为6~16位字符</span>
      </p>
       <p>
        <label>确认密码</label>
        <input id="repassword"  name="repassword"  type="password" />
        <span id="err_repassword"></span>
      </p>      
       <p>
        <label>邮箱</label>
        <input name="email" id="registeremail" type="text"value="请输入电子邮箱" onclick="if(this.value=='请输入电子邮箱'){this.value=''}" onblur="if(this.value==''){this.value='请输入电子邮箱'}"/>
        <span id="err_registeremail"><font color="#FF0000">*</font>邮箱将与支付及优惠相关，请填写正确的邮箱</span>
      </p>
       <p>
        <label>QQ</label>
        <input  name="qq" id="registerqq" type="text" />
        <span id="err_registerqq"><font color="#FF0000">*</font>请输入QQ号，以便我们联系</span>
      </p>
	   <p>
        <label>手机</label>
        <input  name="tel" id="registertel" type="text" />
        <span></span>
      </p>
     <!--  <p>
        <label>验证码</label>
        <input name="" type="text" />
        <span></span>
      </p>-->
      <input name="sendphone" type="submit" value="" class="reg_tj"/>
   </div>
   <input type="hidden" name="__hash__" value="6c1c1dfda0c28dd4837d7b4e06f5ea85_4db3ab8cbfa518793ee977b5449abe7a" /></form>
    <div class="foot">CopyRight@2013 苏ICP备09088046号-4 <a href="#" target="_blank">微信接口</a>| <a href="#" target="_blank">微信第三方接口</a> | <a href="#" target="_blank">微信机器人</a> | 联系我们 隐私条款 </div>
 </div>
</div>
<script type="text/javascript">
	function onpost() {
        var username = max.$("username");
		var password = max.$("password");
		var repassword = max.$("repassword");
		var registeremail = max.$("registeremail");
		var registerqq = max.$("registerqq");
		if(username.value == "") {
			max.$("err_username").innerHTML = "<font color='#FF0000'>*请输入用户名</font>";
			return false;
        }
        if (password.value == "" ){
			max.$("err_password").innerHTML = "<font color='#FF0000'>*请输入密码</font>";
			return false;
		}
		if(repassword.value == "") {
			max.$("err_repassword").innerHTML = "<font color='#FF0000'>*请再次输入密码</font>";
			return false;
        }
		if(repassword.value != password.value) {
			max.$("err_repassword").innerHTML = "<font color='#FF0000'>*2次输入的密码不一致</font>";
			return false;
        }
        if (registeremail.value == "" ){
			max.$("err_registeremail").innerHTML = "<font color='#FF0000'>*请输入邮箱</font>";
			return false;
		}
		 if (registerqq.value == "" ){
			max.$("err_registerqq").innerHTML = "<font color='#FF0000'>*请输入qq</font>";
			return false;
		}
        return true;
    }
</script>
</body>
</html>