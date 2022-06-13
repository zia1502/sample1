<?php

global $connection;

$server     =   'localhost';
$user       =   'root';
$password   =   '';
$db         =   'eproject';


$connection     =   new mysqli($server, $user, $password, $db);

?>