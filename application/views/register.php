<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<base href="<?php  echo base_url();?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Clark YAN">
<meta name="description" content="Brief Introduction of the functionality of This
Page">
<title>Register Heyi Book Store</title>
<script type="text/javascript" src="js/regist.js"></script>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/regist.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
	<div id="first-nav-bg"></div>
	<div id="sec-nav-bg"></div>
	<div class="container">
		<nav class="navbar navbar-default first-navbar-style"
			role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?=site_url() ?>"><span
						class="firnav-font-style-chinese">合一</span></a>
				</div>

				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#"><span class="firnav-font-style-english">TextBook</span></a></li>
						<li><a href="#"><span class="firnav-font-style-english">Literature</span></a></li>
						<li><a href="#"><span class="firnav-font-style-english">Novel</span></a></li>
						<li><a href="#"><span class="firnav-font-style-english">Magazine</span></a></li>
						<li><a href="#"><span class="firnav-font-style-english">ToolBook</span></a></li>
						<li><a href="#"><span class="firnav-font-style-english">Exam</span></a></li>


					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
		</nav>
		<nav class="navbar navbar-default second-navbar-style"
			role="navigation">
			<div class="container-fluid">
				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav">
						<li><a href="#"><span class="secnav-font-style-english">Book Store</span></a></li>
					</ul>

					<form class="navbar-form navbar-right" role="search">

						<a href="<?=site_url('login/auth')?>"
							class="btn btn-default red-button-style">登录</a> <a
							href="<?=site_url('register/add')?>"
							class="btn btn-default red-button-style">注册</a>

					</form>


				</div>
				<!-- /.navbar-collapse -->
			</div>
		</nav>
		<div id="background">
			<img src="img/login.jpg" />
		</div>

		<div id="firstTitle">
			<p>賬號註冊</p>
		</div>
		<div id="secondTitle">
			<p>ACCOUNT REGISTRATION</p>
		</div>
		<div id="image">
			<img src="img/addImage.png" id="imagefile" name="imagefile"
				onclick="showImage();" />
		</div>
		<div id="title">
			<p>註冊賬號</p>
			</br>
			
		</div>
		
		<div id="form">
			<form onsubmit='return formValidator()'
				action="<?php site_url('register/add')?>" method="post">
				<table width="50%" border="0" align="center" cellspacing="2px">
					<tr>
						<th scope="row"><div id="positionLeft">
								<span>*</span> 賬號 :
							</div></th>
						<td><div id="positionRight">
								<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" required="required" />
							</div></td>
						<td><p>8-20个字符 ( a-z 0-9 A-Z )</p></td>
					</tr>
					<tr>
						<th scope="row"><div id="positionLeft">
								<span>*</span> 密碼 :
							</div></th>
						<td><div id="positionRight">
								<input type="password" name="password"
			value="<?php echo set_value('password'); ?>" size="50"
			required="required" />
							</div></td>
						<td><p>8-20个字符 ( a-z 0-9 A-Z )</p></td>
					</tr>
					<tr>
						<th scope="row"><div id="positionLeft">
								<span>*</span> 重复密碼 :
							</div></th>
						<td><div id="positionRight">
								<input type="password" name="passconf"
			value="<?php echo set_value('passconf'); ?>" size="50"
			required="required" />
							</div></td>
					</tr>
					<tr>
						<th scope="row"><div id="positionLeft">
								<span>*</span> 姓名 :
							</div></th>
						<td><div id="positionRight">
								<input type="text" name="name"
			value="<?php echo set_value('name'); ?>" size="50"
			required="required" />
							</div></td>
					</tr>
					<tr>
						<th scope="row"><div id="positionLeft">
								<span>*</span> 地址 :
							</div></th>
						<td><div id="positionRight">
								<input type="text" name="address"
			value="<?php echo set_value('address'); ?>" size="50"
			required="required" />
							</div></td>
					</tr>
					<tr>
						<th scope="row"><div id="positionLeft">
								<span>*</span> 電話 :
							</div></th>
						<td><div id="positionRight">
								<input type="telephone" name="phone"
			value="<?php echo set_value('phone'); ?>" size="50" maxlength="11"
			required="required" />
							</div></td>
					</tr>
					<tr>
						<th scope="row"><div id="email"><span>*</span> 郵箱 :</div></th>
						<td><div id="positionRight">
								<input type="email" name="email"
			value="<?php echo set_value('email'); ?>" size="50" />
							</div></td>
					</tr>
				</table>
				<div align="center"><span style="color: red; display: block;"><?php echo validation_errors(); ?></span></div><br>
				<div id="submit">
					<input name="submit" type="submit" value="確認提交" />
					<input name="reset" type="reset" value="重設" />
				</div>
				<input type="hidden" name="loginPage" value="form1" />
			</form>
			
		</div>

		<nav class="navbar" role="navigation">       
      <footer class="bs-docs-footer" role="contentinfo">
        <div class="row">   
          <div id="title" class="col-md-offset-1"><p><h3>合一書店</h3></p></div>
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