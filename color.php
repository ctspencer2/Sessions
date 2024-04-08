<?php
session_start();

if(isset($_SESSION['favorite_color'])) {

    $favorite_color = $_SESSION['favorite_color'];
    $message = "Your favorite color is: ".$favorite_color;
} else {
    $message = "You don't have a favorite color? Try again!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Favorite Color</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <main class="container">
        <h1><?php echo $message; ?></h1>
        <a href="index.php">Back to choose your favorite color</a>
    </main>
</body>
</html>
