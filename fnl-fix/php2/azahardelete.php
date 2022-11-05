<?php
require ('todoTasks.php');
$date=$_GET['date'];
$title=$_GET['title'];
$description=$_GET['des'];
$email=$_GET['username'];

echo $email.$date.$title.$description;

$apple = new todoTasks('','','');

$apple->delete($email,$description,$title,$date);
header("Location:todo-test.php");



?>
