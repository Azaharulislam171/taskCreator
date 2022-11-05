<?php
require ('todoTasks.php');

function function_alert($message)
{
    echo "<script>window.alert('$message'); window.location.href='todo-test.php';</script>";
}

if (isset($_POST["subject"])) {
    $old = $_POST["oldvaldate"];
    $new = $_POST["dateTimeaz"];
    $title = $_POST["titleaz"];
    $description = $_POST["desaz"];
    $email = $_POST["email"];


    if($new!=null && $old!=null && $title!=null && $email!=null && $description!=null) {
        $apple = new todoTasks('','','');

        $apple->update($new,$title,$description,$email,$old);
        header("Location:todo-test.php");

    }else{
        function_alert('Make sure to populate all fields!!');
    }
}