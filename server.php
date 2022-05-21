<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "test";

$con = new mysqli($host,$user,$pass,$db);
if (!$con) {
    echo "There are some problem while connecting the database";
}
?>