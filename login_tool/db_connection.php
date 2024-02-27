<?php
$server="localhost";
$username="root";
$password="";
$database="trip";

$con=mysqli_connect($server,$username , $password, $database);
if(!$con)
{
     // die ("Error:".sqli_connect_error());
     echo "data base is not connected";
}
// echo "Database is connected";
?>