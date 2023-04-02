<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "user_auth_php_mysql";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect!"); 
}