<?php 
session_start();
	if($_SESSION['username'])
	{
		
	}
	else
	{
		header('Location: UserLogin.php');
	}
?>
<?php include 'UserHeader.php' ?>
<br /><br /><br />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="Css/Detail_Product_link.css" />

</head>

<body background="uploads/phone.jpg">
<center>
<?php
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$conn = mysqli_connect("localhost","root","","project_work")
	or
	die();

	$str = "select * from deta where id=$id";
	
	$res = mysqli_query($conn,$str);
	$row = mysqli_fetch_array($res);
	
	echo "<form action='PlaceOrder.php' style='border-radius:25px'><table width='250px' cellpadding='40' cellspacing='25' style=' border-radius:25px; outline: solid 5px white; margin-top:50px; margin-bottom:50px'>	
	
	<tr style='font-size: 50px'><td colspan='2' align='center'> $row[1]</td></tr><tr><td rowspan='5' style='background-color:white'>";
		
        echo "<img src='$row[2]' height='550px' width='500px'> </td></tr>";
		
		echo "<tr style='font-size: 30px'><td align='center'>Price: $row[3] Rs</td></tr>"; 
		
		echo "<tr style='font-size: 30px'><td align='center'>Processor: $row[4] </td></tr>";
		
		echo "<tr style='font-size: 30px'><td align='center'>Storage: $row[5] </td></tr>";
		
		echo "<tr style='font-size: 30px'><td align='center'>Camera: $row[6] </td></tr>";
		
       echo "<tr><td colspan='2' align='center'>"; ?>
       
       <a href="PlaceOrder.php?id=<?php echo $row[0]; ?> ">
       <input type='button' value='Place Order' name="plcodr" style='height:70px; width:225px; font-size: 30px; background-color:#00F; color:#FFF; border:none; border-radius:25px'></td></a>
       <?php
	   
	   echo "</tr></table><br><br>";
}
?>
</body>
</html>
<?php include('footer.php'); ?>