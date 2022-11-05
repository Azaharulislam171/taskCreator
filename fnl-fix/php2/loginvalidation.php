<?php
require ('database.php');
session_start();
//get the username and password.MAI
$username= $_POST['usName'];
$password = $_POST['psWord'];

$match=null;



$queryEmail="SELECT * from `User` WHERE `Email` ='$username'";

$statement1=$letsGo->conn->prepare($queryEmail);
$statement1->execute();
$results=$statement1->fetchALL();
$statement1->closeCursor();


try{
    foreach ($results as $res):

        $match= $res[3]."<br>";
        $username = $res[0] ." ". $res[1];
        $email = $res[2]; //this is the right index for email but stil wont pull it!



    endforeach;
}
catch(Exception $e){
    $error_message=$e->getMessage();
    include('database_error.php');
    exit();
}
function function_alert($message) {
    echo "<script>window.alert('$message'); window.location.href='../html/login.html';</script>";
}

if($match==null){
    function_alert("Invalid Email!");
}

$validate=strcmp($match,$password);

if($validate==4){
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    echo $username;
    echo $email;
    header("Location:todo-test.php");
    //header("Location:completed-test.php");
}else{
    function_alert("Invalid Password!");
}





?>