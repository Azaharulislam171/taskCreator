<?php
$date=$_GET["date"];
$title=$_GET["title"];
$description=$_GET["des"];
$email = $_GET["username"];



?>
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
        <li><a href="todo-test.php">To-Do Tasks</a></li>
        <li><a href="completed-test.php">Completed Tasks</a></li>
    </ul>
</nav>

<body>
<br><br><br>

<form action="azahar2.php"  method="post">
    <table id="mytable">
        <br>
            <tr>
                <input type="hidden" name=" oldvaldate" value="<?php echo $date ?>">
                <input type="hidden" name="email" value="<?php echo $email ?>">

                <label style="color:#FFA1E2">Date & Time</label>
                <br>
                    <input type="datetime-local" style="width:50%" name=" dateTimeaz" value="<?php echo $date ?>">
                <br>
                <br>

                <label for="title" style="color:#FFA1E2">Title</label>
                <br>
                <input type="text" style="width:50%" name="titleaz" value="<?php echo $title ?>">
                <br>
                <br>

                <label for="description" style="color: #FFA1E2">Description</label>
                <br>
                <textarea type="text" name="desaz" value="<?php echo $description ?>" rows="6" cols="83"></textarea>
                <br>
                <br>
                <input type="submit" class="cancel" name=" subject" value="save">
                <br>
                <br>
                <a class="cancel" href="todo-test.php">cancel</a>
            </tr>
        <br>
        <br>
        <br>
        <br>
    </table>
</form>





<footer>
    <p>&copy; 2021, Sherwin Dewan, Mohammd Azaharul Islam & Parker Francis. | Terms of Use | Privacy Statement</p>
</footer>
</body>

</html>


