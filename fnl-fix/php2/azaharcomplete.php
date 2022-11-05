<?php
require ('todoTasks.php');
$date=$_GET['date'];
$title=$_GET['title'];
$description=$_GET['des'];
$email=$_GET['username'];

$apple = new todoTasks('','','');

$apple->complete($email,$date,$title,$description);
header("Location:todo-test.php");
