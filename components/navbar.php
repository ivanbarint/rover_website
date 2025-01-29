<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Tags -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wild Rover Irish Pub & Sports Bar</title>

    <!-- Google Tag -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-47LL6CK5TN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-47LL6CK5TN');
    </script>

    <!-- Google and Toolbar Icon -->

    <link rel="icon" href="assets/logos/logo-main.png">
    <link rel="icon" type="image/x-icon" href="assets/logos/logo-main.png">

    <!-- Stylesheets -->

    <link rel="stylesheet" href="style/index-style.css">
    <link rel="stylesheet" href="style/about-style.css">

    <link rel="stylesheet" href="style/navbar-style.css">
    <link rel="stylesheet" href="style/subscribe-style.css">
    <link rel="stylesheet" href="style/footer-style.css">
    <link rel="stylesheet" href="style/contact-style.css">
    <link rel="stylesheet" href="style/policy-style.css">

    <link rel="stylesheet" href="style/option-style.css">
    <link rel="stylesheet" href="style/menu-style.css">
    <link rel="stylesheet" href="style/quiz-style.css">
    <link rel="stylesheet" href="style/sports-style.css">

    <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

</head>
<body>

    <div class="small-navbar">

        <div class="burger-menu">
            <div class="burger-menu-line"></div>
            <div class="burger-menu-line"></div>
            <div class="burger-menu-line"></div>
        </div>

        <div class="burger-menu-navbar">
            <ul class="small-navbar-items">
                <li class="small-navbar-item"><a class="small-navbar-link" onclick="loadPage('index.php')">HOME</a></li>
                <li class="small-navbar-item"><a class="small-navbar-link" onclick="loadPage('sports.php')">SPORTS</a></li>
                <li class="small-navbar-item"><a class="small-navbar-link" onclick="loadPage('menu.php')">MENU</a></li>
                <li class="small-navbar-item"><a class="small-navbar-link" onclick="loadPage('quiz.php')">QUIZ</a></li>
                <li class="small-navbar-item"><a class="small-navbar-link" onclick="loadPage('contact.php')">CONTACT</a></li>
                <li class="small-navbar-item"><a href="index.php"><img class="small-navbar-logo" src="assets/logos/logo-main.png" alt="The Wild Rover Logo"></a></li>
                <li class="small-navbar-item small-navbar-title">THE WILD ROVER IRISH PUB & SPORTS BAR</li>
            </ul>
            
        </div>

    </div>

    <div class="big-navbar">

        <ul class="big-navbar-items" id="big-navbar-items">
            <li class="big-navbar-item"><a class="big-navbar-link" onclick="loadPage('index.php')">HOME</a></li>
            <li class="big-navbar-item"><a class="big-navbar-link" onclick="loadPage('sports.php')">SPORTS</a></li>
            <li class="big-navbar-item"><a class="big-navbar-link" onclick="loadPage('menu.php')">MENU</a></li>
            <li class="big-navbar-item"><a class="big-navbar-link" onclick="loadPage('quiz.php')">QUIZ</a></li>
            <li class="big-navbar-item"><a class="big-navbar-link" onclick="loadPage('contact.php')">CONTACT</a></li>
        </ul>

    </div>

    <script src="script/script.js"></script>

</body>
</html>