<html lang="zh_CN">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="//source.papapoi.com/www&@favicon.ico">
<title>虚假磁链生成器手机版v1.2</title>
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
<body>
 <form action="" method="post">
  <p>虚假磁链生成器手机版v1.2</p>
  <p>自定义磁链前缀：<input type="text" name="head" value="magnet:?xt=urn:btih:"/>（默认magnet:?xt=urn:btih:）</p>
  <p>需要的磁链数量：<input type="text" name="sum" /></p>
  <p><input type="submit" name="sub" value=" 点击生成 " /></p>
  </form>

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
                    echo $count,'个虚假磁链生成完毕！（请勿复制这一行！）',"<br>";
                    for ($i=0;$i<$count;$i++)
                    {
                        if(getRandomType(1)=='A'){
                            echo $head1 , getRandom(40),'&dn=',getRandomWordSmall(3),'-',getRandomSum(3),"<br>";
                        }else if(getRandomType(1)=='B'){
                            echo $head1 , getRandom(40),'&dn=',getRandomWord(3),'-',getRandomSum(3),"<br>";
                        }else if(getRandomType(1)=='C'){
                            echo $head1 , getRandom(40),'&dn=';
                            for ($j=0;$j<intval(getRandomSum(2));$j++)
                            {
                                echo '%',getRandom(2);
                            }
                            echo "<br>";
                        }else{
                            echo $head1 , getRandom(40),"<br>";
                        }
                    }
                }else{
                    echo '未填写生成数量';
                }
                ?>
<br><br><br>by <a href="http://blog.papapoi.com/" target="_blank">晨旭</a>   <a href="update.html" target="_blank">更新日志</a>
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
</body>