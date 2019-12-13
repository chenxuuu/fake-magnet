<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>虚假磁链生成器v1.2</title>
        <link rel="shortcut icon" href="//source.papapoi.com/www&@favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
<script type="text/javascript">
	function request(paras) {
	var url = location.href;
	var paraString = url.substring(url.indexOf("?") + 1, url.length).split("&");
	var paraObj = {};
	for (var i = 0; j = paraString[i]; i++) {
		paraObj[j.substring(0, j.indexOf("=")).toLowerCase()] = j.substring(j
				.indexOf("=") + 1, j.length);
	}
	var returnValue = paraObj[paras.toLowerCase()];
	if (typeof (returnValue) == "undefined") {
		return "";
	} else {
		return returnValue;
	}
}
	// 获取终端的相关信息
	var Terminal = {
		// 辨别移动终端类型
		platform : function() {
			var u = navigator.userAgent, app = navigator.appVersion;
			return {
				// 是否为iPhone或者QQHD浏览器
				iPhone : u.indexOf('iPhone') > -1,
				// 是否iPad
				iPad : u.indexOf('iPad') > -1,
				// 是否微信
				weixin : u.toLowerCase().indexOf("micromessenger") > -1,
				// android终端或者uc浏览器
				android : u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
				// 是否WinPhone
				wp : u.indexOf('Windows Phone') > -1
			};
		}(),
	}
	
	// 根据不同的终端，跳转到不同的地址
	if (Terminal.platform.weixin) {
		location.href = 'http://bt.papapoi.com/mobi.php';
	} else if (Terminal.platform.wp) {
		location.href = 'http://bt.papapoi.com/mobi.php';
	} else if (Terminal.platform.android) {
		var channelFrom=request('channel')==null?"":request('channel');
		if(channelFrom == "biliad")
			location.href = 'http://bt.papapoi.com/mobi.php';
		else
			location.href = 'http://bt.papapoi.com/mobi.php';
	} else if (Terminal.platform.iPhone) {
		location.href = 'http://bt.papapoi.com/mobi.php';
	} else if (Terminal.platform.iPad) {
		location.href = 'http://bt.papapoi.com/mobi.php';
	}
	
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?7d6ef64c441242cb7dd0f52a0cd5e552";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<body style="width:100%;height:100%;margin:0;">
	<div class="htmleaf-container">
		<header class="htmleaf-header">
			<h1>虚假磁链生成器 <span>妈蛋这是黑车！</span></h1>
		</header>
		<div class="related">
             <form action="" method="post">
              <p>自定义磁链前缀：<input type="text" name="head" value="magnet:?xt=urn:btih:"/>（默认magnet:?xt=urn:btih:）</p>
              <p>需要的磁链数量：<input type="text" name="sum" /></p>
              <p><input type="submit" name="sub" value=" 点击生成 " /></p>
              </form>
<textarea style="border:0px;background:none;color:white;" cols=80 rows=10>
<?php
                function getRandom($param){
                    $str="0123456789ABCDEF";
                    $key = "";
                    for($i=0;$i<$param;$i++)
                     {
                         $key .= $str{mt_rand(0,15)};
                     }
                     return $key;
                }
                
                function getRandomType($param){
                    $str="0123456789ABCDEF";
                    $key = "";
                    for($i=0;$i<$param;$i++)
                     {
                         $key .= $str{mt_rand(0,15)};
                     }
                     return $key;
                }
                
                function getRandomWord($param){
                    $str="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    $key = "";
                    for($i=0;$i<$param;$i++)
                     {
                         $key .= $str{mt_rand(0,25)};
                     }
                     return $key;
                }
                
                function getRandomWordSmall($param){
                    $str="abcdefghijklmnopqrstuvwxyz";
                    $key = "";
                    for($i=0;$i<$param;$i++)
                     {
                         $key .= $str{mt_rand(0,25)};
                     }
                     return $key;
                }
                
                function getRandomSum($param){
                    $str="0123456789";
                    $key = "";
                    for($i=0;$i<$param;$i++)
                     {
                         $key .= $str{mt_rand(0,9)};
                     }
                     return $key;
                }
                
                function strreplace($str){
                    $str = str_replace('<',"&#60;",$str);
                    $str = str_replace('"',"“",$str);
                    return $str;
                }
                if(!empty($_POST['sum'])){
                    $count = intval($_POST['sum']);
                    if($count>100){
                        $count=100;
                        echo "生成数量超过100，已重新改为100条\r\n";
                    }
                    $head1= strreplace($_POST['head']);
                    echo $count,'个虚假磁链生成完毕！（请勿复制这一行！）',"\r\n";
                    for ($i=0;$i<$count;$i++)
                    {
                        if(getRandomType(1)=='A'){
                            echo $head1 , getRandom(40),'&dn=',getRandomWordSmall(3),'-',getRandomSum(3),"\r\n";
                        }else if(getRandomType(1)=='B'){
                            echo $head1 , getRandom(40),'&dn=',getRandomWord(3),'-',getRandomSum(3),"\r\n";
                        }else if(getRandomType(1)=='C'){
                            echo $head1 , getRandom(40),'&dn=';
                            for ($j=0;$j<intval(getRandomSum(2));$j++)
                            {
                                echo '%',getRandom(2);
                            }
                            echo "\r\n";
                        }else{
                            echo $head1 , getRandom(40),"\r\n";
                        }
                    }
                }else{
                    echo '未填写生成数量';
                }
                ?>
</textarea>
              
              
              <br><br><br>by <a href="http://blog.papapoi.com/" target="_blank">晨旭</a>   <a href="update.html" target="_blank">更新日志</a>
		</div>
	</div>
    <div id="disqus_thread"></div>
    <script>
    var disqus_config = function () {
    this.page.url = "http://bt.papapoi.com/";
    this.page.identifier = "虚假磁链生成器";
    };
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://xu-jia-ci-lian-sheng-cheng-qi.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
	<script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
        <script src="dist/jquery-starfield.js"></script>
        <script>
            $('.htmleaf-container').starfield({
                starDensity: 2.0,
                mouseScale: 0.5,
                seedMovement: true
            });
        </script>
</body>
</html>
