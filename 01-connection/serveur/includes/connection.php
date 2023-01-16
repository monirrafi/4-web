<?php
 $host = "localhost";
 $user = "root";
 $pw = "";
 $bd = "mabdfilms";
 $con = mysqli_connect($host,$user,$pw,$bd);
 if($con){
    echo "connected";
 }else{
    echo "Not connected";
 }
?>