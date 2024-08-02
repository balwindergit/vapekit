<?php
include_once dirname(__file__)."/constants.php";
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
if(!$conn)
{
    die("unable to connect with database");
     
}