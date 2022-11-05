<?php
require "database.php";
class compootTasks{
    public $DateTime;
    public $Title;
    public $Description;


    public function __construct($DateTime, $Title, $Description)
    {
        $this->DateTime = $DateTime;
        $this->Title = $Title;
        $this->Description = $Description;
    }

    public function delete($email,$date,$title,$description){
        $sql2 = "DELETE FROM `completed tasks` WHERE `email`='$email' AND `Description`='$description' AND `Title`='$title' AND `Date&Time`='$date'";
        runQuery($sql2);
    }


    public function update($new,$title,$description,$email,$old){
        $sql4 = "UPDATE `completed tasks` SET `Date&Time`='$new',`Title`='$title',`Description`='$description' WHERE `email`='$email' AND `Date&Time`='$old'";
        runQuery($sql4);
    }

    public function incomplete($email,$date,$title,$description)
    {
        $sql5 = "INSERT INTO `to-do-tasks` VALUES ('$email','$date','$title','$description')";
        runQuery($sql5);
        $sql6 ="DELETE FROM `completed tasks` WHERE `email`='$email' AND `Description`='$description' AND `Title`='$title' AND `Date&Time`='$date'";
        runQuery($sql6);

    }

}