<!DOCTYPE html>  
<html>  
<head>  
	<meta charset="UTF-8">  
    <title>Users Complaint</title>
    
    <style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	box {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>  
<body>  

<div id="container">
    <h1>Users Sign Up Page</h1>  

    <div id="body">
		
		<?php echo form_open('register'); ?>  
     
        <box>
        <p>Username:</p>  
        <p><input type="text" name="username" value="<?php echo set_value('username'); ?>"/></p>  
        <p><?php echo form_error('username'); ?></p>
       	<p>Password:</p>  
        <p><input type="password" name="password" value="<?php echo set_value('password'); ?>"/></p>  
        <p><?php echo form_error('password'); ?></p>  
        <p>Password Confirm:</p>
        <p><input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/></p>  
        <p> <?php echo form_error('password_conf'); ?> </p>
        <p>Name:</p>  
        <p><input type="text" name="name" value="<?php echo set_value('name'); ?>"/></p>
        <p><?php echo form_error('name'); ?></p>    
        <p>Email:</p>  
        <p><input type="text" name="email" value="<?php echo set_value('email'); ?>"/></p>  
        <p><?php echo form_error('email'); ?></p>    
        <p><input type="submit" name="btnSubmit" value="Sign Up" /></p>  
        </box>     
        <p>Back to home, click <?php echo anchor('usercontrol','here'); ?></p>  
    </div>
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. </p>
</div>     
</body>  
</html> 