<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<base href="<?php  echo base_url();?>" />
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="CSS/css.css" />
</head>
<body>
	<div class="menu">
		<ul>
			<li style="width: 0px;"><a></a></li>
			<li class="active"><a href="<?=site_url() ?>" class="home">主页</a></li>
			<li><a href="wishlist.html" class="wishlist">欲购清单 (0)</a></li>

			<li><a href="cart.html" class="cart">购物车</a></li>
			<li><a class="checkout">付款</a></li>
        <?php
        if ($logined) {
            ?>
            <li style="float: right;"><a
				href="<?=site_url('login/logout')?>" class="logout">退出登录</a></li>
			<li style="float: right;"><a href="#" class="account"><?=$username?></a></li>
        <?php }else{?>
            <li style="float: right;"><a
				href="<?=site_url('login/auth')?>" class="login">登录</a></li>
			<li style="float: right;"><a href="<?=site_url('register/add')?>"
				class="register">注册</a></li>
        <?php }?>
    </ul>
	</div>
	<h1>合一书屋</h1>
	
	<div id="menu">
<ul>  
<li><a href="categories.html">全部</a>
<div>        
<ul>	
<li><a href="default.htm">国外书籍 (0)</a></li>
<li><a href="default.htm">国内书籍 (1)</a></li>
</ul>
</div>
</li>
<li><a href="categories.html">专业教材</a>   	
<div>
<ul>	
<li><a href="default.htm">ACCT</a></li>
<li><a href="default.htm">CST</a></li>
<li><a href="default.htm">CTV</a></li>
<li><a href="default.htm">英语</a></li>
</ul>
</div>
</li>
<li><a href="categories.html">文学</a>
<div>
<ul>	
<li><a href="default.htm">Mice and Trackballs (0)</a></li>
<li><a href="default.htm">Monitors (2)</a></li>
<li><a href="default.htm">Printers (0)</a></li>
<li><a href="default.htm">Scanners (0)</a></li>
<li><a href="default.htm">Web Cameras (0)</a></li>
</ul>
</div>
</li>
<li><a href="categories.html">小说</a></li>
<li><a href="categories.html">杂志</a></li>
<li><a href="categories.html">工具书</a></li>
<li><a href="categories.html">考试</a></li>
</ul>
</div>

	<div class="container">
		<div class="text_box_left">推荐书籍</div>
		<div class="box-product">
			<div>
				<div class="showhim">
					<div class="image">
						<a href="product.html"><img src="images/product_holder.jpg"
							alt="iMac" />
							<div class="showme">
								<div class="description_featured" style="min-height: 110px;">
									<p>Just when you thought iMac had everything, now there is even
										more. More powerful Intel Core 2 Duo processors. And more
										memory standard. ...</p>
								</div>
							</div> </a>
						<div class="name">
							<a href="#">iMac</a>
						</div>
						<div class="priced">
							<ul>
								<li>$119.50</li>
								<li><a href="#">Add to Cart</a></li>
							</ul>
						</div>
						<div style="margin-top: 24px;"></div>
					</div>
					<div class="showme"></div>
				</div>
			</div>
			<div>
				<div class="showhim">
					<div class="image">
						<a href="product.html"><img src="images/product_holder.jpg"
							alt="iPhone" />
							<div class="showme">
								<div class="description_featured" style="min-height: 110px;">
									<p>iPhone is a revolutionary new mobile phone that allows you
										to make a call by simply tapping a name or number in your
										address book, a favo...</p>
								</div>
							</div> </a>
						<div class="name">
							<a href="#">iPhone</a>
						</div>
						<div class="priced">
							<ul>
								<li>$120.68</li>
								<li><a href="#">Add to Cart</a></li>
							</ul>
						</div>
						<div style="margin-top: 24px;"></div>
					</div>
				</div>
			</div>
			<div>
				<div class="showhim">
					<div class="image">
						<a href="product.html"><img src="images/product_holder.jpg"
							alt="iPod Classic" />
							<div class="showme">
								<div class="description_featured" style="min-height: 110px;">
									<p>More room to move.With 80GB or 160GB of storage and up to 40
										hours of battery life, the new iPod classic lets you enjoy...</p>
								</div>
							</div> </a>
						<div class="name">
							<a href="#">iPod Classic</a>
						</div>
						<div class="priced">
							<ul>
								<li>$119.50</li>
								<li><a href="#">Add to Cart</a></li>
							</ul>
						</div>
						<div style="margin-top: 24px;"></div>
					</div>
					<div class="showme"></div>
				</div>
			</div>
			<div>
				<div class="showhim">
					<div class="image">
						<a href="product.html"><img src="images/product_holder.jpg"
							alt="iPod Classic" />
							<div class="showme">
								<div class="description_featured" style="min-height: 110px;">
									<p>More room to move.With 80GB or 160GB of storage and up to 40
										hours of battery life, the new iPod classic lets you enjoy...</p>
								</div>
							</div> </a>
						<div class="name">
							<a href="#">iPod Classic</a>
						</div>
						<div class="priced">
							<ul>
								<li>$119.50</li>
								<li><a href="#">Add to Cart</a></li>
							</ul>
						</div>
						<div style="margin-top: 24px;"></div>
					</div>
					<div class="showme"></div>
				</div>
			</div>
			<div>
				<div class="showhim">
					<div class="image">
						<a href="product.html"><img src="images/product_holder.jpg"
							alt="iPod Nano" />
							<div class="showme">
								<div class="description_featured" style="min-height: 110px;">
									<p>Video in your pocket. Its the small iPod with one very big
										idea: video. The worlds most popular music player now lets you
										enjoy...</p>
								</div>
							</div> </a>
						<div class="name">
							<a href="#">iPod Nano</a>
						</div>
						<div class="priced">
							<ul>
								<li>$119.50</li>
								<li><a href="#">Add to Cart</a></li>
							</ul>
						</div>
						<div style="margin-top: 24px;"></div>
					</div>
					<div class="showme"></div>
				</div>
			</div>
		</div>
	</div>
	<br>
