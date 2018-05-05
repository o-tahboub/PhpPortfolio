<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=osamasCMSDB', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

require_once 'functions.php';
$aboutMeArticle = getAboutMeArticle($db);
$footerContent = getFooterContent($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Page</title>
    <link type="text/css" rel="stylesheet" href="css/normalize.css">
    <link type="text/css" rel="stylesheet" href="css/styles.css">
</head>

<!--[if lte IE 9]><body class="ieLegacy"><![endif]-->
<!--[if !IE]><body><![endif]-->

<body>
    <header class="container">
        <nav class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
            </ul>
        </nav>

        <div class="pageTitle modal-title">
            <h1>About Me</h1>
        </div>
    </header>

    <section class="container aboutMe">
        <article>
            <p>
                <?php echo getParagraph($aboutMeArticle);?>
            </p>
        </article>
    </section>

    <footer class="container">
        <?php echo $footerContent = getFooterContent($db);?>
    </footer>
</body>
</html>