<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>快切助手 - 超好用的网页制作&amp;专题制作助手 - 2015前端必备工具 - 勤道快切助手</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">
<meta name="apple-itunes-app" content="app-id=821470312">
<meta name="renderer" content="webkit">
<meta name="format-detection" content="telephone=no">
<meta name="searchtitle" content="快切助手,切图助手,自动切图,切片工具,自动切片工具,网页制作,网页制作助手,专题制作,专题制作助手,勤道快切助手">
<meta name="author" content="勤道,http://kuaiqie.qdsay.com,http://www.qdsay.com">
<meta name="copyright" content="本页版权归勤道QDsay团队协作所有.All Rights Reserved">
<meta name="title" content="快切助手,切图助手,自动切图,切片工具,自动切片工具,网页制作,网页制作助手,专题制作,专题制作助手,勤道快切助手">
<meta name="description" content="史上最好用的在线切图工具,自动切图并快速导出html，css样式和切片，支持响应式布局，一站打通电脑，平板，手机。"/>
<meta name="keywords" content="快切助手,切图助手,自动切图,切片工具,自动切片工具,网页制作,网页制作助手,专题制作,专题制作助手,勤道快切助手"/>
<link rel="shortcut icon" href="resources/images/favicon.ico"/>
<link rel="dns-prefetch" href="www.qdsay.com" />
<link rel="dns-prefetch" href="hm.baidu.com">
<link rel="stylesheet" href="resources/css/main.css"/>
<link rel="stylesheet" href="resources/css/view.css"/>
</head>
<body>
<?php
    $exp = isset($_GET['exp']) ? htmlspecialchars(trim($_GET['exp']), ENT_QUOTES) : 'jd';
?>
<header>
<div id="headbar">
  <div id="logo">
    <a href="http://kuaiqie.qdsay.com"><img alt="kuaiqie.qdsay.com" src="resources/images/logo.png"></a>
  </div>
  <ul id="navbar">
    <li class="on"><a id="preview" class="view" title="用例预览" href="example/<?php echo $exp;?>/index.html" target="viewFrame">用例预览</a></li>
    <li><a id="download" class="view" title="下载用例" href="example/<?php echo $exp;?>.png" download="<?php echo $exp;?>.png">下载用例</a></li>
    <li><a id="guide" class="view" title="说明文档" href="example/<?php echo $exp;?>/help.html" target="viewFrame">用例说明</a></li>
    <li><a id="back" class="view" title="返回首页" href="http://kuaiqie.qdsay.com/">返回首页</a></li>
  </ul>
  <label id="desc">页面框架&amp;专题制作工具</label>
</div>
</header>
<div id="main">
  <iframe width="100%" height="100%" id="viewFrame" name="viewFrame" src="example/<?php echo $exp;?>/index.html"></iframe>
</div>
<script type="text/javascript" src="resources/js/jquery.min.js"></script>
<script>
$().ready(function() {
  $("#viewFrame").height($(document).height() - 49);
  $(".view").click(function(){
    $(this).parent().siblings().removeClass("on");
    $(this).parent().addClass("on")
  });
});
//统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?78ca100d64bdbafed0bd93cbe4702ab4";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>