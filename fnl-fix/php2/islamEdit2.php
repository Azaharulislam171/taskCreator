<?php

require('compootTasks.php');

function function_alert($message)
{
    echo "<script>window.alert('$message'); window.location.href='completed-test.php';</script>";
}

if (isset($_POST["subject"])) {
    $old = $_POST["oldvaldate"];
    $new = $_POST["dateTimeaz"];
    $title = $_POST["titleaz"];
    $description = $_POST["desaz"];
    $email = $_POST["email"];

    if($new!=null && $old!=null && $title!=null && $email!=null && $description!=null) {
        $banana = new compootTasks('', '', '');
        $banana->update($new, $title, $description, $email, $old);

        header("Location:completed-test.php");

    }else{
        function_alert('Make sure to populate all fields!!');
    }
}