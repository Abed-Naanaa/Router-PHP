<?php

$sname="localhost";
$unmame="root";
$password="";

$db_name="testdb";
$conn=mysqli_connect($name,$uname,$password,$db_name);
if(!$conn){
    echo "no connection";
}