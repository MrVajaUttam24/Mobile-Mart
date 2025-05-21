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
<?php include 'AdminHeader.html'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="Css/DisplayOrder_link.css" />

</head>
<center>
<body text="#FF0000" background="../../../Users/Uttam/Documents/Unnamed Site 3/5 (2).jpg"> 

<form>
	<table align="center" border="1" cellpadding="15" cellspacing="15" width="80%" style="margin-bottom:50px; margin-top:50px">
    <tr bgcolor="#FFFF00">
    	<th class="ttl" align="center" colspan="7" height="100">
        	ORDER HISTORY
        </th>
    </tr>
    <tr bgcolor="#FFFF00" class="st">
    	<th>
        	ID
    	</th>
        <th>
        	NAME
        </th>
        <th>
        	ADDRESS
        </th>
        <th>
        	CONTACT NO.
        </th>
        <th>
        	MODEL
        </th>
        <th>
        	IMAGE
        </th>
        <th>
        	PRICE
        </th>
    </tr>
<?php
	$conn = mysqli_connect("localhost","root","","project_work")
	or
	die();
	
	$sel = "select * from place_order order by id";
	
	$res = mysqli_query($conn,$sel);
	
	while($row = mysqli_fetch_row($res))
	{
		
		?>
        <tr class="bgfn">
        	<td align="center"><?php echo $row[0] ?></td>
            <td align="center"><?php echo $row[1] ?></td>
            <td align="center"><?php echo $row[2] ?></td>
            <td align="center"><?php echo $row[3] ?></td>
            <td align="center"><?php echo $row[4] ?></td>
            <td align="center"><?php echo "<img src='$row[5]' width='100px' height='100px'" ?></td>
            <td align="center"><?php echo ' Rs. '.$row[6]; ?></td>
        </tr>
        <?php
	}
?>
	</table>
</form>
</body>
</html>
<?php include 'footer.php'?>