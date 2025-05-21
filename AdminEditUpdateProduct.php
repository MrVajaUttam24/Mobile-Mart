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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link type="text/css" rel="stylesheet" href="Css/AdminEditUpdateProduct_link.css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<center>
<?php
	
	$connect = mysqli_connect("localhost","root","","project_work");
	
	if(isset($_GET['delid']))
	{
		$id = $_GET['delid'];
		$del = "delete from deta where id='$id'";
		
		$res = mysqli_query($connect,$del);
		
		if($res)
		{
			echo "Record Delete Successfully";
		}
		else
		{
			echo "Error in Data Deletion";
		}
	}
?>
</head>

<body>
<font size="+3">
<form method="get">
	<table style="margin-top:50px; margin-bottom:50px" border="1" width="80%"  align="center" cellpadding="10" cellspacing="10">
    	<tr bgcolor="#FFFF00" style="color:#F00">
        	<th colspan="9" align="center">
            	<font size="+6">Edit or Delete</font>
            </th>
        </tr>
        <tr bgcolor="#FFFF00" style="color: #F00">
        	<th>
            	ID
            </th>
            <th>
            	MODEL
            </th>
            <th>
            	PICTURE
            </th>
            <th>
            	PRICE
            </th>
            <th>
            	PROCESSER
            </th>
            <th>
            	RAM & ROM
            </th>
            <th>
            	CAMERA
            </th>
            <th>
            	DELETE
            </th>
            <th>
            	UPDATE
            </th>
        </tr>



    
<?php

	$conn = mysqli_connect("localhost","root","","project_work")
	or 
	die();
	
	$sel = "select * from deta";

	$res = mysqli_query($conn,$sel);
	
	while($row = mysqli_fetch_row($res))
	{
	?>
    
    	<tr align="center">
        	<td><?php echo $row[0] ?></td>
        	<td><?php echo $row[1] ?></td>
    		<td><?php echo "<img src='$row[2]' width='100' height='100'" ?></td>
        	<td><?php echo "Rs.".$row[3] ?></td>
        	<td><?php echo $row[4] ?></td>
        	<td><?php echo $row[5] ?></td>
        	<td><?php echo $row[6]." MP" ?></td>
            <td width="150px">
            <button style="height:45px; width: 140px; font-size:22px; border-radius: 15px; background-color: #F00; font-style:normal;">
  <a href="AdminEditUpdateProduct.php?delid=<?php echo $row[0]; ?> "><i class="fa-solid fa-trash"></i> DELETE</a></button>

 </td>
            <td><button style="height:45px; width: 140px; font-size:22px; border-radius: 15px; background-color:#039;">
  <a href="AdminUpdate?updateid=<?php echo $row[0]; ?>
  "><i class="fa-solid fa-pen-nib"></i> UPDATE</a></button></td>
            
    <?php
	}
	?>
</table>
</form>

</body>
</html>
<?php include 'footer.php'?>