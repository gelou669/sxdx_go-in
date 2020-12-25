<?php
$username = $_POST['username']; 
$name =$_POST['name']; 
$banji =$_POST['banji'];
$nameimg = $username;
?>

<!DOCTYPE html>
<html>
    
<haed>
    <meta charset="utf-8">
    <title>不同传媒|教务登录</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="img/logo.ico">
    <!-- 如果使用双核浏览器，强制使用webkit来进行页面渲染 -->
    <meta name="renderer" content="webkit" />
    <!-- 网站描述 -->
    <meta name="thakns" content="致谢weui、超级大学！" /> 
    <meta name="keywords" content="微信查成绩,手机查成绩,大同大学，山西大同大学，教务查询" /> 
    <meta name="description" content="同大成绩查询，挂科成绩查询，空教室查询，等等" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <link rel="stylesheet" href="style/index/css/weui.css"/>
    <link rel="stylesheet" href="style/index/css/example.css"/>
    <script src="style/index/js/zepto.min.js"></script>
    <!--<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script src="https://res.wx.qq.com/open/libs/weuijs/1.2.1/weui.min.js"></script>
    <script src="js./example.js"></script>-->
    
    
    <!--此为取消微信分享功能-->
        <!--<script>
         function onBridgeReady() {
             WeixinJSBridge.call('hideOptionMenu');
         }
 
         if (typeof WeixinJSBridge == "undefined") {
             if (document.addEventListener) {
                 document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
             } else if (document.attachEvent) {
                 document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
                 document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
             }
         } else {
             onBridgeReady();
         }
         </script>
         
         <script type="text/javascript">
        // 对浏览器的UserAgent进行正则匹配，不含有微信独有标识的则为其他浏览器
        var useragent = navigator.userAgent;
        if (useragent.match(/MicroMessenger/i) != 'MicroMessenger') {
            // 这里警告框会阻塞当前页面继续加载
            alert('同学你好，请从微信公众号【不同传媒】进入哦！如有其它问题请咨询微信：18235273200');
            location.href='http://dtdx.xgelou.cn';
            opened.opener = null;
            opened.close();
        }
        </script> -->
        
        <!-- 
         <script type="text/javascript">
        // 对浏览器的UserAgent进行正则匹配，不含有微信独有标识的则为其他浏览器
        var useragent = navigator.userAgent;
        if (useragent.match(/MicroMessenger/i) != 'MicroMessenger') {
            // 这里警告框会阻塞当前页面继续加载
            alert('同学你好，请从微信公众号【不同传媒】进入哦！如有其它问题请咨询微信：18235273200');
            // 以下代码是用javascript强行关闭当前页面
            var opened = window.open('http://jw.btwh.xyz', '_self');
            opened.opener = null;
            opened.close();
        }
        </script>
        -->
    
    
   <!-- <script>
         var _hmt = _hmt || [];
         (function() {
         var hm = document.createElement("script");
         hm.src = "https://hm.baidu.com/hm.js?772e77dd4c30bb4783d0c9b399062bb7";
         var s = document.getElementsByTagName("script")[0]; 
         s.parentNode.insertBefore(hm, s);
         })();
        </script>-->
</haed>
<body>
    <div class="weui-form">
        <div class="weui-form__text-area">
          <h2 class="weui-form__title">上传图片</h2>
          <div class="weui-form__desc">滴答滴答~啦啦啦啦啦~</div>
        </div>
    
    <form action="show1.php" method="POST">
        <!--这个是获取openid，GET方式-->
        <div class="weui-cell">
            <input type="hidden" name="username" value="<?php echo $username;?>"> 
        </div>
		<div class="weui-cell">
            <input type="hidden" name="name" value="<?php echo $name;?>"> 
        </div>
		<div class="weui-cell">
            <input type="hidden" name="banji" value="<?php echo $banji;?>"> 
        </div>
		
		<form action="show1.php" name="form" method="post" enctype="multipart/form-data">  <input type="file" name="file" />  
    
    <div class="weui-form__opr-area">
      
      <input class="weui-btn weui-btn_primary weui-btn_disabled"  id="showTooltips"  name="login" type='submit' value='点我生成'>
    </div>
			</form>
    </div>
    
    </form>
    
    
    <script type="text/javascript">
    $(function(){
      var $toast = $('#js_toast');
      var $input = $('#js_input');
      $input.on('input', function(){
        if ($input.val()){
          $('#showTooltips').removeClass('weui-btn_disabled');
        }else{
          $('#showTooltips').addClass('weui-btn_disabled');
        }
      });
      $('#showTooltips').on('click', function(){
        if ($(this).hasClass('weui-btn_disabled')) return;

        // toptips的fixed, 如果有`animation`, `position: fixed`不生效
        $('.page.cell').removeClass('slideIn');

        $toast.fadeIn(100);
        setTimeout(function () {
          $toast.fadeOut(100);
        }, 2000);
      });
    });
</script>
</body>
    
</html>