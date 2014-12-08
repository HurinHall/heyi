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
        <link href="css/productInfo.css" rel="stylesheet">
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
				
			}
			$('.addcart').click(function(e) {
				e.preventDefault();
				thisHref=$(this).attr('href');
				if(confirm('加入购物车？')) {
					window.location = thisHref;
				}
				
			}


			);
		})
    </script>
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
     
     <div id="under-search-bar">
         <img src="img/general-searchBar-background.jpg" height="50%" width="100%">
     </div>
     
     <div class="row" id="searchBar">
         <div class="col-lg-10 col-lg-offset-2">
             <form class="navbar-form" role="search">
                 <div class="input-group">
                     <input type="text" id="searchBar-btn" class="form-control" readonly="true" value="类别">
                     <span class="input-group-btn">
                         <div class="btn-group">
                             <button type="button" class="btn red-button-style2 dropdown-toggle" data-toggle="dropdown">
                                 <span class="caret"></span>
                                 <span class="sr-only">Toggle Dropdown</span>
                             </button>
                             <ul class="dropdown-menu searchBar-list-style" role="menu">
                               <li><a href="#" onclick="document.getElementById('searchBar-btn').value='课本'"><span class="secnav-font-style-chinese">课本</span></a></li>
                               <li><a href="#" onclick="document.getElementById('searchBar-btn').value='文学'"><span class="secnav-font-style-chinese">文学</span></a></li>
                               <li><a href="#" onclick="document.getElementById('searchBar-btn').value='小说'"><span class="secnav-font-style-chinese">小说</span></a></li>
                               <li><a href="#" onclick="document.getElementById('searchBar-btn').value='杂志'"><span class="secnav-font-style-chinese">杂志</span></a></li>
                               <li><a href="#" onclick="document.getElementById('searchBar-btn').value='工具'"><span class="secnav-font-style-chinese">工具</span></a></li>
                               <li><a href="#" onclick="document.getElementById('searchBar-btn').value='考试'"><span class="secnav-font-style-chinese">考试</span></a></li>
                             </ul>
                         </div>
                     </span>
                     <input type="text" class="form-control" style="width:480px;">
                     <span class="input-group-btn">
                         <button class="btn btn-default red-button-style" type="button">搜索</button>
                     </span>
                 </div>
             </form>
         </div>
     </div>
     
     <div id="md-part">
         <p><span class="md-red-words-chinese">商品信息</span></p>
         <div class="row">
             <div class="col-md-2">
                 <img id="product-pic" src="img/book/steve-jobs.png">
             </div>
             <div class="col-md-4">
                 <span class="product-titile">Steve Jobs</span><br>
                 <span class="product-author">Walter Isaacson(作者)</span><br>
                 <span class="product-price"><input type="text" id="price" readonly="true" value="￥ 173.00" style="width:60%;"></span>
                 <span class="product-storedNum">库存：<input type="text" id="stored-num" readonly="true" value="100" style="width:40px;"></span><br><br>
                 <button type="button" onclick="document.getElementById('num-to-buy').value = document.getElementById('num-to-buy').value - 1;"><span class="glyphicon glyphicon-minus"></span></button>
                 <input type="text" id="num-to-buy" value="1" style="border:0;width:20px;">
                 <button type="button" onclick="document.getElementById('num-to-buy').value = parseInt(document.getElementById('num-to-buy').value)+parseInt(1);"><span class="glyphicon glyphicon-plus"></span></button><br><br>
                 <a href="<?=site_url('detail/addtocart')  ?>" class="addcart"><button class="btn btn-default red-button-style" type="button" style="width:150px;">加入购物车</button></a>
             </div>
         </div>
         
         <p><span class="md-black-words-chinese1">商品简介</span></p>
         <p><span class="md-black-words-chinese2">编辑推荐</span></p>
         <p>
             <span class="md-black-words-chinese2">
	         《史蒂夫·乔布斯傳》是史蒂夫·喬布斯唯一授權的官方傳記，在2011年上半年由美國出版商西蒙舒斯特對外發佈出版消息以來，備受全球媒體和業界矚目，《史蒂夫喬布斯傳》的全球出版日期最終確定為2011年10月24日，簡體中文版也于同日上市。史蒂夫·喬布斯是一位極具創造力企業家，史蒂夫·喬布斯有如過山車般的精彩人生和犀利激越的性格，充滿追求完美和誓不罷休的激情，史蒂夫·喬布斯創造出個人電腦、動畫電影、音樂、手機、平板電腦以及數字出版等6大產業顛覆性變革。史蒂夫·喬布斯的個性經常......
             </span>
         </p>
         <p><span class="md-blue-words-chinese"><a href="#">查看所有商品描述</a></span></p>
         <div id="recommended">
	         <p><span class="md-red-words-chinese">合一推荐</span></p>
	         <div class="row">
	             <div class="col-md-2">
	                 <img id="recommended-1" class="recommended-book" src="img/book/against-the-grain.png">
	             </div>
	             <div class="col-md-2">
	                 <img id="recommended-2" class="recommended-book" src="img/book/with-these-hands.png">
	             </div>
	             <div class="col-md-2">
	                 <img id="recommended-3" class="recommended-book" src="img/book/the-12-magic-slides.png">
	             </div>
	             <div class="col-md-2">
	                 <img id="recommended-4" class="recommended-book" src="img/book/business-adventures.png">
	             </div>
	             <div class="col-md-2">
	                 <img id="recommended-5" class="recommended-book" src="img/book/capital-in-the-twenty-first-century.png">
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
    
   