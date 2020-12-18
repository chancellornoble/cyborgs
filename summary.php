<?php
 include_once 'inc/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
        <div>
            <h3>Your order is:</h3>
            Name: <?php echo $_GET["name"]; ?><br>
            Height: <?php echo $_GET["height"]; ?><br>
            Color: <?php echo $_GET["color"]; ?><br>
            Job: <?php echo $_GET["job"]; ?><br>
            Gender: <?php echo $_GET["gender"]; ?><br>
        </div>
            <form action="robots.php">
                <input type="submit" name="submitbutton" value="Back">
            </form>
            <br>
            <form action="orders.php" method="post">
                <button>Place Your Order</button>
            </form>
    </body>
</html>