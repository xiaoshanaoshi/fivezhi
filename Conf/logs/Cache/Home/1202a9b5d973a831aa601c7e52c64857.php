<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
.wxgzlist_new ul li {
    display: block;
    float: left;
    margin-right: 23px;
    margin-top: 8px;
    list-style: none;
    padding: 0px;
    width: 80px;
}
</style>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>使用客户－三两枝科技</title>
<meta name="keywords" content="公众号内容管理系统，文章自动发布，编辑利器"/>
<meta name="description" content="公众号内容管理系统，文章自动发布，编辑利器"/>
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
<div class="banner dbanner"></div>
<div class="main">
    <div class="pos">当前位置: <a href="/">首页</a> &raquo; <a href="">微信公众号</a>&raquo; </div>
        <div class="wxgzbox">
        <div class="wxgzbox-top wxgzbor1"><h3>使用客户</h3></div>
        <div class="wxgzlist">
        <ul>
            <li>
                <a href="http://weixin.sogou.com/gzh?openid=oIWsFt6n15eEK_YA1NDdpZjX1Neg" class="img"><img src="<?php echo RES;?>/images/shiyeyujiankang.jpg"></a>
                <a href="http://weixin.sogou.com/gzh?openid=oIWsFt6n15eEK_YA1NDdpZjX1Neg" class="title">事业与健康<img src="<?php echo RES;?>/images/shiyeyujiankang_erweima.jpg"></a>
            </li>
                            <li>
                <a href="http://weixin.sogou.com/gzh?openid=oIWsFt4w5z4cZ8tg28mj7i7OjShI" class="img"><img src="<?php echo RES;?>/images/ermuliufendi.jpg"></a>
                <a href="http://weixin.sogou.com/gzh?openid=oIWsFt4w5z4cZ8tg28mj7i7OjShI" class="title">二亩六分地<img src="<?php echo RES;?>/images/ermuliufendi_erweima.jpg"></a>
            </li>
        </div>
    </div>
    
    <div class="wxgzbox">
        <div class="wxgzbox-top"><h3>全部账号</h3></div>
        <div class="wxgzlist">
        <ul>
                        </ul>
        </div>
    </div>
    
    </div>
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