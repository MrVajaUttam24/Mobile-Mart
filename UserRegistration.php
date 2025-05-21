<?php include('UserHeader.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="Css/MyUser_Registration_link.css" />

</head>

<body background="uploads/phone.jpg" text="#FFFFFF" style="background-size:cover"><center>
<font size="+6">
<form method="post">
	<table align="center" cellpadding="35" cellspacing="35" width="60%" style="margin-bottom:50px; margin-top:50px; outline:solid white 5px; border-radius:25px">
    	<tr>
        	<th colspan="2">
            	User Registation
            </th>
        </tr>
        <tr>
        	<th>
            	Name
            </th>
            <td align="center">
            	<input type="text" name="nm" style="height:40px; width:220px; font-size:22px"/>
            </td>
        </tr>
        <tr>
        	<th>
            	Surname
            </th>
            <td align="center">
            	<input type="text" name="snm" style="height:40px; width:220px; font-size:22px" />
            </td>
        </tr>
		<tr>
        	<th>
            	Password
            </th>
            <td align="center">
            	<input type="password" name="pass" style="height:40px; width:220px; font-size:22px"/>
            </td>
        </tr>
		<tr>
        	<th>
            	Email
            </th>
            <td align="center">
            	<input type="email" name="eml" style="height:40px; width:220px; font-size:22px"/>
            </td>
        </tr>
		<tr>
        	<th>
            	Birthdate
            </th>
            <td align="center">
            	<input type="date" name="bdate" style="height:40px; width:220px; font-size:22px"/>
            </td>
        </tr>
		<tr>
        	<th>
            	City
            </th>
            <td align="center">
            	<input type="text" name="ct" style="height:40px; width:220px; font-size:22px"/>
            </td>
        </tr>
		<tr>
        	<th>
            	Moblie No
            </th>
            <td align="center">
            	<input type="text" name="mob" style="height:40px; width:220px; font-size:22px"/>
            </td>
        </tr>
		<tr>
        	<th>
            	Gender
            </th>
            <td align="center">
            	<input type="radio" name="gender" value="male" / style="height:20px; width:20px"> Male &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="female" style="height:20px; width:20px"/> Female
            </td>
        </tr>
		<tr>
        	<th>
            	Address
            </th>
            <td align="center">
            	<input type="text" name="add" style="height:40px; width:220px; font-size:22px"/>
            </td>
        </tr>
        <tr>
        	<td align="center" colspan="2">
            	<input type="submit" name="sub" style="height:50px; width:120px; font-size:22px; color:#FFF; border:none; border-radius:20px; background-color:#00F" />
            </td>
        </tr>
    </table>
    
<?php

	if(isset($_POST['sub']))
	{
		$conn = mysqli_connect
		('localhost','root','','project_work')
		
		or
		
		die('Connection Fail'.mysqli_connect_error());
		
		$nam = $_POST['nm'];
		$sir = $_POST['snm'];
		$psw = $_POST['pass'];
		$eml1 = $_POST['eml'];
		$bdate1 = $_POST['bdate'];
		$ct1 = $_POST['ct'];
		$mob1 = $_POST['mob'];
		$gen1 = $_POST['gender'];
		$add1 = $_POST['add'];
		
		$str = "insert into user_data(name,surname,password,email,birthdate,city,contact,gender,address) values('$nam','$sir','$psw','$eml1','$bdate1',
		'$ct1','$mob1','$gen1','$add1')";
		
		$res = mysqli_query($conn,$str);
		
		echo $str;
		die();

		if($res)
		{
			echo "<center>Record Inserted";
			header("Location:User_Login.php");		
		}
		else
		{
			echo "<center>Sorry! Record Not Inserted";
		}
	}
?>
</form>
</body>
</html>
<?php include('footer.php');?>