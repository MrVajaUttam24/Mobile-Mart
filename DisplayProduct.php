<?php include 'UserHeader.php' ?>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link type="text/css" rel="stylesheet" href="Css/DisplayProduct_link.css" />

</head>

<body text="white">
<font size="+6">
<center>
    <table border="1">
    <tr>
</font>
<br /><br />
<?php
if(isset($_POST['search']))
{
	$conn= mysqli_connect("localhost","root","","project_work")
	 or die();
	 
	$mod = $_POST['mob'];
	$count=0;
	
	$sel="select * from deta where model like '$mod%'";
	$res=mysqli_query($conn,$sel);
	
	while($row= mysqli_fetch_row($res))
	{
		$count++;
		
		
		
        echo "<center><img src='$row[2]' height='600px' width='600px'></center></td></tr>";
		
       echo "<tr><td colspan='2' align='center'>"; ?>
       
       <a href="Detail_Product.php?id=<?php echo $row[0]; ?> ">
       <input type='button' value='View Detail' style='height:70px; width:225px; font-size: 30px'></td></a>
       <?php
	   
	  
	}
}
else
{
	$conn= mysqli_connect("localhost","root","","project_work")
	 or die();
	$count = 0;
	$sel="select * from deta";
	$res=mysqli_query($conn,$sel);
	
	while($row= mysqli_fetch_row($res))
	{
			$count++;
			
		echo "<form action='Detail_Product.php'><table width='800px' cellpadding='30' cellspacing='15' style='align='center' border='2' bordercolor='#FFFFFF'>
		<tr style='font-size: 50px'><td align='center'>
		$row[1]</td></tr>
		<tr><td>";
		
        echo "<center><img src='$row[2]' height='600px' width='600px'></center></td></tr>";
		
       echo "<tr><td align='center'>"; ?>
        	<a href="Detail_Product.php?id=<?php echo $row[0]; ?> ">
            <input type="button" value='View Detail' style='height:70px; width:225px;font-size: 30px;'>
			</td></a>
	
	<?php
		echo "</tr></table></form><br>";
	}
}
	?>

</body>
</html>
<?php include 'footer.php'?>