<div class="icart-footer">
<div class="icart-footer-top">
	<div style="width:1000px; margin:0 auto;">	
	</div>
</div>
<div class="icart-footer-container">
	<div class="column_footer" style="width:350px;">
		<h3>合一书屋</h3>
<div class="footer_description">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel ante felis, aliquet sagittis lacus. Etiam in purus vitae tortor lacinia pretium. Maecenas quam diam, porttitor bibendum lacinia a, feugiat sit amet felis. Praesent ut mi justo, a volutpat ligula. Praesent sodales felis sed odio consectetur eget cursus metus mollis. Proin sollicitudin accumsan lectus a ornare...
</div>
	</div>
	
	<div class="column_footer">
		<h3>客服中心</h3>
		<ul>
		<li><a href="#">关于我们</a></li>
      		<li><a href="#">配送服务</a></li>
      		<li><a href="#">法律声明</a></li>
      		<li><a href="#">付款帮助</a></li>
      		<li><a href="#">联系我们</a></li>
      		<li><a href="#">售后服务</a></li>
      		<li><a href="#">网站导航</a></li>
		</ul>
	</div>
	
	<div class="column_footer" style="width:150px;">
		<h3>额外服务</h3>
		<ul>
      		<li><a href="#">会员优惠</a></li>
      		<li><a href="#">礼券</a></li>
      		<li><a href="#">活动</a></li>
      		<li><a href="#">特价商品</a></li>
		</ul>
	</div>	
	<div class="column_footer" style="width:150px;">
		<h3>我的账户</h3>
		<ul>
      		<li><a href="#">我的账户</a></li>
      		<li><a href="#">我的订单</a></li>
      		<li><a href="#">欲购清单</a></li>
      		<li><a href="#">收货地址</a></li>
		</ul>
</div>
		
	<div class="column_footer" style="margin-right:0px;">
		<h3>社交媒体</h3>
		<ul class="social">
			<li class="twitter"><a href="../../twitter.com/twitter">Twitter</a></li>
			<li class="facebook"><a href="../../facebook.com/Username/default.htm">Facebook</a></li>
			<li class="rss"><a href="#">RSS Feed</a></li>
			<li class="weibo"><a href="#">新浪微博</a></li>
			<li class="qq"><a href="#">腾讯微博</a></li>
		</ul>				
	</div>		
	<div class="clearfix"></div>
	</div>		
	<div class="icart-footer-bottom">
		<div style="width:1000px; margin:0 auto;">				
		<div class="icart-logo-footer"><a href="index.php"><img src="images/logo-footer.png" alt="Footer Logo"></a></div>	
			<ul>
			<li style="float:right;padding-top:10px;list-style:none;"><a href="#">&copy; Copyright &copy; 2014.United International College.<a target="_blank" href="http://www.uic.edu.hk/"></a></li>
			</ul>		
		<div class="clearfix"></div>
		</div>

</div>
</div>

	<!-- js -->
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
</body>
</html>
