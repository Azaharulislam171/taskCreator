<?php
require "compootTasks.php";

$date = $_GET['date'];
$title = $_GET['title'];
$description = $_GET['des'];
$email = $_GET['username'];

$banana = new compootTasks('','','');
$banana->incomplete($email,$date,$title,$description);
header("Location:completed-test.php");
