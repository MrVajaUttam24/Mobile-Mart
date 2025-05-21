<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="Css/UserLogin_link.css">
</head>
<body style="background-image:url(uploads/phone.jpg); background-size:cover">
    
    <div class="container">
        <div class="login-box">
            <font size="34px"><h2> Admin Login</h2></font>
            <form method="post">
                <div class="user-box">
                    <input type="text" style="font-size:28px" name="username" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" style="font-size:28px" name="password" required>
                    <label>Password</label>
                </div>
             
               
               
    
                    <input type="submit" name="login" style="position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 20px;
    text-decoration: none;
    
    overflow: hidden;
    transition: .5s;
    
    letter-spacing: 4px;
    border: 1px solid whitesmoke;
    border-radius: 5px;
    left: 30%;
    background: #03e9f4;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
">

            </form>
        </div>
    </div>
</body>
</html>


<?php

if(isset($_POST['login']))
	{
	$conn = mysqli_connect("localhost","root","","project_work")
	or
	die();
	
	$nm = $_POST['username'];
	$_SESSION['username'] = $nm;
	$pass = $_POST['password'];
	
	$str = "select * from admin_login where a_username='$nm' AND a_password='$pass'";

	$res = mysqli_query($conn,$str);
	$row = mysqli_fetch_array($res);
	
	if(isset($row))
	{
		header("Location:AdminAddMoblie.php");		
	}
	else
	{
		echo "<script>alert('Username OR Password is Wrong');</script>";
	}
}

?>