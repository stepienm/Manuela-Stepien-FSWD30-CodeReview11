<?php
//1.connect.php
//2.register.php
//3.index.php
//4.home.php
//5.logout.php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );

 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'cr11_Manuela_Stepien-php-car_rental');

 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

 if ( !$conn ) {
  die("Connection failed : " . mysqli_error());
 }


 ?>
