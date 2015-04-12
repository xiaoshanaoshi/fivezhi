<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>资费说明－<?php echo C('site_title');?></title>
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
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style-price.css"/>

<div class="main">
   <div class="pos">当前位置: <a href="<?php echo C('site_url');?>"><?php echo C('site_name');?></a> &raquo; <a href="<?php echo C('site_url');?>">帮助中心</a></div>
<div class="abody">
             <div class="qtcontent">
        <div class="document faq">
            <div class="normalTitle"><h2>资费</h2></div>
            <div class="normalContent">
                <div class="section lastSection">
                	<table width="100%" border="0" cellpadding="0" cellspacing="0" class=" ListProduct8">
<thead>
                			<tr>
                				<th class="lefttitle"><strong>运营套餐</strong></th>
                				<th width="100">vip0</th>
                				<th width="100">vip1</th>
               				</tr>
</thead>
<tbody>
                			<tr>
                				<td height="60" valign="middle" class="lefttitle">VIP价格
                					<a  class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>免费进行到底，如果您有公众号推广需求，请购买</p>
</span></a></td>
                				<td><span class="price">0
                				    <p>元 / 月</p></span></td>
                				<td><span class="price">100
                				    <p>元 / 月</p></span></td>
               				</tr>
                			<tr>
                				<td height="32" class="lefttitle">文章主题 <span class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p><strong>什么是文章主题？</strong></p>
<p>即选择要发布的文章主题，请依据公众号粉丝属性与主题选择</p>
</span></span></td>
                				<td>不限制</td>
                				<td>不限制</td>
               				</tr>
                			<tr>
                				<td height="32" class="lefttitle">发布文章数量 <span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是文章数量？</strong></p>
<p>即每天发布的文章的数量，腾讯官方限制每天发布的文章数量必须小于8</p>
</span></span></td>
                				<td>不限制</td>
                				<td>不限制</td>
               				</tr>
                			<tr>

               				</tr>
                            <tr >
                				<td height="50" class="lefttitle">发布时间<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是发布时间？</strong></p>
<p>即公众号文章定时发布的时间，必须是整点</p>
</span></span></td>
                				<td>不限制</td>
                				<td>不限制</td>
               				</tr>
                             <tr >
                				<td height="50" class="lefttitle">底部版权信息<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>版权信息？</strong></p>
<p>	页面有:此页面是由【<a href="<?php echo C('site_url');?>"><?php echo C('site_name');?>接口平台</a>】系统生成 版权信息</p>
</span></span></td>
                				<td>有</td>
                				<td>无</td>
               				</tr>
                            <tr >
                				<td height="50" class="lefttitle">公众号推广<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>怎么推广？</strong></p>
<p>	如果购买套餐，会在每天的平台文章中加入公众号推广</p>
</span></span></td>
                				<td>0</td>
                				<td>1000次/天</td>
               				</tr>
                			<tr >
                				<td height="50" class="lefttitle"> <span class="red">先充值，再购买VIP套餐。</span><span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>简单购买流程提醒</strong></p>
<p>先看自己适合什么套餐，然后充值相应人民币得到lanrain币，用lanrain币购买VIP套餐。（lanrain币为<?php echo C('site_name');?>平台通用货币）</p>
</span></span></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>0));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>1));?>"><em>立即充值</em></a></td>         				
               				</tr>
                            <tr >
                				  <td height="50" class="lefttitle"></td>
                				<td></td>
                				<td></td>   				
               				</tr>
                            <tr >
                				  <td height="50" class="lefttitle"></td>
                				<td></td>
                				<td></td>   				
               				</tr>
</tbody>
               			</table>
                </div>
                
                
            <div class="section lastSection">
<p>有疑问的请QQ<?php echo C('site_qq');?>提问。</p>
               		</div>
            </div>
        </div>
    </div>
    </div>
    </div>
<script type="text/javascript">try{Dd('webpage_6').className='left_menu_on';}catch(e){}</script>
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