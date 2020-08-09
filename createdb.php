<?php 

	session_start();
   if($_POST['data']=='edit'){
      echo "COOL BRO!!";
   }
   if($_POST['data']=='editit'){
      echo " BRO!!";
   }
   if($_POST['data']=='ed'){
      echo "COOL!!";
   }
	$uname =$_POST["uname"];
	$NUM_DEVICES =$_POST["NUM_DEVICES"];
	$gen =$_POST["gen"];
	$email =$_POST["email"];
	$course=$_POST["course"];	
	$type=$_POST["type"];
	$cam=$_POST["cam"];
	$mod=$_POST["mod"];
	$exp=$_POST["exp"];
	
	
	
	
	$_SESSION['uname']=$_POST["uname"];
	$_SESSION['NUM_DEVICES']=$_POST["NUM_DEVICES"];
	$_SESSION['gen']=$_POST["gen"];
	$_SESSION['email']=$_POST["email"];
	$_SESSION['course']=$_POST["course"];
	$_SESSION['type']=$_POST["type"];	
	$_SESSION['cam']=$_POST["cam"];
	$_SESSION['mod']=$_POST["mod"];
	$_SESSION['exp']=$_POST["exp"];
	  $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = gk";
   $credentials = "user = postgres password=dhanu26";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
      $sql =<<<EOF
      CREATE TABLE UNITS
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      NUM_DEVICES            INT     NOT NULL,
      ADDRESS        CHAR(50),
      WATTS         REAL,date date);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table created successfully\n";
   }
   $sql =<<<EOF
      INSERT INTO UNITS (ID,NAME,NUM_DEVICES,ADDRESS,WATTS,date)
      VALUES (100, 'CAA', 32, 'California', 20000.00 ,TO_DATE('17/12/2016', 'DD/MM/YYYY'));

      INSERT INTO UNITS (ID,NAME,NUM_DEVICES,ADDRESS,WATTS,date)
      VALUES (200, 'DDD', 25, 'Texas', 15000.00,TO_DATE('17/12/2017', 'DD/MM/YYYY') );

      INSERT INTO UNITS (ID,NAME,NUM_DEVICES,ADDRESS,WATTS,date)
      VALUES (300, 'TeEE', 23, 'Norway', 20000.00 ,TO_DATE('17/12/2018', 'DD/MM/YYYY'));

      INSERT INTO UNITS (ID,NAME,NUM_DEVICES,ADDRESS,WATTS,date)
      VALUES (400, 'MarDk', 25, 'Rich-Mond ', 65000.00 ,TO_DATE('17/12/2016', 'DD/MM/YYYY'));
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);
 ?>
<html>
<body>
	<input type="button" name="" value="showresult" onclick="location.href='result.php'">
</body>
</html>
