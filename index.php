<?php include 'Home_PageHeader.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
*
	{
		padding:0;
		margin:0;
		box-sizing:border-box;
	}
	
.stop
	{
		height:650px;
		width:100%;
		background-image:url(images/image10.jpg);
		background-position:center center;
		background-repeat:no-repeat;
		background-size:100% 100%;
		animation-duration:25s;
		animation-name: myani;
		animation-timing-function: linear;
		animation-iteration-count:infinite;
	}
	@keyframes myani
	{
		0%{ background-image:url(images/image1.jpg) ;} 
		20%{ background-image:url(images/image6.jpg) ;}
		40%{ background-image:url(images/image7.jpg) ;}
		60%{ background-image:url(images/image8.jpg) ;}
		80%{ background-image:url(images/image9.jpg) ;}
	}
</style>

</head>

<body>
	<div class="stop">		
	</div>
</body>
</html>
<?php include 'footer.php'?>