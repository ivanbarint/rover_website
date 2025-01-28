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

    <div class="index-background">

        <?php include "components/navbar.php" ?>

        <div class="background-part">
            <a href="index.php"><img class="background-logo-image" src="assets/logos/logo-main.png" alt="The Wild Rover Logo"></a>
        </div>

    </div>

    <div class="site-part site-part-about" data-aos="fade-up">
        <?php include "components/about.php" ?>
    </div>

    <div class="site-part site-part-options">

        <div class="site-part-option" onclick="loadPage('sports.php')" data-aos="fade-up">
            <?php include "components/options/option-sports.php" ?>
        </div>

        <div class="site-part-option" onclick="loadPage('menu.php')" data-aos="fade-up">
            <?php include "components/options/option-menu.php" ?>
        </div>

        <div class="site-part-option" onclick="loadPage('quiz.php')" data-aos="fade-up">
            <?php include "components/options/option-quiz.php" ?>
        </div>

    </div>

    <div class="site-part site-part-subscribe" data-aos="fade-up">
        <?php include "components/subscribe.php" ?>
    </div>

    <div class="site-part site-part-footer" data-aos="fade-up">
        <?php include "components/footer.php" ?>
    </div>

    <!-- Script Tags -->

    <script src="script/script.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init();
    </script>
    
</body>
</html>