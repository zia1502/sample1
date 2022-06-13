<?php

global $connection;

$server     =   'localhost';
$user       =   'root';
$password   =   '';
$db         =   'edaktar';


$connection     =   new mysqli($server, $user, $password, $db);

?>