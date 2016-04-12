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
	<h1>Admin Dashboard</h1>

	<div id="body">	
        
        <box>
        	<?php  
 			echo "<H3>Complaint Data</H3>";  
 			echo "<table border=1 width=60% cellpadding=2 cellspacing=0>";  
 			echo "<tr bgcolor=silver align=center>";  
 			echo "<td>Username</td>";  
 			echo "<td>Complaint</td>";  
 			echo "<td>Status</td>"; 
			echo "<td colspan=2>Choice</td>";  
 			echo "</tr>";  
 			
			foreach ($results as $row) {  
   				echo "<tr align=center>";  
   				echo "<td>$row->username</td>";  
   				echo "<td>$row->complaint</td>";  
   				echo "<td>$row->status</td>"; 
				echo "<td>"; ?><a href="<?php echo base_url(); ?>index.php/acontrol_complaint/edit/<?php echo $row->username; ?>">Edit</a></td><?php  
   				echo "<td>"; ?><a href="<?php echo base_url(); ?>index.php/acontrol_complaint/delete/<?php echo $row->username; ?>">Delete</a></td><?php 
				echo "</tr>";  
			}  
 			echo "</table>"; ?>
        </box>
     	<?php echo anchor('adashboard','Admin Dashboard'); ?>
        <?php echo anchor('acontrol_complaint','View All Complaint Data')?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. </p>
</div>

</body>
</html>