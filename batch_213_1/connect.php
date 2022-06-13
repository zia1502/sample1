<?php

global $connection;

$server     =   'localhost';
$user       =   'root';
$password   =   '';
$db         =   'old_town_db';


$connection     =   new mysqli($server, $user, $password, $db);

?>