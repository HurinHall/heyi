<!DOCTYPE html>
<html lang="zh-cn">
    <head>
    <base href="<?php  echo base_url();?>" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="author" content="Xanthium Technology Co.Ltd">
        <meta name="description" content="The index page of HEYI On-line Book Store">
        
        <title>Heyi Book Store</title>
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Outer CSS -->
        <link href="css/order.css" rel="stylesheet">
        <link href="css/ordercheck.css" type="text/css" rel="stylesheet">

        <!-- Outer JS -->
        <script src="js/jquery-1.4.min.js" type="text/javascript"></script>
        <script>
        $(document).ready(function() {    
      $('.logout').click(function(e) {
        e.preventDefault();
        thisHref=$(this).attr('href');
        if(confirm('你要退出登录吗？')) {
          window.location = thisHref;
        }
        
      });
    })
        </script>
        <script src="js/ordercheck.js" type="text/javascript"></script>
    </head>
    
    <body>
        <div id="first-nav-bg"></div>
        <div id="sec-nav-bg"></div>
        <div class="container">
            <nav class="navbar navbar-default first-navbar-style" role="navigation">
              <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span class="firnav-font-style-chinese">合一</span></a>
                </div>
        
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><span class="firnav-font-style-english">TextBook</span></a></li>
                        <li><a href="#"><span class="firnav-font-style-english">Literature</span></a></li>
                        <li><a href="#"><span class="firnav-font-style-english">Novel</span></a></li>
                        <li><a href="#"><span class="firnav-font-style-english">Magazine</span></a></li>
                        <li><a href="#"><span class="firnav-font-style-english">ToolBook</span></a></li>
                        <li><a href="#"><span class="firnav-font-style-english">Exam</span></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div>
            </nav>
            <nav class="navbar navbar-default second-navbar-style" role="navigation">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><span class="secnav-font-style-english">Book Store</span></a></li>
                    </ul>
                    
                    <form class="navbar-form navbar-right" role="search">
                        <button type="submit" class="btn btn-default red-button-style-long"><?=$username?></button>
                        <a href="<?=site_url('cart/index')?>" class="btn btn-default red-button-style">购物车</a>
                        <a href="<?=site_url('login/logout')?>" class="logout btn btn-default red-button-style">退出</a>  
                    </form>
                        
                        
                </div><!-- /.navbar-collapse -->
              </div>
            </nav>
            
        

<?php $orderInfo=$order[0]?>
	<div id="top">
		<img src="img/orderCheck/top.jpg">
	</div>
	
	<div id="bar">
		<div class="top1" style="border-bottom-style:solid; border-width:4px">
		<img src="img/orderCheck/correct.jpg" class="correct">
		</div>
	</div>
	
	<div id="content">
		<div class="order1">
		<input type="checkbox" name="check1" class="check1">
			<div class="c1" style="border-style:solid; border-width:3px; ">
			<img src="<?php echo $orderInfo["pic"] ?>" class="book1" width="88" height="140">
			<ul>
				<li class="b1_num">
				1.
				</li>
				<li class="b1_tit">
				<b>
				Steve Jobs
				</b>
				</li>
				<li class="b1_author">
				Marc A. Lappe(作者)
				</li>
				<li class="b1_price">
				￥<?php echo $orderInfo["price"]; ?>
				</li>
				<li	class="b1_ammount">
				数量 ： 1
				</li>
			</ul>
			</div>
		</div>



		<div class="add">
			<div class="toBar">
				<div class="toOld">
					<div class="old_left"><div class="old_word1">寄送至</div></div>
					<div class="old_right"><div class="old_word2">
					<input type="radio" name="address" value="0" class="radio1">&nbsp;&nbsp;<?php $name = $address[0];echo $name["address"] ?></div></div>
				</div>
				<div class="toNew">
					<div class="new_left"><div class="new_word1">寄送至</div></div>
					<div class="new_right"><div class="new_word2"><input type="radio" name="address" value="0" class="radio2">&nbsp;&nbsp;
					
					<input style="background:transparent;border:1px solid #CCCCCC;width:350px;color:#ffffff;" class="tb" name="tb">
					
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="info">
			<div class="acc" style="border-style:solid; border-width:3px; border-color:#999999">
				<p style="font-size:13px;" class="n">总计： 数量：1  价格：￥<?php echo $orderInfo["price"] ?></p> 
				<p style="font-size:13px;" class="n2">收件人：<?=$username?><?  echo " ".$name["phone"] ?></p> 
			</div>
			
			<div class="result">
				<a href="#"><img src="img/orderCheck/cancel.jpg" class="cancel"></a>
				<a href="#" onclick="CL()"><img src="img/orderCheck/submit.jpg" class="submit"></a>
        <script type="text/javascript">
        function CL()
        {
           thisHref=$(this).attr('href');
            if(confirm('下单成功。')) {
            window.location = thisHref;
         }
        }

      </script>
			</div>
		</div>
		</div>
	
	</div>
     
        
            
            
          
                        
            
 <div id="buttom">       
     <nav class="navbar" role="navigation">       
      <footer class="bs-docs-footer" role="contentinfo">
        <div class="row">   
          <div id="title" class="col-md-offset-1"><p><h3>合一书店</h3></p></div>
          <div id="title2" class="row"><p> 
            <div class="col-md-2 col-md-offset-1">帮助说明</div> 
            <div class="col-md-2">关注我们</div>
            <div class="col-md-2">客服热线</div></p>
          </div>
          <div id="title3" class="row">
            <p>  
             <div class="col-md-2 col-md-offset-1"><a href="#"><span id="lj">支付方式</span></a></div>
             <div class="col-md-2"><a href="#"><span id="lj">关于合一</span></a></div>
             <div class="col-md-2"><a href="#"><span id="lj">新浪微博</span></a></div>
             <div class="col-md-2"><a href="#"><span id="lj">400-888-8888</span></a></div>
            </p>
          </div>
          <div id="title4" class="row">
            <p>
              <div class="col-md-2 col-md-offset-1"><a href="#"><span id="lj">售后服务</span></a>
                <div class="row"><p>
                  <div class="col-md-6 "><a href="#"><span id="lj">付款帮助</span></a></div></p>
                </div>
              </div>
              <div class="col-md-2"><a href="#"><span id="lj">联系我们</span></a>
                <div class="row"><p>         
                  <div class="col-md-6"><a href="#"><span id="lj">法律声明</span></a></div></p>
                </div>
              </div>
              <div class="col-md-2"><a href="#"><span id="lj">官方微信</span></a>
                <div class="row"><p>          
                  <div class="col-md-6"><a href="#"><span id="lj" >QQ空间</span></a></div></p>
                </div>
              </div>
              <div class="col-md-2"><img alt="Brand" src="img/2vm.png"></div>
            </p>
          </div> 
        </div>
      </footer>
    </nav>
    
    <nav class="navbar" role="navigation">
       <div id="bottom" class="container">
          <ul class="nav navbar-nav navbar-right">
           <p id="bottomword" class="navbar-text">2014 Xanthium Technology Co. Ltd. All right reserved.</p>
           </ul>
       </div>
    </nav>
            
            
            
            
            
        </div>
     <div id="third-nav-bg"></div>
     <div id="fourth-nav-bg"></div> 
 </div>
        <!-- End of Components -->
    
        
        <script>
            $(function () {
                $('#myTab a:last').tab('show')
            })
        </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
    
   