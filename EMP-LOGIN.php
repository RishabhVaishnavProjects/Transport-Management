<?php
session_start();
?>
<html>
<head>
	<style>
		.i6
		{
		 padding-top:7px;
		 padding-bottom:7px;
		}
		.i4
		{
		font-size:20px;
		font-family:Futura;
		color: white;
		}
		a
		{
		text-decoration: none;
		}
		.i5
		{
		display:inline;
		padding-right: 10px;
		padding-left: 30px;
		}
		center
		{
			color:white;
		}
		body
		{
		background: url(2.jpg);
		background-size: 1800px 1000px;
		background-repeat: no-repeat;
		}
	</style>	
</head>
<body>
	<?php error_reporting(0)?>
<center><h1><b>EMPLOYEE-LOGIN</b></h1></center>
<center><label class="i5">WELCOME:<?php echo $_SESSION['name']?></label></center>
</br>
<center>
<form method="POST" action="logout.php">
		<label class="i7"><input type="submit" value="LOGOUT" name="logout"/></label>
</form>	
</center>
	<div  class="i6" style="width:1650px;height:50px;">
		<ul>
		<li class="i5"><a href="reg1.php"><img src="reg.png" height="35px" width="35px"><label class="i4">REGISTRATION</label></a></li>
		<li class="i5"><a href="cusin.php"><img src="c1.png" height="35px" width="35px"><label class="i4">CUSTOMER-INFO</label></a></li>
		<li class="i5"><a href="empplace.php"><img src="place.png" height="35px" width="35px"><label class="i4"><label class="i4">PLACE-ORDER</label></a></li>
		<li class="i5"><a href="track2.php"><img src="track.png" height="40px" width="40px"><label class="i4"><label class="i4">TRACK-ORDER<label></a></li>
		<li class="i5"><a href="empbill.php"><img src="bill.png" height="35px" width="35px"><label class="i4"><label class="i4">GENERATE-BILL</label></a></li>
		<li class="i5"><a href="TRACK_ORDER.php"><img src="update.png" height="35px" width="35px"><label class="i4"><label class="i4">UPDATE-ORDER</label></a></li>
		<li class="i5"><a href="erequest.php"><img src="yo1.png" height="45px" width="45px"><label class="i4"><label class="i4">REQUEST</label></a></li>
		<li class="15">
		</ul>
	</div>
</body>
</html>