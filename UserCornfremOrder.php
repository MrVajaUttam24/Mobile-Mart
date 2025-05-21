<?php include 'UserHeader.php' ?>
<?php 
session_start();
	if($_SESSION['username'])
	{
		
	}
	else
	{
		header('Location: AdminLogin.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link type="text/css" rel="stylesheet" href="Css/UserCornfremOrder_link.css" />

</head>
<center>
<body background="uploads/phone.jpg" style="background-size:cover">
	<table align="center" width="800px" bgcolor="#FFFFFF" height="400px" style="border-radius:25px; margin-bottom:50px; margin-top:50px">
    	<tr>
        	<td align="center"><b><font size="+3">
		<label style="color:#000">Thank You</label>
        <br /><font color="#FF0000">
 <?php
 		print $_SESSION["username"];
 ?>
 		</font>
        <br /><label style="color:black">for order.<br /><br />
    	Your Ordered
        <br /></label>
        <font color="#FF0000">
 <?php
 		print $_SESSION["moblie"];
 ?>  
 		</font>
        <br /><label style="color:black">Will Be Deliver Soon.<br /><br />
    	Please Visit Again.</label>
        </font></b></td>
        </table>

</body>
</html>
<?php include('footer.php'); ?>