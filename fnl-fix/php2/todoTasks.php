<?php
require "database.php";

class todoTasks{
    public $DateTime;
    public $Title;
    public $Description;


    public function __construct($DateTime, $Title, $Description)
    {
        $this->DateTime = $DateTime;
        $this->Title = $Title;
        $this->Description = $Description;

    }

    public function delete($email,$description,$title,$date){
        $sql2 = "DELETE FROM `to-do-tasks` WHERE `Email`='$email' AND `Description`='$description' AND `Title`='$title' AND `Date&Time`='$date'";
        runQuery($sql2);

    }

    public function insert($Email,$DateTime,$Title,$Description){
        $sql3 = "INSERT INTO `to-do-tasks` VALUES ('$Email','$DateTime','$Title','$Description')";
        runQuery($sql3);

    }

    public function update($DateTime,$Title,$Description,$Email,$OldDate){
        $sql4 = "UPDATE `to-do-tasks` SET `Date&Time`='$DateTime',`Title`='$Title',`Description`='$Description' WHERE `Email`='$Email' AND `Date&Time`='$OldDate'";
        runQuery($sql4);


    }

    public function complete($email,$date,$title,$description){
        $sql5 = "INSERT INTO `completed tasks` VALUES ('$email','$date','$title','$description')";
        runQuery($sql5);
        $sql6 ="DELETE FROM `to-do-tasks` WHERE `Email`='$email' AND `Description`='$description' AND `Title`='$title' AND `Date&Time`='$date'";
        runQuery($sql6);

    }
}