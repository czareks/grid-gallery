<?php
include_once('../functions.php')
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotografie</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <nav class="desktop">
            <ul>
                <li><a href="/galeria/">Strona główna</a></li>
                <li><a href="/galeria/banery/">Banery</a></li>
                <li><a href="/galeria/cyfrowe/">Cyfrowe</a></li>
                <li class="active"><a href="/galeria/fotografie/">Fotografie</a></li>
                <li><a href="/galeria/midjourney/">Midjourney</a></li>
                <li><a href="/galeria/portfolio/">Portfolio</a></li>
            </ul>
        </nav>
        <nav class="mobile">
        <label for="menu-toggle" class="menu-icon" onclick="toggleMenu()">&#9776;</label>
            <ul id="mobile-menu">
                <li ><a href="/galeria/">Strona główna</a></li>
                <li><a href="/galeria/banery/">Banery</a></li>
                <li><a href="/galeria/cyfrowe/">Cyfrowe</a></li>
                <li  class="active"><a href="/galeria/fotografie/">Fotografie</a></li>
                <li><a href="/galeria/midjourney/">Midjourney</a></li>
                <li><a href="/galeria/portfolio/">Portfolio</a></li>
            </ul>
        </nav>

    </header>
    <section id="title">
        <h1>Fotografie</h1>
    </section>
    <section id="grid-gallery">
        <?php
            $sciezkaFolderu = $_SERVER['DOCUMENT_ROOT'] . '/galeria/fotografie';
            $urlFolderu = '/galeria/fotografie';
            wypiszZdjeciaZFolderu($sciezkaFolderu, $urlFolderu);
        ?>
    </section>
    <footer>
        <p>&copy; 2023 Cezary Śliwiński. Wszelkie prawa zastrzeżone.</p>
    </footer>


    <script src="../script.js"></script>
</body>
</html>