<?php

$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB = "sakila";
$link = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB) or 
        die(mysqli_connect_error());

?>
