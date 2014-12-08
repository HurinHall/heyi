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
        <link href="css/personalCenter.css" rel="stylesheet">
        <link href="css/personal.css" rel="stylesheet">
        <!-- Outer JS -->
        <script type="text/javascript" src="js/jquery-1.7.1.min.js" ></script>
        <script type="text/javascript">
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
        <script src="js/personal.js" type="text/javascript"></script>

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
                    <a class="navbar-brand" href="<?=site_url() ?>"><span class="firnav-font-style-chinese">合一</span></a>
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
                         <?php
                        if ($logined) {
                        ?>
                            <a href="<?=site_url('profile/index')?>" class="btn btn-default red-button-style-long"><?=$username?></a>
                            <a href="<?=site_url('cart/index')?>" class="btn btn-default red-button-style">购物车</a>
                            <a href="<?=site_url('login/logout')?>" class="logout btn btn-default red-button-style">退出</a>
                        <?php }else{?>
                            <a href="<?=site_url('login/auth')?>" class="btn btn-default red-button-style">登录</a>
                            <a href="<?=site_url('register/add')?>" class="btn btn-default red-button-style">注册</a>                            
                        <?php }?>
                    
                    </form>
                        
                        
                </div><!-- /.navbar-collapse -->
              </div>
            </nav>
            
            
            
     <div id="body">
		<img src="img/personalCenter/bgimage.jpg" class="bgimage">
		<div class="navi" >
			<div class="naviBg">
			</div>
			<img src="img/personalCenter/char.jpg" class="char">
			<div class="bar1">
				<div class="word">
				個人資料
				</div>
			</div>
			<div class="bar2">
				<div class="word">
				訂單歷史
				</div>
			</div>
			<div class="bar3">
				<div class="word">
				更改密碼
				</div>
			</div>
		</div>
		<div class="content1">
			<div class="c1_bg">
			</div>
			<div>
				<a href="#"><img src="img/personalCenter/bianji.jpg" class="bianji"></a>
			</div>
			<div>
			<ul class="information">
				<li class="info1">姓名：<?=$name ?></li>
				<li class="info1">郵箱：<?=$email?></li>
				<li class="info1">電話：<?=$phone?></li>
				<li class="info1">地址：<?=$address?></li>
			</ul>
			</div>
		</div>
		
		
		
		<div class="content2">
			<div class="c1_bg">
			</div>
			<div class="top_bar">
			<ul>
			<li class="l1">订单信息</li>
			<li class="l2">价格</li>
			<li class="l3">数量</li>
			</ul>
			</div>
			
			
			<div class="block1">
				<div class="b_bar">
					<ul>
						<li class="b1_l1"><b>2014-10-27</b></li>
						<li class="b1_l2">订单号：13726247501213233333</li>
					</ul>
				</div>
				<div class="b1_book1">
				<ul>
					<li class="name"><b>Steven Jobs</b></li>
					<li class="author">作者：Walter Isaacon</li>
					<li class="price">￥126.00</li>
					<li class="ammount">1</li>
				</ul>
				</div>
				<div class="b1_book2">
				<ul>
					<li class="name"><b>Steven Jobs</b></li>
					<li class="author">作者：Walter Isaacon</li>
					<li class="price">￥126.00</li>
					<li class="ammount">1</li>
				</ul>
				</div>
				<div class="acc">
					<div class="b1_price">￥420.00</div>
					<div class="b1_rec">收件人：杨易鑫 13722222222</div>
				</div>
			</div>
			
			
			
			
			<div class="block2">
			<div class="b_bar">
					<ul>
						<li class="b1_l1"><b>2014-10-27</b></li>
						<li class="b1_l2">订单号：13726247501213233333</li>
					</ul>
				</div>
				<div class="b1_book1">
				<ul>
					<li class="name"><b>Steven Jobs</b></li>
					<li class="author">作者：Walter Isaacon</li>
					<li class="price">￥126.00</li>
					<li class="ammount">1</li>
				</ul>
				</div>
				<div class="acc">
					<div class="b1_price">￥420.00</div>
					<div class="b1_rec">收件人：杨易鑫 13722222222</div>
				</div>
			</div>
			<div class="pages">
				頁碼: 
				<u><a href="#">1</a></u>
				<u><a href="#">2</a></u>
				<u><a href="#">3</a></u>
				<u><a href="#">4</a></u>
				<u><a href="#">5</a></u>
			</div>
		</div>
		
		
		<div class="content3">
			<div class="c1_bg">
			</div>
			<form action="<?php site_url('profile/changePwd')?>" method="post">
			<div class="c3">
			<div>
				<a href="<?=site_url('profile/index')?>"><img src="img/personalCenter/back1.jpg" class="back"></a>				
				<input type="image" src="img/personalCenter/save.jpg" class="save" />
			</div>
			<div>
			<ul class="information">
				<li class="info2">舊密碼<input type="password" class="textBox1" name="oldpass"></li>
				<li class="info2">新密碼<input type="password" class="textBox2" name="newpass"></li>
				<li class="info2">確    認<input type="password" class="textBox3" name="newpassconf"></li>
			</ul>
			</div>
			</form>
			<span style="color: red;"><?php echo validation_errors();?></span>
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
     </div>            
       <div id="third-nav-bg"></div>
     <div id="fourth-nav-bg"></div>       


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
    
   