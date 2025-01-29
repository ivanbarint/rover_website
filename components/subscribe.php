<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wild Rover Brussels</title>
    <link rel="stylesheet" href="style/about-style.css">
    <link rel="stylesheet" href="style/footer-style.css">
    <link rel="stylesheet" href="style/index-style.css">
    <link rel="stylesheet" href="style/menu-style.css">
    <link rel="stylesheet" href="style/navbar-style.css">
    <link rel="stylesheet" href="style/option-style.css">
    <link rel="stylesheet" href="style/quiz-style.css">
    <link rel="stylesheet" href="style/sports-style.css">
    <link rel="stylesheet" href="style/subscribe-style.css">
</head>
<body>

<div class="subscribe-part subscribe-title">
    <h1 class="subscribe-title-text">SUBSCRIBE</h1>
</div>

<div class="subscribe-part subscribe-text">
    <p class="subscribe-paragraph-text">Stay in the loop with all the latest games, events, and pub updates by subscribing to our newsletter! Be the first to know about everything happening at our pub straight to your inbox. Coming soon!</p>
</div>

<div id="subscribe-form">
    <form method="POST" action="<?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        include "database.php";

        $database_sub = new Sub_Database();

        $email = $_POST['email'];

        if (isset($email)) {
            
            $insert = $database_sub->insertQuery("INSERT IGNORE INTO subscribers (Email) VALUES ('$email');");
        }

        }?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Subscribe" onclick="subscribe(event)">
    </form>
</div>

<div id="subscribe-message" style="display: none;">
    Thank you for subscribing!
</div>

<script>
    function subscribe(event) {
        event.preventDefault();
        document.getElementById("subscribe-form").style.display = "none";
        document.getElementById("subscribe-message").style.display = "block";
    };
</script>

</body>
</html>