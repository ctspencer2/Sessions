<?php
session_start();

if(isset($_GET['color'])) {

    $_SESSION['favorite_color'] = $_GET['color'];

    header('Location: color.php');
    exit;
}

if(isset($_SESSION['favorite_color'])) {
    $message = "Your favorite color was ".$_SESSION['favorite_color'].", did you want to change your favorite color?";
} else {
    $message = "Choose your favorite color:";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Choose Your Favorite Color</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <ul>
        <li><a href="index.php?color=red">Red</a></li>
        <li><a href="index.php?color=green">Green</a></li>
        <li><a href="index.php?color=blue">Blue</a></li>
    </ul>
</body>
</html>
