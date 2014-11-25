<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
</head>
<body>
    <fieldset>
        <legend>Signin</legend>
        <form action="<?php site_url(login/auth) ?>" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Login"></td>
            </tr>
        </table>   
        </form>
    </fieldset>
    <?php echo validation_errors();?>
</body>
</html>