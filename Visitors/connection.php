<?php
$connection = new mysqli('localhost','root','','visitors');

if($connection){
    echo"connection sucessful";
}else{
    die(mysqli_error($connection));
}


?>