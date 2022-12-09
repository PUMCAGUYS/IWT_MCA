<?php

$link = mysqli_connect("localhost", "root","", "pu_db");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>