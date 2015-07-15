<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta name="format-detection" content="telephone=no"/>
<title><?php echo $this->title();?></title><?php echo $this->meta();?>
<?php echo $this->css(array('comman.css','jquery_dialog.css','style.css?v=19'));?>
<?php echo '<script> var SITE_URL="'.ADMIN_URL.'";</script>'."\n";?>
<?php echo $this->js(array('jquery.min.js','jquery_dialog.js','common.js?v=13'));?>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script> 
</head>
<body>
<?php $this->element('top_product',array('lang'=>$lang,'keyword'=>$keyword)); ?>
<?php echo $this->content();?>
<?php $this->element('footer',array('lang'=>$lang)); ?>
<?php $this->element('kefu'); ?>
</body>
</html>
