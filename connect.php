<?php
$server="localhost";
$username="root";
$password="";
$database="amanroofingworks";
$con=mysqli_connect($server,$username,$password,$database);
if(!$con){
    die("Connection error". mysqli_connect_error());
}