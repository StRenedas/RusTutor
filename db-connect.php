<?php

$servername = 'localhost';
$dBUsername = 'root';
$dBPassword = '';
$dBName = 'rustutor';

$connection = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if (!$connection) {
    die("connection failed: ".mysqli_connect_error());
}