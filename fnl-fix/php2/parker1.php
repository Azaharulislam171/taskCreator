<?php
require "todoTasks.php";

$date=$_POST['dateTime'];
$title=$_POST['title'];
$description=$_POST['description'];
$email = $_POST["email"];


function function_alert($message)
{
    echo "<script>window.alert('$message'); window.location.href='todo-test.php';</script>";
}

if($date!=null && $title!=null && $email!=null && $description!=null) {
    $apple = new todoTasks('', '', '');

    $apple->insert($email, $date, $title, $description);
    header("Location:todo-test.php");

}else{
    function_alert('Make sure to populate all fields!!');
}
?>
