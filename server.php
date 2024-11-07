<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "manualprinter_db";

/* create conection  */
$conn = mysqli_connect($severname, $username, $password, $dbname);

/* cheack connection */

if (!$conn)
{ die("Connection failed" . mysqli_connect_error());}
 

?>