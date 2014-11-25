<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register Page</title>

</head>
<body>

<fieldset style="width: 350px;" >
<legend>Registation</legend>
<form action="<?php site_url('register/add')?>" method="post">

<h5>*用户名</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" required="required"/>

<h5>*密码</h5>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" required="required"/>

<h5>*再次输入密码</h5>
<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" required="required"/>

<h5>*收货地址</h5>
<input type="text" name="address" value="<?php echo set_value('address'); ?>" size="50" required="required"/>

<h5>*电话</h5>
<input type="telephone" name="phone" value="<?php echo set_value('phone'); ?>" size="50" maxlength="11" required="required" />

<h5>*邮箱</h5>
<input type="email" name="email" value="<?php echo set_value('email'); ?>" size="50" />

<div><input type="submit" value="注册" /> <input type="reset" value="重置"></div>
</form>
<?php echo validation_errors(); ?>
</fieldset>
</body>
</html>