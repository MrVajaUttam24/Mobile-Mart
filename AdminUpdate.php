<?php include 'AdminHeader.html'?>
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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Record</title>
<link type="text/css" rel="stylesheet" href="Css/admin_update_link.css" />
</head>

<body background="uploads/phone.jpg" text="#FFFFFF" style="background-size:cover">
<font size="+6"><center>
<?php
$conn = mysqli_connect("localhost", "root", "", "project_work");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$msg = "";

if (isset($_POST['update'])) {
    $mod = $_POST['model'];
    $price = $_POST['price'];
    $pro = $_POST['processer'];
    $sto = $_POST['ram_rom'];
    $cam = $_POST['camera'];

    $target_dir = "uploads/";
    $filename = $_FILES['fileToUpload']['name'];
    $tempname = $_FILES['fileToUpload']['tmp_name'];
    $target_file = $target_dir . basename($filename);

    $id = $_GET['updateid'];

    if ($filename == "") {
        $stmt = $conn->prepare("UPDATE deta SET model=?, price=?, processer=?, ram_rom=?, camera=? WHERE id=?");
        $stmt->bind_param("sssssi", $mod, $price, $pro, $sto, $cam, $id);
    } else {
        $stmt = $conn->prepare("UPDATE deta SET model=?, price=?, processer=?, ram_rom=?, camera=?, picture=? WHERE id=?");
        $stmt->bind_param("ssssssi", $mod, $price, $pro, $sto, $cam, $target_file, $id);
        if (move_uploaded_file($tempname, $target_file)) {
            $msg = "File uploaded successfully.";
        } else {
            $msg = "Failed to upload file.";
        }
    }

    if ($stmt->execute()) {
        $msg = "Record updated successfully";
		header("Location:AdminEditUpdateProduct.php");	
    } else {
        $msg = "Error updating record: " . $stmt->error;
    }
    
    $stmt->close();
}

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $stmt = $conn->prepare("SELECT * FROM deta WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
}

$conn->close();
?>

<div style="text-align: center; color: red;">
    <?php echo htmlspecialchars($msg); ?>
</div>

<form style="margin-top:35px; outline:solid 2px #FFFFFF; width:50%; border-radius:25px" method="post" enctype="multipart/form-data">
    <table align="center" cellpadding="50" cellspacing="25" style="margin-bottom:50px; margin-top:50px">
        <tr>
            <th colspan="2" align="center">ADMIN CHANGE DETAILS</th>
        </tr>
        <tr>
            <th>Model Name</th>
            <td align="center"><input style="height:40px; width:250px; font-size:18px" type="text" name="model" value="<?php echo htmlspecialchars($data['model']); ?>" /></td>
        </tr>
        <tr>
            <th>Picture</th>
            <td>
                <?php if (!empty($data['picture'])): ?>
                    <center><img src="<?php echo htmlspecialchars($data['picture']); ?>" height="150" width="150" /></center>
                <?php endif; ?>
                <center><input type="file" name="fileToUpload" id="fileToUpload"/></center>
            </td>
        </tr>
        <tr>
            <th>Price</th>
            <td align="center"><input style="height:40px; width:250px; font-size:18px" type="text" name="price" value="<?php echo htmlspecialchars($data['price']); ?>" /></td>
        </tr>
        <tr>
            <th>Processor</th>
            <td align="center"><input style="height:40px; width:250px; font-size:18px" type="text" name="processer" value="<?php echo htmlspecialchars($data['processer']); ?>" /></td>
        </tr>
        <tr>
            <th>Ram & Rom</th>
            <td align="center"><input style="height:40px; width:250px; font-size:18px" type="text" name="ram_rom" value="<?php echo htmlspecialchars($data['ram_rom']); ?>" /></td>
        </tr>
        <tr>
            <th>Camera</th>
            <td align="center"><input style="height:40px; width:250px; font-size:18px" type="text" name="camera" value="<?php echo htmlspecialchars($data['camera']); ?>" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input style="height:50px; width:150px; font-size:18px; background-color:#00F; color:#FFF; border: none; border-radius: 15px" type="submit" value="UPDATE" id="update" name="update"/>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
<?php include 'footer.php'?>