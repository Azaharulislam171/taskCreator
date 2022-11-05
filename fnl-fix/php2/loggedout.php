<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FDA Tech Lab</title>
    <link rel="shortcut icon" href="../images/favicon-1024x1024.png">
    <script src="js.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css2/loggedout-main.css">
</head>
<body>
<header>
    <h1>| FDA Tech Lab |</h1>
</header>
<?php
session_start();
$username = $_SESSION['username'];
?>
<section>
    <div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p class="greeting">You have been logged out. Goodbye <?php echo $username ?></p>
        <br>
        <br>
        <a class="button"href="../html/login.html">Back to login.</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>
<?php session_abort(); ?>

<footer>
    <p>&copy; 2021, Sherwin Dewan, Mohammd Azaharul Islam & Parker Francis. | Terms of Use | Privacy Statement</p>
</footer>

</body>
</html>