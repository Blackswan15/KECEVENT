<?php
$con=new mysqli('localhost','root','','kecevent');
if($con->connect_error){
    die("not connected".$con->connect_error);
}
else{
    echo "success";
}
?>





