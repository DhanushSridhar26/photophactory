<?php
$servername="localhost";
$username="root";
$password="";
$database="logindetais";

$conn1=mysqli_connect($servername,$username,$password,$database);

if($conn1){
	echo "Logined successfully<br>";
}

else{
	echo "Unable to login<br>";
}
$mailedit=$_POST['relog'];
$sql="SELECT * FROM details WHERE Email='$mailedit' ";
if(mysqli_query($conn1,$sql)){
echo 'ok';
}
else{

	echo 'email wrong';
}
?>