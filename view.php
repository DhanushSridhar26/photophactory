<?php
session_start();

$servername="localhost";
$username="root";
$password="";

$email=$_POST['em'];

$conn=mysqli_connect($servername,$username,$password,'PhFactory');

$sq ="Select * FROM  Details ";
$fetch=mysqli_query($conn,$sq );



$a='2';
while($data=mysqli_fetch_assoc($fetch)) {

if($data['Email']==$email) {
	$uname = $data['Name'];
	$age =$data['Age'];
	$gen =$data['Gender'];
	$email =$data['Email'];
	$course=$data['Course'];	
	$type=$data['Type'];
	$cam=$data['Camera'];
	$mod=$data['Model'];
	$exp=$data['Exp'];
	$a='1';
	

$_SESSION['uname1']=$uname;
	$_SESSION['age1']=$age;
	$_SESSION['gen1']=$gen;
	$_SESSION['email1']=$email;
	$_SESSION['course1']=$course;
	$_SESSION['type1']=$type;	
	$_SESSION['cam1']=$cam;
	$_SESSION['mod1']=$mod;
	$_SESSION['exp1']=$exp;
}}

if($a=='2') {?>
<script type="text/javascript" >

document.getElementById('aaa').onclick='
alert("Email does not. Exist...Re-enter Correct Email")';
</script>
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
	<span class="txt">Entered E-mail {<?php echo $email ?>} does not exist...<br> Please Re-enter email</span><br> 
	
	<form action="view.php" method="post">
<span class="txt">Enter your E-mail : </span><br><input type="email" name="em" placeholder="E-Mail" required="required"><br><br>


	<input type="submit" value='View Details' id='aaa' class="sub"  style="width: 200px; " />

</form>

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

<?php } 
 if($a=='1') {
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

<span class="txt" > Name : </span><span class="tx" ><?php echo $uname ?></span><br>

<span class="txt" > Age :</span> <span class="tx" ><?php echo $age ?></span><br>
<span class="txt" > Gender :</span><span class="tx" > <?php echo $gen ?></span><br>
<span class="txt" > E-Mail :</span> <span class="tx" ><?php echo $email?></span><br>
<span class="txt" > Course Chosen :</span> <span class="tx" ><?php echo $course ?></span><br>
<span class="txt" > You are taking Course through :</span> <span class="tx" ><?php echo $type ?></span><br>
<span class="txt" > Availability of Camera :</span> <span class="tx" ><?php echo $cam ?></span><br>

<span class="txt" > Specification : </span><span class="tx" ><?php 
if($mod=="") {
echo '--NA--';
}
else {
echo $mod ;
}
?>
</span>
<br> 


<span class="txt" > Experience  :</span> <span class="tx" ><?php echo $exp ?></span>
<br>

<br>







<span class="txt"> 
If you want to Edit your Details Click below...

<input type="button" value="Edit Details"  class="sub" onclick="location.href='editmydet.php'" />


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
<?php
}
?>
