<?php

 $server = "localhost";
 $username = "root";
 $password = "";
 $db = "example";

 $con= mysqli_connect($server, $username,$password,$db);
if($con){
    echo "connected";
}else{
    echo "No connection" ;
}
 
   
?>