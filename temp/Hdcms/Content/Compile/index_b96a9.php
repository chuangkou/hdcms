<?php if(!defined("HDPHP_PATH"))exit;C("DEBUG_SHOW",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>内容管理</title>
    <script type='text/javascript' src='http://localhost/hdcms/hd/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<script src="http://localhost/hdcms/hd/hdphp/Extend/Org/hdui/js/lhgcalendar.min.js"></script>
<link href='http://localhost/hdcms/hd/hdphp/Extend/Org/hdui/css/hdui.css' rel='stylesheet' media='screen'>
<script src='http://localhost/hdcms/hd/hdphp/Extend/Org/hdui/js/hdui.js'></script>
<link href="http://localhost/hdcms/hd/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://localhost/hdcms/hd/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://localhost/hdcms/hd/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://localhost/hdcms/hd/hdphp/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]--><script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/hdcms';
		WEB = 'http://localhost/hdcms/index.php';
		URL = 'http://localhost/hdcms/index.php?a=Content&c=Content&m=index&_=0.7222847386664599';
		HDPHP = 'http://localhost/hdcms/hd/hdphp';
		HDPHPDATA = 'http://localhost/hdcms/hd/hdphp/Data';
		HDPHPTPL = 'http://localhost/hdcms/hd/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/hdcms/hd/hdphp/Extend';
		APP = 'http://localhost/hdcms/index.php?a=Content';
		CONTROL = 'http://localhost/hdcms/index.php?a=Content&c=Content';
		METH = 'http://localhost/hdcms/index.php?a=Content&c=Content&m=index';
		GROUP = 'http://localhost/hdcms/hd';
		TPL = 'http://localhost/hdcms/hd/Hdcms/Content/Tpl';
		CONTROLTPL = 'http://localhost/hdcms/hd/Hdcms/Content/Tpl/Content';
		STATIC = 'http://localhost/hdcms/hd/Hdcms/Content/Tpl/Static';
		PUBLIC = 'http://localhost/hdcms/hd/Hdcms/Content/Tpl/Public';
		COMMON = 'http://localhost/hdcms/Common';
</script>
    <link type="text/css" rel="stylesheet" href="http://localhost/hdcms/hd/Hdcms/Content/Tpl/Content/css/css.css"/>
    <script type="text/javascript" src="http://localhost/hdcms/hd/Hdcms/Content/Tpl/Content/js/js.js"></script>
    <script type="text/javascript" src="http://localhost/hdcms/hd/Hdcms/Content/Tpl/Content/js/index.js"></script>
    <link rel='stylesheet' href='http://localhost/hdcms/hd/Hdcms/Content/Tpl/Content/js/treeview/jquery.treeview.css'/>
    <script src='http://localhost/hdcms/hd/Hdcms/Content/Tpl/Content/js/treeview/lib/jquery.cookie.js' type='text/javascript'></script>
    <script src='http://localhost/hdcms/hd/Hdcms/Content/Tpl/Content/js/treeview/jquery.treeview.js' type='text/javascript'></script>
    <script src='http://localhost/hdcms/hd/Hdcms/Content/Tpl/Content/js/treeview/jquery.treeview.edit.js' type='text/javascript'></script>
    <base target="content"/>
</head>
<body>
<div class="wrap">
    <div class="category_list">
        <ul id="browser" class="filetree">
        </ul>
    </div>
    <div class="con">
        <iframe src="<?php echo U('Hdcms/Index/feedback');?>" name="content" scrolling="auto" frameborder="0" style="height:100%;width: 100%;position: absolute"></iframe>
    </div>
</div>
</body>
</html>