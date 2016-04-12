 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
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
	<h1>Edit User Complaint</h1>

	<div id="body">
 	<?php  
     	$username       =     $data_complaint['username'];  
      	$complaint      =     $data_complaint['complaint'];  
      	$status			=     $data_complaint['status'];        
 	?>  
   	<box>
	<?php echo form_open('acontrol_complaint/edit_data'); ?>  
    <table border=0 width="45%" cellpadding="5" cellspacing="0">  
    <tr bgcolor="silver">  
    <td Colspan="3" align="center"><H3>Edit Complaint</H3></td>  
    </tr>    
    <tr>  
    <td>Username</td>  
    <td>:</td>  
    <td><input type="text" name="username" value="<?php echo $username; ?>" size="50"><?php echo form_error('username'); ?>
    </td>  
    </tr>
         
    <tr>  
    <td>Complaint</td>  
    <td>:</td>   
    <td><input type="text" name="complaint" value="<?php echo $complaint; ?>" size="50"><?php echo form_error('complaint'); ?>
    </td>  
    </tr>
    <tr>  
    <td>Status</td>  
    <td>:</td>   
    <td>
    	<input type="radio" name="status" <?php if($status == 'UNCHECKED'){ echo 'checked';}else{} ?> value="UNCHECKED">UNCHECKED  
        <input type="radio" name="status" <?php if($status == 'CHECKED'){ echo 'checked';}else{} ?> value="CHECKED">CHECKED  
    </td><?php echo form_error('status'); ?>  
    </tr>     
    <tr align="center">  
    <td colspan="3">  
    <input type="submit" value="Edit">  
    <input type="reset" value="Cancel">  
    [<a href="<?php echo base_url(); ?>index.php/acontrol_complaint">Check Complaint Data</a>]  
    </td>  
    </tr>    
    </table>  
    <?php echo form_close(); ?>
    </box>
    <?php echo anchor('adashboard','Admin Dashboard'); ?>
    </div>
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. </p>
</div>

</body>
</html>