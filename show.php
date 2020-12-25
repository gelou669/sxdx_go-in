<?php
header("Content-type:text/html;charest=utf-8");
$username = $_POST['username']; 
$name =$_POST['name']; 
$banji =$_POST['banji'];
$file = $_POST['myfile'];
$imgname = $username;
$tmp = $_FILES['myfile']['tmp_name'];
$filepath = 'imgs/img/';
move_uploaded_file($tmp,$filepath.$imgname.".jpg")
?>


<!DOCTYPE html>
<html lang="en">
	
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no, email=no, adress=no" />
  <title>外出登记</title>
  <link rel="stylesheet" href="./css/index.css" />
</head>
 <!--此为取消微信分享功能-->
        <script>
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
            alert('同学你好，请从微信进入哦！如有其它问题请咨询微信：秘密');
            location.href='http://dtdx.xgelou.cn';
            opened.opener = null;
            opened.close();
        }
        </script> 
<body>
  <div id="app" v-cloak>
    <div class="info-wrap">
      <div class="user-info">
        <div class="name"><?php echo $name;?></div>
        <p>学号：<?php echo $username;?></p>
        <p>班级：<?php echo $banji;?></p>
        <p>开始：{{today.year}}-{{today.month}}-{{today.date}} 06:00</p>
        <p>结束：{{today.year}}-{{today.month}}-{{today.date}} 22:00</p>
      </div>
      <img src="./imgs/img/<?php echo $imgname;?>.jpg" class="avatar" alt="">
    </div>
    <div class="qr-code">
      <div class="code-wrap">
        <img src="./imgs/qr_code.png" alt="">
        <span class="timm">{{count}}S</span>
      </div>
      <div class="show-date">
        <span class="don-change">{{today.year}}-{{today.month}}-{{today.date}}</span>
        <span class="can-change">{{today.hours}}:{{today.minutes}}:{{today.seconds}}</span>
      </div>
      <div class="tips">请尽快向保安人员出示当前页面，倒计时结束后页面将失效</div>
    </div>
	
    <!--<transition name="fade">
      <div
        class="warning"
        v-if="showTips && localShowTips"
        @click="closeMask"
      >
        <span class="wp tit">tips:</span>
        <span class="wp">各位研究生小姐姐：你们好</span>
        <span class="wp">！！！请低调使用！！！</span>
        <span class="wp">二维码为百度地址（不信阔以扫一扫~）</span>
        <span class="wp">所以无法机测，仅能糊弄保安</span>
        <span class="wp">不出意外这个提示每个浏览器只会出现一次</span>
        <span class="wp">请在使用前检查一下日期及信息是否正确、有无BUG</span>
        <span class="wp">由于各浏览器差异，顶部可能会暴露链接，请遮挡</span>
        <span class="wp">有问题及时反馈哦~</span>
        <span class="wp ls"> --> <!--点击这个半透明遮罩关闭提示 <-- </span>
      </div>
    </transition>-->
  </div>
  <script type="text/javascript" src="./js/vue.js"></script>
  <script type="text/javascript" src="./js/index.js"></script>
</body>
</html>
