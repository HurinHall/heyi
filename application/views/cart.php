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
        <link href="css/shoppingCart.css" rel="stylesheet">
        <link href="css/cart.css" type="text/css" rel="stylesheet">

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
        <script src="js/cart.js" type="text/javascript"></script>
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
                            <a href="<?=site_url('profile/index')?>" class="btn btn-default red-button-style-long"><?=$username?></a>
                            <a href="<?=site_url('cart/index')?>" class="btn btn-default red-button-style">购物车</a>
                            <a href="<?=site_url('login/logout')?>" class="logout btn btn-default red-button-style">退出</a>                     
                    </form>
                        
                        
                </div><!-- /.navbar-collapse -->
              </div>
            </nav>
            
     
	<div id="bar">
		<div class="top1" style="border-bottom-style:solid; border-width:4px">
		<img src="img/cart/cart.jpg" class="cart">
		<img src="img/cart/all_pro.jpg" class="all">
		</div>
	</div>
	
	<div id="content">
		<div class="full_mess">
		<input type="checkbox" name="check" class="check checkall">
		<ul >
			<li class="l1">
			商品信息
			</li>
			<li class="l2">
			单价
			</li>
			<li class="l3">
			数量
			</li>
			<li class="l4">
			金额
			</li>
		</ul>
		</div>
		<?php echo form_open('cart/update'); ?>
		<?php $i = 1; ?>
		<?php foreach ($this->cart->contents() as $items): ?>
		<?php echo form_hidden('rowid[]', $items['rowid']); ?>
		<div class="order1">
		<input type="checkbox" name="check1" class="check1 checkall">
			<div class="c1" style="border-style:solid; border-width:3px; ">
			<img src="img/book/steve-jobs.png" class="book1" width="88" height="140">
			<ul>
				<li class="b1_tit">
				<?php echo $items['name']; ?>
				</li>
				<li class="b1_author">
				    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                    <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?>        
                    <?php endforeach; ?>  
                    <?php endif; ?>
				</li>
				<li class="b1_price">
				<?php echo $this->cart->format_number($items['price']); ?>
				</li>
				<li  class="b1_am">
				￥<?php echo $this->cart->format_number($items['subtotal']); ?>
				</li>
				<div class="add_min">
				<?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
				</div>
			</ul>
			</div>
		</div>
		<?php $i++; ?>
        <?php endforeach; ?>
		
		
		
		<div class="info">
				<p style="font-size:22px;" class="n">合计 ：<font color="#890018">￥ <?php echo $this->cart->format_number($this->cart->total()); ?></font></p> 
			<div class="result">
				<a href="#"><img src="img/cart/back.jpg" class="back"></a>
				
				<a href="<?=site_url('cart/empty_cart')?>"><img src="img/cart/delete.jpg" class="delete"></a>
				<a href="#"><img src="img/cart/submit_correct.jpg" class="submit"></a>
				<input type="submit" value="更新" />
				
			</div>
		</div>
		</div>
		<?php echo form_close(); ?>
	
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
    
   