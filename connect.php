<?php

$con = new mysqli('localhost', 'root', '', 'testbase');

if($con){
    echo "Successful";
}else{
    die(mysqli_error($con));
}
?>