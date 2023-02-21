<?php

//class with function to connect to sql data base

class Connect
{
    public $hostname;
    public $username;
    public $password;
    public $dbname; // fill in your database name containing tables: products and categories
    public $conn = NULL;

    public function __construct($hostname, $username, $password, $dbname)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function getCon($hostname, $username, $password, $dbname)
    {
        try {
            $this->conn = new PDO("mysql:host=$hostname;dbname=$dbname;", $username, $password);
            if ($this->conn != null) {
                //echo "connected successfully!";
            }
        } catch (PDOException $e) {
            $error_message=$e->getMessage();
            include('database_error.php');
            exit();
        }
        return $this->conn;
    }
}

$letsGo = new Connect("sql1.njit.edu", "mi242", "Azahar1997#", "mi242");
$letsGo->getCon("sql1.njit.edu", "mi242", "Azahar1997#", "mi242");
// Runs SQL query and returns results (if valid)


function runQuery($query)
{
    global $letsGo;

    try {
        $q = $letsGo->conn->prepare($query);
        $q->execute();
        $results = $q->fetchAll();
        $q->closeCursor();
        return $results;
    } catch (PDOException $e) {
        http_error("500 Internal Server Error\n\n" . "There was a SQL error:\n\n" . $e->getMessage());
    }
}


function http_error($message)
{
    header("Content-type: text/plain");
    die($message);
}



