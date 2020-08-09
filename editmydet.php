<?php
session_start();

?>
<html>
<head>
<title>Photo Phactory:Gallery</title>

<link rel="stylesheet" href="ppjoinu.css" />

<script type="text/javascript" >

	window.onload=function () {
		
	

var gen='<?php echo $_SESSION["gen1"] ?>';
if (gen=='Male') {
	

document.getElementById("gen1").checked='checked';
}
else {
	document.getElementById("gen2").checked='checked';
}

var c='<?php echo $_SESSION["course1"] ?>';

if (c=='Professional Photography' ) {
	

document.getElementById("c1").selected='selected';
}
else if (c=='Fundamentals of digital photography'){
	document.getElementById("c2").selected='selected';
}
else if (c=='Portrait Photography'){
	document.getElementById("c3").selected='selected';
}
else if (c=='Travel Photography course'){
	document.getElementById("c4").selected='selected';
}
else if (c=='Wedding and Occation Photography Course'){
	document.getElementById("c5").selected='selected';
}
else if (c=='PhotoShop Course'){
	document.getElementById("c6").selected='selected';
}

var on='<?php echo $_SESSION["type1"] ?>';
if (on=='Online') {
	

document.getElementById("on1").checked='checked';
}
else {
	document.getElementById("on2").checked='checked';
}

var cam='<?php echo $_SESSION["cam1"] ?>';
if (cam=='Yes') {
	

document.getElementById("came1").checked='checked';
}
else {
	document.getElementById("came2").checked='checked';
}
var exp='<?php echo $_SESSION["exp1"] ?>';

if (exp=='Beginner ' ) {
	

document.getElementById("e1").selected='selected';
}
else if (exp=='Intermediate'){
	document.getElementById("e2").selected='selected';
}
else if (exp=='Master'){
	document.getElementById("e3").selected='selected';
}
}

</script>



</head>
<body class="main">


<div class="navbar">
<div class="section"><a href="pphome.html" >Home</a>
<a href="ppgal.html" >Gallery</a>
<a href="ppabtus.html" >About us</a>
<a href="ppjoinus.html" >Join Us</a>
</div>
<div class="section" align="center">
	
<form action="update.php" method="post" class="form1" id="form">
	<fieldset form="form">
	<legend align="left" class="txt"> Personals </legend>
	<span class="txt">Name : </span><br><input type="text" name="uname" value="<?php echo  $_SESSION['uname1']?> "  style="box-sizing: border-box;" required="required"><br><br>
	<span class="txt"> Age : </span><br><input type="integer" name="age" value="<?php echo  $_SESSION['age1']?> " required="required"><br><br>
		
	<span class="txt">Gender : </span><br><input type="radio" name="gen" value="Male" id="gen1" required="required "  ><span class="ttt">Male </span><br>
	<input type="radio" name="gen" value="Female" align="center"required="required" id="gen2" ><span class="ttt">Female </span><br><br>
<span class="txt"> E-mail : </span><br><input type="email" name="email" value="<?php echo  $_SESSION['email1']?> " required="required"><br><br>
</fieldset><br><br>
<fieldset form="form">
<legend class="txt"> Your Course </legend>
<span class="txt">Choose Your Course: </span><br>
<select name="course" required="required"><optgroup  >
<option disabled="disabled" > --Select--</option>
<option id="c1" >Professional Photography </option>
<option id="c2" >Fundamentals of digital photography</option>
<option id="c3">Portrait Photography</option>
<option id="c4" >Travel Photography course</option>
<option id="c5" >Wedding and Occation Photography Course</option>
<option id="c6" >PhotoShop Course</option>
</optgroup></select><br><br>

<span class="txt">You want to take up the Course through : </span><br><input type="radio" name="type" required="required" id="on1" value="Online" ><span class="ttt">Online</span><br>
<input type="radio" name="type" value="Ofline" id="on2" align="center"><span class="ttt">Ofline </span><br><br>
<span class="txt">Do you have a Camera ? : </span><br><input type="radio" name="cam" value="Yes" id="came1" ><span class="ttt">Yes</span><br>
<input type="radio" name="cam" value="No" align="center" id="came2"><span class="ttt">No</span><br><br>
<span class="txt">If yes ,Specify Model  : </span><br><input type="text" name="mod" value="<?php echo  $_SESSION['mod1']?> "  style="box-sizing: border-box;"><br><br>
<span class="txt">Choose your level : </span><br>
<select name="exp" required="required"><optgroup  >
<option disabled="disabled" > --Select--</option>
<option id="e1">Beginner </option>
<option id="e2">Intermediate</option>
<option id="e3">Master</option>
</optgroup></select><br><br>

	<button class="sub" value="Update my Fetails" type="submit" style="width: 200px" > Update My Details </button>
		
	
</fieldset>
</form>


</div>
</div>


<

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