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
        <link href="css/index.css" rel="stylesheet">
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
            
            <div id="under-search-bar">
                <img src="img/index-under-searchBar.jpg" height="100%" width="100%">
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
            
            <div class="row">
                <div class="col-lg-6 col-lg-offset-6">
                    <span class="searchBar-ads-chinese">新开学季</span><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-7">
                     <span class="searchBar-ads-english" >New Opening Season</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-8">
                    <button type="button" class="btn btn-primary">订购课本</button>
                </div>
            </div>
            
            <!-- The main category -->
            <div id="md-category">
                <span class="md-red-words-chinese">合一书店</span>
                <div class="row">
                    <div class="col-lg-6 large-book">
                        <a href="<?=site_url('detail/index') ?>"><img id="book-md-category-1" class="book-style" src="img/book/steve-jobs.png"></a>
                    </div>
                    <div class="col-lg-6 long-book">
                        <a href="<?=site_url('detail/index') ?>"><img id="book-md-category-2" class="book-style" src="img/book/zztj.png"></a>
                    </div>
                    <div class="col-lg-3 small-book">
                        <a href="<?=site_url('detail/index') ?>"><img id="book-md-category-3" class="book-style" src="img/book/ielts-practice-tests.png"></a>
                    </div>
                    <div class="col-lg-3 small-book">
                        <a href="<?=site_url('detail/index') ?>"><img id="book-md-category-4" class="book-style" src="img/book/fundamentals-of-management.png"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 small-book">
                        <a href="#"><img id="book-md-category-5" class="book-style" src="img/book/windows-forms-programming-in-c-sharp.png"></a>
                    </div>
                    <div class="col-lg-3 small-book">
                        <a href="#"><img id="book-md-category-6" class="book-style" src="img/book/cloud-atlas.png"></a>
                    </div>
                    <div class="col-lg-3 small-book">
                        <a href="#"><img id="book-md-category-7" class="book-style" src="img/book/harry-potter-and-the-order-of-the-phoenix.png"></a>
                    </div>
                    <div class="col-lg-3 small-book">
                        <a href="#"><img id="book-md-category-8" class="book-style" src="img/book/oxford-advanced-learners-english-chinese-dictionary.png"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 small-book">
                        <a href="#"><img id="book-md-category-9" class="book-style" src="img/book/currency-wars.png"></a>
                    </div>
                    <div class="col-lg-3 small-book">
                        <a href="#"><img id="book-md-category-10" class="book-style" src="img/book/straightforward-blue.png"></a>
                    </div>
                    <div class="col-lg-3 small-book">
                        <a href="#"><img id="book-md-category-11" class="book-style" src="img/book/straightforward-red.png"></a>
                    </div>
                    <div class="col-lg-3 small-book">
                        <a href="#"><img id="book-md-category-12" class="book-style" src="img/book/deng-xiao-ping.png"></a>
                    </div>
                </div>
            </div>
            
            <!-- Categories for different kind of books -->
            <div id="md-categories">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" id="myTab">
                    <li role="presentation" class="active"><a href="#TextBook" role="tab" data-toggle="tab"><span class="md-red-words-chinese">课本</span></a>
                    </li>
                    <li role="presentation"><a href="#Literature" role="tab" data-toggle="tab"><span class="md-red-words-chinese">文学</span></a></li>
                    <li role="presentation"><a href="#Novel" role="tab" data-toggle="tab"><span class="md-red-words-chinese">小说</span></a></li>
                    <li role="presentation"><a href="#Magazine" role="tab" data-toggle="tab"><span class="md-red-words-chinese">杂志</span></a></li>
                    <li role="presentation"><a href="#ToolBook" role="tab" data-toggle="tab"><span class="md-red-words-chinese">工具</span></a></li>
                    <li role="presentation"><a href="#Exam" role="tab" data-toggle="tab"><span class="md-red-words-chinese">考试</span></a></li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="TextBook">
                    <!-- TextBook -->
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-TextBook-1" class="book-style" src="img/book/new-headway-yellow.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-TextBook-2" class="book-style" src="img/book/fundamentals-of-management.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-TextBook-3" class="book-style" src="img/book/new-headway-blue.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-TextBook-4" class="book-style" src="img/book/programming-in-c.png"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-TextBook-5" class="book-style" src="img/book/the-7-habits-of-highly-effective-people.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-TextBook-6" class="book-style" src="img/book/straightforward-red.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-TextBook-7" class="book-style" src="img/book/windows-forms-programming-in-c-sharp.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-TextBook-8" class="book-style" src="img/book/straightforward-blue.png"></a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Literature">
                    <!-- Literature -->
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Literature-1" class="book-style" src="img/book/santi.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Literature-2" class="book-style" src="img/book/hot-vision.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Literature-3" class="book-style" src="img/book/business-adventures.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Literature-4" class="book-style" src="img/book/zztj.png"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Literature-5" class="book-style" src="img/book/steve-jobs.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Literature-6" class="book-style" src="img/book/tangshi-jianshang-cidian.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Literature-7" class="book-style" src="img/book/harry-potter-and-the-order-of-the-phoenix.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Literature-8" class="book-style" src="img/book/lean-in.png"></a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Novel">
                    <!-- Novel -->
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Novel-1" class="book-style" src="img/book/harry-potter-and-the-order-of-the-phoenix.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Novel-2" class="book-style" src="img/book/heroes-of-olympus.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Novel-3" class="book-style" src="img/book/santi.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Novel-4" class="book-style" src="img/book/the-12-magic-slides.png"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Novel-5" class="book-style" src="img/book/the-feral-child.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Novel-6" class="book-style" src="img/book/the-lady-of-the-rivers.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Novel-7" class="book-style" src="img/book/the-red-queen.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Novel-8" class="book-style" src="img/book/the-time-machine.png"></a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Magazine">
                    <!-- Magazine -->
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Magazine-1" class="book-style" src="img/book/new-headway-yellow.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Magazine-2" class="book-style" src="img/book/fundamentals-of-management.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Magazine-3" class="book-style" src="img/book/new-headway-blue.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Magazine-4" class="book-style" src="img/book/programming-in-c.png"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Magazine-5" class="book-style" src="img/book/the-7-habits-of-highly-effective-people.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Magazine-6" class="book-style" src="img/book/straightforward-red.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Magazine-7" class="book-style" src="img/book/windows-forms-programming-in-c-sharp.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Magazine-8" class="book-style" src="img/book/straightforward-blue.png"></a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ToolBook">
                    <!-- ToolBook -->
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-ToolBook-1" class="book-style" src="img/book/new-headway-yellow.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-ToolBook-2" class="book-style" src="img/book/fundamentals-of-management.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-ToolBook-3" class="book-style" src="img/book/new-headway-blue.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-ToolBook-4" class="book-style" src="img/book/programming-in-c.png"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-ToolBook-5" class="book-style" src="img/book/the-7-habits-of-highly-effective-people.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-ToolBook-6" class="book-style" src="img/book/straightforward-red.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-ToolBook-7" class="book-style" src="img/book/windows-forms-programming-in-c-sharp.png"></a>
                            </div><
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-ToolBook-8" class="book-style" src="img/book/straightforward-blue.png"></a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Exam">
                    <!-- Exam -->
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Exam-1" class="book-style" src="img/book/new-headway-yellow.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Exam-2" class="book-style" src="img/book/fundamentals-of-management.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Exam-3" class="book-style" src="img/book/new-headway-blue.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Exam-4" class="book-style" src="img/book/programming-in-c.png"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Exam-5" class="book-style" src="img/book/the-7-habits-of-highly-effective-people.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Exam-6" class="book-style" src="img/book/straightforward-red.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Exam-7" class="book-style" src="img/book/windows-forms-programming-in-c-sharp.png"></a>
                            </div>
                            <div class="col-lg-3 small-book">
                                <a href="#"><img id="Categories-Exam-8" class="book-style" src="img/book/straightforward-blue.png"></a>
                            </div>
                        </div>
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
