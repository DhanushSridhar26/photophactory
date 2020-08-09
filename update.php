

<?php
session_start();

$servername="localhost";
$username="root";
$password="";

$email=$_SESSION['email1'];

$conn=mysqli_connect($servername,$username,$password,'PhFactory');

$sq ="Select * FROM  Details ";
$fetch=mysqli_query($conn,$sq );

if($fetch ){
	echo "ok selected<br>";
}

else{
	echo " nott ok<br>";
}

$uname =$_POST["uname"];
	$age =$_POST["age"];
	$gen =$_POST["gen"];
	$emai =$_POST["email"];
	$course=$_POST["course"];	
	$type=$_POST["type"];
	$cam=$_POST["cam"];
	$mod=$_POST["mod"];
	$exp=$_POST["exp"];

while($data=mysqli_fetch_assoc($fetch)) {

if($data['Email']==$email) {
	
 $sqll="UPDATE Details SET Name ='$uname',
	Age ='$age',
	Gender ='$gen',
	Email ='$emai',
	Course='$course',	
	Type='$type',
	Camera='$cam',
	Model='$mod',
	Exp='$exp' WHERE Email='$email'";
	
	if(mysqli_query($conn,$sqll))
	{echo 'done';
	
	}
	else {echo 'poda po';}
	}

}

?>