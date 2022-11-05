<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FDA Tech Lab</title>
    <link rel="shortcut icon" href="../images/favicon-1024x1024.png">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css2/content-main.css">
</head>

<header>
    <h1>| FDA Tech Lab |</h1>
</header>
<nav id="nav_menu">
    <ul>
        <li><a href= "todo-test.php">To-Do Tasks</a></li>
        <li><a href="completed-test.php">Completed Tasks</a></li>
    </ul>
</nav>

<body>
<?php
require "compootTasks.php";
session_start();
$username = $_SESSION['username'];

?>

<section>
    <a class="button-one" href="loggedout.php">Log Out!</a>
    <br>
    <p class="greeting" style="color:#FFA1E2 "> Welcome, <?php echo $username; ?> </p>
    <br>
    <br>
    <br>
    <br>
    <h3 style="color:#FFA1E2 "> Completed Tasks </h3>

    <div class="flex-container">
        <div class="flex-child">
            <br>
            <table id="mytable">
                <tr>
                    <?php
                    $email = $_SESSION['email'];
                    $sql6 = "SELECT * FROM `completed tasks` WHERE `email`= '$email' ORDER BY `Date&Time` ";
                    $results = runQuery($sql6);
                    echo "<table border=\"1\"><tr><th>Date&Time</th><th>Title</th><th>Description</th></tr>";
                    foreach ($results as $row) {
                        $datetimemai=$row["Date&Time"];
                        $titlemai=$row["Title"];
                        $descriptionmai=$row["Description"];

                        echo "
                        <tr>
                        <td>".$datetimemai."</td>
                        <td>".$titlemai."</td>
                        <td>".$descriptionmai."</td>
                        <td> <a href='islamEdit.php?username=$email&date=$datetimemai&title=$titlemai&des=$descriptionmai'> <input type='submit' value='Edit/update' class='delete'></a></td>
                        <td> <a href='islamDelete.php?username=$email&date=$datetimemai&title=$titlemai&des=$descriptionmai'> <input type='submit' value='Delete' class='delete'></a></td>
                        <td><a href='islamComplete.php?username=$email&date=$datetimemai&title=$titlemai&des=$descriptionmai'><button type='submit' name='subject' value='complete' class='delete'>Incomplete</button></td></tr>";

                    }
                    ?>
                </tr>

            </table>
            <br>
            <br>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</section>

<footer>
    <p>&copy; 2021, Sherwin Dewan, Mohammd Azaharul Islam & Parker Francis. | Terms of Use | Privacy Statement</p>
</footer>
</body>

</html>
