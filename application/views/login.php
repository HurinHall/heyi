<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <base href="<?php  echo base_url();?>" />
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
        <link href="css/login.css" rel="stylesheet">
        <!-- Outer JS -->       
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
                </div><!-- /.navbar-collapse -->
              </div>
            </nav>
     
     
     
     <div>
         <img id="login-background" src="img/login-background.jpg">
     </div>
     
     <div class="row" id="login-md">
         <div class="col-lg-8">
         </div>
         <div class="col-lg-4">
             <div id="login-input">
                 <span id="login-word1">登陆</span>
                 <br>
                 <form action="<?php site_url('login/auth') ?>" method="post">
                     <span class="login-word2">账号</span>
                     &nbsp;&nbsp;&nbsp;
                     <input type="text" class="login-input" name="username" value="<?php echo set_value('username'); ?>" size="30" required="required">
                     <br><br>
                     <span class="login-word2">密码</span>
                     &nbsp;&nbsp;&nbsp;
                     <input type="password" class="login-input" name="password" value="<?php echo set_value('password'); ?>" size="30" required="required">
                     <br><br>
                     <button type="submit" class="btn btn-default login-button-style" style="float:right">登陆</button>
                 </form>
                 <span style="color: red;"><?php echo validation_errors();?></span>
             </div>
         </div>
     </div>
     
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
