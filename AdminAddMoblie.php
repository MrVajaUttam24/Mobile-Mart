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
<html>
	<head>
    	<title></title>
    </head>
    <body background="uploads/phone.jpg" style="background-repeat:no-repeat; background-size:cover" text="#FFFFFF">
	<center>
	<form method="post" enctype="multipart/form-data;" >
    <table cellpadding="25" cellspacing="25" align="center" width="50%" style="outline:solid 3px white; border-radius:25px; margin-bottom:50px; margin-top:50px">
    	<tr>
        	<th colspan="2">
            <font size="+5">
            	Add Moblie
            </th>
        </tr>
        <tr>
        	<th>
            <font size="+3">
            	Model
            </th>
            <td width="50%">
            	<input type="text" name="mod" style="height:35px; width:200px; font-size:22px">
            </td>
        </tr>
        <tr>
        	<th>
            <font size="+3">
            	Picture
            </th>
            <td>
            	<input type="file" name="sel" style="height:35px; width:200px; font-size:22px">
            </td>
        </tr>
        <tr>
        	<th>
            <font size="+3">
            	Price
            </th>
            <td>
            	<input type="text" name="pri" style="height:35px; width:200px; font-size:22px">
            </td>
        </tr>
        <tr>
        	<th>
            <font size="+3">
            	Procceser
            </th>
            <td>
            	<input type="text" name="pro" style="height:35px; width:200px; font-size:22px">
            </td>
        </tr>
        <tr>
        	<th>
            <font size="+3">
            	Ram & Rom
            </th>
            <td>
            	<input type="text" name="store" style="height:35px; width:200px; font-size:22px">
            </td>
        </tr>
        <tr>
        	<th>
            <font size="+3">
            	Camara
            </th>
            <td>
            	<input type="text" name="cem" style="height:35px; width:200px; font-size:22px">
            </td>
        </tr>
        <tr>
        	<td align="center" colspan="2">
            	<input type="submit" name="sub" style="background-color:#00F; color:#FFF; width:100px; height:40px; border:none; border-color:#FFF; border-radius:10px; font-size:20px">
            </td>
        </tr>
    </table>
    
<?php
	
			if(isset($_POST['sub']))
			{
			$conn = mysqli_connect("localhost","root","","project_work")
			or
			die();
			
			$mod = $_POST['mod'];
			
			$filename = $_FILES["sel"]["name"];
			
			$temp = $_FILES["sel"]["tmp_name"];
			
			$target_file = "uploads/".$filename;
			
			move_uploaded_file($temp,$target_file);
			
			$price = $_POST['pri'];
			$proc = $_POST['pro'];
			$ram = $_POST['store'];
			$cam = $_POST['cem'];
			
			$str = "insert into deta(model,picture,price,	processer,ram_rom,camera) values('$mod','$target_file',$price,'$proc','$ram','$cam')";
				
			$res=mysqli_query($conn,$str);
			
			if($res)
			{
				echo "Form Done";
				header("Location:AdminAddMoblie.php");	
			}
			else
			{
				echo "Form Not Done";
			}
	}
?>

    </form>
    
    </body>
</html>
<?php include 'footer.php'?>