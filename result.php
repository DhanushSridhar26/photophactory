<?php
session_start();



?>
<html>
<head>
<title>Photo Phactory:Gallery</title>
<link rel="stylesheet" href="ppjoinu.css" />
<script src="pphome.js" >
</script>



</head>
<body class="main">


<div class="navbar">
<div class="section"><a href="pphome.html" >Home</a>
<a href="ppgal.html" >Gallery</a>
<a href="ppabtus.html" >About us</a>
<a href="ppjoinus.html" >Join Us</a>
</div>
<div class="section">
	<span class="txt">Your Following Details Has been Registered.....</span><br> 
	<div class="align">

<span class="txt" > Name : </span><span class="tx" ><?php echo $_SESSION['uname'] ?></span><br>

<span class="txt" > Age :</span> <span class="tx" ><?php echo $_SESSION['age'] ?></span><br>
<span class="txt" > Gender :</span><span class="tx" > <?php echo $_SESSION['gen'] ?></span><br>
<span class="txt" > E-Mail :</span> <span class="tx" ><?php echo $_SESSION['email'] ?></span><br>
<span class="txt" > Course Chosen :</span> <span class="tx" ><?php echo $_SESSION['course'] ?></span><br>
<span class="txt" > You are taking Course through :</span> <span class="tx" ><?php echo $_SESSION['type'] ?></span><br>
<span class="txt" > Availability of Camera :</span> <span class="tx" ><?php echo $_SESSION['cam'] ?></span><br>

<span class="txt" > Specification : </span><span class="tx" ><?php 
if($_SESSION['mod']=="") {
echo '--NA--';
}
else {
echo $_SESSION['mod'] ;
}
?>
</span>
<br> 


<span class="txt" > Experience  :</span> <span class="tx" ><?php echo $_SESSION['exp'] ?></span>
<br>

<br>
<span class="txt"> Further Details will be sent through E-Mail ......<br>
ThankYou For Registering with us.....
</span>
</div>
</div>



<div class="section">
<div id="con">Ph:+91-8825432440<br><br>
E-mail :dhanusree26@yahoo.com
 <div id="add" align="right"> Address :Arjun Parthasarathy,<br>
22/184,2<sup>nd</sup> Avenue,Anna nagar,<br>
Chennai-600040.
</div>
</div>
</div>
</body>
</html>