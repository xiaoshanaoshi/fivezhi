<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站点配置</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<link href="<?php echo RES;?>/images/jquery-1.7.2.min.js" type="text/css" rel="stylesheet">
<link href="<?php echo RES;?>/images/jquery.form.js" type="text/css" rel="stylesheet">
<meta http-equiv="x-ua-compatible" content="ie=7" />
</head>
<body class="warp">
<style>
.set_top{background:url('<?php echo RES;?>/images/set_top.png');height:60px;}
.set_top li{font-weight: bold;float:left;width:98px;line-height:60px;text-align: center;background:url('<?php echo RES;?>/images/set_top_li.png');}
#set_top_li_bg{background:url('<?php echo RES;?>/images/set_top_li_hover.png');}
</style>
<div class="set_top">
	<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if(ACTION_NAME == $vo['name']): ?>id="set_top_li_bg"<?php endif; ?>><a href="<?php echo U($action.'/'.$vo['name'],array('pid'=>6,'level'=>3));?>"><?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div id="artlist">
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="addn">
 <form id="myform" action="<?php echo U('Site/insert');?>" method="post">
 <tr> 
      <td  height="48" align="right"><strong>支付方式：</strong></td>
      <td>
      <select name="pay_type" id="pay_type">
      <option value="alipay"<?php if (C('pay_type')==''||C('pay_type')=='alipay'){echo ' selected';}?>>支付宝</option>
      <option value="tenpay"<?php if (C('pay_type')=='tenpay'){echo ' selected';}?>>财付通</option>
      <option value="kuaiqian"<?php if (C('pay_type')=='kuaiqian'){echo ' selected';}?>>快钱</option>
      </select>
	  </td>
    </tr>
 <tr> 
      <td  height="48" align="right"><strong>财付通partnerId：</strong></td>
      <td><input type="text" name="tenpay_partnerid" value="<?php echo C('tenpay_partnerid');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;(仅选择财付通时填写)</span>
	  </td>
    </tr>
    <tr> 
      <td  height="48" align="right"><strong>财付通partnerKey：</strong></td>
      <td><input type="text" name="tenpay_partnerkey" value="<?php echo C('tenpay_partnerkey');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;(仅选择财付通时填写)</span>
	  </td>
    </tr>
    <tr> 
      <td  height="48" align="right"><strong>支付宝帐号：</strong></td>
      <td><input type="text" name="alipay_name" value="<?php echo C('alipay_name');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;例：phpw_CN@163.COM(仅选择支付宝时填写)</span>
	  </td>
    </tr>
	 <tr> 
      <td  height="48" align="right"><strong>支付宝PID：</strong></td>
      <td><input type="text" name="alipay_pid" value="<?php echo C('alipay_pid');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;请登陆支付宝商家服务中去查看(仅选择支付宝时填写)</span>
	  
    </tr>
	 <tr> 
      <td  height="48" align="right"><strong>支付宝KEY：</strong></td>
      <td><input type="text" name="alipay_key" value="<?php echo C('alipay_key');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;请登陆支付宝商家服务中去查看(仅选择支付宝时填写)</span>
    </tr> 


 <tr> 
      <td  height="48" align="right"><strong>快钱account：</strong></td>
      <td><input type="text" name="kuaiqian_account" value="<?php echo C('kuaiqian_account');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;(仅选择快钱时填写)</span>
	  </td>
    </tr>
    <tr> 
      <td  height="48" align="right"><strong>快钱key：</strong></td>
      <td><input type="text" name="kuaiqian_key" value="<?php echo C('kuaiqian_key');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;(仅选择快钱时填写)</span>
	  </td>
    </tr>
    
    
   <input type="hidden" name="files" value="alipay.php" />
    <tr> 
      <td height="48" colspan="2">
		  <div id="addkey"></div>
		  <div style="padding-left:100px;">
			<input type="submit" value="保存设置" />
		  </div>
	  </td>
    </tr>
	</form>
</table><br />
<br />
<br />

</div>
</body>
</html>