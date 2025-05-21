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
<?php
if(isset($_GET['id']))
	{
	$id = $_GET['id'];
	$conn = mysqli_connect("localhost","root","","project_work")
	or
	die();
	
	$str = "select * from deta where id=$id";
	
	$res = mysqli_query($conn,$str);
	$newdata = mysqli_fetch_array($res,MYSQLI_ASSOC);

	$mod = $newdata['model'];
	$pict = $newdata['picture'];
	$price = $newdata['price'];
	$_SESSION['moblie'] = $mod;
	}
	

if(isset($_SESSION['username']))
{	
	$eml = $_SESSION['username'];
	
	$conn2 = mysqli_connect("localhost","root","","project_work")
	or
	die();
	
	$str2 = "select * from user_data where name='$eml'";

	$res2 = mysqli_query($conn2,$str2);
	$mydata = mysqli_fetch_array($res2,MYSQLI_ASSOC);
	 
	$nm = $mydata['name'];
	$cont = $mydata['contact'];
	$add = $mydata['address'];
}

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$conn3 = mysqli_connect("localhost","root","","project_work")
	or
	die();
	
	$str3 = "insert into place_order(name,address,contact,model,product,price) values('$nm','$add','$cont','$mod','$pict','$price')";
	
	$res3 = mysqli_query($conn3,$str3);
}
?>
<html>
	<head>
    	<title></title>
        <link type="text/css" rel="stylesheet" href="Css/PlaceOrder_link.css" />
    </head>
<body background="uploads/phone.jpg" style="background-repeat:no-repeat; background-size:cover" text="#FFFFFF"><center>
<font size="+5" style="outline:5px solid white">
<form action="UserCornfremOrder.php" method="post" style="outline:5px solid white; border-radius:25px; width:55%;">
	<table align="center"  width="80%" cellpadding="25" cellspacing="25">
    	<tr>
        	<th colspan="2">
            	<font size="+5">Place Order</font>
            </th>
        </tr>
        <tr>
        	<th>
            	<font size="+3">Name</font>
            </th>
            <td width="60%">
            	<input type="text" name="dis_mod" 
                value="<?php echo $nm; ?>" style="height:35px; width:250px; font-size:20px" />
            </td>
        </tr>
        <tr>
        	<th>
            	<font size="+3">Concact No</font>
            </th>
            <td>
            	<input type="text" name="dis_mod" 
                value="<?php echo $cont; ?>" style="height:35px; width:250px; font-size:20px"/>
            </td>
        </tr>
        <tr>
        	<th>
            	<font size="+3">Addess</font>
            </th>
            <td>
            	<input type="text" name="dis_mod" 
                value="<?php echo $add ?>" style="height:35px; width:250px; font-size:20px"/>
            </td>
        </tr>
        <tr>
        	<th>
            	<font size="+3">Moblie Model Name</font>
            </th>
            <td>
            	<input type="text" name="dis_mod"
                value="<?php echo $mod; ?>" style="height:35px; width:250px; font-size:20px"/>
            </td>
        </tr>
        <tr>
        	<th>
            	<font size="+3">Product</font>
            </th>
            <td>
            	<?php echo "<img src='$pict' width='200' height='200'"; ?>";
            </td>
        </tr>
        <tr>
        	<th>
            	<font size="+3">Price</font>
            </th>
            <td>
            	<input type="text" name="dis_pri" 
                value="<?php echo $price; ?>" style="height:35px; width:250px; font-size:20px"/>
            </td>
        </tr>
        </tr>
        <tr>
            <td colspan="2" align="center">
            	<a href="UserCornfremOrder.php"><b><input type="submit" value="Place Order" name="dis_mod" style="height:40px; width:130px; font-size:16px; color:#FFF; background-color:#00F; border: none; border-radius: 15px" /></b></a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php include 'footer.php'?>