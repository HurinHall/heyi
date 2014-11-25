<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
</head>
<body>
    <fieldset style="width: 250px">
        <legend>登录</legend>
        <form action="<?php site_url('login/auth') ?>" method="post">
        
                <h5>用户名</h5>
                <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="30" required="required"/>
           
                <h5>密码</h5>
                <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="30" required="required"/>
                <div><input type="submit" value="Login"></div>
             
        </form>
    </fieldset>
    <?php echo validation_errors();?>
</body>
</html>